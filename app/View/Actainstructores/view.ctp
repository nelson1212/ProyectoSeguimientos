<div class="actainstructores view">
<h2><?php  echo __('Actainstructore');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($actainstructore['Actainstructore']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actainstructore['Acta']['id'], array('controller' => 'actas', 'action' => 'view', $actainstructore['Acta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instructore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actainstructore['Instructore']['id'], array('controller' => 'instructores', 'action' => 'view', $actainstructore['Instructore']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($actainstructore['Actainstructore']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($actainstructore['Actainstructore']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Actainstructore'), array('action' => 'edit', $actainstructore['Actainstructore']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Actainstructore'), array('action' => 'delete', $actainstructore['Actainstructore']['id']), null, __('Are you sure you want to delete # %s?', $actainstructore['Actainstructore']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Actainstructores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actainstructore'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actas'), array('controller' => 'actas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
	</ul>
</div>
