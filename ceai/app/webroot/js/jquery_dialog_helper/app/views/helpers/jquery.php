<?php

class JqueryHelper extends AppHelper{
	
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
		'function'=>'$(function() {%s});',
		
	);
	
	function loadScripts($scriptForCombobox=true){
		//overrid by child						
	}
		
	function printScript(){
		$script=sprintf($this->jquery['function'],$this->script);
		return $this->Html->scriptBlock($script);		
	}

	function setScript($script){
		$this->script.=$script;
	}
}
?>