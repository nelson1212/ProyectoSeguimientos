<div class="versionespecialidades form">
<?php echo $this->Form->create('Versionespecialidade');?>
	<fieldset>
		<legend><?php echo __('Edit Versionespecialidade'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('version');
		echo $this->Form->input('especialidade_id');
		echo $this->Form->input('horas_lectiva');
		echo $this->Form->input('haras_productiva');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Versionespecialidade.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Versionespecialidade.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Versionespecialidades'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Especialidades'), array('controller' => 'especialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especialidade'), array('controller' => 'especialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Competenciaversionespecialidades'), array('controller' => 'competenciaversionespecialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competenciaversionespecialidade'), array('controller' => 'competenciaversionespecialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
