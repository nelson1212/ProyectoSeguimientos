<div class="conceptualaprendices form">
<?php echo $this->Form->create('Conceptualaprendice');?>
	<fieldset>
		<legend><?php echo __('Edit Conceptualaprendice'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('aprendice_id');
		echo $this->Form->input('acta_id');
		echo $this->Form->input('concepto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Conceptualaprendice.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Conceptualaprendice.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Conceptualaprendices'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Aprendices'), array('controller' => 'aprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendice'), array('controller' => 'aprendices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actas'), array('controller' => 'actas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add')); ?> </li>
	</ul>
</div>
