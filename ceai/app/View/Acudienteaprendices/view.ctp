<div class="acudienteaprendices view">
<h2><?php  echo __('Acudienteaprendice');?></h2>
	<dl>
		<dt><?php echo __('Int'); ?></dt>
		<dd>
			<?php echo h($acudienteaprendice['Acudienteaprendice']['int']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aprendice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($acudienteaprendice['Aprendice']['id'], array('controller' => 'aprendices', 'action' => 'view', $acudienteaprendice['Aprendice']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acudiente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($acudienteaprendice['Acudiente']['id'], array('controller' => 'acudientes', 'action' => 'view', $acudienteaprendice['Acudiente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($acudienteaprendice['Acudienteaprendice']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($acudienteaprendice['Acudienteaprendice']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Acudienteaprendice'), array('action' => 'edit', $acudienteaprendice['Acudienteaprendice']['int'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Acudienteaprendice'), array('action' => 'delete', $acudienteaprendice['Acudienteaprendice']['int']), null, __('Are you sure you want to delete # %s?', $acudienteaprendice['Acudienteaprendice']['int'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Acudienteaprendices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acudienteaprendice'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendices'), array('controller' => 'aprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendice'), array('controller' => 'aprendices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acudientes'), array('controller' => 'acudientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acudiente'), array('controller' => 'acudientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
