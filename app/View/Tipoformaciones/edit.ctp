<div class="tipoformaciones form">
<?php echo $this->Form->create('Tipoformacione');?>
	<fieldset>
		<legend><?php echo __('Edit Tipoformacione'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tipoformacione.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tipoformacione.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipoformaciones'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Especialidades'), array('controller' => 'especialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especialidade'), array('controller' => 'especialidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
