<div class="acudientes view">
<h2><?php  echo __('Acudiente');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($acudiente['Acudiente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Documento'); ?></dt>
		<dd>
			<?php echo h($acudiente['Acudiente']['documento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($acudiente['Acudiente']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($acudiente['Acudiente']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($acudiente['Acudiente']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($acudiente['Acudiente']['celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($acudiente['Acudiente']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($acudiente['Acudiente']['correo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($acudiente['Acudiente']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($acudiente['Acudiente']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Acudiente'), array('action' => 'edit', $acudiente['Acudiente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Acudiente'), array('action' => 'delete', $acudiente['Acudiente']['id']), null, __('Are you sure you want to delete # %s?', $acudiente['Acudiente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Acudientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acudiente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acudienteaprendices'), array('controller' => 'acudienteaprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acudienteaprendice'), array('controller' => 'acudienteaprendices', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Acudienteaprendices');?></h3>
	<?php if (!empty($acudiente['Acudienteaprendice'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Int'); ?></th>
		<th><?php echo __('Aprendice Id'); ?></th>
		<th><?php echo __('Acudiente Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($acudiente['Acudienteaprendice'] as $acudienteaprendice): ?>
		<tr>
			<td><?php echo $acudienteaprendice['int'];?></td>
			<td><?php echo $acudienteaprendice['aprendice_id'];?></td>
			<td><?php echo $acudienteaprendice['acudiente_id'];?></td>
			<td><?php echo $acudienteaprendice['created'];?></td>
			<td><?php echo $acudienteaprendice['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'acudienteaprendices', 'action' => 'view', $acudienteaprendice['int'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'acudienteaprendices', 'action' => 'edit', $acudienteaprendice['int'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'acudienteaprendices', 'action' => 'delete', $acudienteaprendice['int']), null, __('Are you sure you want to delete # %s?', $acudienteaprendice['int'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Acudienteaprendice'), array('controller' => 'acudienteaprendices', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
