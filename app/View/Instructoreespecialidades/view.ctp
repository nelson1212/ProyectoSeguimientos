<div class="instructoreespecialidades view">
<h2><?php  echo __('Instructoreespecialidade');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($instructoreespecialidade['Instructoreespecialidade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instructore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($instructoreespecialidade['Instructore']['id'], array('controller' => 'instructores', 'action' => 'view', $instructoreespecialidade['Instructore']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Especialidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($instructoreespecialidade['Especialidade']['id'], array('controller' => 'especialidades', 'action' => 'view', $instructoreespecialidade['Especialidade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($instructoreespecialidade['Instructoreespecialidade']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($instructoreespecialidade['Instructoreespecialidade']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Instructoreespecialidade'), array('action' => 'edit', $instructoreespecialidade['Instructoreespecialidade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Instructoreespecialidade'), array('action' => 'delete', $instructoreespecialidade['Instructoreespecialidade']['id']), null, __('Are you sure you want to delete # %s?', $instructoreespecialidade['Instructoreespecialidade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructoreespecialidades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructoreespecialidade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Especialidades'), array('controller' => 'especialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especialidade'), array('controller' => 'especialidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
