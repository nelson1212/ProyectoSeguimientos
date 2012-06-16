<div class="horarios index">
	<h2><?php echo __('Horarios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('grupo_id');?></th>
			<th><?php echo $this->Paginator->sort('instructore_id');?></th>
			<th><?php echo $this->Paginator->sort('ambiente_id');?></th>
			<th><?php echo $this->Paginator->sort('calendarioacademico_id');?></th>
			<th><?php echo $this->Paginator->sort('usuario_creador');?></th>
			<th><?php echo $this->Paginator->sort('hora_inicial_horario');?></th>
			<th><?php echo $this->Paginator->sort('hora_final_horario');?></th>
			<th><?php echo $this->Paginator->sort('fecha_cita_horario');?></th>
			<th><?php echo $this->Paginator->sort('numero_indicador_horario');?></th>
			<th><?php echo $this->Paginator->sort('actividad_horarios');?></th>
			<th><?php echo $this->Paginator->sort('competencia_id');?></th>
			<th><?php echo $this->Paginator->sort('resultadoaprendizaje_id');?></th>
			<th><?php echo $this->Paginator->sort('para_final_fechas_horarios');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($horarios as $horario): ?>
	<tr>
		<td><?php echo h($horario['Horario']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($horario['Grupo']['id'], array('controller' => 'grupos', 'action' => 'view', $horario['Grupo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($horario['Instructore']['id'], array('controller' => 'instructores', 'action' => 'view', $horario['Instructore']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($horario['Ambiente']['id'], array('controller' => 'ambientes', 'action' => 'view', $horario['Ambiente']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($horario['Calendarioacademico']['id'], array('controller' => 'calendarioacademicos', 'action' => 'view', $horario['Calendarioacademico']['id'])); ?>
		</td>
		<td><?php echo h($horario['Horario']['usuario_creador']); ?>&nbsp;</td>
		<td><?php echo h($horario['Horario']['hora_inicial_horario']); ?>&nbsp;</td>
		<td><?php echo h($horario['Horario']['hora_final_horario']); ?>&nbsp;</td>
		<td><?php echo h($horario['Horario']['fecha_cita_horario']); ?>&nbsp;</td>
		<td><?php echo h($horario['Horario']['numero_indicador_horario']); ?>&nbsp;</td>
		<td><?php echo h($horario['Horario']['actividad_horarios']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($horario['Competencia']['id'], array('controller' => 'competencias', 'action' => 'view', $horario['Competencia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($horario['Resultadoaprendizaje']['id'], array('controller' => 'resultadoaprendizajes', 'action' => 'view', $horario['Resultadoaprendizaje']['id'])); ?>
		</td>
		<td><?php echo h($horario['Horario']['para_final_fechas_horarios']); ?>&nbsp;</td>
		<td><?php echo h($horario['Horario']['created']); ?>&nbsp;</td>
		<td><?php echo h($horario['Horario']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $horario['Horario']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $horario['Horario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $horario['Horario']['id']), null, __('Are you sure you want to delete # %s?', $horario['Horario']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Horario'), array('action' => 'add')); ?></li>
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
