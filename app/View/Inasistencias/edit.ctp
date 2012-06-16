<div class="inasistencias form">
<?php echo $this->Form->create('Inasistencia');?>
	<fieldset>
		<legend><?php echo __('Edit Inasistencia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('calificacione_id');
		echo $this->Form->input('fecha_falta');
		echo $this->Form->input('num_horas');
		echo $this->Form->input('excusa');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Inasistencia.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Inasistencia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Inasistencias'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Calificaciones'), array('controller' => 'calificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calificacione'), array('controller' => 'calificaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
