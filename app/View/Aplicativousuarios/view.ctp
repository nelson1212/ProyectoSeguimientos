<div class="aplicativousuarios view">
<h2><?php  echo __('Aplicativousuario');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($aplicativousuario['Aplicativousuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aplicativousuario['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $aplicativousuario['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aplicativo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aplicativousuario['Aplicativo']['id'], array('controller' => 'aplicativos', 'action' => 'view', $aplicativousuario['Aplicativo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($aplicativousuario['Aplicativousuario']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($aplicativousuario['Aplicativousuario']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aplicativousuario'), array('action' => 'edit', $aplicativousuario['Aplicativousuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Aplicativousuario'), array('action' => 'delete', $aplicativousuario['Aplicativousuario']['id']), null, __('Are you sure you want to delete # %s?', $aplicativousuario['Aplicativousuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Aplicativousuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aplicativousuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aplicativos'), array('controller' => 'aplicativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aplicativo'), array('controller' => 'aplicativos', 'action' => 'add')); ?> </li>
	</ul>
</div>
