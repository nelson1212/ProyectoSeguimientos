<div class="conceptualgrupos view">
<h2><?php  echo __('Conceptualgrupo');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($conceptualgrupo['Conceptualgrupo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($conceptualgrupo['Acta']['id'], array('controller' => 'actas', 'action' => 'view', $conceptualgrupo['Acta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Concepto'); ?></dt>
		<dd>
			<?php echo h($conceptualgrupo['Conceptualgrupo']['concepto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($conceptualgrupo['Conceptualgrupo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($conceptualgrupo['Conceptualgrupo']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Conceptualgrupo'), array('action' => 'edit', $conceptualgrupo['Conceptualgrupo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Conceptualgrupo'), array('action' => 'delete', $conceptualgrupo['Conceptualgrupo']['id']), null, __('Are you sure you want to delete # %s?', $conceptualgrupo['Conceptualgrupo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Conceptualgrupos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conceptualgrupo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actas'), array('controller' => 'actas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add')); ?> </li>
	</ul>
</div>
