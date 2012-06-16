<div class="ambientes form">
<?php echo $this->Form->create('Ambiente');?>
	<fieldset>
		<legend><?php echo __('Add Ambiente'); ?></legend>
	<?php
		echo $this->Form->input('siglas');
		echo $this->Form->input('nombre');
		echo $this->Form->input('centro_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ambientes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarioadministrativos'), array('controller' => 'horarioadministrativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horarioadministrativo'), array('controller' => 'horarioadministrativos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarioespeciales'), array('controller' => 'horarioespeciales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horarioespeciale'), array('controller' => 'horarioespeciales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
