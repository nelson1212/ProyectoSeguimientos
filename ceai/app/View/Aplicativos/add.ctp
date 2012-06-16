<div class="aplicativos form">
<?php echo $this->Form->create('Aplicativo');?>
	<fieldset>
		<legend><?php echo __('Add Aplicativo'); ?></legend>
	<?php
		echo $this->Form->input('nombre_apli');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Aplicativos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Aplicativousuarios'), array('controller' => 'aplicativousuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aplicativousuario'), array('controller' => 'aplicativousuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
