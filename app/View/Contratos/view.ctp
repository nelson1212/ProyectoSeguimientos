<div class="contratos view">
<h2><?php  echo __('Contrato');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contrato['Contrato']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instructore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contrato['Instructore']['id'], array('controller' => 'instructores', 'action' => 'view', $contrato['Instructore']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipocontrato'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contrato['Tipocontrato']['id'], array('controller' => 'tipocontratos', 'action' => 'view', $contrato['Tipocontrato']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Contrato'); ?></dt>
		<dd>
			<?php echo h($contrato['Contrato']['numero_contrato']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad Horas'); ?></dt>
		<dd>
			<?php echo h($contrato['Contrato']['cantidad_horas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inicial Contra'); ?></dt>
		<dd>
			<?php echo h($contrato['Contrato']['fecha_inicial_contra']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Final Contra'); ?></dt>
		<dd>
			<?php echo h($contrato['Contrato']['fecha_final_contra']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor Contrato Total'); ?></dt>
		<dd>
			<?php echo h($contrato['Contrato']['valor_contrato_total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor Contrato Mensual'); ?></dt>
		<dd>
			<?php echo h($contrato['Contrato']['valor_contrato_mensual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($contrato['Contrato']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($contrato['Contrato']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contrato'), array('action' => 'edit', $contrato['Contrato']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contrato'), array('action' => 'delete', $contrato['Contrato']['id']), null, __('Are you sure you want to delete # %s?', $contrato['Contrato']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contratos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contrato'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipocontratos'), array('controller' => 'tipocontratos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipocontrato'), array('controller' => 'tipocontratos', 'action' => 'add')); ?> </li>
	</ul>
</div>
