<div class="actas view">
<h2><?php  echo __('Acta');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($acta['Acta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($acta['Acta']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etapa'); ?></dt>
		<dd>
			<?php echo h($acta['Acta']['etapa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($acta['Acta']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trimestre'); ?></dt>
		<dd>
			<?php echo $this->Html->link($acta['Trimestre']['id'], array('controller' => 'trimestres', 'action' => 'view', $acta['Trimestre']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aprendice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($acta['Aprendice']['id'], array('controller' => 'aprendices', 'action' => 'view', $acta['Aprendice']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etapa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($acta['Etapa']['id'], array('controller' => 'etapas', 'action' => 'view', $acta['Etapa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($acta['Acta']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($acta['Acta']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Acta'), array('action' => 'edit', $acta['Acta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Acta'), array('action' => 'delete', $acta['Acta']['id']), null, __('Are you sure you want to delete # %s?', $acta['Acta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Actas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trimestres'), array('controller' => 'trimestres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trimestre'), array('controller' => 'trimestres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendices'), array('controller' => 'aprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendice'), array('controller' => 'aprendices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etapas'), array('controller' => 'etapas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etapa'), array('controller' => 'etapas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actagrupos'), array('controller' => 'actagrupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actagrupo'), array('controller' => 'actagrupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actainstructores'), array('controller' => 'actainstructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actainstructore'), array('controller' => 'actainstructores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendicesolicitudes'), array('controller' => 'aprendicesolicitudes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendicesolicitude'), array('controller' => 'aprendicesolicitudes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calificaciones'), array('controller' => 'calificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calificacione'), array('controller' => 'calificaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conceptualaprendices'), array('controller' => 'conceptualaprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conceptualaprendice'), array('controller' => 'conceptualaprendices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conceptualgrupos'), array('controller' => 'conceptualgrupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conceptualgrupo'), array('controller' => 'conceptualgrupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Actagrupos');?></h3>
	<?php if (!empty($acta['Actagrupo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Acta Id'); ?></th>
		<th><?php echo __('Grupo Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($acta['Actagrupo'] as $actagrupo): ?>
		<tr>
			<td><?php echo $actagrupo['id'];?></td>
			<td><?php echo $actagrupo['acta_id'];?></td>
			<td><?php echo $actagrupo['grupo_id'];?></td>
			<td><?php echo $actagrupo['created'];?></td>
			<td><?php echo $actagrupo['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'actagrupos', 'action' => 'view', $actagrupo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'actagrupos', 'action' => 'edit', $actagrupo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'actagrupos', 'action' => 'delete', $actagrupo['id']), null, __('Are you sure you want to delete # %s?', $actagrupo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Actagrupo'), array('controller' => 'actagrupos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Actainstructores');?></h3>
	<?php if (!empty($acta['Actainstructore'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Acta Id'); ?></th>
		<th><?php echo __('Instructore Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($acta['Actainstructore'] as $actainstructore): ?>
		<tr>
			<td><?php echo $actainstructore['id'];?></td>
			<td><?php echo $actainstructore['acta_id'];?></td>
			<td><?php echo $actainstructore['instructore_id'];?></td>
			<td><?php echo $actainstructore['created'];?></td>
			<td><?php echo $actainstructore['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'actainstructores', 'action' => 'view', $actainstructore['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'actainstructores', 'action' => 'edit', $actainstructore['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'actainstructores', 'action' => 'delete', $actainstructore['id']), null, __('Are you sure you want to delete # %s?', $actainstructore['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Actainstructore'), array('controller' => 'actainstructores', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Aprendicesolicitudes');?></h3>
	<?php if (!empty($acta['Aprendicesolicitude'])):?>
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
		foreach ($acta['Aprendicesolicitude'] as $aprendicesolicitude): ?>
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
	<?php if (!empty($acta['Calificacione'])):?>
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
		foreach ($acta['Calificacione'] as $calificacione): ?>
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
	<?php if (!empty($acta['Conceptualaprendice'])):?>
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
		foreach ($acta['Conceptualaprendice'] as $conceptualaprendice): ?>
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
<div class="related">
	<h3><?php echo __('Related Conceptualgrupos');?></h3>
	<?php if (!empty($acta['Conceptualgrupo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Acta Id'); ?></th>
		<th><?php echo __('Concepto'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($acta['Conceptualgrupo'] as $conceptualgrupo): ?>
		<tr>
			<td><?php echo $conceptualgrupo['id'];?></td>
			<td><?php echo $conceptualgrupo['acta_id'];?></td>
			<td><?php echo $conceptualgrupo['concepto'];?></td>
			<td><?php echo $conceptualgrupo['created'];?></td>
			<td><?php echo $conceptualgrupo['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'conceptualgrupos', 'action' => 'view', $conceptualgrupo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'conceptualgrupos', 'action' => 'edit', $conceptualgrupo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'conceptualgrupos', 'action' => 'delete', $conceptualgrupo['id']), null, __('Are you sure you want to delete # %s?', $conceptualgrupo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Conceptualgrupo'), array('controller' => 'conceptualgrupos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
