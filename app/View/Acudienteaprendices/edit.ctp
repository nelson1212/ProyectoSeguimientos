<div class="acudienteaprendices form">
<?php echo $this->Form->create('Acudienteaprendice');?>
	<fieldset>
		<legend><?php echo __('Edit Acudienteaprendice'); ?></legend>
	<?php
		echo $this->Form->input('int');
		echo $this->Form->input('aprendice_id');
		echo $this->Form->input('acudiente_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Acudienteaprendice.int')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Acudienteaprendice.int'))); ?></li>
		<li><?php echo $this->Html->link(__('List Acudienteaprendices'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Aprendices'), array('controller' => 'aprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendice'), array('controller' => 'aprendices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acudientes'), array('controller' => 'acudientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acudiente'), array('controller' => 'acudientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
