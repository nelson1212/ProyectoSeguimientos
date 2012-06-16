<div class="competenciaversionespecialidades view">
<h2><?php  echo __('Competenciaversionespecialidade');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($competenciaversionespecialidade['Competenciaversionespecialidade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Versionespecialidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($competenciaversionespecialidade['Versionespecialidade']['id'], array('controller' => 'versionespecialidades', 'action' => 'view', $competenciaversionespecialidade['Versionespecialidade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Competencia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($competenciaversionespecialidade['Competencia']['id'], array('controller' => 'competencias', 'action' => 'view', $competenciaversionespecialidade['Competencia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($competenciaversionespecialidade['Competenciaversionespecialidade']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($competenciaversionespecialidade['Competenciaversionespecialidade']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Competenciaversionespecialidade'), array('action' => 'edit', $competenciaversionespecialidade['Competenciaversionespecialidade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Competenciaversionespecialidade'), array('action' => 'delete', $competenciaversionespecialidade['Competenciaversionespecialidade']['id']), null, __('Are you sure you want to delete # %s?', $competenciaversionespecialidade['Competenciaversionespecialidade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Competenciaversionespecialidades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competenciaversionespecialidade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Versionespecialidades'), array('controller' => 'versionespecialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Versionespecialidade'), array('controller' => 'versionespecialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Competencias'), array('controller' => 'competencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competencia'), array('controller' => 'competencias', 'action' => 'add')); ?> </li>
	</ul>
</div>
