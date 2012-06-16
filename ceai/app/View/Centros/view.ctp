<div class="centros view">
<h2><?php  echo __('Centro');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($centro['Centro']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($centro['Centro']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($centro['Centro']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ciudade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($centro['Ciudade']['id'], array('controller' => 'ciudades', 'action' => 'view', $centro['Ciudade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($centro['Centro']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($centro['Centro']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Centro'), array('action' => 'edit', $centro['Centro']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Centro'), array('action' => 'delete', $centro['Centro']['id']), null, __('Are you sure you want to delete # %s?', $centro['Centro']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Centros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centro'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciudades'), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudade'), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ambientes'), array('controller' => 'ambientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ambiente'), array('controller' => 'ambientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Ambientes');?></h3>
	<?php if (!empty($centro['Ambiente'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Siglas'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Centro Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($centro['Ambiente'] as $ambiente): ?>
		<tr>
			<td><?php echo $ambiente['id'];?></td>
			<td><?php echo $ambiente['siglas'];?></td>
			<td><?php echo $ambiente['nombre'];?></td>
			<td><?php echo $ambiente['centro_id'];?></td>
			<td><?php echo $ambiente['created'];?></td>
			<td><?php echo $ambiente['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ambientes', 'action' => 'view', $ambiente['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ambientes', 'action' => 'edit', $ambiente['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ambientes', 'action' => 'delete', $ambiente['id']), null, __('Are you sure you want to delete # %s?', $ambiente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ambiente'), array('controller' => 'ambientes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Instructores');?></h3>
	<?php if (!empty($centro['Instructore'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Documento'); ?></th>
		<th><?php echo __('Nombres'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Correo'); ?></th>
		<th><?php echo __('Vinculo Id'); ?></th>
		<th><?php echo __('Celular'); ?></th>
		<th><?php echo __('Cruzador'); ?></th>
		<th><?php echo __('Pass'); ?></th>
		<th><?php echo __('Centro Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($centro['Instructore'] as $instructore): ?>
		<tr>
			<td><?php echo $instructore['id'];?></td>
			<td><?php echo $instructore['documento'];?></td>
			<td><?php echo $instructore['nombres'];?></td>
			<td><?php echo $instructore['apellidos'];?></td>
			<td><?php echo $instructore['direccion'];?></td>
			<td><?php echo $instructore['telefono'];?></td>
			<td><?php echo $instructore['correo'];?></td>
			<td><?php echo $instructore['vinculo_id'];?></td>
			<td><?php echo $instructore['celular'];?></td>
			<td><?php echo $instructore['cruzador'];?></td>
			<td><?php echo $instructore['pass'];?></td>
			<td><?php echo $instructore['centro_id'];?></td>
			<td><?php echo $instructore['created'];?></td>
			<td><?php echo $instructore['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'instructores', 'action' => 'view', $instructore['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'instructores', 'action' => 'edit', $instructore['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'instructores', 'action' => 'delete', $instructore['id']), null, __('Are you sure you want to delete # %s?', $instructore['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
