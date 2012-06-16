<div class="resultadoproyectos view">
<h2><?php  echo __('Resultadoproyecto');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($resultadoproyecto['Resultadoproyecto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proyecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resultadoproyecto['Proyecto']['id'], array('controller' => 'proyectos', 'action' => 'view', $resultadoproyecto['Proyecto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instructore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resultadoproyecto['Instructore']['id'], array('controller' => 'instructores', 'action' => 'view', $resultadoproyecto['Instructore']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resultadoaprendizaje'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resultadoproyecto['Resultadoaprendizaje']['id'], array('controller' => 'resultadoaprendizajes', 'action' => 'view', $resultadoproyecto['Resultadoaprendizaje']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actividad Matriz'); ?></dt>
		<dd>
			<?php echo h($resultadoproyecto['Resultadoproyecto']['actividad_matriz']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trimestre Matriz'); ?></dt>
		<dd>
			<?php echo h($resultadoproyecto['Resultadoproyecto']['trimestre_matriz']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Guia'); ?></dt>
		<dd>
			<?php echo h($resultadoproyecto['Resultadoproyecto']['codigo_guia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inicio Matriz'); ?></dt>
		<dd>
			<?php echo h($resultadoproyecto['Resultadoproyecto']['fecha_inicio_matriz']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Final Matriz'); ?></dt>
		<dd>
			<?php echo h($resultadoproyecto['Resultadoproyecto']['fecha_final_matriz']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($resultadoproyecto['Resultadoproyecto']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($resultadoproyecto['Resultadoproyecto']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Resultadoproyecto'), array('action' => 'edit', $resultadoproyecto['Resultadoproyecto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Resultadoproyecto'), array('action' => 'delete', $resultadoproyecto['Resultadoproyecto']['id']), null, __('Are you sure you want to delete # %s?', $resultadoproyecto['Resultadoproyecto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Resultadoproyectos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resultadoproyecto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resultadoaprendizajes'), array('controller' => 'resultadoaprendizajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resultadoaprendizaje'), array('controller' => 'resultadoaprendizajes', 'action' => 'add')); ?> </li>
	</ul>
</div>
