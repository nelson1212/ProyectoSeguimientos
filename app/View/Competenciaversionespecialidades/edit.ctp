<div class="competenciaversionespecialidades form">
<?php echo $this->Form->create('Competenciaversionespecialidade');?>
	<fieldset>
		<legend><?php echo __('Edit Competenciaversionespecialidade'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('versionespecialidade_id');
		echo $this->Form->input('competencia_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Competenciaversionespecialidade.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Competenciaversionespecialidade.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Competenciaversionespecialidades'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Versionespecialidades'), array('controller' => 'versionespecialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Versionespecialidade'), array('controller' => 'versionespecialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Competencias'), array('controller' => 'competencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competencia'), array('controller' => 'competencias', 'action' => 'add')); ?> </li>
	</ul>
</div>
