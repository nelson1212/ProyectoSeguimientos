<div class="actas form">
<?php echo $this->Form->create('Acta');?>
	<fieldset>
		<legend><?php echo __('Edit Acta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fecha');
		echo $this->Form->input('etapa');
		echo $this->Form->input('tipo');
		echo $this->Form->input('trimestre_id');
		echo $this->Form->input('aprendice_id');
		echo $this->Form->input('etapa_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Acta.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Acta.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Actas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Trimestres'), array('controller' => 'trimestres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trimestre'), array('controller' => 'trimestres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendices'), array('controller' => 'aprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendice'), array('controller' => 'aprendices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etapas'), array('controller' => 'etapas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etapa'), array('controller' => 'etapas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actagrupos'), array('controller' => 'actagrupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actagrupo'), array('controller' => 'actagrupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actainstructores'), array('controller' => 'actainstructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actainstructore'), array('controller' => 'actainstructores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendicesolicitudes'), array('controller' => 'aprendicesolicitudes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendicesolicitude'), array('controller' => 'aprendicesolicitudes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calificaciones'), array('controller' => 'calificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calificacione'), array('controller' => 'calificaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conceptualaprendices'), array('controller' => 'conceptualaprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conceptualaprendice'), array('controller' => 'conceptualaprendices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conceptualgrupos'), array('controller' => 'conceptualgrupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conceptualgrupo'), array('controller' => 'conceptualgrupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
