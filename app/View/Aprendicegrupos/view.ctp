<div class="aprendicegrupos view">
<h2><?php  echo __('Aprendicegrupo');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($aprendicegrupo['Aprendicegrupo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aprendicegrupo['Grupo']['id'], array('controller' => 'grupos', 'action' => 'view', $aprendicegrupo['Grupo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aprendice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aprendicegrupo['Aprendice']['id'], array('controller' => 'aprendices', 'action' => 'view', $aprendicegrupo['Aprendice']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($aprendicegrupo['Aprendicegrupo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($aprendicegrupo['Aprendicegrupo']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aprendicegrupo'), array('action' => 'edit', $aprendicegrupo['Aprendicegrupo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Aprendicegrupo'), array('action' => 'delete', $aprendicegrupo['Aprendicegrupo']['id']), null, __('Are you sure you want to delete # %s?', $aprendicegrupo['Aprendicegrupo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendicegrupos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendicegrupo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendices'), array('controller' => 'aprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendice'), array('controller' => 'aprendices', 'action' => 'add')); ?> </li>
	</ul>
</div>
