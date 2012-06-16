<div class="aprendicesolicitudes form">
<?php echo $this->Form->create('Aprendicesolicitude');?>
	<fieldset>
		<legend><?php echo __('Edit Aprendicesolicitude'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('acta_id');
		echo $this->Form->input('solicitude_id');
		echo $this->Form->input('aprendice_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Aprendicesolicitude.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Aprendicesolicitude.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Aprendicesolicitudes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Actas'), array('controller' => 'actas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitudes'), array('controller' => 'solicitudes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitude'), array('controller' => 'solicitudes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendices'), array('controller' => 'aprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendice'), array('controller' => 'aprendices', 'action' => 'add')); ?> </li>
	</ul>
</div>
