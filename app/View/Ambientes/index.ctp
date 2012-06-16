<div class="ambientes index">
	<h2><?php echo __('Ambientes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('siglas');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('centro_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($ambientes as $ambiente): ?>
	<tr>
		<td><?php echo h($ambiente['Ambiente']['id']); ?>&nbsp;</td>
		<td><?php echo h($ambiente['Ambiente']['siglas']); ?>&nbsp;</td>
		<td><?php echo h($ambiente['Ambiente']['nombre']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ambiente['Centro']['id'], array('controller' => 'centros', 'action' => 'view', $ambiente['Centro']['id'])); ?>
		</td>
		<td><?php echo h($ambiente['Ambiente']['created']); ?>&nbsp;</td>
		<td><?php echo h($ambiente['Ambiente']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ambiente['Ambiente']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ambiente['Ambiente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ambiente['Ambiente']['id']), null, __('Are you sure you want to delete # %s?', $ambiente['Ambiente']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ambiente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarioadministrativos'), array('controller' => 'horarioadministrativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horarioadministrativo'), array('controller' => 'horarioadministrativos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarioespeciales'), array('controller' => 'horarioespeciales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horarioespeciale'), array('controller' => 'horarioespeciales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
