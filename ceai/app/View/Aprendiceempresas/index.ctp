<div class="aprendiceempresas index">
	<h2><?php echo __('Aprendiceempresas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('aprendice_id');?></th>
			<th><?php echo $this->Paginator->sort('empresa_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($aprendiceempresas as $aprendiceempresa): ?>
	<tr>
		<td><?php echo h($aprendiceempresa['Aprendiceempresa']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($aprendiceempresa['Aprendice']['id'], array('controller' => 'aprendices', 'action' => 'view', $aprendiceempresa['Aprendice']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($aprendiceempresa['Empresa']['id'], array('controller' => 'empresas', 'action' => 'view', $aprendiceempresa['Empresa']['id'])); ?>
		</td>
		<td><?php echo h($aprendiceempresa['Aprendiceempresa']['created']); ?>&nbsp;</td>
		<td><?php echo h($aprendiceempresa['Aprendiceempresa']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $aprendiceempresa['Aprendiceempresa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $aprendiceempresa['Aprendiceempresa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $aprendiceempresa['Aprendiceempresa']['id']), null, __('Are you sure you want to delete # %s?', $aprendiceempresa['Aprendiceempresa']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Aprendiceempresa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Aprendices'), array('controller' => 'aprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendice'), array('controller' => 'aprendices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
