<div class="horarioadministrativos form">
<?php echo $this->Form->create('Horarioadministrativo');?>
	<fieldset>
		<legend><?php echo __('Edit Horarioadministrativo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('grupo_id');
		echo $this->Form->input('instructore_id');
		echo $this->Form->input('ambiente_id');
		echo $this->Form->input('calendario_academico_id');
		echo $this->Form->input('usuario_creador');
		echo $this->Form->input('hora_inicial_horario');
		echo $this->Form->input('hora_final_horario');
		echo $this->Form->input('fecha_cita_horario');
		echo $this->Form->input('numero_indicador_horario');
		echo $this->Form->input('actividad_horarios');
		echo $this->Form->input('competencia_id');
		echo $this->Form->input('resultados_aprendizaje');
		echo $this->Form->input('para_final_fechas_horarios');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Horarioadministrativo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Horarioadministrativo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Horarioadministrativos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ambientes'), array('controller' => 'ambientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ambiente'), array('controller' => 'ambientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calendario Academicos'), array('controller' => 'calendario_academicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calendario Academico'), array('controller' => 'calendario_academicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Competencias'), array('controller' => 'competencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competencia'), array('controller' => 'competencias', 'action' => 'add')); ?> </li>
	</ul>
</div>
