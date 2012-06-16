<div class="solicitudes view">
<h2><?php  echo __('Solicitude');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($solicitude['Solicitude']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($solicitude['Solicitude']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($solicitude['Solicitude']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($solicitude['Solicitude']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Solicitude'), array('action' => 'edit', $solicitude['Solicitude']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Solicitude'), array('action' => 'delete', $solicitude['Solicitude']['id']), null, __('Are you sure you want to delete # %s?', $solicitude['Solicitude']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitudes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitude'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendicesolicitudes'), array('controller' => 'aprendicesolicitudes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendicesolicitude'), array('controller' => 'aprendicesolicitudes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Aprendicesolicitudes');?></h3>
	<?php if (!empty($solicitude['Aprendicesolicitude'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Acta Id'); ?></th>
		<th><?php echo __('Solicitude Id'); ?></th>
		<th><?php echo __('Aprendice Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($solicitude['Aprendicesolicitude'] as $aprendicesolicitude): ?>
		<tr>
			<td><?php echo $aprendicesolicitude['id'];?></td>
			<td><?php echo $aprendicesolicitude['acta_id'];?></td>
			<td><?php echo $aprendicesolicitude['solicitude_id'];?></td>
			<td><?php echo $aprendicesolicitude['aprendice_id'];?></td>
			<td><?php echo $aprendicesolicitude['created'];?></td>
			<td><?php echo $aprendicesolicitude['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'aprendicesolicitudes', 'action' => 'view', $aprendicesolicitude['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'aprendicesolicitudes', 'action' => 'edit', $aprendicesolicitude['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'aprendicesolicitudes', 'action' => 'delete', $aprendicesolicitude['id']), null, __('Are you sure you want to delete # %s?', $aprendicesolicitude['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Aprendicesolicitude'), array('controller' => 'aprendicesolicitudes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
