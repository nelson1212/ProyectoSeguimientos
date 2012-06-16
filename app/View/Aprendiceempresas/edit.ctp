<div class="aprendiceempresas form">
<?php echo $this->Form->create('Aprendiceempresa');?>
	<fieldset>
		<legend><?php echo __('Edit Aprendiceempresa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('aprendice_id');
		echo $this->Form->input('empresa_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Aprendiceempresa.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Aprendiceempresa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Aprendiceempresas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Aprendices'), array('controller' => 'aprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendice'), array('controller' => 'aprendices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
