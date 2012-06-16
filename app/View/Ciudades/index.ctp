<div class="ciudades index">
	<h2><?php echo __('Ciudades');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('departamento_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($ciudades as $ciudade): ?>
	<tr>
		<td><?php echo h($ciudade['Ciudade']['id']); ?>&nbsp;</td>
		<td><?php echo h($ciudade['Ciudade']['nombre']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ciudade['Departamento']['id'], array('controller' => 'departamentos', 'action' => 'view', $ciudade['Departamento']['id'])); ?>
		</td>
		<td><?php echo h($ciudade['Ciudade']['created']); ?>&nbsp;</td>
		<td><?php echo h($ciudade['Ciudade']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ciudade['Ciudade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ciudade['Ciudade']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ciudade['Ciudade']['id']), null, __('Are you sure you want to delete # %s?', $ciudade['Ciudade']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ciudade'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Barrios'), array('controller' => 'barrios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Barrio'), array('controller' => 'barrios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add')); ?> </li>
	</ul>
</div>
