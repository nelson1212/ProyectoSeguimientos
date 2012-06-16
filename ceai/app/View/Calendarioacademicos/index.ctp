<div class="calendarioacademicos index">
	<h2><?php echo __('Calendarioacademicos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('descripcion_trimestre');?></th>
			<th><?php echo $this->Paginator->sort('fecha_inicial_trime');?></th>
			<th><?php echo $this->Paginator->sort('fecha_final_trime');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($calendarioacademicos as $calendarioacademico): ?>
	<tr>
		<td><?php echo h($calendarioacademico['Calendarioacademico']['id']); ?>&nbsp;</td>
		<td><?php echo h($calendarioacademico['Calendarioacademico']['descripcion_trimestre']); ?>&nbsp;</td>
		<td><?php echo h($calendarioacademico['Calendarioacademico']['fecha_inicial_trime']); ?>&nbsp;</td>
		<td><?php echo h($calendarioacademico['Calendarioacademico']['fecha_final_trime']); ?>&nbsp;</td>
		<td><?php echo h($calendarioacademico['Calendarioacademico']['created']); ?>&nbsp;</td>
		<td><?php echo h($calendarioacademico['Calendarioacademico']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $calendarioacademico['Calendarioacademico']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $calendarioacademico['Calendarioacademico']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $calendarioacademico['Calendarioacademico']['id']), null, __('Are you sure you want to delete # %s?', $calendarioacademico['Calendarioacademico']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Calendarioacademico'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
