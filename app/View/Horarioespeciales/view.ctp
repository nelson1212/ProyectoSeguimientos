<div class="horarioespeciales view">
<h2><?php  echo __('Horarioespeciale');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($horarioespeciale['Horarioespeciale']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($horarioespeciale['Grupo']['id'], array('controller' => 'grupos', 'action' => 'view', $horarioespeciale['Grupo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instructore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($horarioespeciale['Instructore']['id'], array('controller' => 'instructores', 'action' => 'view', $horarioespeciale['Instructore']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambiente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($horarioespeciale['Ambiente']['id'], array('controller' => 'ambientes', 'action' => 'view', $horarioespeciale['Ambiente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calendario Academico'); ?></dt>
		<dd>
			<?php echo $this->Html->link($horarioespeciale['CalendarioAcademico']['id'], array('controller' => 'calendario_academicos', 'action' => 'view', $horarioespeciale['CalendarioAcademico']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario Creador'); ?></dt>
		<dd>
			<?php echo h($horarioespeciale['Horarioespeciale']['usuario_creador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Inicial Horario'); ?></dt>
		<dd>
			<?php echo h($horarioespeciale['Horarioespeciale']['hora_inicial_horario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Final Horario'); ?></dt>
		<dd>
			<?php echo h($horarioespeciale['Horarioespeciale']['hora_final_horario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Cita Horario'); ?></dt>
		<dd>
			<?php echo h($horarioespeciale['Horarioespeciale']['fecha_cita_horario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Indicador Horario'); ?></dt>
		<dd>
			<?php echo h($horarioespeciale['Horarioespeciale']['numero_indicador_horario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actividad Horarios'); ?></dt>
		<dd>
			<?php echo h($horarioespeciale['Horarioespeciale']['actividad_horarios']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Competencia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($horarioespeciale['Competencia']['id'], array('controller' => 'competencias', 'action' => 'view', $horarioespeciale['Competencia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resultados Aprendizaje'); ?></dt>
		<dd>
			<?php echo h($horarioespeciale['Horarioespeciale']['resultados_aprendizaje']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Para Final Fechas Horarios'); ?></dt>
		<dd>
			<?php echo h($horarioespeciale['Horarioespeciale']['para_final_fechas_horarios']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($horarioespeciale['Horarioespeciale']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($horarioespeciale['Horarioespeciale']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Horarioespeciale'), array('action' => 'edit', $horarioespeciale['Horarioespeciale']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Horarioespeciale'), array('action' => 'delete', $horarioespeciale['Horarioespeciale']['id']), null, __('Are you sure you want to delete # %s?', $horarioespeciale['Horarioespeciale']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarioespeciales'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horarioespeciale'), array('action' => 'add')); ?> </li>
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
