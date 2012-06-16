<div class="tipocontratos view">
<h2><?php  echo __('Tipocontrato');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tipocontrato['Tipocontrato']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($tipocontrato['Tipocontrato']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tipocontrato['Tipocontrato']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($tipocontrato['Tipocontrato']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipocontrato'), array('action' => 'edit', $tipocontrato['Tipocontrato']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipocontrato'), array('action' => 'delete', $tipocontrato['Tipocontrato']['id']), null, __('Are you sure you want to delete # %s?', $tipocontrato['Tipocontrato']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipocontratos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipocontrato'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contratos'), array('controller' => 'contratos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contrato'), array('controller' => 'contratos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Contratos');?></h3>
	<?php if (!empty($tipocontrato['Contrato'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Instructore Id'); ?></th>
		<th><?php echo __('Tipocontrato Id'); ?></th>
		<th><?php echo __('Numero Contrato'); ?></th>
		<th><?php echo __('Cantidad Horas'); ?></th>
		<th><?php echo __('Fecha Inicial Contra'); ?></th>
		<th><?php echo __('Fecha Final Contra'); ?></th>
		<th><?php echo __('Valor Contrato Total'); ?></th>
		<th><?php echo __('Valor Contrato Mensual'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tipocontrato['Contrato'] as $contrato): ?>
		<tr>
			<td><?php echo $contrato['id'];?></td>
			<td><?php echo $contrato['instructore_id'];?></td>
			<td><?php echo $contrato['tipocontrato_id'];?></td>
			<td><?php echo $contrato['numero_contrato'];?></td>
			<td><?php echo $contrato['cantidad_horas'];?></td>
			<td><?php echo $contrato['fecha_inicial_contra'];?></td>
			<td><?php echo $contrato['fecha_final_contra'];?></td>
			<td><?php echo $contrato['valor_contrato_total'];?></td>
			<td><?php echo $contrato['valor_contrato_mensual'];?></td>
			<td><?php echo $contrato['created'];?></td>
			<td><?php echo $contrato['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contratos', 'action' => 'view', $contrato['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contratos', 'action' => 'edit', $contrato['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contratos', 'action' => 'delete', $contrato['id']), null, __('Are you sure you want to delete # %s?', $contrato['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contrato'), array('controller' => 'contratos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
