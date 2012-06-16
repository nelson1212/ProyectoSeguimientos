<div class="actainstructores form">
<?php echo $this->Form->create('Actainstructore');?>
	<fieldset>
		<legend><?php echo __('Edit Actainstructore'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('acta_id');
		echo $this->Form->input('instructore_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Actainstructore.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Actainstructore.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Actainstructores'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Actas'), array('controller' => 'actas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
	</ul>
</div>
