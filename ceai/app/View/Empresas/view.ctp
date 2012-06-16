<div class="empresas view">
<h2><?php  echo __('Empresa');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Empresa'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['nombre_empresa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nit'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['nit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo Empresa'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['correo_empresa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contacto'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['contacto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Contacto'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['numero_contacto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Extension Contacto'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['extension_contacto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo Contacto'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['correo_contacto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sectore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($empresa['Sectore']['id'], array('controller' => 'sectores', 'action' => 'view', $empresa['Sectore']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Empresa'), array('action' => 'edit', $empresa['Empresa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Empresa'), array('action' => 'delete', $empresa['Empresa']['id']), null, __('Are you sure you want to delete # %s?', $empresa['Empresa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sectores'), array('controller' => 'sectores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sectore'), array('controller' => 'sectores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendiceempresas'), array('controller' => 'aprendiceempresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendiceempresa'), array('controller' => 'aprendiceempresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Aprendiceempresas');?></h3>
	<?php if (!empty($empresa['Aprendiceempresa'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Aprendice Id'); ?></th>
		<th><?php echo __('Empresa Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($empresa['Aprendiceempresa'] as $aprendiceempresa): ?>
		<tr>
			<td><?php echo $aprendiceempresa['id'];?></td>
			<td><?php echo $aprendiceempresa['aprendice_id'];?></td>
			<td><?php echo $aprendiceempresa['empresa_id'];?></td>
			<td><?php echo $aprendiceempresa['created'];?></td>
			<td><?php echo $aprendiceempresa['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'aprendiceempresas', 'action' => 'view', $aprendiceempresa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'aprendiceempresas', 'action' => 'edit', $aprendiceempresa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'aprendiceempresas', 'action' => 'delete', $aprendiceempresa['id']), null, __('Are you sure you want to delete # %s?', $aprendiceempresa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Aprendiceempresa'), array('controller' => 'aprendiceempresas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
