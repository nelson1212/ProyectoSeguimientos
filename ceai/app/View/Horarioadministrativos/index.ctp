<div class="horarioadministrativos index">
	<h2><?php echo __('Horarioadministrativos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('grupo_id');?></th>
			<th><?php echo $this->Paginator->sort('instructore_id');?></th>
			<th><?php echo $this->Paginator->sort('ambiente_id');?></th>
			<th><?php echo $this->Paginator->sort('calendario_academico_id');?></th>
			<th><?php echo $this->Paginator->sort('usuario_creador');?></th>
			<th><?php echo $this->Paginator->sort('hora_inicial_horario');?></th>
			<th><?php echo $this->Paginator->sort('hora_final_horario');?></th>
			<th><?php echo $this->Paginator->sort('fecha_cita_horario');?></th>
			<th><?php echo $this->Paginator->sort('numero_indicador_horario');?></th>
			<th><?php echo $this->Paginator->sort('actividad_horarios');?></th>
			<th><?php echo $this->Paginator->sort('competencia_id');?></th>
			<th><?php echo $this->Paginator->sort('resultados_aprendizaje');?></th>
			<th><?php echo $this->Paginator->sort('para_final_fechas_horarios');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($horarioadministrativos as $horarioadministrativo): ?>
	<tr>
		<td><?php echo h($horarioadministrativo['Horarioadministrativo']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($horarioadministrativo['Grupo']['id'], array('controller' => 'grupos', 'action' => 'view', $horarioadministrativo['Grupo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($horarioadministrativo['Instructore']['id'], array('controller' => 'instructores', 'action' => 'view', $horarioadministrativo['Instructore']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($horarioadministrativo['Ambiente']['id'], array('controller' => 'ambientes', 'action' => 'view', $horarioadministrativo['Ambiente']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($horarioadministrativo['CalendarioAcademico']['id'], array('controller' => 'calendario_academicos', 'action' => 'view', $horarioadministrativo['CalendarioAcademico']['id'])); ?>
		</td>
		<td><?php echo h($horarioadministrativo['Horarioadministrativo']['usuario_creador']); ?>&nbsp;</td>
		<td><?php echo h($horarioadministrativo['Horarioadministrativo']['hora_inicial_horario']); ?>&nbsp;</td>
		<td><?php echo h($horarioadministrativo['Horarioadministrativo']['hora_final_horario']); ?>&nbsp;</td>
		<td><?php echo h($horarioadministrativo['Horarioadministrativo']['fecha_cita_horario']); ?>&nbsp;</td>
		<td><?php echo h($horarioadministrativo['Horarioadministrativo']['numero_indicador_horario']); ?>&nbsp;</td>
		<td><?php echo h($horarioadministrativo['Horarioadministrativo']['actividad_horarios']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($horarioadministrativo['Competencia']['id'], array('controller' => 'competencias', 'action' => 'view', $horarioadministrativo['Competencia']['id'])); ?>
		</td>
		<td><?php echo h($horarioadministrativo['Horarioadministrativo']['resultados_aprendizaje']); ?>&nbsp;</td>
		<td><?php echo h($horarioadministrativo['Horarioadministrativo']['para_final_fechas_horarios']); ?>&nbsp;</td>
		<td><?php echo h($horarioadministrativo['Horarioadministrativo']['created']); ?>&nbsp;</td>
		<td><?php echo h($horarioadministrativo['Horarioadministrativo']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $horarioadministrativo['Horarioadministrativo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $horarioadministrativo['Horarioadministrativo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $horarioadministrativo['Horarioadministrativo']['id']), null, __('Are you sure you want to delete # %s?', $horarioadministrativo['Horarioadministrativo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Horarioadministrativo'), array('action' => 'add')); ?></li>
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
