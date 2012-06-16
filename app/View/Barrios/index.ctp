<div class="barrios index">
	<h2><?php echo __('Barrios');?></h2>
	<table cellpadding="0" cellspacing="0" border="1" width="90%">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('ciudade_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($barrios as $barrio): ?>
	<tr>
		<td><?php echo h($barrio['Barrio']['id']); ?>&nbsp;</td>
		<td><?php echo h($barrio['Barrio']['nombre']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($barrio['Ciudade']['id'], array('controller' => 'ciudades', 'action' => 'view', $barrio['Ciudade']['id'])); ?>
		</td>
		<td><?php echo h($barrio['Barrio']['created']); ?>&nbsp;</td>
		<td><?php echo h($barrio['Barrio']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $barrio['Barrio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $barrio['Barrio']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $barrio['Barrio']['id']), null, __('Are you sure you want to delete # %s?', $barrio['Barrio']['id'])); ?>
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
