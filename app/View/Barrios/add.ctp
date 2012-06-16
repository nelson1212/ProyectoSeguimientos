<?php echo $this->Form->create('Barrio');?>
	<fieldset>
		<legend><?php echo __('Agregar Barrio'); ?></legend>
	<?php
        echo $this->Form->input('ciudade_id', array("label"=>"Ciudad"));
		echo $this->Form->input('nombre');
	?>
    <?php echo $this->Form->end(__('Guardar'));?>
	</fieldset>

