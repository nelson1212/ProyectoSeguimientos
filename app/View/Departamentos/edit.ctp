<div class="departamentos form">
<?php echo $this->Form->create('Departamento');?>
	<fieldset>
		<legend><?php echo __('Edit Departamento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Departamento.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Departamento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Ciudades'), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudade'), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
	</ul>
</div>
