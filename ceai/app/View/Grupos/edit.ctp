<div class="grupos form">
<?php echo $this->Form->create('Grupo');?>
	<fieldset>
		<legend><?php echo __('Edit Grupo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('consecutivo');
		echo $this->Form->input('fecha_inicial');
		echo $this->Form->input('fecha_final');
		echo $this->Form->input('versionespecialidade_id');
		echo $this->Form->input('numero_ficha');
		echo $this->Form->input('numero_solicitud');
		echo $this->Form->input('instructore_id');
		echo $this->Form->input('id_aprendiz_lider');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Grupo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Grupo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Versionespecialidades'), array('controller' => 'versionespecialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Versionespecialidade'), array('controller' => 'versionespecialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actagrupos'), array('controller' => 'actagrupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actagrupo'), array('controller' => 'actagrupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendicegrupos'), array('controller' => 'aprendicegrupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendicegrupo'), array('controller' => 'aprendicegrupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarioadministrativos'), array('controller' => 'horarioadministrativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horarioadministrativo'), array('controller' => 'horarioadministrativos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarioespeciales'), array('controller' => 'horarioespeciales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horarioespeciale'), array('controller' => 'horarioespeciales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
