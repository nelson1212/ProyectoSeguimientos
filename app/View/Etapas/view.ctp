<div class="etapas view">
<h2><?php  echo __('Etapa');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($etapa['Etapa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($etapa['Etapa']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($etapa['Etapa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($etapa['Etapa']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Etapa'), array('action' => 'edit', $etapa['Etapa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Etapa'), array('action' => 'delete', $etapa['Etapa']['id']), null, __('Are you sure you want to delete # %s?', $etapa['Etapa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Etapas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etapa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actas'), array('controller' => 'actas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Actas');?></h3>
	<?php if (!empty($etapa['Acta'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Etapa'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Trimestre Id'); ?></th>
		<th><?php echo __('Aprendice Id'); ?></th>
		<th><?php echo __('Etapa Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($etapa['Acta'] as $acta): ?>
		<tr>
			<td><?php echo $acta['id'];?></td>
			<td><?php echo $acta['fecha'];?></td>
			<td><?php echo $acta['etapa'];?></td>
			<td><?php echo $acta['tipo'];?></td>
			<td><?php echo $acta['trimestre_id'];?></td>
			<td><?php echo $acta['aprendice_id'];?></td>
			<td><?php echo $acta['etapa_id'];?></td>
			<td><?php echo $acta['created'];?></td>
			<td><?php echo $acta['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'actas', 'action' => 'view', $acta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'actas', 'action' => 'edit', $acta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'actas', 'action' => 'delete', $acta['id']), null, __('Are you sure you want to delete # %s?', $acta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
