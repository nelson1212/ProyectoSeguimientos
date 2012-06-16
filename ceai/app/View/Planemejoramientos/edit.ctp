<div class="planemejoramientos form">
<?php echo $this->Form->create('Planemejoramiento');?>
	<fieldset>
		<legend><?php echo __('Edit Planemejoramiento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('calificacione_id');
		echo $this->Form->input('resultado_numerico');
		echo $this->Form->input('observaciones');
		echo $this->Form->input('aprobado');
		echo $this->Form->input('fecha_entrega');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Planemejoramiento.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Planemejoramiento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Planemejoramientos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Calificaciones'), array('controller' => 'calificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calificacione'), array('controller' => 'calificaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
