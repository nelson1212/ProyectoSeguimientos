<div class="resultadoaprendizajes view">
<h2><?php  echo __('Resultadoaprendizaje');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($resultadoaprendizaje['Resultadoaprendizaje']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($resultadoaprendizaje['Resultadoaprendizaje']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($resultadoaprendizaje['Resultadoaprendizaje']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Competencias'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resultadoaprendizaje['Competencias']['id'], array('controller' => 'competencias', 'action' => 'view', $resultadoaprendizaje['Competencias']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($resultadoaprendizaje['Resultadoaprendizaje']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($resultadoaprendizaje['Resultadoaprendizaje']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Resultadoaprendizaje'), array('action' => 'edit', $resultadoaprendizaje['Resultadoaprendizaje']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Resultadoaprendizaje'), array('action' => 'delete', $resultadoaprendizaje['Resultadoaprendizaje']['id']), null, __('Are you sure you want to delete # %s?', $resultadoaprendizaje['Resultadoaprendizaje']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Resultadoaprendizajes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resultadoaprendizaje'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Competencias'), array('controller' => 'competencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competencias'), array('controller' => 'competencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calificaciones'), array('controller' => 'calificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calificacione'), array('controller' => 'calificaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resultadoproyectos'), array('controller' => 'resultadoproyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resultadoproyecto'), array('controller' => 'resultadoproyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Calificaciones');?></h3>
	<?php if (!empty($resultadoaprendizaje['Calificacione'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Aprobado'); ?></th>
		<th><?php echo __('Cal Num'); ?></th>
		<th><?php echo __('Acta Id'); ?></th>
		<th><?php echo __('Aprendice Id'); ?></th>
		<th><?php echo __('Resultadoaprendizaje Id'); ?></th>
		<th><?php echo __('Total Horas Excusadas'); ?></th>
		<th><?php echo __('Total Horas Noexcusadas'); ?></th>
		<th><?php echo __('Instructore Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($resultadoaprendizaje['Calificacione'] as $calificacione): ?>
		<tr>
			<td><?php echo $calificacione['id'];?></td>
			<td><?php echo $calificacione['aprobado'];?></td>
			<td><?php echo $calificacione['cal_num'];?></td>
			<td><?php echo $calificacione['acta_id'];?></td>
			<td><?php echo $calificacione['aprendice_id'];?></td>
			<td><?php echo $calificacione['resultadoaprendizaje_id'];?></td>
			<td><?php echo $calificacione['total_horas_excusadas'];?></td>
			<td><?php echo $calificacione['total_horas_noexcusadas'];?></td>
			<td><?php echo $calificacione['instructore_id'];?></td>
			<td><?php echo $calificacione['created'];?></td>
			<td><?php echo $calificacione['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'calificaciones', 'action' => 'view', $calificacione['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'calificaciones', 'action' => 'edit', $calificacione['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'calificaciones', 'action' => 'delete', $calificacione['id']), null, __('Are you sure you want to delete # %s?', $calificacione['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Calificacione'), array('controller' => 'calificaciones', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Horarios');?></h3>
	<?php if (!empty($resultadoaprendizaje['Horario'])):?>
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
		foreach ($resultadoaprendizaje['Horario'] as $horario): ?>
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
<div class="related">
	<h3><?php echo __('Related Resultadoproyectos');?></h3>
	<?php if (!empty($resultadoaprendizaje['Resultadoproyecto'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Proyecto Id'); ?></th>
		<th><?php echo __('Instructore Id'); ?></th>
		<th><?php echo __('Resultadoaprendizaje Id'); ?></th>
		<th><?php echo __('Actividad Matriz'); ?></th>
		<th><?php echo __('Trimestre Matriz'); ?></th>
		<th><?php echo __('Codigo Guia'); ?></th>
		<th><?php echo __('Fecha Inicio Matriz'); ?></th>
		<th><?php echo __('Fecha Final Matriz'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($resultadoaprendizaje['Resultadoproyecto'] as $resultadoproyecto): ?>
		<tr>
			<td><?php echo $resultadoproyecto['id'];?></td>
			<td><?php echo $resultadoproyecto['proyecto_id'];?></td>
			<td><?php echo $resultadoproyecto['instructore_id'];?></td>
			<td><?php echo $resultadoproyecto['resultadoaprendizaje_id'];?></td>
			<td><?php echo $resultadoproyecto['actividad_matriz'];?></td>
			<td><?php echo $resultadoproyecto['trimestre_matriz'];?></td>
			<td><?php echo $resultadoproyecto['codigo_guia'];?></td>
			<td><?php echo $resultadoproyecto['fecha_inicio_matriz'];?></td>
			<td><?php echo $resultadoproyecto['fecha_final_matriz'];?></td>
			<td><?php echo $resultadoproyecto['created'];?></td>
			<td><?php echo $resultadoproyecto['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'resultadoproyectos', 'action' => 'view', $resultadoproyecto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'resultadoproyectos', 'action' => 'edit', $resultadoproyecto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'resultadoproyectos', 'action' => 'delete', $resultadoproyecto['id']), null, __('Are you sure you want to delete # %s?', $resultadoproyecto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Resultadoproyecto'), array('controller' => 'resultadoproyectos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
