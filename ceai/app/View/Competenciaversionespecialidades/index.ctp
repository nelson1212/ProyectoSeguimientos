<div class="competenciaversionespecialidades index">
	<h2><?php echo __('Competenciaversionespecialidades');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('versionespecialidade_id');?></th>
			<th><?php echo $this->Paginator->sort('competencia_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($competenciaversionespecialidades as $competenciaversionespecialidade): ?>
	<tr>
		<td><?php echo h($competenciaversionespecialidade['Competenciaversionespecialidade']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($competenciaversionespecialidade['Versionespecialidade']['id'], array('controller' => 'versionespecialidades', 'action' => 'view', $competenciaversionespecialidade['Versionespecialidade']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($competenciaversionespecialidade['Competencia']['id'], array('controller' => 'competencias', 'action' => 'view', $competenciaversionespecialidade['Competencia']['id'])); ?>
		</td>
		<td><?php echo h($competenciaversionespecialidade['Competenciaversionespecialidade']['created']); ?>&nbsp;</td>
		<td><?php echo h($competenciaversionespecialidade['Competenciaversionespecialidade']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $competenciaversionespecialidade['Competenciaversionespecialidade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $competenciaversionespecialidade['Competenciaversionespecialidade']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $competenciaversionespecialidade['Competenciaversionespecialidade']['id']), null, __('Are you sure you want to delete # %s?', $competenciaversionespecialidade['Competenciaversionespecialidade']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Competenciaversionespecialidade'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Versionespecialidades'), array('controller' => 'versionespecialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Versionespecialidade'), array('controller' => 'versionespecialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Competencias'), array('controller' => 'competencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competencia'), array('controller' => 'competencias', 'action' => 'add')); ?> </li>
	</ul>
</div>
