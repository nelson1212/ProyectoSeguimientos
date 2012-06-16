<div class="aplicativos view">
<h2><?php  echo __('Aplicativo');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($aplicativo['Aplicativo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Apli'); ?></dt>
		<dd>
			<?php echo h($aplicativo['Aplicativo']['nombre_apli']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($aplicativo['Aplicativo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($aplicativo['Aplicativo']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aplicativo'), array('action' => 'edit', $aplicativo['Aplicativo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Aplicativo'), array('action' => 'delete', $aplicativo['Aplicativo']['id']), null, __('Are you sure you want to delete # %s?', $aplicativo['Aplicativo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Aplicativos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aplicativo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aplicativousuarios'), array('controller' => 'aplicativousuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aplicativousuario'), array('controller' => 'aplicativousuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Aplicativousuarios');?></h3>
	<?php if (!empty($aplicativo['Aplicativousuario'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Aplicativo Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($aplicativo['Aplicativousuario'] as $aplicativousuario): ?>
		<tr>
			<td><?php echo $aplicativousuario['id'];?></td>
			<td><?php echo $aplicativousuario['usuario_id'];?></td>
			<td><?php echo $aplicativousuario['aplicativo_id'];?></td>
			<td><?php echo $aplicativousuario['created'];?></td>
			<td><?php echo $aplicativousuario['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'aplicativousuarios', 'action' => 'view', $aplicativousuario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'aplicativousuarios', 'action' => 'edit', $aplicativousuario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'aplicativousuarios', 'action' => 'delete', $aplicativousuario['id']), null, __('Are you sure you want to delete # %s?', $aplicativousuario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Aplicativousuario'), array('controller' => 'aplicativousuarios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
