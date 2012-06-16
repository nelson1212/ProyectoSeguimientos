<div class="calificaciones view">
<h2><?php  echo __('Calificacione');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($calificacione['Calificacione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aprobado'); ?></dt>
		<dd>
			<?php echo h($calificacione['Calificacione']['aprobado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cal Num'); ?></dt>
		<dd>
			<?php echo h($calificacione['Calificacione']['cal_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($calificacione['Acta']['id'], array('controller' => 'actas', 'action' => 'view', $calificacione['Acta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aprendice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($calificacione['Aprendice']['id'], array('controller' => 'aprendices', 'action' => 'view', $calificacione['Aprendice']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resultadoaprendizaje'); ?></dt>
		<dd>
			<?php echo $this->Html->link($calificacione['Resultadoaprendizaje']['id'], array('controller' => 'resultadoaprendizajes', 'action' => 'view', $calificacione['Resultadoaprendizaje']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Horas Excusadas'); ?></dt>
		<dd>
			<?php echo h($calificacione['Calificacione']['total_horas_excusadas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Horas Noexcusadas'); ?></dt>
		<dd>
			<?php echo h($calificacione['Calificacione']['total_horas_noexcusadas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instructore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($calificacione['Instructore']['id'], array('controller' => 'instructores', 'action' => 'view', $calificacione['Instructore']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($calificacione['Calificacione']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($calificacione['Calificacione']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Calificacione'), array('action' => 'edit', $calificacione['Calificacione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Calificacione'), array('action' => 'delete', $calificacione['Calificacione']['id']), null, __('Are you sure you want to delete # %s?', $calificacione['Calificacione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Calificaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calificacione'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actas'), array('controller' => 'actas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendices'), array('controller' => 'aprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendice'), array('controller' => 'aprendices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resultadoaprendizajes'), array('controller' => 'resultadoaprendizajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resultadoaprendizaje'), array('controller' => 'resultadoaprendizajes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inasistencias'), array('controller' => 'inasistencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inasistencia'), array('controller' => 'inasistencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planemejoramientos'), array('controller' => 'planemejoramientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planemejoramiento'), array('controller' => 'planemejoramientos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Inasistencias');?></h3>
	<?php if (!empty($calificacione['Inasistencia'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Calificacione Id'); ?></th>
		<th><?php echo __('Fecha Falta'); ?></th>
		<th><?php echo __('Num Horas'); ?></th>
		<th><?php echo __('Excusa'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($calificacione['Inasistencia'] as $inasistencia): ?>
		<tr>
			<td><?php echo $inasistencia['id'];?></td>
			<td><?php echo $inasistencia['calificacione_id'];?></td>
			<td><?php echo $inasistencia['fecha_falta'];?></td>
			<td><?php echo $inasistencia['num_horas'];?></td>
			<td><?php echo $inasistencia['excusa'];?></td>
			<td><?php echo $inasistencia['created'];?></td>
			<td><?php echo $inasistencia['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'inasistencias', 'action' => 'view', $inasistencia['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'inasistencias', 'action' => 'edit', $inasistencia['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'inasistencias', 'action' => 'delete', $inasistencia['id']), null, __('Are you sure you want to delete # %s?', $inasistencia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inasistencia'), array('controller' => 'inasistencias', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Planemejoramientos');?></h3>
	<?php if (!empty($calificacione['Planemejoramiento'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Calificacione Id'); ?></th>
		<th><?php echo __('Resultado Numerico'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th><?php echo __('Aprobado'); ?></th>
		<th><?php echo __('Fecha Entrega'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($calificacione['Planemejoramiento'] as $planemejoramiento): ?>
		<tr>
			<td><?php echo $planemejoramiento['id'];?></td>
			<td><?php echo $planemejoramiento['calificacione_id'];?></td>
			<td><?php echo $planemejoramiento['resultado_numerico'];?></td>
			<td><?php echo $planemejoramiento['observaciones'];?></td>
			<td><?php echo $planemejoramiento['aprobado'];?></td>
			<td><?php echo $planemejoramiento['fecha_entrega'];?></td>
			<td><?php echo $planemejoramiento['created'];?></td>
			<td><?php echo $planemejoramiento['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'planemejoramientos', 'action' => 'view', $planemejoramiento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'planemejoramientos', 'action' => 'edit', $planemejoramiento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'planemejoramientos', 'action' => 'delete', $planemejoramiento['id']), null, __('Are you sure you want to delete # %s?', $planemejoramiento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Planemejoramiento'), array('controller' => 'planemejoramientos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
