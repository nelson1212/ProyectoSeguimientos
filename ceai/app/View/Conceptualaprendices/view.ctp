<div class="conceptualaprendices view">
<h2><?php  echo __('Conceptualaprendice');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($conceptualaprendice['Conceptualaprendice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aprendice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($conceptualaprendice['Aprendice']['id'], array('controller' => 'aprendices', 'action' => 'view', $conceptualaprendice['Aprendice']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($conceptualaprendice['Acta']['id'], array('controller' => 'actas', 'action' => 'view', $conceptualaprendice['Acta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Concepto'); ?></dt>
		<dd>
			<?php echo h($conceptualaprendice['Conceptualaprendice']['concepto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($conceptualaprendice['Conceptualaprendice']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($conceptualaprendice['Conceptualaprendice']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Conceptualaprendice'), array('action' => 'edit', $conceptualaprendice['Conceptualaprendice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Conceptualaprendice'), array('action' => 'delete', $conceptualaprendice['Conceptualaprendice']['id']), null, __('Are you sure you want to delete # %s?', $conceptualaprendice['Conceptualaprendice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Conceptualaprendices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conceptualaprendice'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendices'), array('controller' => 'aprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendice'), array('controller' => 'aprendices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actas'), array('controller' => 'actas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add')); ?> </li>
	</ul>
</div>
