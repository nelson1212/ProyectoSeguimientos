<div class="ambientes view">
<h2><?php  echo __('Ambiente');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ambiente['Ambiente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Siglas'); ?></dt>
		<dd>
			<?php echo h($ambiente['Ambiente']['siglas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($ambiente['Ambiente']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Centro'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ambiente['Centro']['id'], array('controller' => 'centros', 'action' => 'view', $ambiente['Centro']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($ambiente['Ambiente']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($ambiente['Ambiente']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ambiente'), array('action' => 'edit', $ambiente['Ambiente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ambiente'), array('action' => 'delete', $ambiente['Ambiente']['id']), null, __('Are you sure you want to delete # %s?', $ambiente['Ambiente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ambientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ambiente'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Horarioadministrativos');?></h3>
	<?php if (!empty($ambiente['Horarioadministrativo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Grupo Id'); ?></th>
		<th><?php echo __('Instructore Id'); ?></th>
		<th><?php echo __('Ambiente Id'); ?></th>
		<th><?php echo __('Calendario Academico Id'); ?></th>
		<th><?php echo __('Usuario Creador'); ?></th>
		<th><?php echo __('Hora Inicial Horario'); ?></th>
		<th><?php echo __('Hora Final Horario'); ?></th>
		<th><?php echo __('Fecha Cita Horario'); ?></th>
		<th><?php echo __('Numero Indicador Horario'); ?></th>
		<th><?php echo __('Actividad Horarios'); ?></th>
		<th><?php echo __('Competencia Id'); ?></th>
		<th><?php echo __('Resultados Aprendizaje'); ?></th>
		<th><?php echo __('Para Final Fechas Horarios'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ambiente['Horarioadministrativo'] as $horarioadministrativo): ?>
		<tr>
			<td><?php echo $horarioadministrativo['id'];?></td>
			<td><?php echo $horarioadministrativo['grupo_id'];?></td>
			<td><?php echo $horarioadministrativo['instructore_id'];?></td>
			<td><?php echo $horarioadministrativo['ambiente_id'];?></td>
			<td><?php echo $horarioadministrativo['calendario_academico_id'];?></td>
			<td><?php echo $horarioadministrativo['usuario_creador'];?></td>
			<td><?php echo $horarioadministrativo['hora_inicial_horario'];?></td>
			<td><?php echo $horarioadministrativo['hora_final_horario'];?></td>
			<td><?php echo $horarioadministrativo['fecha_cita_horario'];?></td>
			<td><?php echo $horarioadministrativo['numero_indicador_horario'];?></td>
			<td><?php echo $horarioadministrativo['actividad_horarios'];?></td>
			<td><?php echo $horarioadministrativo['competencia_id'];?></td>
			<td><?php echo $horarioadministrativo['resultados_aprendizaje'];?></td>
			<td><?php echo $horarioadministrativo['para_final_fechas_horarios'];?></td>
			<td><?php echo $horarioadministrativo['created'];?></td>
			<td><?php echo $horarioadministrativo['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'horarioadministrativos', 'action' => 'view', $horarioadministrativo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'horarioadministrativos', 'action' => 'edit', $horarioadministrativo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'horarioadministrativos', 'action' => 'delete', $horarioadministrativo['id']), null, __('Are you sure you want to delete # %s?', $horarioadministrativo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Horarioadministrativo'), array('controller' => 'horarioadministrativos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Horarioespeciales');?></h3>
	<?php if (!empty($ambiente['Horarioespeciale'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Grupo Id'); ?></th>
		<th><?php echo __('Instructore Id'); ?></th>
		<th><?php echo __('Ambiente Id'); ?></th>
		<th><?php echo __('Calendario Academico Id'); ?></th>
		<th><?php echo __('Usuario Creador'); ?></th>
		<th><?php echo __('Hora Inicial Horario'); ?></th>
		<th><?php echo __('Hora Final Horario'); ?></th>
		<th><?php echo __('Fecha Cita Horario'); ?></th>
		<th><?php echo __('Numero Indicador Horario'); ?></th>
		<th><?php echo __('Actividad Horarios'); ?></th>
		<th><?php echo __('Competencia Id'); ?></th>
		<th><?php echo __('Resultados Aprendizaje'); ?></th>
		<th><?php echo __('Para Final Fechas Horarios'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ambiente['Horarioespeciale'] as $horarioespeciale): ?>
		<tr>
			<td><?php echo $horarioespeciale['id'];?></td>
			<td><?php echo $horarioespeciale['grupo_id'];?></td>
			<td><?php echo $horarioespeciale['instructore_id'];?></td>
			<td><?php echo $horarioespeciale['ambiente_id'];?></td>
			<td><?php echo $horarioespeciale['calendario_academico_id'];?></td>
			<td><?php echo $horarioespeciale['usuario_creador'];?></td>
			<td><?php echo $horarioespeciale['hora_inicial_horario'];?></td>
			<td><?php echo $horarioespeciale['hora_final_horario'];?></td>
			<td><?php echo $horarioespeciale['fecha_cita_horario'];?></td>
			<td><?php echo $horarioespeciale['numero_indicador_horario'];?></td>
			<td><?php echo $horarioespeciale['actividad_horarios'];?></td>
			<td><?php echo $horarioespeciale['competencia_id'];?></td>
			<td><?php echo $horarioespeciale['resultados_aprendizaje'];?></td>
			<td><?php echo $horarioespeciale['para_final_fechas_horarios'];?></td>
			<td><?php echo $horarioespeciale['created'];?></td>
			<td><?php echo $horarioespeciale['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'horarioespeciales', 'action' => 'view', $horarioespeciale['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'horarioespeciales', 'action' => 'edit', $horarioespeciale['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'horarioespeciales', 'action' => 'delete', $horarioespeciale['id']), null, __('Are you sure you want to delete # %s?', $horarioespeciale['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Horarioespeciale'), array('controller' => 'horarioespeciales', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Horarios');?></h3>
	<?php if (!empty($ambiente['Horario'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Grupo Id'); ?></th>
		<th><?php echo __('Instructore Id'); ?></th>
		<th><?php echo __('Ambiente Id'); ?></th>
		<th><?php echo __('Calendarioacademico Id'); ?></th>
		<th><?php echo __('Usuario Creador'); ?></th>
		<th><?php echo __('Hora Inicial Horario'); ?></th>
		<th><?php echo __('Hora Final Horario'); ?></th>
		<th><?php echo __('Fecha Cita Horario'); ?></th>
		<th><?php echo __('Numero Indicador Horario'); ?></th>
		<th><?php echo __('Actividad Horarios'); ?></th>
		<th><?php echo __('Competencia Id'); ?></th>
		<th><?php echo __('Resultadoaprendizaje Id'); ?></th>
		<th><?php echo __('Para Final Fechas Horarios'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ambiente['Horario'] as $horario): ?>
		<tr>
			<td><?php echo $horario['id'];?></td>
			<td><?php echo $horario['grupo_id'];?></td>
			<td><?php echo $horario['instructore_id'];?></td>
			<td><?php echo $horario['ambiente_id'];?></td>
			<td><?php echo $horario['calendarioacademico_id'];?></td>
			<td><?php echo $horario['usuario_creador'];?></td>
			<td><?php echo $horario['hora_inicial_horario'];?></td>
			<td><?php echo $horario['hora_final_horario'];?></td>
			<td><?php echo $horario['fecha_cita_horario'];?></td>
			<td><?php echo $horario['numero_indicador_horario'];?></td>
			<td><?php echo $horario['actividad_horarios'];?></td>
			<td><?php echo $horario['competencia_id'];?></td>
			<td><?php echo $horario['resultadoaprendizaje_id'];?></td>
			<td><?php echo $horario['para_final_fechas_horarios'];?></td>
			<td><?php echo $horario['created'];?></td>
			<td><?php echo $horario['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'horarios', 'action' => 'view', $horario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'horarios', 'action' => 'edit', $horario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'horarios', 'action' => 'delete', $horario['id']), null, __('Are you sure you want to delete # %s?', $horario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
