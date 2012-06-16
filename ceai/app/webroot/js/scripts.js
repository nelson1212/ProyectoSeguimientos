$(document).ready(function(){
	

	
    //Variables globales
    var idEspe = 0;
    //Agregar calendario
   // $('#calendario').datetimepicker();
    
    //DesHabilitar cajas de texto
  /*  $("#cboGrupos").attr('disabled', true);
    $("#ActaTipoId").attr('disabled', true);
    $('#calendario').attr('disabled', true);
    $("#ActaEtapaId").attr('disabled', true);
     $("#ActaTrimestreId").attr('disabled', true); */
    
    //**************************************Obtener grupos****************************************************
   /* $("#cboEspecialidades").change(function(){
        //Id Especialdiad
       idEspe = $("#cboEspecialidades").val();
        //Funci�n obtener grupos
       // alert(idEspe);
       $("idEspecialidad").val(idEspe);
       
        var nomEspe = $("#cboEspecialidades option:selected").text();
    	$("#txtEspecialidades").val(nomEspe);
       
   });
   
    $("#cboGrupos").change(function(){
        //Id Especialdiad
       idGrupo = $("#cboEspecialidades").val();
 
       
        var nomGrupoo = $("#cboGrupos option:selected").text();
    	   $("#txtGrupo").val(nomGrupoo);
       
   }); */
   
   
         //***********************************Fin obtener grupos**************************************************
    
    //************** Obtener instructores *********************************************************************
        /*function obtenerInstructores() {
            $.post("../actas/obtenerInstructores",{idEsp:idEspe},resultado,"json");
            function resultado(data) {
               //Removemos las opciones de cboInstructores
                  $("#cboInstructores option").each(function(index, option) {
                        $(option).remove();
                  });
                  
                  //Al cambiar de especialidad removemos los instructores seleccionados
                  $("#cboInstructoresSel option").each(function(index, option) {
                        $(option).remove();
                  });
                  
                  //Al cambiar de especialidad removemos los usuarios seleccionados
                  $("#cboUsuariosSel option").each(function(index, option) {
                        $(option).remove();
                  });
                  
               for (key in data) {
                        $('#cboInstructores').append('<option value="' + key + '">' + data[key] + '</option>');
                }
            }
        }
        //llamado de la funci�n
        obtenerInstructores(); */
    
  
   
   
    $("#cboInstructores").dblclick(function(){
        var idInstructor = $("#cboInstructores option:selected").val();
        var nombreInstructor= $("#cboInstructores option:selected").text();
        $("#cboInstructores option:selected").remove();
        $('#cboInstructoresSel').append('<option value="' + idInstructor + '">' + nombreInstructor + '</option>');
        
    });
    
    /*
    $("#cboInstructoresSel").dblclick(function(){
        var idInstructor = $("#cboInstructoresSel option:selected").val();
        var nombreInstructor= $("#cboInstructoresSel option:selected").text();
        $("#cboInstructoresSel option:selected").remove();
        $('#cboInstructores').append('<option value="' + idInstructor + '">' + nombreInstructor + '</option>');
        
    }); */
    
    /*
    $("#cboUsuarios").dblclick(function(){
        var idUsuario = $("#cboUsuarios option:selected").val();
        var nombreUsuario= $("#cboUsuarios option:selected").text();
        $("#cboUsuarios option:selected").remove();
        $('#cboUsuariosSel').append('<option value="' + idUsuario + '">' + nombreUsuario + '</option>');
        
    }); */
    
    $("#cboUsuariosSel").dblclick(function(){
        var idUsuario = $("#cboUsuariosSel option:selected").val();
        var nombreUsuario= $("#cboUsuariosSel option:selected").text();
        $("#cboUsuariosSel option:selected").remove();
        $('#cboUsuarios').append('<option value="' + idUsuario + '">' + nombreUsuario + '</option>');
        
    });
    
    
    //Obtener resultados de aprendizaje por una competencia determinada ********************************************************************
    
      $("#cboCompetencias").change(function(){
        //Id competencia
        var idCom = $("#cboCompetencias").val();
        //Funci�n obtener grupos
        function obtenerResultados() {
            $.post("/ceai/actas/obtenerResultados",{idComp:idCom},resultado,"json");
            function resultado(data) {
               //Removemos las opciones de cboGrupos
                  $("#cboResultados option").each(function(index, option) {
                        $(option).remove();
                  });
               for (key in data) {
                        $('#cboResultados').append('<option value="' + key + '">' + data[key] + '</option>');
                }
            }
        }
        //llamado de la funci�n
        obtenerResultados();
     });   
  
      
    $("#lnkEva").popupWindow({ 
            windowURL:'http://code.google.com/p/swip/', 
            windowName:'swip',
            centerBrowser:1  
        });
 

   /* 
    $("#frmIndividual").hide();
    $("#frmMasiva").hide();
    
    $("#cboTipo").change(function(){
    	var indice = $("#cboTipo").val();
    	if(indice==1) {
    		$("#frmMasiva").hide();
    		$("#frmIndividual").show();
    	}else {
    		$("#frmMasiva").show();
    		$("#frmIndividual").hide();
    	}
    }); */
   
   
   // second example
	$("#browser").treeview({
		animated:"normal",
		persist: "cookie"
	});
    
   /* $('#especialidades').click(function (e) {
           // alert("Hola");
    		$('#modal_especialidades').modal({close:true});
    		return false;
   }); */
    /*
      $('#grupos').click(function (e) {
           // alert("Hola");
       function obtenerGrupos() {
       //	var idEspe = $("idEspecialidad").val(idEspe);
       	//alert(idEspe);
            $.post("../actas/obtenerGrupos",{idEsp:idEspe},resultado,"json");
            function resultado(data) {
               //Removemos las opciones de cboGrupos
                  $("#cboGrupos option").each(function(index, option) {
                        $(option).remove();
                  });
                  
                  //if(data!=null){
                  //  $("#cboGrupos").attr('disabled', false);
                    for (key in data) {
                    	
                        $('#modal_grupos #cboGrupos').append('<option value="' + key + '">' + data[key] + '</option>');
                    }
                  
               //}
               
               
            }
            
           
        }
        //llamado de la funci�n
        obtenerGrupos();
        
        
    		$('#modal_grupos').modal({close:true});
    		return false;
    });*/
    
    
    $(".modal #btnCerrar").click(function(){
        $(".modalCloseImg").click();
    });
    
   /*  
    $('#instructores').click(function (e) {
           
           function obtenerInstructores() {
            $.post("../actas/obtenerInstructores",{idEsp:idEspe},resultado,"json");
            function resultado(data) {
               //Removemos las opciones de cboInstructores
                  $("#cboInstructores option").each(function(index, option) {
                        $(option).remove();
                  });
                  
                  //Al cambiar de especialidad removemos los instructores seleccionados
                  $("#cboInstructoresSel option").each(function(index, option) {
                        $(option).remove();
                  });
                  
                  //Al cambiar de especialidad removemos los usuarios seleccionados
                  $("#cboUsuariosSel option").each(function(index, option) {
                        $(option).remove();
                  });
                  
               for (key in data) {
                        $('#cboInstructores').append('<option value="' + key + '">' + data[key] + '</option>');
                }
            }
        }
        //llamado de la funci�n
        obtenerInstructores();
        
        
    		$('#modal_instructores').modal({close:true});
    		return false;
    });
    
*/
				$('#example').dataTable();
				
/*				
	$("#ver_actas").click(function(){
		//alert("hola");
		$.ajax({
		  type: 'POST',
		  url: '../actas/obtenerActas',
		  data: '',
		  success: 'success',
		  dataType: 'json'
	}); */
		
		/*function doCommand(com, grid) {
			if (com == 'Edit') {
			$('.trSelected', grid).each(function() {
			var id = $(this).attr('id');
			id = id.substring(id.lastIndexOf('row')+3);
			alert("Edit row " + id);
			});
			} else if (com == 'Delete') {
			$('.trSelected', grid).each(function() {
			var id = $(this).attr('id');
			id = id.substring(id.lastIndexOf('row')+3);
			alert("Delete row " + id);
			});
			}
		}
	
		function procMe(celDiv,id) { 
			
		   $(celDiv).html("<a class='acciones' href='#' id='prueba36'>Evalular</a>  <a class='acciones' href='#' id='prueba36'>Editar</a>  <a class='acciones' href='#' id='prueba36'>Eliminar</a>");

		   //$(celDiv).html("<select><option>Aprobado</option><option>No aprobado</option></select>&nbsp");
		   $(celDiv).click(function(){ 
		   		alert("HOLA")
		   });
		};


function procMe(celDiv,id){
    $(celDiv).click(
      function(){ rowData = getRow(id);}
    )
  //process rowData here

}

function getRow(id) {
  var td = document.getElementById('flex1').rows[id].cells;
  str = '';
  for(j=0;j<td.length;j++){  //serialize as you like
     str += "'"+ $(td[j]).text()+"',";
  } 
  
}*//*

		$("#flex1").flexigrid({
			url: '/ceai/actas/obtenerActas',
			dataType: 'json',
			colModel : [
				{display: 'Numero', name : 'numero', width : 60, sortable : true, align: 'center'},
				{display: 'Tipo', name : 'tipo', width : 100, sortable : true, align: 'left'},
				{display: 'Fecha programada', name : 'fecha programada', width : 120, sortable : true, align: 'left'},
				{display: 'Grupo', name : 'grupo', width : 130, sortable : true, align: 'left', hide: true},
				{display: 'Etapa', name : 'etapa', width : 80, sortable : true, align: 'center'},
				{display: 'Trimestre', name : 'trimestre', width : 80, sortable : true, align: 'center'},
				{display: 'Acciones', name : 'trimestreggg', width : 192, sortable : true, align: 'left', process:procMe}
				],
			
			 buttons : [
                        {name: 'Edit', bclass: 'edit', onpress : doCommand},
                        {name: 'Delete', bclass: 'delete', onpress : doCommand},
                        {name: 'Evaluar', bclass: 'delete', onpress : doCommand},
                        {separator: true}
                ],
                
			searchitems : [
				{display: 'Numero', name : 'numero'}
				
				],
			
			sortname: "id",
			sortorder: "asc",
			usepager: true,
			title: 'Listado de actas sin evaluar',
			useRp: true,
			rp: 15,
			showTableToggleBtn: true,
			width: 934,
			height: 300,
			 singleSelect: true

		});   



	});
	
	*/
	
		$(function(){
				$("#txtCompetencia").tipTip({maxWidth: "200", edgeOffset: 0});
		});
		
});
