<div class="versionespecialidades view">
<h2><?php  echo __('Versionespecialidade');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($versionespecialidade['Versionespecialidade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Version'); ?></dt>
		<dd>
			<?php echo h($versionespecialidade['Versionespecialidade']['version']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Especialidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($versionespecialidade['Especialidade']['id'], array('controller' => 'especialidades', 'action' => 'view', $versionespecialidade['Especialidade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Horas Lectiva'); ?></dt>
		<dd>
			<?php echo h($versionespecialidade['Versionespecialidade']['horas_lectiva']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Haras Productiva'); ?></dt>
		<dd>
			<?php echo h($versionespecialidade['Versionespecialidade']['haras_productiva']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($versionespecialidade['Versionespecialidade']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($versionespecialidade['Versionespecialidade']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Versionespecialidade'), array('action' => 'edit', $versionespecialidade['Versionespecialidade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Versionespecialidade'), array('action' => 'delete', $versionespecialidade['Versionespecialidade']['id']), null, __('Are you sure you want to delete # %s?', $versionespecialidade['Versionespecialidade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Versionespecialidades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Versionespecialidade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Especialidades'), array('controller' => 'especialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especialidade'), array('controller' => 'especialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Competenciaversionespecialidades'), array('controller' => 'competenciaversionespecialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competenciaversionespecialidade'), array('controller' => 'competenciaversionespecialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Competenciaversionespecialidades');?></h3>
	<?php if (!empty($versionespecialidade['Competenciaversionespecialidade'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Versionespecialidade Id'); ?></th>
		<th><?php echo __('Competencia Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($versionespecialidade['Competenciaversionespecialidade'] as $competenciaversionespecialidade): ?>
		<tr>
			<td><?php echo $competenciaversionespecialidade['id'];?></td>
			<td><?php echo $competenciaversionespecialidade['versionespecialidade_id'];?></td>
			<td><?php echo $competenciaversionespecialidade['competencia_id'];?></td>
			<td><?php echo $competenciaversionespecialidade['created'];?></td>
			<td><?php echo $competenciaversionespecialidade['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'competenciaversionespecialidades', 'action' => 'view', $competenciaversionespecialidade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'competenciaversionespecialidades', 'action' => 'edit', $competenciaversionespecialidade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'competenciaversionespecialidades', 'action' => 'delete', $competenciaversionespecialidade['id']), null, __('Are you sure you want to delete # %s?', $competenciaversionespecialidade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Competenciaversionespecialidade'), array('controller' => 'competenciaversionespecialidades', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Grupos');?></h3>
	<?php if (!empty($versionespecialidade['Grupo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Consecutivo'); ?></th>
		<th><?php echo __('Fecha Inicial'); ?></th>
		<th><?php echo __('Fecha Final'); ?></th>
		<th><?php echo __('Versionespecialidade Id'); ?></th>
		<th><?php echo __('Numero Ficha'); ?></th>
		<th><?php echo __('Numero Solicitud'); ?></th>
		<th><?php echo __('Instructore Id'); ?></th>
		<th><?php echo __('Id Aprendiz Lider'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($versionespecialidade['Grupo'] as $grupo): ?>
		<tr>
			<td><?php echo $grupo['id'];?></td>
			<td><?php echo $grupo['nombre'];?></td>
			<td><?php echo $grupo['consecutivo'];?></td>
			<td><?php echo $grupo['fecha_inicial'];?></td>
			<td><?php echo $grupo['fecha_final'];?></td>
			<td><?php echo $grupo['versionespecialidade_id'];?></td>
			<td><?php echo $grupo['numero_ficha'];?></td>
			<td><?php echo $grupo['numero_solicitud'];?></td>
			<td><?php echo $grupo['instructore_id'];?></td>
			<td><?php echo $grupo['id_aprendiz_lider'];?></td>
			<td><?php echo $grupo['created'];?></td>
			<td><?php echo $grupo['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'grupos', 'action' => 'view', $grupo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'grupos', 'action' => 'edit', $grupo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'grupos', 'action' => 'delete', $grupo['id']), null, __('Are you sure you want to delete # %s?', $grupo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
