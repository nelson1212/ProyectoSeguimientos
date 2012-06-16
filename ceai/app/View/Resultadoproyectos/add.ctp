<div class="resultadoproyectos form">
<?php echo $this->Form->create('Resultadoproyecto');?>
	<fieldset>
		<legend><?php echo __('Add Resultadoproyecto'); ?></legend>
	<?php
		echo $this->Form->input('proyecto_id');
		echo $this->Form->input('instructore_id');
		echo $this->Form->input('resultadoaprendizaje_id');
		echo $this->Form->input('actividad_matriz');
		echo $this->Form->input('trimestre_matriz');
		echo $this->Form->input('codigo_guia');
		echo $this->Form->input('fecha_inicio_matriz');
		echo $this->Form->input('fecha_final_matriz');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Resultadoproyectos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resultadoaprendizajes'), array('controller' => 'resultadoaprendizajes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resultadoaprendizaje'), array('controller' => 'resultadoaprendizajes', 'action' => 'add')); ?> </li>
	</ul>
</div>
