<div class="tipoformaciones view">
<h2><?php  echo __('Tipoformacione');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tipoformacione['Tipoformacione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($tipoformacione['Tipoformacione']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tipoformacione['Tipoformacione']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($tipoformacione['Tipoformacione']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipoformacione'), array('action' => 'edit', $tipoformacione['Tipoformacione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipoformacione'), array('action' => 'delete', $tipoformacione['Tipoformacione']['id']), null, __('Are you sure you want to delete # %s?', $tipoformacione['Tipoformacione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipoformaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipoformacione'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Especialidades'), array('controller' => 'especialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especialidade'), array('controller' => 'especialidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Especialidades');?></h3>
	<?php if (!empty($tipoformacione['Especialidade'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Identificador Sigla'); ?></th>
		<th><?php echo __('Tipoformacione Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tipoformacione['Especialidade'] as $especialidade): ?>
		<tr>
			<td><?php echo $especialidade['id'];?></td>
			<td><?php echo $especialidade['codigo'];?></td>
			<td><?php echo $especialidade['nombre'];?></td>
			<td><?php echo $especialidade['identificador_sigla'];?></td>
			<td><?php echo $especialidade['tipoformacione_id'];?></td>
			<td><?php echo $especialidade['created'];?></td>
			<td><?php echo $especialidade['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'especialidades', 'action' => 'view', $especialidade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'especialidades', 'action' => 'edit', $especialidade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'especialidades', 'action' => 'delete', $especialidade['id']), null, __('Are you sure you want to delete # %s?', $especialidade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Especialidade'), array('controller' => 'especialidades', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
