<div class="aplicativos index">
	<h2><?php echo __('Aplicativos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre_apli');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($aplicativos as $aplicativo): ?>
	<tr>
		<td><?php echo h($aplicativo['Aplicativo']['id']); ?>&nbsp;</td>
		<td><?php echo h($aplicativo['Aplicativo']['nombre_apli']); ?>&nbsp;</td>
		<td><?php echo h($aplicativo['Aplicativo']['created']); ?>&nbsp;</td>
		<td><?php echo h($aplicativo['Aplicativo']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $aplicativo['Aplicativo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $aplicativo['Aplicativo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $aplicativo['Aplicativo']['id']), null, __('Are you sure you want to delete # %s?', $aplicativo['Aplicativo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Aplicativo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Aplicativousuarios'), array('controller' => 'aplicativousuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aplicativousuario'), array('controller' => 'aplicativousuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
