<div class="acudienteaprendices index">
	<h2><?php echo __('Acudienteaprendices');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('int');?></th>
			<th><?php echo $this->Paginator->sort('aprendice_id');?></th>
			<th><?php echo $this->Paginator->sort('acudiente_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($acudienteaprendices as $acudienteaprendice): ?>
	<tr>
		<td><?php echo h($acudienteaprendice['Acudienteaprendice']['int']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($acudienteaprendice['Aprendice']['id'], array('controller' => 'aprendices', 'action' => 'view', $acudienteaprendice['Aprendice']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($acudienteaprendice['Acudiente']['id'], array('controller' => 'acudientes', 'action' => 'view', $acudienteaprendice['Acudiente']['id'])); ?>
		</td>
		<td><?php echo h($acudienteaprendice['Acudienteaprendice']['created']); ?>&nbsp;</td>
		<td><?php echo h($acudienteaprendice['Acudienteaprendice']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $acudienteaprendice['Acudienteaprendice']['int'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $acudienteaprendice['Acudienteaprendice']['int'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $acudienteaprendice['Acudienteaprendice']['int']), null, __('Are you sure you want to delete # %s?', $acudienteaprendice['Acudienteaprendice']['int'])); ?>
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
		<li><?php echo $this->Html->link(__('New Acudienteaprendice'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Aprendices'), array('controller' => 'aprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendice'), array('controller' => 'aprendices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acudientes'), array('controller' => 'acudientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acudiente'), array('controller' => 'acudientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
