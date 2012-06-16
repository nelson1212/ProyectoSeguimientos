<div class="horarioadministrativos view">
<h2><?php  echo __('Horarioadministrativo');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($horarioadministrativo['Horarioadministrativo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($horarioadministrativo['Grupo']['id'], array('controller' => 'grupos', 'action' => 'view', $horarioadministrativo['Grupo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instructore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($horarioadministrativo['Instructore']['id'], array('controller' => 'instructores', 'action' => 'view', $horarioadministrativo['Instructore']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambiente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($horarioadministrativo['Ambiente']['id'], array('controller' => 'ambientes', 'action' => 'view', $horarioadministrativo['Ambiente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calendario Academico'); ?></dt>
		<dd>
			<?php echo $this->Html->link($horarioadministrativo['CalendarioAcademico']['id'], array('controller' => 'calendario_academicos', 'action' => 'view', $horarioadministrativo['CalendarioAcademico']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario Creador'); ?></dt>
		<dd>
			<?php echo h($horarioadministrativo['Horarioadministrativo']['usuario_creador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Inicial Horario'); ?></dt>
		<dd>
			<?php echo h($horarioadministrativo['Horarioadministrativo']['hora_inicial_horario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Final Horario'); ?></dt>
		<dd>
			<?php echo h($horarioadministrativo['Horarioadministrativo']['hora_final_horario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Cita Horario'); ?></dt>
		<dd>
			<?php echo h($horarioadministrativo['Horarioadministrativo']['fecha_cita_horario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Indicador Horario'); ?></dt>
		<dd>
			<?php echo h($horarioadministrativo['Horarioadministrativo']['numero_indicador_horario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actividad Horarios'); ?></dt>
		<dd>
			<?php echo h($horarioadministrativo['Horarioadministrativo']['actividad_horarios']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Competencia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($horarioadministrativo['Competencia']['id'], array('controller' => 'competencias', 'action' => 'view', $horarioadministrativo['Competencia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resultados Aprendizaje'); ?></dt>
		<dd>
			<?php echo h($horarioadministrativo['Horarioadministrativo']['resultados_aprendizaje']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Para Final Fechas Horarios'); ?></dt>
		<dd>
			<?php echo h($horarioadministrativo['Horarioadministrativo']['para_final_fechas_horarios']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($horarioadministrativo['Horarioadministrativo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($horarioadministrativo['Horarioadministrativo']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Horarioadministrativo'), array('action' => 'edit', $horarioadministrativo['Horarioadministrativo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Horarioadministrativo'), array('action' => 'delete', $horarioadministrativo['Horarioadministrativo']['id']), null, __('Are you sure you want to delete # %s?', $horarioadministrativo['Horarioadministrativo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarioadministrativos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horarioadministrativo'), array('action' => 'add')); ?> </li>
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
