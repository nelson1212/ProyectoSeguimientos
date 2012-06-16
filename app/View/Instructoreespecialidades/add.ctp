<div class="instructoreespecialidades form">
<?php echo $this->Form->create('Instructoreespecialidade');?>
	<fieldset>
		<legend><?php echo __('Add Instructoreespecialidade'); ?></legend>
	<?php
		echo $this->Form->input('instructore_id');
		echo $this->Form->input('especialidade_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Instructoreespecialidades'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Especialidades'), array('controller' => 'especialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especialidade'), array('controller' => 'especialidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
