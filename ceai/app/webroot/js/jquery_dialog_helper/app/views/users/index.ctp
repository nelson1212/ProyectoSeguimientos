<?php			 
	echo $this->Jdialog->loadScripts();
		
	//Optional: you can defaine id for dialog box.
	$this->Jdialog->setId("dialog");
	//set Title of you'r dialog.
	$this->Jdialog->setTitle(__("Title Of Box",true));
	
	//add options for your dialog
	$this->Jdialog->addOption('autoOpen','true');			
	$this->Jdialog->addOption('modal','true');				

	//Add Text which can be a pragraph.
	$this->Jdialog->addItem("This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.");			
	//add Html From element
	$this->Jdialog->addItem($this->Form->input('name')); 			

	//Add Required buttons for you'r dialogs.
	$this->Jdialog->addButton(__("Confirm",true),'alert("milad")');
	//print your dialog html elments.
	echo $this->Jdialog->create();
	//print JQuery script which run and show you'r dialog box.
	echo $this->Jdialog->printScript(); 
?>