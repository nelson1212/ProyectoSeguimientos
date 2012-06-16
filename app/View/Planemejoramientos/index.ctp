<div class="planemejoramientos index">
	<h2><?php echo __('Planemejoramientos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('calificacione_id');?></th>
			<th><?php echo $this->Paginator->sort('resultado_numerico');?></th>
			<th><?php echo $this->Paginator->sort('observaciones');?></th>
			<th><?php echo $this->Paginator->sort('aprobado');?></th>
			<th><?php echo $this->Paginator->sort('fecha_entrega');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($planemejoramientos as $planemejoramiento): ?>
	<tr>
		<td><?php echo h($planemejoramiento['Planemejoramiento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($planemejoramiento['Calificacione']['id'], array('controller' => 'calificaciones', 'action' => 'view', $planemejoramiento['Calificacione']['id'])); ?>
		</td>
		<td><?php echo h($planemejoramiento['Planemejoramiento']['resultado_numerico']); ?>&nbsp;</td>
		<td><?php echo h($planemejoramiento['Planemejoramiento']['observaciones']); ?>&nbsp;</td>
		<td><?php echo h($planemejoramiento['Planemejoramiento']['aprobado']); ?>&nbsp;</td>
		<td><?php echo h($planemejoramiento['Planemejoramiento']['fecha_entrega']); ?>&nbsp;</td>
		<td><?php echo h($planemejoramiento['Planemejoramiento']['created']); ?>&nbsp;</td>
		<td><?php echo h($planemejoramiento['Planemejoramiento']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $planemejoramiento['Planemejoramiento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $planemejoramiento['Planemejoramiento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $planemejoramiento['Planemejoramiento']['id']), null, __('Are you sure you want to delete # %s?', $planemejoramiento['Planemejoramiento']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Planemejoramiento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Calificaciones'), array('controller' => 'calificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calificacione'), array('controller' => 'calificaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
