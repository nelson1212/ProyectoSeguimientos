<div class="sectores form">
<?php echo $this->Form->create('Sectore');?>
	<fieldset>
		<legend><?php echo __('Edit Sectore'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Sectore.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Sectore.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sectores'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
