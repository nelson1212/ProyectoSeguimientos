<div class="resultadoproyectos index">
	<h2><?php echo __('Resultadoproyectos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('proyecto_id');?></th>
			<th><?php echo $this->Paginator->sort('instructore_id');?></th>
			<th><?php echo $this->Paginator->sort('resultadoaprendizaje_id');?></th>
			<th><?php echo $this->Paginator->sort('actividad_matriz');?></th>
			<th><?php echo $this->Paginator->sort('trimestre_matriz');?></th>
			<th><?php echo $this->Paginator->sort('codigo_guia');?></th>
			<th><?php echo $this->Paginator->sort('fecha_inicio_matriz');?></th>
			<th><?php echo $this->Paginator->sort('fecha_final_matriz');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($resultadoproyectos as $resultadoproyecto): ?>
	<tr>
		<td><?php echo h($resultadoproyecto['Resultadoproyecto']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($resultadoproyecto['Proyecto']['id'], array('controller' => 'proyectos', 'action' => 'view', $resultadoproyecto['Proyecto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($resultadoproyecto['Instructore']['id'], array('controller' => 'instructores', 'action' => 'view', $resultadoproyecto['Instructore']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($resultadoproyecto['Resultadoaprendizaje']['id'], array('controller' => 'resultadoaprendizajes', 'action' => 'view', $resultadoproyecto['Resultadoaprendizaje']['id'])); ?>
		</td>
		<td><?php echo h($resultadoproyecto['Resultadoproyecto']['actividad_matriz']); ?>&nbsp;</td>
		<td><?php echo h($resultadoproyecto['Resultadoproyecto']['trimestre_matriz']); ?>&nbsp;</td>
		<td><?php echo h($resultadoproyecto['Resultadoproyecto']['codigo_guia']); ?>&nbsp;</td>
		<td><?php echo h($resultadoproyecto['Resultadoproyecto']['fecha_inicio_matriz']); ?>&nbsp;</td>
		<td><?php echo h($resultadoproyecto['Resultadoproyecto']['fecha_final_matriz']); ?>&nbsp;</td>
		<td><?php echo h($resultadoproyecto['Resultadoproyecto']['created']); ?>&nbsp;</td>
		<td><?php echo h($resultadoproyecto['Resultadoproyecto']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $resultadoproyecto['Resultadoproyecto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $resultadoproyecto['Resultadoproyecto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $resultadoproyecto['Resultadoproyecto']['id']), null, __('Are you sure you want to delete # %s?', $resultadoproyecto['Resultadoproyecto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Resultadoproyecto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resultadoaprendizajes'), array('controller' => 'resultadoaprendizajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resultadoaprendizaje'), array('controller' => 'resultadoaprendizajes', 'action' => 'add')); ?> </li>
	</ul>
</div>
