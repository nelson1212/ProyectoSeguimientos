<div class="aprendiceempresas view">
<h2><?php  echo __('Aprendiceempresa');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($aprendiceempresa['Aprendiceempresa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aprendice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aprendiceempresa['Aprendice']['id'], array('controller' => 'aprendices', 'action' => 'view', $aprendiceempresa['Aprendice']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aprendiceempresa['Empresa']['id'], array('controller' => 'empresas', 'action' => 'view', $aprendiceempresa['Empresa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($aprendiceempresa['Aprendiceempresa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($aprendiceempresa['Aprendiceempresa']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aprendiceempresa'), array('action' => 'edit', $aprendiceempresa['Aprendiceempresa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Aprendiceempresa'), array('action' => 'delete', $aprendiceempresa['Aprendiceempresa']['id']), null, __('Are you sure you want to delete # %s?', $aprendiceempresa['Aprendiceempresa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendiceempresas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendiceempresa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendices'), array('controller' => 'aprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendice'), array('controller' => 'aprendices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
