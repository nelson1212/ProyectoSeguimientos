<div class="instructores index">
	<h2><?php echo __('Instructores');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('documento');?></th>
			<th><?php echo $this->Paginator->sort('nombres');?></th>
			<th><?php echo $this->Paginator->sort('apellidos');?></th>
			<th><?php echo $this->Paginator->sort('direccion');?></th>
			<th><?php echo $this->Paginator->sort('telefono');?></th>
			<th><?php echo $this->Paginator->sort('correo');?></th>
			<th><?php echo $this->Paginator->sort('vinculo_id');?></th>
			<th><?php echo $this->Paginator->sort('celular');?></th>
			<th><?php echo $this->Paginator->sort('cruzador');?></th>
			<th><?php echo $this->Paginator->sort('pass');?></th>
			<th><?php echo $this->Paginator->sort('centro_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($instructores as $instructore): ?>
	<tr>
		<td><?php echo h($instructore['Instructore']['id']); ?>&nbsp;</td>
		<td><?php echo h($instructore['Instructore']['documento']); ?>&nbsp;</td>
		<td><?php echo h($instructore['Instructore']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($instructore['Instructore']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($instructore['Instructore']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($instructore['Instructore']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($instructore['Instructore']['correo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($instructore['Vinculo']['id'], array('controller' => 'vinculos', 'action' => 'view', $instructore['Vinculo']['id'])); ?>
		</td>
		<td><?php echo h($instructore['Instructore']['celular']); ?>&nbsp;</td>
		<td><?php echo h($instructore['Instructore']['cruzador']); ?>&nbsp;</td>
		<td><?php echo h($instructore['Instructore']['pass']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($instructore['Centro']['id'], array('controller' => 'centros', 'action' => 'view', $instructore['Centro']['id'])); ?>
		</td>
		<td><?php echo h($instructore['Instructore']['created']); ?>&nbsp;</td>
		<td><?php echo h($instructore['Instructore']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $instructore['Instructore']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $instructore['Instructore']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $instructore['Instructore']['id']), null, __('Are you sure you want to delete # %s?', $instructore['Instructore']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Instructore'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vinculos'), array('controller' => 'vinculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vinculo'), array('controller' => 'vinculos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actainstructores'), array('controller' => 'actainstructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actainstructore'), array('controller' => 'actainstructores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calificaciones'), array('controller' => 'calificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calificacione'), array('controller' => 'calificaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contratos'), array('controller' => 'contratos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contrato'), array('controller' => 'contratos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarioadministrativos'), array('controller' => 'horarioadministrativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horarioadministrativo'), array('controller' => 'horarioadministrativos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarioespeciales'), array('controller' => 'horarioespeciales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horarioespeciale'), array('controller' => 'horarioespeciales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructoreespecialidades'), array('controller' => 'instructoreespecialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructoreespecialidade'), array('controller' => 'instructoreespecialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resultadoproyectos'), array('controller' => 'resultadoproyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resultadoproyecto'), array('controller' => 'resultadoproyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
