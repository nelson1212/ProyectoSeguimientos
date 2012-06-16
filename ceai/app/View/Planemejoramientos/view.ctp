<div class="planemejoramientos view">
<h2><?php  echo __('Planemejoramiento');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($planemejoramiento['Planemejoramiento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calificacione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($planemejoramiento['Calificacione']['id'], array('controller' => 'calificaciones', 'action' => 'view', $planemejoramiento['Calificacione']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resultado Numerico'); ?></dt>
		<dd>
			<?php echo h($planemejoramiento['Planemejoramiento']['resultado_numerico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observaciones'); ?></dt>
		<dd>
			<?php echo h($planemejoramiento['Planemejoramiento']['observaciones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aprobado'); ?></dt>
		<dd>
			<?php echo h($planemejoramiento['Planemejoramiento']['aprobado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Entrega'); ?></dt>
		<dd>
			<?php echo h($planemejoramiento['Planemejoramiento']['fecha_entrega']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($planemejoramiento['Planemejoramiento']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($planemejoramiento['Planemejoramiento']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Planemejoramiento'), array('action' => 'edit', $planemejoramiento['Planemejoramiento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Planemejoramiento'), array('action' => 'delete', $planemejoramiento['Planemejoramiento']['id']), null, __('Are you sure you want to delete # %s?', $planemejoramiento['Planemejoramiento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Planemejoramientos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planemejoramiento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calificaciones'), array('controller' => 'calificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calificacione'), array('controller' => 'calificaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
