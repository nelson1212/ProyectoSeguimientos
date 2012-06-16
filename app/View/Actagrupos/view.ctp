<div class="actagrupos view">
<h2><?php  echo __('Actagrupo');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($actagrupo['Actagrupo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actagrupo['Acta']['id'], array('controller' => 'actas', 'action' => 'view', $actagrupo['Acta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actagrupo['Grupo']['id'], array('controller' => 'grupos', 'action' => 'view', $actagrupo['Grupo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($actagrupo['Actagrupo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($actagrupo['Actagrupo']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Actagrupo'), array('action' => 'edit', $actagrupo['Actagrupo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Actagrupo'), array('action' => 'delete', $actagrupo['Actagrupo']['id']), null, __('Are you sure you want to delete # %s?', $actagrupo['Actagrupo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Actagrupos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actagrupo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actas'), array('controller' => 'actas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
