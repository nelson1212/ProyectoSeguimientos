$(document).ready(function() {

	//Variables globales
	var idEspe = 0;
	var nomCompetencia = "";
	var idCompetencia = 0;
	var idResultado = 0;
	var nomResultado = "";
	var idAprendiz = 0;
	var idInstructor = 0;
	var idActa = 0;
	var siteRoot = "/ProyectoSeguimientos/";
	var pathname = window.location.pathname;

	// alert(pathname);
	function dump(arr, level) {
		var dumped_text = "";
		if (!level)
			level = 0;

		//The padding given at the beginning of the line.
		var level_padding = "";
		for (var j = 0; j < level + 1; j++)
			level_padding += "    ";

		if ( typeof (arr) == 'object') {//Array/Hashes/Objects
			for (var item in arr) {
				var value = arr[item];

				if ( typeof (value) == 'object') {//If it is an array,
					dumped_text += level_padding + "'" + item + "' ...\n";
					dumped_text += dump(value, level + 1);
				} else {
					dumped_text += level_padding + "'" + item + "' => \"" + value + "\"\n";
				}
			}
		} else {//Stings/Chars/Numbers etc.
			dumped_text = "===>" + arr + "<===(" + typeof (arr) + ")";
		}
		return dumped_text;
	}

	$("#lnkComentarios").live("click",function() {
		//alert("Hola");
		/*
		var idCompetencia = $("#txtComId").val();
		var documento = $("#documento").html();
		$("#nombreAprendiz").html(nombres);
		$("#txtIdAprendiz").val(id);

		var idAprendiz = $("#txtIdAprendiz").val();
		var idActa = $("#txtIdActa").val();
		var concepto = $("#txtComentarios").val();

		$.post(siteRoot + "conceptualaprendices/cargarConcepto", {
			aprendiz : idAprendiz,
			acta : idActa,
			concep : concepto
		}, resultado, "json");

		function resultado(data) {
			if (data.res == "si") {
				$("#modal_comentarios  #txtComentarios").val(data.concepto);
			} else {
				//alert("Error al intentar cargar el concepto");
			}
		}
                  */

		$('#modal_comentarios').modal({
			close : true
		});
		return false;

	});

	function inputControl(input, format) {
		var value = input.val();
		var values = value.split("");
		var update = "";
		var transition = "";
		if (format == 'int') {
			expression = /^([0-9])$/;
			finalExpression = /^([1-9][0-9]*)$/;
		} else if (format == 'float') {
			var expression = /(^\d+$)|(^\d+\.\d+$)|[,\.]/;
			var finalExpression = /^([1-9][0-9]*[,\.]?\d{0,3})$/;
		}
		for (id in values) {
			if (expression.test(values[id]) == true && values[id] != '') {
				transition += '' + values[id].replace(',', '.');
				if (finalExpression.test(transition) == true) {
					update += '' + values[id].replace(',', '.');
				}
			}
		}
		input.val(update);
	}

	function explode(delimiter, string, limit) {
		if (arguments.length < 2 || typeof delimiter == 'undefined' || typeof string == 'undefined')
			return null;
		if (delimiter === '' || delimiter === false || delimiter === null)
			return false;
		if ( typeof delimiter == 'function' || typeof delimiter == 'object' || typeof string == 'function' || typeof string == 'object') {
			return {
				0 : ''
			};
		}
		if (delimiter === true)
			delimiter = '1';

		// Here we go...
		delimiter += '';
		string += '';

		var s = string.split(delimiter);

		if ( typeof limit === 'undefined')
			return s;

		// Support for limit
		if (limit === 0)
			limit = 1;

		// Positive limit
		if (limit > 0) {
			if (limit >= s.length)
				return s;
			return s.slice(0, limit - 1).concat([s.slice(limit - 1).join(delimiter)]);
		}

		// Negative limit
		if (-limit >= s.length)
			return [];

		s.splice(s.length + limit);
		return s;
	}


	$("#btnEvaluar").click(function() {
		alert("hola");
	});

	$("#enviar").click(function() {

		//Antes de enviar se seleccionan todos los intructores
		$("#cboInstructoresSel").each(function() {
			$("#cboInstructoresSel option").attr("selected", "selected");
		});

		//Antes de enviar se seleccionan todos los usuarios
		$("#cboUsuariosSel").each(function() {
			$("#cboUsuariosSel option").attr("selected", "selected");
		});

		$("#ActaAddForm").submit();
		//}

	});

	$('#especialidades').click(function(e) {
		// alert("Hola");
		$('#modal_especialidades').modal({
			close : true
		});
		return false;
	});

	$('#lupa_cordinadores').click(function(e) {
		// alert("Hola");
		$('#modal_cordinadores').modal({
			close : true
		});
		return false;
	});

	//Obtener especialdiades
	$("#cboEspecialidades").change(function() {
		//Id Especialdiad
		idEspe = $("#cboEspecialidades").val();
		$("#idEspecialidad").val(idEspe);

		//Nombre de la especialidad
		var nomEspe = $("#cboEspecialidades option:selected").text();
		//Asignamos a la caja de texto el nombre de la especialdad
		$("#txtEspecialidades").val(nomEspe);
		$("#msj_error").hide();

	});

	//Obtener grupos
	$("#cboGrupos").change(function() {
		//Id Grupo
		idGrupo = $("#cboGrupos option:selected").val();
		//Nombre del grupo
		$("#txtGrupo").val($("#cboGrupos option:selected").text());
		$("#txtGrupo1").val(idGrupo);

	});

	$('#grupos').click(function(e) {

		function obtenerGrupos() {
			idEspe = $("#idEspecialidad").val();
			$.post($siteRoot + "actas/obtenerGrupos", {
				idEsp : idEspe
			}, resultado, "json");
			function resultado(data) {
				//Removemos las opciones de cboGrupos
				$("#cboGrupos option").each(function(index, option) {
					$(option).remove();
				});

				//if(data!=null){
				//  $("#cboGrupos").attr('disabled', false);
				for (key in data) {

					$('#ActaAddForm #cboGrupos').append('<option value="' + key + '">' + data[key] + '</option>');
				}
			}

		}

		//llamado de la funci�n
		obtenerGrupos();

		$('#modal_grupos').modal({
			close : true
		});
		return false;
	});

	//Lupa instructores
	$('#instructores').click(function(e) {
		idEspe = $("#idEspecialidad").val();
		function obtenerInstructores() {
			$.post(siteRoot + "actas/obtenerInstructores", {
				idEsp : idEspe
			}, resultado, "json");
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

				//$("#cboInstructoresSel").select();

			}

		}

		//llamado de la funci�n
		obtenerInstructores();

		$('#modal_instructores').modal({
			close : true
		});
		return false;
	});

	$("#cboInstructoresSel").dblclick(function() {
		var idInstructor = $("#cboInstructoresSel option:selected").val();
		var nombreInstructor = $("#cboInstructoresSel option:selected").text();
		$("#cboInstructoresSel option:selected").remove();
		$('#cboInstructores').append('<option value="' + idInstructor + '">' + nombreInstructor + '</option>');

	});

	$("#cboCordinadores").dblclick(function() {
		var idUsuario = $("#cboCordinadores option:selected").val();
		var nombreUsuario = $("#cboCordinadores option:selected").text();
		$("#cboCordinadores option:selected").remove();
		$('#cboUsuariosSel').append('<option value="' + idUsuario + '">' + nombreUsuario + '</option>');

	});

	// EVALUAR GRUPO ***************************************************************************************************

	$("#lpaCompetencias").click(function() {
		$('#modal_comp_resul').modal({
			close : true
		});
		return false;
	});

	//**************************************************** SELECCIONAR COMPETENCIAS Y OBTENER RESULTADOS DE APRENDIZAJE **************************************/
	$("#cboCompetencias").change(function() {
		//Id competencia
		idCompetencia = $("#cboCompetencias").val();
		nomCompetencia = $("#cboCompetencias").text();

		//Funcion obtener resultados de aprendizajes
		function obtenerResultados() {
			$.post(siteRoot + "actas/obtenerResultados", {
				idComp : idCompetencia
			}, resultado, "json");
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

	});

	//**************************************************** DOBLE CLIC EN RESULTADOS DE APRENDIZAJE *************************************************************/

	$("#cboResultados").dblclick(function() {

		idResultado = $("#cboResultados option:selected").val();
		nomResultado = $("#cboResultados option:selected").text();
		$("#txtResId").val(idResultado);
		$("#txtComId").val(idCompetencia);

		$("#txtCompetencia").val(nomCompetencia);
		$("#txtResultado").val(nomResultado);

		function limpiarTabla() {
			$("#tabla_estudiantes tr td :input").each(function() {
				$(this).val("");
			});
		}

		limpiarTabla();

		function resultado(data) {
			if (data.res == "si") {
				$("#txtResponsable").val(data.nombre_completo);
				idInstructor = data.id_instructor;
				$("#tabla_estudiantes").show();

				//Recorre  todo el arreglo retornado desde "calificaciones/obtenerCalificaciones"
				function resultado2(data) {
					if (data.length > 0) {
						$.each(data, function(i, item) {
							$(".txtNota" + data[i].aprendice_id).val(data[i].cal_num);
							if (data[i].aprobado == 1) {
								$(".txtEval" + data[i].aprendice_id).val("Aprobado");
							} else if (data[i].aprobado == 0) {
								$(".txtEval" + data[i].aprendice_id).val("No Aprobado");
							}

							$(".saveEval_" + data[i].aprendice_id).attr("src", siteRoot + "img/edit.gif");
							$(".saveEval_" + data[i].aprendice_id).attr("name", "edit");
						});

						//BackGroud Color a las cajas de texto que quedan llenas
						
						$("#tabla_estudiantes tr td :input").each(function() {
							if ($(this).val().length != 0) {
								$(this).css("background-color", "#F2F0F0");
								$(this).css("background-color", "#F2F0F0");
							}else if ($(this).val().length != 0) {
								$(this).css("background-color", "#F2F0D0");
								$(this).css("background-color", "#F2F0D0");
							}
						});


					}
				}


				$.post(siteRoot + "calificaciones/obtenerCalificaciones", {
					id_acta : idActa,
					id_resultado : idResultado
				}, resultado2, "json");

			} else if (data.res == "no") {
				$("#txtResponsable").val("");
				idInstructor = 0;
			}
		}


		$.post(siteRoot + "actas/obtenerIntructorResultadoAprendizaje", {
			idRes : idResultado
		}, resultado, "json");

		idActa = $('#txtIdActa').val();
		idGrupo = $('#txtIdGrupo').val();

	});

	//FIN Evaluar grupo ***************************************************************************************************

	//Detalles del acta
	$("#btnDetalleActa").live('click', function(event) {
		$('#modal_detalle_acta').modal({
			close : true
		});
		var url = $(this).attr("href");
		var id = explode("/", url);
		id = id[4];
		$.post(siteRoot + "actas/detallesActa", {
			idActa : id
		}, resultado, "json");
		function resultado(data) {
			if (data.longitud > 0) {
				$("#modal_detalle_acta #txtEspecialidad").html(data.especialidad);
				$("#modal_detalle_acta #txtGrupo").html(data.grupo);
				$("#modal_detalle_acta #txtTipo").html(data.tipo);
				$("#modal_detalle_acta #txtEtapa").html(data.etapa);
				$("#modal_detalle_acta #txtFecha").html(data.fecha_programada);
				$("#modal_detalle_acta #txtTrimestre").html(data.trimestre);

				var data0 = data.instructores;
				$.each(data0, function(key, val) {
					var texto = $("#modal_detalle_acta #txtInstructores").html();
					$("#modal_detalle_acta #txtInstructores").html(texto + "<br>" + data0[key]);
				});

				var data1 = data.usuarios;
				$.each(data1, function(key, val) {
					var texto1 = $("#modal_detalle_acta #txtUsuarios").html();
					$("#modal_detalle_acta #txtUsuarios").html(texto1 + "<br>" + data1[key]);
				});
			}

		}


		$("#modal_detalle_acta #num_acta").html(id);
		return false;
	});

	//Agregar nuevas frases
	$("#modal_comentarios #btnAgregar").click(function() {
		$.post(siteRoot + "ceai/frases/agregarFrase", {
			frase : $("#txtNuevaFrase").val()
		}, resultado, "json");
		function resultado(data) {
			if (data.res == "si") {
				$('#cboFrases').prepend('<option value="' + data.id + '">' + $("#txtNuevaFrase").val() + '</option>');
				$("#txtNuevaFrase").val("");
				$('#cboFrases').val(data.id);
			} else {
				alert("Error al intentar agregar la frase");
			}
		}

	});

	//Seleccionar frase y pasar al textArea de comentarios
	$("#modal_comentarios  #cboFrases").dblclick(function() {
		var frase = $("#cboFrases option:selected").text();

		if ($('#txtComentarios').val() == "") {
			$('#txtComentarios').val(frase);
		} else {
			$('#txtComentarios').val($('#txtComentarios').val() + "," + frase);
		}

	});

	//Guardar comentarios
	$("#modal_comentarios  #btnGuardar").click(function() {

		idAprendiz = $("#txtIdAprendiz").val();
		idActa = $("#txtIdActa").val();
		var concepto = $("#txtComentarios").val();

		if (concepto == "") {
			alert("Debes ingresar un concepto para el aprendiz");
			$("#txtComentarios").focus();
		}

		$.post(siteRoot + "/conceptualaprendices/agregarConcepto", {
			aprendiz : idAprendiz,
			acta : idActa,
			concep : concepto
		}, resultado, "json");

		function resultado(data) {
			if (data.res == "si") {

				$("#modal_comentarios  #btnCerrar").click();
			} else {
				alert("Error al intentar agregar el concepto");
			}
		}

	});

	//**************************************************** INGRESO Y VALIDACIÓN DE CALIFICACIONES *************************************************************/
	$("#txtNota").live('keyup', function(event) {
		var classNota = $(this).attr("class");
		var txtNota = $("." + classNota);

		var aprendiz = $(this).attr("name");
		//alert(numero);
		var txtEvaluacion = $("#txtEval" + aprendiz);

		inputControl(txtNota, 'float');

		if ($(this).val() != "") {
			if (txtNota.val() >= 3.5 && txtNota.val() <= 5) {
				txtEvaluacion.val("Aprobado");
			} else if (txtNota.val() >= 0 && txtNota.val() < 3.5) {
				txtEvaluacion.val("No Aprobado");
			} else {
				jAlert("La nota numerica debe ser mayor a 0 y menor a 5", "Notificación")
				txtNota.val("")
				txtNota.focus();
				txtEvaluacion.val("");
			}
		}

		if (txtNota.val() == "") {
			txtEvaluacion.val("");
		}

	});

	//***************************************** PASAR EL MOUSE SOBRE LA IMAGEN DE GUARDAR  **************************************************/
	$('#saveEval').live("mouseover", function() {
		$(this).attr('width', '20');
	});

	//***************************************** SACAR EL MOUSE SOBRE LA IMAGEN DE GUARDAR  **************************************************/
	$('#saveEval').live("mouseout", function() {
		$(this).attr('width', '18');
	});

	//****************************************** HACER CLIC SOBRE LA IMAGEN DE GUARDAR  **************************************************/
	$('#saveEval').live("click", function() {

		var accion = $(this).attr("name");
		var classIcon = $(this).attr("class");
		classIcon = classIcon.split("_");
		var id_Apre = classIcon[1];
		//alert(accion);
		if (accion == "edit") {
			$(".saveEval_" + id_Apre).attr("name", "save");
			$(".saveEval_" + id_Apre).attr("src", siteRoot + "img/save.gif");
			$(".txtNota" + id_Apre).css("background-color", "white");
			$(".txtEval" + id_Apre).css("background-color", "white");
			return;
		}

		if (idResultado == 0 || idCompetencia == 0) {
			jAlert("Debes seleccionar una competencia y un resultado de aprendizaje", "Alerta");
			return;
		}

		//var id_Apre = $(this).attr('name');

		//id del aprendiz
		var txtEvaluacion = $("#txtEval" + id_Apre);
		var txtNota = $(".txtNota" + id_Apre);
		//alert(numero);
		//alert(txtNota.attr("class"));
		if (txtNota.val() == 0 || txtEvaluacion.val() == "") {
			jAlert("Debes ingresar una calificación", "Alerta");
			return;
		}

		idActa = $('#txtIdActa').val();
		var evaluacion = 0;
		if (txtEvaluacion.val() == "Aprobado") {
			evaluacion = 1;
		} else if (txtEvaluacion.val() == "No Aprobado") {
			evaluacion = 0;
		}

		function resultado(data) {
			if (data.res == "si") {
					txtNota.css("background-color", "#F2F0F0");
					txtEvaluacion.css("background-color", "#F2F0F0");
					$(".saveEval_" + id_Apre).attr("src", siteRoot + "img/edit.gif");
					$(".saveEval_" + id_Apre).attr("name", "edit");
					//$("#saveDiv" + id_Apre).hide();
			}

		}


		$.post(siteRoot + "calificaciones/calificarAprendiz", {
			acta_id : idActa,
			aprendiz_id : id_Apre,
			resultado_id : idResultado,
			instructor_id : idInstructor,
			nota_aprendiz : txtNota.val(),
			evaluacion_aprendiz : evaluacion,
			action : accion
		}, resultado, "json");

	});

});
