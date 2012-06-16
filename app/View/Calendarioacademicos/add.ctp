<div class="calendarioacademicos form">
<?php echo $this->Form->create('Calendarioacademico');?>
	<fieldset>
		<legend><?php echo __('Add Calendarioacademico'); ?></legend>
	<?php
		echo $this->Form->input('descripcion_trimestre');
		echo $this->Form->input('fecha_inicial_trime');
		echo $this->Form->input('fecha_final_trime');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Calendarioacademicos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
