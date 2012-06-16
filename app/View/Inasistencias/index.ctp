<div class="inasistencias index">
	<h2><?php echo __('Inasistencias');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('calificacione_id');?></th>
			<th><?php echo $this->Paginator->sort('fecha_falta');?></th>
			<th><?php echo $this->Paginator->sort('num_horas');?></th>
			<th><?php echo $this->Paginator->sort('excusa');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($inasistencias as $inasistencia): ?>
	<tr>
		<td><?php echo h($inasistencia['Inasistencia']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($inasistencia['Calificacione']['id'], array('controller' => 'calificaciones', 'action' => 'view', $inasistencia['Calificacione']['id'])); ?>
		</td>
		<td><?php echo h($inasistencia['Inasistencia']['fecha_falta']); ?>&nbsp;</td>
		<td><?php echo h($inasistencia['Inasistencia']['num_horas']); ?>&nbsp;</td>
		<td><?php echo h($inasistencia['Inasistencia']['excusa']); ?>&nbsp;</td>
		<td><?php echo h($inasistencia['Inasistencia']['created']); ?>&nbsp;</td>
		<td><?php echo h($inasistencia['Inasistencia']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $inasistencia['Inasistencia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $inasistencia['Inasistencia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $inasistencia['Inasistencia']['id']), null, __('Are you sure you want to delete # %s?', $inasistencia['Inasistencia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Inasistencia'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Calificaciones'), array('controller' => 'calificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calificacione'), array('controller' => 'calificaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
