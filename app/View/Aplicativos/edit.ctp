<div class="aplicativos form">
<?php echo $this->Form->create('Aplicativo');?>
	<fieldset>
		<legend><?php echo __('Edit Aplicativo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre_apli');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Aplicativo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Aplicativo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Aplicativos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Aplicativousuarios'), array('controller' => 'aplicativousuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aplicativousuario'), array('controller' => 'aplicativousuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
