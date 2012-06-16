<div class="horarios form">
<?php echo $this->Form->create('Horario');?>
	<fieldset>
		<legend><?php echo __('Edit Horario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('grupo_id');
		echo $this->Form->input('instructore_id');
		echo $this->Form->input('ambiente_id');
		echo $this->Form->input('calendarioacademico_id');
		echo $this->Form->input('usuario_creador');
		echo $this->Form->input('hora_inicial_horario');
		echo $this->Form->input('hora_final_horario');
		echo $this->Form->input('fecha_cita_horario');
		echo $this->Form->input('numero_indicador_horario');
		echo $this->Form->input('actividad_horarios');
		echo $this->Form->input('competencia_id');
		echo $this->Form->input('resultadoaprendizaje_id');
		echo $this->Form->input('para_final_fechas_horarios');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Horario.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Horario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ambientes'), array('controller' => 'ambientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ambiente'), array('controller' => 'ambientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calendarioacademicos'), array('controller' => 'calendarioacademicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calendarioacademico'), array('controller' => 'calendarioacademicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Competencias'), array('controller' => 'competencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competencia'), array('controller' => 'competencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resultadoaprendizajes'), array('controller' => 'resultadoaprendizajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resultadoaprendizaje'), array('controller' => 'resultadoaprendizajes', 'action' => 'add')); ?> </li>
	</ul>
</div>
