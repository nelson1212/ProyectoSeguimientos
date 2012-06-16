<div class="inasistencias view">
<h2><?php  echo __('Inasistencia');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($inasistencia['Inasistencia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calificacione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inasistencia['Calificacione']['id'], array('controller' => 'calificaciones', 'action' => 'view', $inasistencia['Calificacione']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Falta'); ?></dt>
		<dd>
			<?php echo h($inasistencia['Inasistencia']['fecha_falta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Horas'); ?></dt>
		<dd>
			<?php echo h($inasistencia['Inasistencia']['num_horas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Excusa'); ?></dt>
		<dd>
			<?php echo h($inasistencia['Inasistencia']['excusa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($inasistencia['Inasistencia']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($inasistencia['Inasistencia']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inasistencia'), array('action' => 'edit', $inasistencia['Inasistencia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Inasistencia'), array('action' => 'delete', $inasistencia['Inasistencia']['id']), null, __('Are you sure you want to delete # %s?', $inasistencia['Inasistencia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Inasistencias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inasistencia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calificaciones'), array('controller' => 'calificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calificacione'), array('controller' => 'calificaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
