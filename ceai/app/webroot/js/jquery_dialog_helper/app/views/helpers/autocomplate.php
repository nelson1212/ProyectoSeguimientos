<?php
	class AutocomplateHelper extends AppHelper{
		
		var $helpers = array('Html','Form','Javascript');

		/**
		 *  Keep generated scripts for each autocompalte or any script which generated 
		 *  during in run one method.
		 *  
		 * @var string ,keep generated scripts
		 */
		var $script;
		/**
		 * keep some jquery emlement in one string format. 
		 * @var string 
		 */
		var $jquery=array(
			'function'=>'$(function() {%s});'
		);
		
		function loadScripts($scriptForCombobox=true){
			$output='';			
			if ($scriptForCombobox){			
				$output.=$this->Html->css ( 'jquery/ui/base/jquery.ui.all', null, array ('inline' => false ) );
				$output.=$this->Html->css ( 'jquery/ui/overload.css', null, array ('inline' => false ) );
				$output.=$this->Html->script ( 'jquery/ui/jquery.ui.core', array ('inline' => false ) );
				$output.=$this->Html->script ( 'jquery/ui/jquery.ui.widget', array ('inline' => false ) );
				$output.=$this->Html->script ( 'jquery/ui/jquery.ui.position', array ('inline' => false ) );
				
				//script for dialog
				$output.=$this->Html->script ( 'jquery/ui/jquery.ui.mouse', array ('inline' => false ) );
				$output.=$this->Html->script ( 'jquery/ui/jquery.ui.draggable', array ('inline' => false ));
				$output.=$this->Html->script ( 'jquery/ui/jquery.ui.resizable', array ('inline' => false ) );
				$output.=$this->Html->script ( 'jquery/ui/jquery.ui.dialog', array ('inline' => false ));
				
				//script for auto complate
				$output.=$this->Html->script ( 'jquery/ui/jquery.ui.button', array ('inline' => false ) );
				$output.=$this->Html->script ( 'jquery/ui/jquery.ui.autocomplete', array ('inline' => false ));
				$output.=$this->Html->script ( 'jquery/plugins/combobox_autocomplate/combobox_autocomplate', array ('inline' => false ));
			}else{
				$output.=$this->Html->css('jquery/plugins/text_box_list/textboxlist');
				$output.=$this->Html->css('jquery/plugins/text_box_list/textboxlist_autocomplete');			
				$output.=$this->Javascript->link('jquery/jquery',false);
				$output.=$this->Javascript->link('jquery/plugins/text_box_list/growing_input',false);
				$output.=$this->Javascript->link('jquery/plugins/text_box_list/textboxlist',false);
				$output.=$this->Javascript->link('jquery/plugins/text_box_list/textboxlist_autocomplete',false);
			}
			return $output;					
		}
		/**
		 * Return text box list which is auto complete element.it use in adding singers to a song .
		 * 
		 * @param string $inputName, name of input element.
		 * @param array $option ,
		 * @return stirng, generate autocomplete element
		 */
		function createTextBoxList($inputName=null,$option=array()){
			$option['id']=(array_key_exists("id",$option) ? $option["id"]:$inputName);
			$url=(array_key_exists("url",$option) ? $option["url"]:'singers/autoCompleteSearch');
			$param=(array_key_exists("param",$option) ? $option["param"]:'singer');
			
			$option['type']='text';
			$lang=(array_key_exists("lang",$option)) ? $option['lang'] : "";
			$uniqueItems=(array_key_exists("unique",$option)) ? "true" : "false";
			$output="";
			$output.=$this->Form->input($inputName,$option);
			$output.=$this->Javascript->codeBlock='<script type="text/javascript">
				$(function(){	
					var '.$option['id'].' = new $.TextboxList("#'.$option['id'].'", {
									unique: '.$uniqueItems.', 									
									style : "margin:0;border:0;",
									plugins: {
										autocomplete: {
											minLength: 2,		
											queryRemote: true,
											remote: {
												param : "'.$param.'",
												url: "'.$this->webroot.$url.'"
											}
										}
									}
								});';
			if (array_key_exists('values',$option)){
				if (!empty($option['values'])){								
					foreach ($option['values'] as $value){						
						$output.=sprintf('%s.add("%s",%d,"%s");',$option['id'],$value['plain'],$value['id'],$value['html']);						
					}
				}
			}
			$output.='});</script>';
			return $output;
		}
		/**
		 * Initial values for put them in </code>TextBoxList</code>.Get three key and use them for 
		 * fetch value from <code>$data</code>.
		 *
		 * @param $data
		 * @param $id
		 * @param $plainKey
		 * @param $htmlKey
		 */
		function initialValues($data,$model,$id='id',$plainKey='name',$htmlKey='name'){
			$values=array();			
			if (!empty($data)){ 
				foreach ($data as $value)
					$values[]=array('id'=>$value[$model][$id],'plain'=>$value[$model][$plainKey],'html'=>$value[$model][$htmlKey]);
				
			}
			return $values;
		}
		/**
		 * Return combobox autocomplate which is auto complete element.
		 * 
		 * @param string $inputName, name of input element.
		 * @param array $option ,
		 * @return stirng, generate autocomplete element
		 */
		function combobox($inputName=null,$options=array()){
			$options = array_merge ( 
				array ('id' =>$inputName ,
					   'url'=>'singers/autoCompleteSearch/',
					   'returnScript'=>false,
					   'onSelected'=>'',
					   'selected'=>array('id'=>'','value'=>'')
				), ( array ) $options );		
			
				
			$options['onSelected']=(!empty($options['onSelected']) ? sprintf(",onSelected:function(event, data){%s}",$options['onSelected']):'');	
			$returnScript=$options['returnScript'];
			$url=$options["url"];						
			$selceted=$options['selected'];						
			unset($options['url']);
			unset($options['returnScript']);
			unset($options['selected']);			
			
			$script=""; 
			$output="";			
			$comboboxScript="$(\"#%s\").combobox({urlFind:'%s',selectedText:'%s',selectedId:'%s' %s});";
			
			$output.=$this->Form->input($inputName,$options);	
			$script.=sprintf($comboboxScript,
							 $options['id'],
							 $this->webroot.$url,
							 $selceted['value'],
							 $selceted['id'],
							 $options['onSelected']);

			if ($returnScript){
				$script=sprintf($this->jquery['function'],$script);				
				$output.=$this->Html->scriptBlock($script);
			}else{
				$this->script.=$script;
			}
			return $output;
		}
		
		function printScript(){
			$script=sprintf($this->jquery['function'],$this->script);
			return $this->Html->scriptBlock($script);		
		}		
	}
?>