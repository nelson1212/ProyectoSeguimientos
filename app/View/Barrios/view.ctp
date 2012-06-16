<div class="barrios view">
<h2><?php  echo __('Barrio');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($barrio['Barrio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($barrio['Barrio']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ciudade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($barrio['Ciudade']['id'], array('controller' => 'ciudades', 'action' => 'view', $barrio['Ciudade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($barrio['Barrio']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($barrio['Barrio']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Barrio'), array('action' => 'edit', $barrio['Barrio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Barrio'), array('action' => 'delete', $barrio['Barrio']['id']), null, __('Are you sure you want to delete # %s?', $barrio['Barrio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Barrios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Barrio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciudades'), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudade'), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendices'), array('controller' => 'aprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendice'), array('controller' => 'aprendices', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Aprendices');?></h3>
	<?php if (!empty($barrio['Aprendice'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Documento'); ?></th>
		<th><?php echo __('Nombres'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Fecha Nacimiento'); ?></th>
		<th><?php echo __('Barrio Id'); ?></th>
		<th><?php echo __('Sexo Aprendiz'); ?></th>
		<th><?php echo __('Correo Aprendiz'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($barrio['Aprendice'] as $aprendice): ?>
		<tr>
			<td><?php echo $aprendice['id'];?></td>
			<td><?php echo $aprendice['documento'];?></td>
			<td><?php echo $aprendice['nombres'];?></td>
			<td><?php echo $aprendice['apellidos'];?></td>
			<td><?php echo $aprendice['direccion'];?></td>
			<td><?php echo $aprendice['telefono'];?></td>
			<td><?php echo $aprendice['fecha_nacimiento'];?></td>
			<td><?php echo $aprendice['barrio_id'];?></td>
			<td><?php echo $aprendice['sexo_aprendiz'];?></td>
			<td><?php echo $aprendice['correo_aprendiz'];?></td>
			<td><?php echo $aprendice['created'];?></td>
			<td><?php echo $aprendice['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'aprendices', 'action' => 'view', $aprendice['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'aprendices', 'action' => 'edit', $aprendice['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'aprendices', 'action' => 'delete', $aprendice['id']), null, __('Are you sure you want to delete # %s?', $aprendice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Aprendice'), array('controller' => 'aprendices', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
