<div class="acudientes form">
<?php echo $this->Form->create('Acudiente');?>
	<fieldset>
		<legend><?php echo __('Add Acudiente'); ?></legend>
	<?php
		echo $this->Form->input('documento');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('telefono');
		echo $this->Form->input('celular');
		echo $this->Form->input('direccion');
		echo $this->Form->input('correo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Acudientes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Acudienteaprendices'), array('controller' => 'acudienteaprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acudienteaprendice'), array('controller' => 'acudienteaprendices', 'action' => 'add')); ?> </li>
	</ul>
</div>
