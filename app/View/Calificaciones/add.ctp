<div class="calificaciones form">
<?php echo $this->Form->create('Calificacione');?>
	<fieldset>
		<legend><?php echo __('Add Calificacione'); ?></legend>
	<?php
		echo $this->Form->input('aprobado');
		echo $this->Form->input('cal_num');
		echo $this->Form->input('acta_id');
		echo $this->Form->input('aprendice_id');
		echo $this->Form->input('resultadoaprendizaje_id');
		echo $this->Form->input('total_horas_excusadas');
		echo $this->Form->input('total_horas_noexcusadas');
		echo $this->Form->input('instructore_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Calificaciones'), array('action' => 'index'));?></li>
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
