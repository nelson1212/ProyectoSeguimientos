<div class="proyectos view">
<h2><?php  echo __('Proyecto');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Proyecto'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['nombre_proyecto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion Proyecto'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['descripcion_proyecto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ruta Proyecto Url'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['ruta_proyecto_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proyecto['Grupo']['id'], array('controller' => 'grupos', 'action' => 'view', $proyecto['Grupo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proyecto'), array('action' => 'edit', $proyecto['Proyecto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proyecto'), array('action' => 'delete', $proyecto['Proyecto']['id']), null, __('Are you sure you want to delete # %s?', $proyecto['Proyecto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resultadoproyectos'), array('controller' => 'resultadoproyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resultadoproyecto'), array('controller' => 'resultadoproyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Resultadoproyectos');?></h3>
	<?php if (!empty($proyecto['Resultadoproyecto'])):?>
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
		foreach ($proyecto['Resultadoproyecto'] as $resultadoproyecto): ?>
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
