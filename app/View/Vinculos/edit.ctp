<div class="vinculos form">
<?php echo $this->Form->create('Vinculo');?>
	<fieldset>
		<legend><?php echo __('Edit Vinculo'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vinculo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Vinculo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vinculos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
	</ul>
</div>
