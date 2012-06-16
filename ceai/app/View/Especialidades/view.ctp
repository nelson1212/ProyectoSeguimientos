<div class="especialidades view">
<h2><?php  echo __('Especialidade');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($especialidade['Especialidade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($especialidade['Especialidade']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($especialidade['Especialidade']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identificador Sigla'); ?></dt>
		<dd>
			<?php echo h($especialidade['Especialidade']['identificador_sigla']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipoformacione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($especialidade['Tipoformacione']['id'], array('controller' => 'tipoformaciones', 'action' => 'view', $especialidade['Tipoformacione']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($especialidade['Especialidade']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($especialidade['Especialidade']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Especialidade'), array('action' => 'edit', $especialidade['Especialidade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Especialidade'), array('action' => 'delete', $especialidade['Especialidade']['id']), null, __('Are you sure you want to delete # %s?', $especialidade['Especialidade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Especialidades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especialidade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipoformaciones'), array('controller' => 'tipoformaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipoformacione'), array('controller' => 'tipoformaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructoreespecialidades'), array('controller' => 'instructoreespecialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructoreespecialidade'), array('controller' => 'instructoreespecialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Versionespecialidades'), array('controller' => 'versionespecialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Versionespecialidade'), array('controller' => 'versionespecialidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Instructoreespecialidades');?></h3>
	<?php if (!empty($especialidade['Instructoreespecialidade'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Instructore Id'); ?></th>
		<th><?php echo __('Especialidade Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($especialidade['Instructoreespecialidade'] as $instructoreespecialidade): ?>
		<tr>
			<td><?php echo $instructoreespecialidade['id'];?></td>
			<td><?php echo $instructoreespecialidade['instructore_id'];?></td>
			<td><?php echo $instructoreespecialidade['especialidade_id'];?></td>
			<td><?php echo $instructoreespecialidade['created'];?></td>
			<td><?php echo $instructoreespecialidade['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'instructoreespecialidades', 'action' => 'view', $instructoreespecialidade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'instructoreespecialidades', 'action' => 'edit', $instructoreespecialidade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'instructoreespecialidades', 'action' => 'delete', $instructoreespecialidade['id']), null, __('Are you sure you want to delete # %s?', $instructoreespecialidade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Instructoreespecialidade'), array('controller' => 'instructoreespecialidades', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Versionespecialidades');?></h3>
	<?php if (!empty($especialidade['Versionespecialidade'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Version'); ?></th>
		<th><?php echo __('Especialidade Id'); ?></th>
		<th><?php echo __('Horas Lectiva'); ?></th>
		<th><?php echo __('Haras Productiva'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($especialidade['Versionespecialidade'] as $versionespecialidade): ?>
		<tr>
			<td><?php echo $versionespecialidade['id'];?></td>
			<td><?php echo $versionespecialidade['version'];?></td>
			<td><?php echo $versionespecialidade['especialidade_id'];?></td>
			<td><?php echo $versionespecialidade['horas_lectiva'];?></td>
			<td><?php echo $versionespecialidade['haras_productiva'];?></td>
			<td><?php echo $versionespecialidade['created'];?></td>
			<td><?php echo $versionespecialidade['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'versionespecialidades', 'action' => 'view', $versionespecialidade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'versionespecialidades', 'action' => 'edit', $versionespecialidade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'versionespecialidades', 'action' => 'delete', $versionespecialidade['id']), null, __('Are you sure you want to delete # %s?', $versionespecialidade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Versionespecialidade'), array('controller' => 'versionespecialidades', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
