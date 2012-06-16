<?php echo $this->Html->script('actas'); ?>
<div id="tblActas">
	<h2 id="titulo_menu">Listado de actas</h2>
	    <div id="busquedas">
		    <?php echo $this->Form->create("Busqueda"); ?>
		    <input name="data[Busqueda][frase]" type="text" id="BusquedaFrase">
		    <input type="submit" value="Buscar">
	    </div>
	    <br>
		<table id="tblActas" cellpadding="0" cellspacing="0" class="tabla" >
			<tr>
				<th><?php echo $this->Paginator->sort('id',"Numero");?></th>
				<th><?php echo $this->Paginator->sort('tipo_id',"Tipo");?></th>
				<th><?php echo $this->Paginator->sort('fecha',"Fecha programada");?></th>
				<th><?php echo $this->Paginator->sort('grupo_id',"Grupo");?></th>
				<th><?php echo $this->Paginator->sort('etapa_id',"Etapa");?></th>
				<th><?php echo $this->Paginator->sort('trimestre_id',"Trimestre");?></th>
				<th  class="actions" style="text-align: center;">Acciones</th>
			</tr>
			<?php
			//debug($actas); return;
			$i=0;	
			foreach($actas as $acta) {
				$id=$acta["Acta"]["id"];
				$tipo = "";
				if ($acta["Acta"]["tipo_id"]==1){
					$tipo = "Ordinaria";
				} else if($acta["Acta"]["tipo_id"]==1){
					$tipo = "ExtraOrdinaria";
				}
			?>
				
				<tr>
					<td><?php echo $id; ?></td>
					<td><?php echo $tipo; ?></td>
					<td><?php echo $acta["Acta"]["fecha"]; ?></td>
					<td><?php echo $acta["Grupo"]["nombre"]; ?></td>
					<td><?php echo $acta["Etapa"]["descripcion"]; ?></td>
					<td><?php echo $acta["Trimestre"]["nombre"]; ?></td>
					<td class="actions">
						<?php echo $this->Html->link(__('Detalles'), array( 
													'action' => '', $id), array('id'=>'btnDetalleActa', 'class'=>"acciones")); ?>
													
						<?php echo $this->Html->link(__('Evaluar'), array( 
													'action' => 'evaluarActa', $id), array('class'=>"acciones")); ?>
						<?php echo $this->Html->link(__('Editar'), array( 
													'action' => 'evaluarActa', $id), array('class'=>"acciones")); ?>
						<?php echo $this->Html->link(__('Borrar'), array( 
													'action' => 'evaluarActa', $id), array('class'=>"acciones")); ?>
					</td>
				</tr>
			<?php		
				$i++;
				}
			?>
		</table>
	<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Pagina {:page} de {:pages}, mostrando {:current} filas de {:count} en total, iniciando en {:start}, y terminando {:end}')
		));
		?>	</p>
	<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
		?>
	</div>
	<div class="btn">
	<?php echo $this->Html->link(__('Crear acta'), array( 
													'action' => 'add'), array('class'=>"acciones")); ?>
	</div>
	<br>
</div>	
<!-- DETALLES DE LAS ACTAS -->
<div class="modal" id="modal_detalle_acta" name="modal_detalle_acta" style="display: none; width: auto;">
	<h2 id="titulo_menu">Detalles del acta numero: <span id="num_acta"></span></h2>
	<?php echo $this->element("actas/detalles"); ?>
	<br>
	<button id="btnCerrar" class="acciones">
		Cerrar
	</button>
</div>

