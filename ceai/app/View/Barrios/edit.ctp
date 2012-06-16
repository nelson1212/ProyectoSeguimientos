<div class="barrios form">
<?php echo $this->Form->create('Barrio');?>
	<fieldset>
		<legend><?php echo __('Edit Barrio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('ciudade_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Barrio.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Barrio.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Barrios'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Ciudades'), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudade'), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendices'), array('controller' => 'aprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendice'), array('controller' => 'aprendices', 'action' => 'add')); ?> </li>
	</ul>
</div>
