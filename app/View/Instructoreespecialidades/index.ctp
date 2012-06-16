<div class="instructoreespecialidades index">
	<h2><?php echo __('Instructoreespecialidades');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('instructore_id');?></th>
			<th><?php echo $this->Paginator->sort('especialidade_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($instructoreespecialidades as $instructoreespecialidade): ?>
	<tr>
		<td><?php echo h($instructoreespecialidade['Instructoreespecialidade']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($instructoreespecialidade['Instructore']['id'], array('controller' => 'instructores', 'action' => 'view', $instructoreespecialidade['Instructore']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($instructoreespecialidade['Especialidade']['id'], array('controller' => 'especialidades', 'action' => 'view', $instructoreespecialidade['Especialidade']['id'])); ?>
		</td>
		<td><?php echo h($instructoreespecialidade['Instructoreespecialidade']['created']); ?>&nbsp;</td>
		<td><?php echo h($instructoreespecialidade['Instructoreespecialidade']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $instructoreespecialidade['Instructoreespecialidade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $instructoreespecialidade['Instructoreespecialidade']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $instructoreespecialidade['Instructoreespecialidade']['id']), null, __('Are you sure you want to delete # %s?', $instructoreespecialidade['Instructoreespecialidade']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Instructoreespecialidade'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Especialidades'), array('controller' => 'especialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especialidade'), array('controller' => 'especialidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
