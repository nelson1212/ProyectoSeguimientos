<div class="actainstructores index">
	<h2><?php echo __('Actainstructores');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('acta_id');?></th>
			<th><?php echo $this->Paginator->sort('instructore_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($actainstructores as $actainstructore): ?>
	<tr>
		<td><?php echo h($actainstructore['Actainstructore']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($actainstructore['Acta']['id'], array('controller' => 'actas', 'action' => 'view', $actainstructore['Acta']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($actainstructore['Instructore']['id'], array('controller' => 'instructores', 'action' => 'view', $actainstructore['Instructore']['id'])); ?>
		</td>
		<td><?php echo h($actainstructore['Actainstructore']['created']); ?>&nbsp;</td>
		<td><?php echo h($actainstructore['Actainstructore']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $actainstructore['Actainstructore']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $actainstructore['Actainstructore']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $actainstructore['Actainstructore']['id']), null, __('Are you sure you want to delete # %s?', $actainstructore['Actainstructore']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Actainstructore'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Actas'), array('controller' => 'actas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
	</ul>
</div>
