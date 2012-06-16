<div class="calificaciones index">
	<h2><?php echo __('Calificaciones');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('aprobado');?></th>
			<th><?php echo $this->Paginator->sort('cal_num');?></th>
			<th><?php echo $this->Paginator->sort('acta_id');?></th>
			<th><?php echo $this->Paginator->sort('aprendice_id');?></th>
			<th><?php echo $this->Paginator->sort('resultadoaprendizaje_id');?></th>
			<th><?php echo $this->Paginator->sort('total_horas_excusadas');?></th>
			<th><?php echo $this->Paginator->sort('total_horas_noexcusadas');?></th>
			<th><?php echo $this->Paginator->sort('instructore_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($calificaciones as $calificacione): ?>
	<tr>
		<td><?php echo h($calificacione['Calificacione']['id']); ?>&nbsp;</td>
		<td><?php echo h($calificacione['Calificacione']['aprobado']); ?>&nbsp;</td>
		<td><?php echo h($calificacione['Calificacione']['cal_num']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($calificacione['Acta']['id'], array('controller' => 'actas', 'action' => 'view', $calificacione['Acta']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($calificacione['Aprendice']['id'], array('controller' => 'aprendices', 'action' => 'view', $calificacione['Aprendice']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($calificacione['Resultadoaprendizaje']['id'], array('controller' => 'resultadoaprendizajes', 'action' => 'view', $calificacione['Resultadoaprendizaje']['id'])); ?>
		</td>
		<td><?php echo h($calificacione['Calificacione']['total_horas_excusadas']); ?>&nbsp;</td>
		<td><?php echo h($calificacione['Calificacione']['total_horas_noexcusadas']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($calificacione['Instructore']['id'], array('controller' => 'instructores', 'action' => 'view', $calificacione['Instructore']['id'])); ?>
		</td>
		<td><?php echo h($calificacione['Calificacione']['created']); ?>&nbsp;</td>
		<td><?php echo h($calificacione['Calificacione']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $calificacione['Calificacione']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $calificacione['Calificacione']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $calificacione['Calificacione']['id']), null, __('Are you sure you want to delete # %s?', $calificacione['Calificacione']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Calificacione'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Actas'), array('controller' => 'actas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendices'), array('controller' => 'aprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendice'), array('controller' => 'aprendices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resultadoaprendizajes'), array('controller' => 'resultadoaprendizajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resultadoaprendizaje'), array('controller' => 'resultadoaprendizajes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inasistencias'), array('controller' => 'inasistencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inasistencia'), array('controller' => 'inasistencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planemejoramientos'), array('controller' => 'planemejoramientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planemejoramiento'), array('controller' => 'planemejoramientos', 'action' => 'add')); ?> </li>
	</ul>
</div>
