<div class="instructores form">
<?php echo $this->Form->create('Instructore');?>
	<fieldset>
		<legend><?php echo __('Add Instructore'); ?></legend>
	<?php
		echo $this->Form->input('documento');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('correo');
		echo $this->Form->input('vinculo_id');
		echo $this->Form->input('celular');
		echo $this->Form->input('cruzador');
		echo $this->Form->input('pass');
		echo $this->Form->input('centro_id');
        //Especialidades del instructor
        echo $this->Form->input('especialidad', array("type"=>"selectd","multiple"=>true,"size"=>20));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Instructores'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Vinculos'), array('controller' => 'vinculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vinculo'), array('controller' => 'vinculos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actainstructores'), array('controller' => 'actainstructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actainstructore'), array('controller' => 'actainstructores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calificaciones'), array('controller' => 'calificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calificacione'), array('controller' => 'calificaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contratos'), array('controller' => 'contratos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contrato'), array('controller' => 'contratos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarioadministrativos'), array('controller' => 'horarioadministrativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horarioadministrativo'), array('controller' => 'horarioadministrativos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarioespeciales'), array('controller' => 'horarioespeciales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horarioespeciale'), array('controller' => 'horarioespeciales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructoreespecialidades'), array('controller' => 'instructoreespecialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructoreespecialidade'), array('controller' => 'instructoreespecialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resultadoproyectos'), array('controller' => 'resultadoproyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resultadoproyecto'), array('controller' => 'resultadoproyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
