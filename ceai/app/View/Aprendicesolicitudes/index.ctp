<div class="aprendicesolicitudes index">
	<h2><?php echo __('Aprendicesolicitudes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('acta_id');?></th>
			<th><?php echo $this->Paginator->sort('solicitude_id');?></th>
			<th><?php echo $this->Paginator->sort('aprendice_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($aprendicesolicitudes as $aprendicesolicitude): ?>
	<tr>
		<td><?php echo h($aprendicesolicitude['Aprendicesolicitude']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($aprendicesolicitude['Acta']['id'], array('controller' => 'actas', 'action' => 'view', $aprendicesolicitude['Acta']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($aprendicesolicitude['Solicitude']['id'], array('controller' => 'solicitudes', 'action' => 'view', $aprendicesolicitude['Solicitude']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($aprendicesolicitude['Aprendice']['id'], array('controller' => 'aprendices', 'action' => 'view', $aprendicesolicitude['Aprendice']['id'])); ?>
		</td>
		<td><?php echo h($aprendicesolicitude['Aprendicesolicitude']['created']); ?>&nbsp;</td>
		<td><?php echo h($aprendicesolicitude['Aprendicesolicitude']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $aprendicesolicitude['Aprendicesolicitude']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $aprendicesolicitude['Aprendicesolicitude']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $aprendicesolicitude['Aprendicesolicitude']['id']), null, __('Are you sure you want to delete # %s?', $aprendicesolicitude['Aprendicesolicitude']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Aprendicesolicitude'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Actas'), array('controller' => 'actas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitudes'), array('controller' => 'solicitudes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitude'), array('controller' => 'solicitudes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendices'), array('controller' => 'aprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendice'), array('controller' => 'aprendices', 'action' => 'add')); ?> </li>
	</ul>
</div>
