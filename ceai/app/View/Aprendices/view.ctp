<div class="aprendices view">
<h2><?php  echo __('Aprendice');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($aprendice['Aprendice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Documento'); ?></dt>
		<dd>
			<?php echo h($aprendice['Aprendice']['documento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($aprendice['Aprendice']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($aprendice['Aprendice']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($aprendice['Aprendice']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($aprendice['Aprendice']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Nacimiento'); ?></dt>
		<dd>
			<?php echo h($aprendice['Aprendice']['fecha_nacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barrio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aprendice['Barrio']['id'], array('controller' => 'barrios', 'action' => 'view', $aprendice['Barrio']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo Aprendiz'); ?></dt>
		<dd>
			<?php echo h($aprendice['Aprendice']['sexo_aprendiz']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo Aprendiz'); ?></dt>
		<dd>
			<?php echo h($aprendice['Aprendice']['correo_aprendiz']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($aprendice['Aprendice']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($aprendice['Aprendice']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aprendice'), array('action' => 'edit', $aprendice['Aprendice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Aprendice'), array('action' => 'delete', $aprendice['Aprendice']['id']), null, __('Are you sure you want to delete # %s?', $aprendice['Aprendice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendice'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Actas');?></h3>
	<?php if (!empty($aprendice['Acta'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Etapa'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Trimestre Id'); ?></th>
		<th><?php echo __('Aprendice Id'); ?></th>
		<th><?php echo __('Etapa Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($aprendice['Acta'] as $acta): ?>
		<tr>
			<td><?php echo $acta['id'];?></td>
			<td><?php echo $acta['fecha'];?></td>
			<td><?php echo $acta['etapa'];?></td>
			<td><?php echo $acta['tipo'];?></td>
			<td><?php echo $acta['trimestre_id'];?></td>
			<td><?php echo $acta['aprendice_id'];?></td>
			<td><?php echo $acta['etapa_id'];?></td>
			<td><?php echo $acta['created'];?></td>
			<td><?php echo $acta['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'actas', 'action' => 'view', $acta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'actas', 'action' => 'edit', $acta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'actas', 'action' => 'delete', $acta['id']), null, __('Are you sure you want to delete # %s?', $acta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Acudienteaprendices');?></h3>
	<?php if (!empty($aprendice['Acudienteaprendice'])):?>
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
		foreach ($aprendice['Acudienteaprendice'] as $acudienteaprendice): ?>
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
<div class="related">
	<h3><?php echo __('Related Aprendiceempresas');?></h3>
	<?php if (!empty($aprendice['Aprendiceempresa'])):?>
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
		foreach ($aprendice['Aprendiceempresa'] as $aprendiceempresa): ?>
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
<div class="related">
	<h3><?php echo __('Related Aprendicegrupos');?></h3>
	<?php if (!empty($aprendice['Aprendicegrupo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Grupo Id'); ?></th>
		<th><?php echo __('Aprendice Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($aprendice['Aprendicegrupo'] as $aprendicegrupo): ?>
		<tr>
			<td><?php echo $aprendicegrupo['id'];?></td>
			<td><?php echo $aprendicegrupo['grupo_id'];?></td>
			<td><?php echo $aprendicegrupo['aprendice_id'];?></td>
			<td><?php echo $aprendicegrupo['created'];?></td>
			<td><?php echo $aprendicegrupo['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'aprendicegrupos', 'action' => 'view', $aprendicegrupo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'aprendicegrupos', 'action' => 'edit', $aprendicegrupo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'aprendicegrupos', 'action' => 'delete', $aprendicegrupo['id']), null, __('Are you sure you want to delete # %s?', $aprendicegrupo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Aprendicegrupo'), array('controller' => 'aprendicegrupos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Aprendicesolicitudes');?></h3>
	<?php if (!empty($aprendice['Aprendicesolicitude'])):?>
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
		foreach ($aprendice['Aprendicesolicitude'] as $aprendicesolicitude): ?>
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
<div class="related">
	<h3><?php echo __('Related Calificaciones');?></h3>
	<?php if (!empty($aprendice['Calificacione'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Aprobado'); ?></th>
		<th><?php echo __('Cal Num'); ?></th>
		<th><?php echo __('Acta Id'); ?></th>
		<th><?php echo __('Aprendice Id'); ?></th>
		<th><?php echo __('Resultadoaprendizaje Id'); ?></th>
		<th><?php echo __('Total Horas Excusadas'); ?></th>
		<th><?php echo __('Total Horas Noexcusadas'); ?></th>
		<th><?php echo __('Instructore Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($aprendice['Calificacione'] as $calificacione): ?>
		<tr>
			<td><?php echo $calificacione['id'];?></td>
			<td><?php echo $calificacione['aprobado'];?></td>
			<td><?php echo $calificacione['cal_num'];?></td>
			<td><?php echo $calificacione['acta_id'];?></td>
			<td><?php echo $calificacione['aprendice_id'];?></td>
			<td><?php echo $calificacione['resultadoaprendizaje_id'];?></td>
			<td><?php echo $calificacione['total_horas_excusadas'];?></td>
			<td><?php echo $calificacione['total_horas_noexcusadas'];?></td>
			<td><?php echo $calificacione['instructore_id'];?></td>
			<td><?php echo $calificacione['created'];?></td>
			<td><?php echo $calificacione['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'calificaciones', 'action' => 'view', $calificacione['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'calificaciones', 'action' => 'edit', $calificacione['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'calificaciones', 'action' => 'delete', $calificacione['id']), null, __('Are you sure you want to delete # %s?', $calificacione['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Calificacione'), array('controller' => 'calificaciones', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Conceptualaprendices');?></h3>
	<?php if (!empty($aprendice['Conceptualaprendice'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Aprendice Id'); ?></th>
		<th><?php echo __('Acta Id'); ?></th>
		<th><?php echo __('Concepto'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($aprendice['Conceptualaprendice'] as $conceptualaprendice): ?>
		<tr>
			<td><?php echo $conceptualaprendice['id'];?></td>
			<td><?php echo $conceptualaprendice['aprendice_id'];?></td>
			<td><?php echo $conceptualaprendice['acta_id'];?></td>
			<td><?php echo $conceptualaprendice['concepto'];?></td>
			<td><?php echo $conceptualaprendice['created'];?></td>
			<td><?php echo $conceptualaprendice['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'conceptualaprendices', 'action' => 'view', $conceptualaprendice['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'conceptualaprendices', 'action' => 'edit', $conceptualaprendice['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'conceptualaprendices', 'action' => 'delete', $conceptualaprendice['id']), null, __('Are you sure you want to delete # %s?', $conceptualaprendice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Conceptualaprendice'), array('controller' => 'conceptualaprendices', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
