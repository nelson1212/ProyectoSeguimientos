<div class="frases view">
<h2><?php  echo __('Frase');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($frase['Frase']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Frase'); ?></dt>
		<dd>
			<?php echo h($frase['Frase']['frase']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($frase['Frase']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($frase['Frase']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Frase'), array('action' => 'edit', $frase['Frase']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Frase'), array('action' => 'delete', $frase['Frase']['id']), null, __('Are you sure you want to delete # %s?', $frase['Frase']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Frases'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Frase'), array('action' => 'add')); ?> </li>
	</ul>
</div>
