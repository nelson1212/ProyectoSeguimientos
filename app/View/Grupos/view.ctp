<div class="grupos view">
<h2><?php  echo __('Grupo');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consecutivo'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['consecutivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inicial'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['fecha_inicial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Final'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['fecha_final']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Versionespecialidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grupo['Versionespecialidade']['id'], array('controller' => 'versionespecialidades', 'action' => 'view', $grupo['Versionespecialidade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Ficha'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['numero_ficha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Solicitud'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['numero_solicitud']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instructore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grupo['Instructore']['id'], array('controller' => 'instructores', 'action' => 'view', $grupo['Instructore']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Aprendiz Lider'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['id_aprendiz_lider']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grupo'), array('action' => 'edit', $grupo['Grupo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grupo'), array('action' => 'delete', $grupo['Grupo']['id']), null, __('Are you sure you want to delete # %s?', $grupo['Grupo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Versionespecialidades'), array('controller' => 'versionespecialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Versionespecialidade'), array('controller' => 'versionespecialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actagrupos'), array('controller' => 'actagrupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actagrupo'), array('controller' => 'actagrupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendicegrupos'), array('controller' => 'aprendicegrupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendicegrupo'), array('controller' => 'aprendicegrupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarioadministrativos'), array('controller' => 'horarioadministrativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horarioadministrativo'), array('controller' => 'horarioadministrativos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarioespeciales'), array('controller' => 'horarioespeciales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horarioespeciale'), array('controller' => 'horarioespeciales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Actagrupos');?></h3>
	<?php if (!empty($grupo['Actagrupo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Acta Id'); ?></th>
		<th><?php echo __('Grupo Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($grupo['Actagrupo'] as $actagrupo): ?>
		<tr>
			<td><?php echo $actagrupo['id'];?></td>
			<td><?php echo $actagrupo['acta_id'];?></td>
			<td><?php echo $actagrupo['grupo_id'];?></td>
			<td><?php echo $actagrupo['created'];?></td>
			<td><?php echo $actagrupo['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'actagrupos', 'action' => 'view', $actagrupo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'actagrupos', 'action' => 'edit', $actagrupo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'actagrupos', 'action' => 'delete', $actagrupo['id']), null, __('Are you sure you want to delete # %s?', $actagrupo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Actagrupo'), array('controller' => 'actagrupos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Aprendicegrupos');?></h3>
	<?php if (!empty($grupo['Aprendicegrupo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Grupo Id'); ?></th>
		<th><?php echo __('Aprendice Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($grupo['Aprendicegrupo'] as $aprendicegrupo): ?>
		<tr>
			<td><?php echo $aprendicegrupo['id'];?></td>
			<td><?php echo $aprendicegrupo['grupo_id'];?></td>
			<td><?php echo $aprendicegrupo['aprendice_id'];?></td>
			<td><?php echo $aprendicegrupo['created'];?></td>
			<td><?php echo $aprendicegrupo['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'aprendicegrupos', 'action' => 'view', $aprendicegrupo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'aprendicegrupos', 'action' => 'edit', $aprendicegrupo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'aprendicegrupos', 'action' => 'delete', $aprendicegrupo['id']), null, __('Are you sure you want to delete # %s?', $aprendicegrupo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Aprendicegrupo'), array('controller' => 'aprendicegrupos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Horarioadministrativos');?></h3>
	<?php if (!empty($grupo['Horarioadministrativo'])):?>
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
		foreach ($grupo['Horarioadministrativo'] as $horarioadministrativo): ?>
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
	<?php if (!empty($grupo['Horarioespeciale'])):?>
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
		foreach ($grupo['Horarioespeciale'] as $horarioespeciale): ?>
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
	<?php if (!empty($grupo['Horario'])):?>
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
		foreach ($grupo['Horario'] as $horario): ?>
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
	<h3><?php echo __('Related Proyectos');?></h3>
	<?php if (!empty($grupo['Proyecto'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre Proyecto'); ?></th>
		<th><?php echo __('Descripcion Proyecto'); ?></th>
		<th><?php echo __('Ruta Proyecto Url'); ?></th>
		<th><?php echo __('Grupo Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($grupo['Proyecto'] as $proyecto): ?>
		<tr>
			<td><?php echo $proyecto['id'];?></td>
			<td><?php echo $proyecto['nombre_proyecto'];?></td>
			<td><?php echo $proyecto['descripcion_proyecto'];?></td>
			<td><?php echo $proyecto['ruta_proyecto_url'];?></td>
			<td><?php echo $proyecto['grupo_id'];?></td>
			<td><?php echo $proyecto['created'];?></td>
			<td><?php echo $proyecto['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'proyectos', 'action' => 'view', $proyecto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'proyectos', 'action' => 'edit', $proyecto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'proyectos', 'action' => 'delete', $proyecto['id']), null, __('Are you sure you want to delete # %s?', $proyecto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
