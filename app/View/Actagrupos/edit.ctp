<div class="actagrupos form">
<?php echo $this->Form->create('Actagrupo');?>
	<fieldset>
		<legend><?php echo __('Edit Actagrupo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('acta_id');
		echo $this->Form->input('grupo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Actagrupo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Actagrupo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Actagrupos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Actas'), array('controller' => 'actas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
