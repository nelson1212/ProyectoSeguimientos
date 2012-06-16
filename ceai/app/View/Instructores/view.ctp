<div class="instructores view">
<h2><?php  echo __('Instructore');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($instructore['Instructore']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Documento'); ?></dt>
		<dd>
			<?php echo h($instructore['Instructore']['documento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($instructore['Instructore']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($instructore['Instructore']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($instructore['Instructore']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($instructore['Instructore']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($instructore['Instructore']['correo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vinculo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($instructore['Vinculo']['id'], array('controller' => 'vinculos', 'action' => 'view', $instructore['Vinculo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($instructore['Instructore']['celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cruzador'); ?></dt>
		<dd>
			<?php echo h($instructore['Instructore']['cruzador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pass'); ?></dt>
		<dd>
			<?php echo h($instructore['Instructore']['pass']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Centro'); ?></dt>
		<dd>
			<?php echo $this->Html->link($instructore['Centro']['id'], array('controller' => 'centros', 'action' => 'view', $instructore['Centro']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($instructore['Instructore']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($instructore['Instructore']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Instructore'), array('action' => 'edit', $instructore['Instructore']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Instructore'), array('action' => 'delete', $instructore['Instructore']['id']), null, __('Are you sure you want to delete # %s?', $instructore['Instructore']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vinculos'), array('controller' => 'vinculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vinculo'), array('controller' => 'vinculos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actainstructores'), array('controller' => 'actainstructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actainstructore'), array('controller' => 'actainstructores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calificaciones'), array('controller' => 'calificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calificacione'), array('controller' => 'calificaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contratos'), array('controller' => 'contratos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contrato'), array('controller' => 'contratos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarioadministrativos'), array('controller' => 'horarioadministrativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horarioadministrativo'), array('controller' => 'horarioadministrativos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarioespeciales'), array('controller' => 'horarioespeciales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horarioespeciale'), array('controller' => 'horarioespeciales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructoreespecialidades'), array('controller' => 'instructoreespecialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructoreespecialidade'), array('controller' => 'instructoreespecialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resultadoproyectos'), array('controller' => 'resultadoproyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resultadoproyecto'), array('controller' => 'resultadoproyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Actainstructores');?></h3>
	<?php if (!empty($instructore['Actainstructore'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Acta Id'); ?></th>
		<th><?php echo __('Instructore Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($instructore['Actainstructore'] as $actainstructore): ?>
		<tr>
			<td><?php echo $actainstructore['id'];?></td>
			<td><?php echo $actainstructore['acta_id'];?></td>
			<td><?php echo $actainstructore['instructore_id'];?></td>
			<td><?php echo $actainstructore['created'];?></td>
			<td><?php echo $actainstructore['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'actainstructores', 'action' => 'view', $actainstructore['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'actainstructores', 'action' => 'edit', $actainstructore['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'actainstructores', 'action' => 'delete', $actainstructore['id']), null, __('Are you sure you want to delete # %s?', $actainstructore['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Actainstructore'), array('controller' => 'actainstructores', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Calificaciones');?></h3>
	<?php if (!empty($instructore['Calificacione'])):?>
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
		foreach ($instructore['Calificacione'] as $calificacione): ?>
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
	<h3><?php echo __('Related Contratos');?></h3>
	<?php if (!empty($instructore['Contrato'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Instructore Id'); ?></th>
		<th><?php echo __('Tipocontrato Id'); ?></th>
		<th><?php echo __('Numero Contrato'); ?></th>
		<th><?php echo __('Cantidad Horas'); ?></th>
		<th><?php echo __('Fecha Inicial Contra'); ?></th>
		<th><?php echo __('Fecha Final Contra'); ?></th>
		<th><?php echo __('Valor Contrato Total'); ?></th>
		<th><?php echo __('Valor Contrato Mensual'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($instructore['Contrato'] as $contrato): ?>
		<tr>
			<td><?php echo $contrato['id'];?></td>
			<td><?php echo $contrato['instructore_id'];?></td>
			<td><?php echo $contrato['tipocontrato_id'];?></td>
			<td><?php echo $contrato['numero_contrato'];?></td>
			<td><?php echo $contrato['cantidad_horas'];?></td>
			<td><?php echo $contrato['fecha_inicial_contra'];?></td>
			<td><?php echo $contrato['fecha_final_contra'];?></td>
			<td><?php echo $contrato['valor_contrato_total'];?></td>
			<td><?php echo $contrato['valor_contrato_mensual'];?></td>
			<td><?php echo $contrato['created'];?></td>
			<td><?php echo $contrato['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contratos', 'action' => 'view', $contrato['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contratos', 'action' => 'edit', $contrato['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contratos', 'action' => 'delete', $contrato['id']), null, __('Are you sure you want to delete # %s?', $contrato['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contrato'), array('controller' => 'contratos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Grupos');?></h3>
	<?php if (!empty($instructore['Grupo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Consecutivo'); ?></th>
		<th><?php echo __('Fecha Inicial'); ?></th>
		<th><?php echo __('Fecha Final'); ?></th>
		<th><?php echo __('Versionespecialidade Id'); ?></th>
		<th><?php echo __('Numero Ficha'); ?></th>
		<th><?php echo __('Numero Solicitud'); ?></th>
		<th><?php echo __('Instructore Id'); ?></th>
		<th><?php echo __('Id Aprendiz Lider'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($instructore['Grupo'] as $grupo): ?>
		<tr>
			<td><?php echo $grupo['id'];?></td>
			<td><?php echo $grupo['nombre'];?></td>
			<td><?php echo $grupo['consecutivo'];?></td>
			<td><?php echo $grupo['fecha_inicial'];?></td>
			<td><?php echo $grupo['fecha_final'];?></td>
			<td><?php echo $grupo['versionespecialidade_id'];?></td>
			<td><?php echo $grupo['numero_ficha'];?></td>
			<td><?php echo $grupo['numero_solicitud'];?></td>
			<td><?php echo $grupo['instructore_id'];?></td>
			<td><?php echo $grupo['id_aprendiz_lider'];?></td>
			<td><?php echo $grupo['created'];?></td>
			<td><?php echo $grupo['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'grupos', 'action' => 'view', $grupo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'grupos', 'action' => 'edit', $grupo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'grupos', 'action' => 'delete', $grupo['id']), null, __('Are you sure you want to delete # %s?', $grupo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Horarioadministrativos');?></h3>
	<?php if (!empty($instructore['Horarioadministrativo'])):?>
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
		foreach ($instructore['Horarioadministrativo'] as $horarioadministrativo): ?>
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
	<?php if (!empty($instructore['Horarioespeciale'])):?>
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
		foreach ($instructore['Horarioespeciale'] as $horarioespeciale): ?>
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
	<?php if (!empty($instructore['Horario'])):?>
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
		foreach ($instructore['Horario'] as $horario): ?>
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
	<h3><?php echo __('Related Instructoreespecialidades');?></h3>
	<?php if (!empty($instructore['Instructoreespecialidade'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Instructore Id'); ?></th>
		<th><?php echo __('Especialidade Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($instructore['Instructoreespecialidade'] as $instructoreespecialidade): ?>
		<tr>
			<td><?php echo $instructoreespecialidade['id'];?></td>
			<td><?php echo $instructoreespecialidade['instructore_id'];?></td>
			<td><?php echo $instructoreespecialidade['especialidade_id'];?></td>
			<td><?php echo $instructoreespecialidade['created'];?></td>
			<td><?php echo $instructoreespecialidade['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'instructoreespecialidades', 'action' => 'view', $instructoreespecialidade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'instructoreespecialidades', 'action' => 'edit', $instructoreespecialidade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'instructoreespecialidades', 'action' => 'delete', $instructoreespecialidade['id']), null, __('Are you sure you want to delete # %s?', $instructoreespecialidade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Instructoreespecialidade'), array('controller' => 'instructoreespecialidades', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Resultadoproyectos');?></h3>
	<?php if (!empty($instructore['Resultadoproyecto'])):?>
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
		foreach ($instructore['Resultadoproyecto'] as $resultadoproyecto): ?>
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
