<?php echo $this->Html->script('actas'); ?>

<?php echo $this->Form->create('Acta');?>
	<h2 id="titulo_menu">:: Informacion del acta</h2>

	<table border="0" width="100%" id="formulario" cellpadding="0" cellspacing="0">
		<tr>
			<td width="25%"><label>Especifica la especialidad</label></td>
			<td width="56%">
				<?php echo $this->Form->input('Especialdiad.especialidad_id', array("label"=>false,"type"=>"select", 'empty'=>"Seleccione...", "id"=>"cboEspecialidades", 'options'=>$especialidades)); ?>
				<?php echo $this->Form->input('Acta.especialidad_id', array("id"=>"idEspecialidad","type"=>"hidden")); ?>
				
			</td>
			<td><?php //echo $this->Html->image('lupa.png', array('id'=>"especialidades", 'alt' => 'Buscar especialidad'))?></td>
		</tr>
		<tr>
			<td width="230px"><label>Especifica el grupo</label></td>
			<td>
				<?php echo $this->Form->input('Otro.grupo_id', array("label"=>"", "id"=>"txtGrupo","type"=>"select"/*'readonly' => 'readonly'*/)); ?>
				<?php echo $this->Form->input('Acta.grupo_id', array( "id"=>"txtGrupo1","type"=>"hidden")); ?>
				
			</td>
			<td><?php //echo $this->Html->image('lupa.png', array('id'=>"grupos", 'alt' => 'Buscar grupo'))?></td>
		</tr>
		<tr>
			<td width="230px"><label>Tipo</label></td>
			<td>    <?php
				    $options=array('1'=>'&nbsp;Ordinario','2'=>'&nbsp;ExtraOrdinario');
				    $attributes=array('legend'=>false,"label"=>"", "id"=>"chkTipo");
				    echo $this->Form->radio('tipo_id',$options,$attributes);
				    ?>
				</td>
			<td><div id="msj_error1" style="display:none;">Debes especificar un grupo</div></td>
		</tr>
		
		<tr>
			<td width="230px"><label>Etapa</label></td>
			<td><?php
				    $options=array('1'=>'&nbsp;Lectiva&nbsp;&nbsp;&nbsp;','2'=>'&nbsp;Productiva');
				    $attributes=array('legend'=>false, "label"=>"", "id"=>"chkEtapa");
				    echo $this->Form->radio('Acta.etapa_id',$options,$attributes);
				    ?></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td width="230px"><label>Fecha y hora</label></td>
			<td><?php echo $this->Form->input('Acta.fecha', array("type"=>"text", "id"=>"txtCalendario", "label"=>"",'readonly' => 'readonly')); ?></td>
			<td><?php echo $this->Html->image('cal.gif', array('id'=>"grupos", 'alt' => 'Buscar grupo', 'onclick'=>"javascript:NewCssCal('txtCalendario','ddMMyyyy','dropdown',true,'24',true)", 'css'=>"cursor:pointer"))?></td>
		</tr>
		<tr>
			<td width="230px"><label>Trimestre</label></td>
			<td><?php echo $this->Form->input('Acta.trimestre_id', array("empty"=>" ", "label"=>"", "id"=>"cboTrimestre")); ?></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td width="230px"><label>Instructores</label></td>
			<td><?php echo $this->Form->input('Actainstructore.instructore_id', array("size"=>3,"id"=>"cboInstructoresSel",
                                                                    "type"=>"select", 'multiple' => true,
                                                                    'label'=>"")); ?></td>
                                                                    
			<td><?php echo $this->Html->image('lupa.png', array("id"=>"instructores", 'alt' => 'Buscar instructores', 'width'=>25, 'heigth'=>25))?></td>
		</tr>
		<tr>
			<td width="230px"><label>Cordinadores y otros</label></td>
			<td><?php echo $this->Form->input('Actausuario.usuariosid', array("size"=>3,"id"=>"cboUsuariosSel",
                                                                    "type"=>"select", 'multiple' => true,
                                                                    'label'=>"")); ?></td>
			<td><?php echo $this->Html->image('lupa.png', array('id'=>"lupa_cordinadores",'alt' => 'Buscar cordinadores y otros', 'width'=>25, 'heigth'=>25))?></td>
		<tr>
			<td width="230px">&nbsp;</td>
		
			<td>&nbsp;</td>
		</tr>
	</table>
		<?php echo $this->Form->button('Crear', array('type'=>'button', "id"=>"enviar")); ?>
	</form>
		
	<br/>
	
 </form>
 <!--
 <div id="modales">
  <!-- ESPECIALIDADES 
        <div class="modal" id="modal_especialidades" name="modal_especialidades" style="display: none;">
            <h2 id="titulo_menu">Selecciona una especialidad</h2>
            <?php echo $this->Form->input('Otros.especialidad', array("label"=>"", "empty"=>" ", "id"=>"cboEspecialidades", 
            "options"=>$especialidades)); ?>
            <br>
            <button id="btnCerrar">Cerrar</button>
        </div>
        -->
   <!-- GRUPOS 
        <div class="modal" id="modal_grupos" name="modal_grupos" style="display: none;">
            <h2 id="titulo_menu">Selecciona un grupo</h2>
            <?php echo $this->Form->input('Acta.grupo_id', array("label"=>"", "empty"=>" ","id"=>"cboGrupos","type"=>"select")); ?>
            <br>
            <button id="btnCerrar">Cerrar</button>
        </div>
        -->
    <!-- INSTRUCTORES -->
        <div class="modal" id="modal_instructores" name="modal_instructores" style="display: none;">
            <h2 id="titulo_menu">Selecciona los instructores</h2>
            <?php echo $this->Form->input('Actainstructore.instructore_id', array("size"=>5,"id"=>"cboInstructores",
                                                                    "type"=>"select", 'multiple' => true,
                                                                    'label'=>"")); ?>
            <br>
            <button id="btnCerrar">Cerrar</button>
        </div>
     </div>  
     
     <!-- CORDINADORES Y OTROS -->
        <div class="modal" id="modal_cordinadores" name="modal_cordinadores" style="display: none;">
            <h2 id="titulo_menu">Selecciona cordinadores y otros</h2>
            <?php echo $this->Form->input('Actainstructore.instructore_id', array("size"=>5,"id"=>"cboCordinadores",
                                                                    "type"=>"select", 'multiple' => true,
                                                                    'label'=>"", "options"=>$usuarios)); ?>
            <br>
            <button id="btnCerrar">Cerrar</button>
        </div>
     </div>   
             

