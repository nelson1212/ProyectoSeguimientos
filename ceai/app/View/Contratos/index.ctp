<div class="contratos index">
	<h2><?php echo __('Contratos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('instructore_id');?></th>
			<th><?php echo $this->Paginator->sort('tipocontrato_id');?></th>
			<th><?php echo $this->Paginator->sort('numero_contrato');?></th>
			<th><?php echo $this->Paginator->sort('cantidad_horas');?></th>
			<th><?php echo $this->Paginator->sort('fecha_inicial_contra');?></th>
			<th><?php echo $this->Paginator->sort('fecha_final_contra');?></th>
			<th><?php echo $this->Paginator->sort('valor_contrato_total');?></th>
			<th><?php echo $this->Paginator->sort('valor_contrato_mensual');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($contratos as $contrato): ?>
	<tr>
		<td><?php echo h($contrato['Contrato']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contrato['Instructore']['id'], array('controller' => 'instructores', 'action' => 'view', $contrato['Instructore']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($contrato['Tipocontrato']['id'], array('controller' => 'tipocontratos', 'action' => 'view', $contrato['Tipocontrato']['id'])); ?>
		</td>
		<td><?php echo h($contrato['Contrato']['numero_contrato']); ?>&nbsp;</td>
		<td><?php echo h($contrato['Contrato']['cantidad_horas']); ?>&nbsp;</td>
		<td><?php echo h($contrato['Contrato']['fecha_inicial_contra']); ?>&nbsp;</td>
		<td><?php echo h($contrato['Contrato']['fecha_final_contra']); ?>&nbsp;</td>
		<td><?php echo h($contrato['Contrato']['valor_contrato_total']); ?>&nbsp;</td>
		<td><?php echo h($contrato['Contrato']['valor_contrato_mensual']); ?>&nbsp;</td>
		<td><?php echo h($contrato['Contrato']['created']); ?>&nbsp;</td>
		<td><?php echo h($contrato['Contrato']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contrato['Contrato']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contrato['Contrato']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contrato['Contrato']['id']), null, __('Are you sure you want to delete # %s?', $contrato['Contrato']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Contrato'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipocontratos'), array('controller' => 'tipocontratos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipocontrato'), array('controller' => 'tipocontratos', 'action' => 'add')); ?> </li>
	</ul>
</div>
