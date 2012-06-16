<div class="aprendicesolicitudes view">
<h2><?php  echo __('Aprendicesolicitude');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($aprendicesolicitude['Aprendicesolicitude']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aprendicesolicitude['Acta']['id'], array('controller' => 'actas', 'action' => 'view', $aprendicesolicitude['Acta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Solicitude'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aprendicesolicitude['Solicitude']['id'], array('controller' => 'solicitudes', 'action' => 'view', $aprendicesolicitude['Solicitude']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aprendice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aprendicesolicitude['Aprendice']['id'], array('controller' => 'aprendices', 'action' => 'view', $aprendicesolicitude['Aprendice']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($aprendicesolicitude['Aprendicesolicitude']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($aprendicesolicitude['Aprendicesolicitude']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aprendicesolicitude'), array('action' => 'edit', $aprendicesolicitude['Aprendicesolicitude']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Aprendicesolicitude'), array('action' => 'delete', $aprendicesolicitude['Aprendicesolicitude']['id']), null, __('Are you sure you want to delete # %s?', $aprendicesolicitude['Aprendicesolicitude']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendicesolicitudes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendicesolicitude'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actas'), array('controller' => 'actas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitudes'), array('controller' => 'solicitudes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitude'), array('controller' => 'solicitudes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendices'), array('controller' => 'aprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendice'), array('controller' => 'aprendices', 'action' => 'add')); ?> </li>
	</ul>
</div>
