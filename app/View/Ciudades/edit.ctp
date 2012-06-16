<div class="ciudades form">
<?php echo $this->Form->create('Ciudade');?>
	<fieldset>
		<legend><?php echo __('Edit Ciudade'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('departamento_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Ciudade.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Ciudade.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ciudades'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Barrios'), array('controller' => 'barrios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Barrio'), array('controller' => 'barrios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add')); ?> </li>
	</ul>
</div>
