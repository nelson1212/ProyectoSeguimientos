<div class="tipocontratos form">
<?php echo $this->Form->create('Tipocontrato');?>
	<fieldset>
		<legend><?php echo __('Edit Tipocontrato'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tipocontrato.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tipocontrato.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipocontratos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Contratos'), array('controller' => 'contratos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contrato'), array('controller' => 'contratos', 'action' => 'add')); ?> </li>
	</ul>
</div>
