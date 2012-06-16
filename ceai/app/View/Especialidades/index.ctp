<div class="especialidades index">
	<h2><?php echo __('Especialidades');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('codigo');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('identificador_sigla');?></th>
			<th><?php echo $this->Paginator->sort('tipoformacione_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($especialidades as $especialidade): ?>
	<tr>
		<td><?php echo h($especialidade['Especialidade']['id']); ?>&nbsp;</td>
		<td><?php echo h($especialidade['Especialidade']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($especialidade['Especialidade']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($especialidade['Especialidade']['identificador_sigla']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($especialidade['Tipoformacione']['id'], array('controller' => 'tipoformaciones', 'action' => 'view', $especialidade['Tipoformacione']['id'])); ?>
		</td>
		<td><?php echo h($especialidade['Especialidade']['created']); ?>&nbsp;</td>
		<td><?php echo h($especialidade['Especialidade']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $especialidade['Especialidade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $especialidade['Especialidade']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $especialidade['Especialidade']['id']), null, __('Are you sure you want to delete # %s?', $especialidade['Especialidade']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Especialidade'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipoformaciones'), array('controller' => 'tipoformaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipoformacione'), array('controller' => 'tipoformaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructoreespecialidades'), array('controller' => 'instructoreespecialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructoreespecialidade'), array('controller' => 'instructoreespecialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Versionespecialidades'), array('controller' => 'versionespecialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Versionespecialidade'), array('controller' => 'versionespecialidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
