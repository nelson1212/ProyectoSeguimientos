<div class="calendarioacademicos view">
<h2><?php  echo __('Calendarioacademico');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($calendarioacademico['Calendarioacademico']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion Trimestre'); ?></dt>
		<dd>
			<?php echo h($calendarioacademico['Calendarioacademico']['descripcion_trimestre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inicial Trime'); ?></dt>
		<dd>
			<?php echo h($calendarioacademico['Calendarioacademico']['fecha_inicial_trime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Final Trime'); ?></dt>
		<dd>
			<?php echo h($calendarioacademico['Calendarioacademico']['fecha_final_trime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($calendarioacademico['Calendarioacademico']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($calendarioacademico['Calendarioacademico']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Calendarioacademico'), array('action' => 'edit', $calendarioacademico['Calendarioacademico']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Calendarioacademico'), array('action' => 'delete', $calendarioacademico['Calendarioacademico']['id']), null, __('Are you sure you want to delete # %s?', $calendarioacademico['Calendarioacademico']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Calendarioacademicos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calendarioacademico'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Horarios');?></h3>
	<?php if (!empty($calendarioacademico['Horario'])):?>
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
		foreach ($calendarioacademico['Horario'] as $horario): ?>
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
