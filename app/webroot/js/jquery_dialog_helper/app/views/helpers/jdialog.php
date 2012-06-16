<?php
App::import('Helper', 'Jquery');
class JdialogHelper extends JqueryHelper{

	/**
	 * save items which are show in dialog.
	 * 
	 * @var array
	 */
	var $items=array();
	/**
	 * Save buttons of dialog box.
	 * e.g:
	 * <pre>		
	 * array(
	 * 		['label']=>"function(){//code for function}",
	 * 		....
	 * )
	 * </pre>		
	 * @var array
	 */
	var $buttons=array();
	/**
	 * Save options for dialog box in assocciation array.
	 * Formate of array:
	 * <pre>
	 * 	array(
	 * 		'key'=>"value"
	 * )
	 * </pre>
	 * e.g:
	 * <pre>		
	 * array(
	 * 		['autoOpen']=>"false",
	 * 		....
	 * )
	 * </pre> 
	 * @var array
	 */
	var $options=array();
	/**
	 * Title of Dialog Box.
	 * 
	 * @var string
	 */
	var $title="Dialog";
	/**
	 * Id of dialog box.
	 * 
	 * @var string.
	 */
	var $id="dialog";
	
	function loadScripts(){
		$output='';			
		
		$output =$this->Html->css ( 'jquery/ui/base/jquery.ui.all', null, array ('inline' => false ) );//include you'r own jquery themed
		$output.=$this->Html->css ( 'jquery/ui/overload.css', null, array ('inline' => false ) ); //customize css of base themed

		$output.=$this->Html->script('jquery/jquery', array ('inline' => false ) );		
		$output.=$this->Html->script ( 'jquery/ui/jquery.ui.core', array ('inline' => false ) );
		$output.=$this->Html->script ( 'jquery/ui/jquery.ui.widget', array ('inline' => false ) );
		$output.=$this->Html->script ( 'jquery/ui/jquery.ui.position', array ('inline' => false ) );

		$output =$this->Html->script ( 'jquery/ui/jquery.ui.mouse', array ('inline' => false ) );
		$output.=$this->Html->script ( 'jquery/ui/jquery.ui.draggable', array ('inline' => false ));
		$output.=$this->Html->script ( 'jquery/ui/jquery.ui.resizable', array ('inline' => false ) );
		$output.=$this->Html->script ( 'jquery/ui/jquery.ui.dialog', array ('inline' => false ));
		return $output;					
	}
	
	function reset(){
		$this->items=array();
		$this->options=array();
		$this->buttons=array();
		$this->title='title';
		$this->id="dialog";
	}
	/**
	 * Add on item into <code>items</code> for showing them in dialog box.
	 * 
	 * @param string $itme,
	 */
	function addItem($item=null){
		$this->items[]=$item;
	}
	/**
	 * Set id of dialog box
	 * 
	 * @param string $id
	 */
	function setId($id="dialog"){
		$this->id=$id;
	}
	/**
	 * Set title of dialog 
	 * 
	 * @param string $id
	 */
	function setTitle($title="dialog"){
		$this->title=$title;
	}
	
	/**
	 * add an option for dialog.
	 * 
	 * @param string $key
	 * @param string $value
	 */
	function addOption($key=null,$value=null){
		if (!empty($key))
			$this->options[$key]=$value;
	}
	/**
	 * Set all options for dialog. 
	 * @param $options
	 */
	function addOptions($options=array()){
		$this->options=$options;
	}

	function addButton($button=null,$handler=null){
		if (!empty($button))
			$this->buttons[$button]=$handler;
	}
	
	function create(){
		$scriptsText['buttons']='buttons:{%s}';
		//create options
		$out='';
		$dialogOptions='';
		$buttons='';
		
		foreach ($this->items as $item){//create items
			$out.=$item;
		}
		$out=sprintf('<div id="%s" title="%s">%s</div>',$this->id,$this->title,$out);		
		foreach ($this->options as $key=>$option){//create options
			$dialogOptions.=$key.':'.$option.',';
		}		
		foreach ($this->buttons as $label=>$handler){//create buttons  			
			$buttons.=sprintf("'%s':function(){%s},",$label,$handler);	
		}
		$buttons=sprintf('buttons:{%s}',$buttons);
		$script=sprintf('$("#%s").dialog({%s});',$this->id,$dialogOptions.$buttons);
		$this->setScript($script);
		return $out;		
	}
}
?>