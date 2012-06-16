<div class="resultadoaprendizajes index">
	<h2><?php echo __('Resultadoaprendizajes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('codigo');?></th>
			<th><?php echo $this->Paginator->sort('descripcion');?></th>
			<th><?php echo $this->Paginator->sort('competencias_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($resultadoaprendizajes as $resultadoaprendizaje): ?>
	<tr>
		<td><?php echo h($resultadoaprendizaje['Resultadoaprendizaje']['id']); ?>&nbsp;</td>
		<td><?php echo h($resultadoaprendizaje['Resultadoaprendizaje']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($resultadoaprendizaje['Resultadoaprendizaje']['descripcion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($resultadoaprendizaje['Competencias']['id'], array('controller' => 'competencias', 'action' => 'view', $resultadoaprendizaje['Competencias']['id'])); ?>
		</td>
		<td><?php echo h($resultadoaprendizaje['Resultadoaprendizaje']['created']); ?>&nbsp;</td>
		<td><?php echo h($resultadoaprendizaje['Resultadoaprendizaje']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $resultadoaprendizaje['Resultadoaprendizaje']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $resultadoaprendizaje['Resultadoaprendizaje']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $resultadoaprendizaje['Resultadoaprendizaje']['id']), null, __('Are you sure you want to delete # %s?', $resultadoaprendizaje['Resultadoaprendizaje']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Resultadoaprendizaje'), array('action' => 'add')); ?></li>
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
