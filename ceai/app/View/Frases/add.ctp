<div class="frases form">
<?php echo $this->Form->create('Frase');?>
	<fieldset>
		<legend><?php echo __('Add Frase'); ?></legend>
	<?php
		echo $this->Form->input('frase');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Frases'), array('action' => 'index'));?></li>
	</ul>
</div>
