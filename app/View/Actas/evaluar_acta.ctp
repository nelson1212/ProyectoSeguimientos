<?php  echo $this -> Html -> script('actas'); ?>

<div class="actas form">
	<h2 id="titulo_menu">Evaluar grupo: <?php echo $infoActa[0]["Grupo"]["nombre"]; ?></h2>
    <input type="hidden" name="txtIdActa" id="txtIdActa" value=<?php echo $idActa; ?> />
	<table border="0" width="100%" id="formulario" cellpadding="0" cellspacing="0">
		<tr>
			<td style="width: 16%;"><b>Competencia</b></td>
			<td style="width: 78%;">
			    <?php echo $this -> Form -> input('competencia_id', array("label" => "", "type" => "text", "id" => "txtCompetencia", 'readonly' => 'readonly', "title" => "")); ?>
			    
			</td>
			<td ><?php echo $this->Html->image('lupa.png', array("id"=>"lpaCompetencias", 'alt' => 'Buscar instructores'))?></td>
			
		</tr>
		<tr>
			<td>
                <b>Resultado aprendizaje</b>
			
			</td>
			<td><?php echo $this -> Form -> input('resultado_id', array("label" => "", "type" => "text", "id" => "txtResultado", 'readonly' => 'readonly')); ?></td>
			<td>&nbsp;</td>
		</tr>
		
		<tr>
		    <td><b>Inst. Responsable</b></td>
			<td>
			    <?php echo $this -> Form -> input('respondable', array("label" => "", "type" => "text", "id" => "txtResponsable", 'readonly' => 'readonly')); ?>
			    <input type="hidden" id="txtIdInstructor" value="" />
			    
			</td>
			<td>&nbsp;</td>
		</tr>
	</table>
	<br>
	<table cellpadding="0" cellspacing="0" class="tabla" >
		<tr>
			<th>#</th>
			<th>Identificacion</th>
			<th width="40%">Nombres y apellidos</th>
			<th>Nota</th>
			<th>Evaluación</th>
			<th>&nbsp;</th>
			<th style="text-align: center;">Acciones</th>
		</tr>
		<?php $id = ""; $nombres =""; $i=0; foreach($aprendices as $aprendiz) {
		?>
		<tr>
			<td><?php echo $i; ?></td>
			<td id="documento"><?php $id = $aprendiz["Aprendice"]["id"];
				echo $aprendiz["Aprendice"]["documento"];
			?></td>
			<td><?php echo $nombres = $aprendiz["Aprendice"]["nombres"] . " " . $aprendiz["Aprendice"]["apellidos"]; ?></td>
			<td id="<?php echo $i; ?>"><?php echo $this -> Form -> input('nota', array( "label" => false, "type" => "text", "id" => "txtNota", "class"=>"txtNota".$i, "name"=>$i, "maxlength"=>3, "style" => "width:100%;")); ?></td>
			<td><?php echo $this -> Form -> input('evaluacion'.$i, array("label" => false, "type" => "text", "id"=>"txtEval".$i,'readonly' => 'readonly', 'size' => 13)); ?></td>
			
			<td >
			    <div style="width: 20px; height: 20px; margin:2px; background-color: ;">
			             <?php echo $this->Html->image('save2.gif', array("id"=>"saveEval", 
			                                                              'alt' => 'Buscar instructores', 
			                                                              'width'=>18,
			                                                              'heigth'=>18,
                                                                          'name'=>$id)); ?>
			     </div>
			</td>
			
			<td class="actions"><a id="lnkComentarios" class="acciones" onclick="probar(<?php echo $id; ?>, <?php echo "'" . $nombres . "'"; ?>);">Comentarios</a><?php echo $this -> Html -> link(__('Insistencias'), array('action' => 'evaluarActa', 1), array('class' => "acciones")); ?>
			<?php echo $this -> Html -> link(__('Plan mejor.'), array('action' => 'evaluarActa', 1), array('class' => "acciones")); ?>
			<?php echo $this -> Html -> link(__('Imprimir'), array('action' => 'evaluarActa', 1), array('class' => "acciones")); ?></td>
		</tr>
		<?php
		$i++;
		}
		?>
	</table>
	<div class="btn">
		<?php echo $this -> Html -> link(__('Ver actas'), array('action' => 'index'), array('class' => "acciones")); ?>
		<?php echo $this -> Html -> link(__('Alumnos cancelados'), array('action' => 'index'), array('class' => "acciones")); ?>
		<?php echo $this -> Html -> link(__('Alumnos transladados'), array('action' => 'index'), array('class' => "acciones")); ?>
	</div>
	<br>
	<?php echo $this -> Form -> end(__('Guardar')); ?>

	</form>
</div>
<!-- MODAL 1 -->
<!-- COMPETENCIAS Y RESULTADOS DE APRENDIZAJE -->
<div class="modal" id="modal_comp_resul" name="modal_comp_resul" style="display: none;">
	<h2 id="titulo_menu">Selecciona una competencia</h2>
	<?php echo $this -> Form -> input('Otros.especialidad', array("label" => "", "empty" => " ", "id" => "cboCompetencias", "options" => $competencias, 'multiple' => false)); ?>
	<br>
	<h2 id="titulo_menu">Selecciona un resultado de aprendizaje</h2>
	<?php echo $this -> Form -> input('Otros.resultados', array("label" => "", "type" => "select", "empty" => " ", "id" => "cboResultados", 'size' => 5)); ?>
	<br>
	<div>
		<button id="btnCerrar">
			Cerrar
		</button>
	</div>
</div>
<!-- COMENTARIOS -->
<div class="modal" id="modal_comentarios" name="modal_comentarios" style="display: none; text-align: left; font-style: bold;">
	<?php echo $this -> element("actas/comentarios_aprendices"); ?>
</div>
