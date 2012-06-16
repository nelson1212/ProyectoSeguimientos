<div class="versionespecialidades index">
	<h2><?php echo __('Versionespecialidades');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('version');?></th>
			<th><?php echo $this->Paginator->sort('especialidade_id');?></th>
			<th><?php echo $this->Paginator->sort('horas_lectiva');?></th>
			<th><?php echo $this->Paginator->sort('haras_productiva');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($versionespecialidades as $versionespecialidade): ?>
	<tr>
		<td><?php echo h($versionespecialidade['Versionespecialidade']['id']); ?>&nbsp;</td>
		<td><?php echo h($versionespecialidade['Versionespecialidade']['version']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($versionespecialidade['Especialidade']['id'], array('controller' => 'especialidades', 'action' => 'view', $versionespecialidade['Especialidade']['id'])); ?>
		</td>
		<td><?php echo h($versionespecialidade['Versionespecialidade']['horas_lectiva']); ?>&nbsp;</td>
		<td><?php echo h($versionespecialidade['Versionespecialidade']['haras_productiva']); ?>&nbsp;</td>
		<td><?php echo h($versionespecialidade['Versionespecialidade']['created']); ?>&nbsp;</td>
		<td><?php echo h($versionespecialidade['Versionespecialidade']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $versionespecialidade['Versionespecialidade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $versionespecialidade['Versionespecialidade']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $versionespecialidade['Versionespecialidade']['id']), null, __('Are you sure you want to delete # %s?', $versionespecialidade['Versionespecialidade']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Versionespecialidade'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Especialidades'), array('controller' => 'especialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especialidade'), array('controller' => 'especialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Competenciaversionespecialidades'), array('controller' => 'competenciaversionespecialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competenciaversionespecialidade'), array('controller' => 'competenciaversionespecialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
