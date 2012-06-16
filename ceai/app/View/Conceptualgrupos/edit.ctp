<div class="conceptualgrupos form">
<?php echo $this->Form->create('Conceptualgrupo');?>
	<fieldset>
		<legend><?php echo __('Edit Conceptualgrupo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('acta_id');
		echo $this->Form->input('concepto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Conceptualgrupo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Conceptualgrupo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Conceptualgrupos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Actas'), array('controller' => 'actas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add')); ?> </li>
	</ul>
</div>
