<div class="sectores view">
<h2><?php  echo __('Sectore');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sectore['Sectore']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($sectore['Sectore']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($sectore['Sectore']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($sectore['Sectore']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sectore'), array('action' => 'edit', $sectore['Sectore']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sectore'), array('action' => 'delete', $sectore['Sectore']['id']), null, __('Are you sure you want to delete # %s?', $sectore['Sectore']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sectores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sectore'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Empresas');?></h3>
	<?php if (!empty($sectore['Empresa'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre Empresa'); ?></th>
		<th><?php echo __('Nit'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Correo Empresa'); ?></th>
		<th><?php echo __('Contacto'); ?></th>
		<th><?php echo __('Numero Contacto'); ?></th>
		<th><?php echo __('Extension Contacto'); ?></th>
		<th><?php echo __('Correo Contacto'); ?></th>
		<th><?php echo __('Sectore Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sectore['Empresa'] as $empresa): ?>
		<tr>
			<td><?php echo $empresa['id'];?></td>
			<td><?php echo $empresa['nombre_empresa'];?></td>
			<td><?php echo $empresa['nit'];?></td>
			<td><?php echo $empresa['direccion'];?></td>
			<td><?php echo $empresa['telefono'];?></td>
			<td><?php echo $empresa['correo_empresa'];?></td>
			<td><?php echo $empresa['contacto'];?></td>
			<td><?php echo $empresa['numero_contacto'];?></td>
			<td><?php echo $empresa['extension_contacto'];?></td>
			<td><?php echo $empresa['correo_contacto'];?></td>
			<td><?php echo $empresa['sectore_id'];?></td>
			<td><?php echo $empresa['created'];?></td>
			<td><?php echo $empresa['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'empresas', 'action' => 'view', $empresa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'empresas', 'action' => 'edit', $empresa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'empresas', 'action' => 'delete', $empresa['id']), null, __('Are you sure you want to delete # %s?', $empresa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
