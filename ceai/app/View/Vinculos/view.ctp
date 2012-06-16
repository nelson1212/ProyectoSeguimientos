<div class="vinculos view">
<h2><?php  echo __('Vinculo');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vinculo['Vinculo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($vinculo['Vinculo']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vinculo['Vinculo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($vinculo['Vinculo']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vinculo'), array('action' => 'edit', $vinculo['Vinculo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vinculo'), array('action' => 'delete', $vinculo['Vinculo']['id']), null, __('Are you sure you want to delete # %s?', $vinculo['Vinculo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vinculos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vinculo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Instructores');?></h3>
	<?php if (!empty($vinculo['Instructore'])):?>
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
		foreach ($vinculo['Instructore'] as $instructore): ?>
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
