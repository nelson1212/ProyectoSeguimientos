<div class="resultadoaprendizajes form">
<?php echo $this->Form->create('Resultadoaprendizaje');?>
	<fieldset>
		<legend><?php echo __('Edit Resultadoaprendizaje'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('codigo');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('competencias_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Resultadoaprendizaje.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Resultadoaprendizaje.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Resultadoaprendizajes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Competencias'), array('controller' => 'competencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competencias'), array('controller' => 'competencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calificaciones'), array('controller' => 'calificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calificacione'), array('controller' => 'calificaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resultadoproyectos'), array('controller' => 'resultadoproyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resultadoproyecto'), array('controller' => 'resultadoproyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
