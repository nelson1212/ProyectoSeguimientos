<div class="solicitudes form">
<?php echo $this->Form->create('Solicitude');?>
	<fieldset>
		<legend><?php echo __('Edit Solicitude'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Solicitude.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Solicitude.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Solicitudes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Aprendicesolicitudes'), array('controller' => 'aprendicesolicitudes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendicesolicitude'), array('controller' => 'aprendicesolicitudes', 'action' => 'add')); ?> </li>
	</ul>
</div>
