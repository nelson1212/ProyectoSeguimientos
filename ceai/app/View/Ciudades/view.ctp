<div class="ciudades view">
<h2><?php  echo __('Ciudade');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ciudade['Ciudade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($ciudade['Ciudade']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ciudade['Departamento']['id'], array('controller' => 'departamentos', 'action' => 'view', $ciudade['Departamento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($ciudade['Ciudade']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($ciudade['Ciudade']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ciudade'), array('action' => 'edit', $ciudade['Ciudade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ciudade'), array('action' => 'delete', $ciudade['Ciudade']['id']), null, __('Are you sure you want to delete # %s?', $ciudade['Ciudade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciudades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Barrios'), array('controller' => 'barrios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Barrio'), array('controller' => 'barrios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Barrios');?></h3>
	<?php if (!empty($ciudade['Barrio'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Ciudade Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ciudade['Barrio'] as $barrio): ?>
		<tr>
			<td><?php echo $barrio['id'];?></td>
			<td><?php echo $barrio['nombre'];?></td>
			<td><?php echo $barrio['ciudade_id'];?></td>
			<td><?php echo $barrio['created'];?></td>
			<td><?php echo $barrio['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'barrios', 'action' => 'view', $barrio['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'barrios', 'action' => 'edit', $barrio['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'barrios', 'action' => 'delete', $barrio['id']), null, __('Are you sure you want to delete # %s?', $barrio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Barrio'), array('controller' => 'barrios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Centros');?></h3>
	<?php if (!empty($ciudade['Centro'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Ciudade Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ciudade['Centro'] as $centro): ?>
		<tr>
			<td><?php echo $centro['id'];?></td>
			<td><?php echo $centro['nombre'];?></td>
			<td><?php echo $centro['descripcion'];?></td>
			<td><?php echo $centro['ciudade_id'];?></td>
			<td><?php echo $centro['created'];?></td>
			<td><?php echo $centro['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'centros', 'action' => 'view', $centro['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'centros', 'action' => 'edit', $centro['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'centros', 'action' => 'delete', $centro['id']), null, __('Are you sure you want to delete # %s?', $centro['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
