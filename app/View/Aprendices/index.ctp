<div class="aprendices index">
	<h2><?php echo __('Aprendices');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('documento');?></th>
			<th><?php echo $this->Paginator->sort('nombres');?></th>
			<th><?php echo $this->Paginator->sort('apellidos');?></th>
			<th><?php echo $this->Paginator->sort('direccion');?></th>
			<th><?php echo $this->Paginator->sort('telefono');?></th>
			<th><?php echo $this->Paginator->sort('fecha_nacimiento');?></th>
			<th><?php echo $this->Paginator->sort('barrio_id');?></th>
			<th><?php echo $this->Paginator->sort('sexo_aprendiz');?></th>
			<th><?php echo $this->Paginator->sort('correo_aprendiz');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($aprendices as $aprendice): ?>
	<tr>
		<td><?php echo h($aprendice['Aprendice']['id']); ?>&nbsp;</td>
		<td><?php echo h($aprendice['Aprendice']['documento']); ?>&nbsp;</td>
		<td><?php echo h($aprendice['Aprendice']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($aprendice['Aprendice']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($aprendice['Aprendice']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($aprendice['Aprendice']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($aprendice['Aprendice']['fecha_nacimiento']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($aprendice['Barrio']['id'], array('controller' => 'barrios', 'action' => 'view', $aprendice['Barrio']['id'])); ?>
		</td>
		<td><?php echo h($aprendice['Aprendice']['sexo_aprendiz']); ?>&nbsp;</td>
		<td><?php echo h($aprendice['Aprendice']['correo_aprendiz']); ?>&nbsp;</td>
		<td><?php echo h($aprendice['Aprendice']['created']); ?>&nbsp;</td>
		<td><?php echo h($aprendice['Aprendice']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $aprendice['Aprendice']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $aprendice['Aprendice']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $aprendice['Aprendice']['id']), null, __('Are you sure you want to delete # %s?', $aprendice['Aprendice']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Aprendice'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Barrios'), array('controller' => 'barrios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Barrio'), array('controller' => 'barrios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actas'), array('controller' => 'actas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acudienteaprendices'), array('controller' => 'acudienteaprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acudienteaprendice'), array('controller' => 'acudienteaprendices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendiceempresas'), array('controller' => 'aprendiceempresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendiceempresa'), array('controller' => 'aprendiceempresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendicegrupos'), array('controller' => 'aprendicegrupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendicegrupo'), array('controller' => 'aprendicegrupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendicesolicitudes'), array('controller' => 'aprendicesolicitudes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendicesolicitude'), array('controller' => 'aprendicesolicitudes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calificaciones'), array('controller' => 'calificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calificacione'), array('controller' => 'calificaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conceptualaprendices'), array('controller' => 'conceptualaprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conceptualaprendice'), array('controller' => 'conceptualaprendices', 'action' => 'add')); ?> </li>
	</ul>
</div>
