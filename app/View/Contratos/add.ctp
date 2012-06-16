<div class="contratos form">
<?php echo $this->Form->create('Contrato');?>
	<fieldset>
		<legend><?php echo __('Add Contrato'); ?></legend>
	<?php
		echo $this->Form->input('instructore_id');
		echo $this->Form->input('tipocontrato_id');
		echo $this->Form->input('numero_contrato');
		echo $this->Form->input('cantidad_horas');
		echo $this->Form->input('fecha_inicial_contra');
		echo $this->Form->input('fecha_final_contra');
		echo $this->Form->input('valor_contrato_total');
		echo $this->Form->input('valor_contrato_mensual');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contratos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipocontratos'), array('controller' => 'tipocontratos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipocontrato'), array('controller' => 'tipocontratos', 'action' => 'add')); ?> </li>
	</ul>
</div>
