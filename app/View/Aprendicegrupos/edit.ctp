<div class="aprendicegrupos form">
<?php echo $this->Form->create('Aprendicegrupo');?>
	<fieldset>
		<legend><?php echo __('Edit Aprendicegrupo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('grupo_id');
		echo $this->Form->input('aprendice_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Aprendicegrupo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Aprendicegrupo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Aprendicegrupos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendices'), array('controller' => 'aprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendice'), array('controller' => 'aprendices', 'action' => 'add')); ?> </li>
	</ul>
</div>
