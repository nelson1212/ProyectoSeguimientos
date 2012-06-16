<div class="grupos index">
	<h2><?php echo __('Grupos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('consecutivo');?></th>
			<th><?php echo $this->Paginator->sort('fecha_inicial');?></th>
			<th><?php echo $this->Paginator->sort('fecha_final');?></th>
			<th><?php echo $this->Paginator->sort('versionespecialidade_id');?></th>
			<th><?php echo $this->Paginator->sort('numero_ficha');?></th>
			<th><?php echo $this->Paginator->sort('numero_solicitud');?></th>
			<th><?php echo $this->Paginator->sort('instructore_id');?></th>
			<th><?php echo $this->Paginator->sort('id_aprendiz_lider');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($grupos as $grupo): ?>
	<tr>
		<td><?php echo h($grupo['Grupo']['id']); ?>&nbsp;</td>
		<td><?php echo h($grupo['Grupo']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($grupo['Grupo']['consecutivo']); ?>&nbsp;</td>
		<td><?php echo h($grupo['Grupo']['fecha_inicial']); ?>&nbsp;</td>
		<td><?php echo h($grupo['Grupo']['fecha_final']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($grupo['Versionespecialidade']['id'], array('controller' => 'versionespecialidades', 'action' => 'view', $grupo['Versionespecialidade']['id'])); ?>
		</td>
		<td><?php echo h($grupo['Grupo']['numero_ficha']); ?>&nbsp;</td>
		<td><?php echo h($grupo['Grupo']['numero_solicitud']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($grupo['Instructore']['id'], array('controller' => 'instructores', 'action' => 'view', $grupo['Instructore']['id'])); ?>
		</td>
		<td><?php echo h($grupo['Grupo']['id_aprendiz_lider']); ?>&nbsp;</td>
		<td><?php echo h($grupo['Grupo']['created']); ?>&nbsp;</td>
		<td><?php echo h($grupo['Grupo']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $grupo['Grupo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $grupo['Grupo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $grupo['Grupo']['id']), null, __('Are you sure you want to delete # %s?', $grupo['Grupo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Grupo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Versionespecialidades'), array('controller' => 'versionespecialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Versionespecialidade'), array('controller' => 'versionespecialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actagrupos'), array('controller' => 'actagrupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actagrupo'), array('controller' => 'actagrupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendicegrupos'), array('controller' => 'aprendicegrupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendicegrupo'), array('controller' => 'aprendicegrupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarioadministrativos'), array('controller' => 'horarioadministrativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horarioadministrativo'), array('controller' => 'horarioadministrativos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarioespeciales'), array('controller' => 'horarioespeciales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horarioespeciale'), array('controller' => 'horarioespeciales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
