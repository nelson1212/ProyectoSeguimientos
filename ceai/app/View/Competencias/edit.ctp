<div class="competencias form">
<?php echo $this->Form->create('Competencia');?>
	<fieldset>
		<legend><?php echo __('Edit Competencia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('codigo');
		echo $this->Form->input('nombre');
		echo $this->Form->input('numero_horas');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Competencia.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Competencia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Competencias'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Competenciaversionespecialidades'), array('controller' => 'competenciaversionespecialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competenciaversionespecialidade'), array('controller' => 'competenciaversionespecialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarioadministrativos'), array('controller' => 'horarioadministrativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horarioadministrativo'), array('controller' => 'horarioadministrativos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarioespeciales'), array('controller' => 'horarioespeciales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horarioespeciale'), array('controller' => 'horarioespeciales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
