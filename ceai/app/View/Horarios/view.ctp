<div class="horarios view">
<h2><?php  echo __('Horario');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($horario['Horario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($horario['Grupo']['id'], array('controller' => 'grupos', 'action' => 'view', $horario['Grupo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instructore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($horario['Instructore']['id'], array('controller' => 'instructores', 'action' => 'view', $horario['Instructore']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ambiente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($horario['Ambiente']['id'], array('controller' => 'ambientes', 'action' => 'view', $horario['Ambiente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calendarioacademico'); ?></dt>
		<dd>
			<?php echo $this->Html->link($horario['Calendarioacademico']['id'], array('controller' => 'calendarioacademicos', 'action' => 'view', $horario['Calendarioacademico']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario Creador'); ?></dt>
		<dd>
			<?php echo h($horario['Horario']['usuario_creador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Inicial Horario'); ?></dt>
		<dd>
			<?php echo h($horario['Horario']['hora_inicial_horario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Final Horario'); ?></dt>
		<dd>
			<?php echo h($horario['Horario']['hora_final_horario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Cita Horario'); ?></dt>
		<dd>
			<?php echo h($horario['Horario']['fecha_cita_horario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Indicador Horario'); ?></dt>
		<dd>
			<?php echo h($horario['Horario']['numero_indicador_horario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actividad Horarios'); ?></dt>
		<dd>
			<?php echo h($horario['Horario']['actividad_horarios']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Competencia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($horario['Competencia']['id'], array('controller' => 'competencias', 'action' => 'view', $horario['Competencia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resultadoaprendizaje'); ?></dt>
		<dd>
			<?php echo $this->Html->link($horario['Resultadoaprendizaje']['id'], array('controller' => 'resultadoaprendizajes', 'action' => 'view', $horario['Resultadoaprendizaje']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Para Final Fechas Horarios'); ?></dt>
		<dd>
			<?php echo h($horario['Horario']['para_final_fechas_horarios']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($horario['Horario']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($horario['Horario']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Horario'), array('action' => 'edit', $horario['Horario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Horario'), array('action' => 'delete', $horario['Horario']['id']), null, __('Are you sure you want to delete # %s?', $horario['Horario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('action' => 'add')); ?> </li>
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
