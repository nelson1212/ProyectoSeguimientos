<div class="etapas form">
<?php echo $this->Form->create('Etapa');?>
	<fieldset>
		<legend><?php echo __('Edit Etapa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Etapa.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Etapa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Etapas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Actas'), array('controller' => 'actas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add')); ?> </li>
	</ul>
</div>
