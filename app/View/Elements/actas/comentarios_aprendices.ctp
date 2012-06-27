	<h2 id="titulo_menu">Comentarios</h2>
	<table border="0">
		<tr>
			<td><b>Agregar frase</b></td>
			<td>:</td>
			<td>
				<input type="text" name="data['Frase']['nueva_frase']" id="txtNuevaFrase"  style="width:180px;" />
				<input type="button" id="btnAgregar" value="Agregar" class="acciones" />
			</td>
		</tr>
		<tr>
			<td>Frases disponibles</td>
			<td>:</td>
			<td><?php echo $this->Form->input("frases", array("options"=>$frases,'id'=>"cboFrases", 'label' => false, "size"=>"6", "style"=>"width:264px;")); ?></td>
		</tr>
	</table>

	<label>Comentarios</label>
	<!-- Conpcepto -->
	<textarea rows="5" style="margin-bottom: 8px;" id="txtComentarios"></textarea>
	<!-- Id del Aprendiz -->
	<input type="hidden" id="txtIdAprendiz" />
	<!-- Id del Acta -->
	<input type="hidden" id="txtIdActa" value="<?php echo $idActa; ?>" />
	<br />
	<div style="margin-top:50px; text-align: center;">
		<button id="btnGuardar" class="acciones">
			Guardar comentarios
		</button>
		<button id="btnCerrar" class="acciones" style="display: none;">
			Cerrar
		</button>
	</div>