<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
    <?php echo $this->Html->charset('utf-8'); ?>
    <?php header('Content-type: text/html; charset=UTF-8') ;?>

	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
        //Favicon
        echo $this->Html->meta('icon');
        echo $this->Html->css('estilo');
        echo $this->Html->css('jquery-ui-1.8.16.custom');		
        echo $this->Html->script('jquery-1.7.1.min');
        echo $this->Html->script("jquery-ui-1.8.17.custom.min");
        echo $this->Html->script("jquery-ui-timepicker-addon.js");
        echo $this->Html->script("jquery.popupWindow");
        echo $this->Html->css("jquery.treeview");
        echo $this->Html->script("jquery.cookie");
        echo $this->Html->script("jquery.treeview");
		echo $this->Html->script("jquery.simplemodal.js");
        echo $this->Html->css('jquery.alerts');
		echo $this->Html->css('basic');
		echo $this->Html->css('tipTip');
		echo $this->Html->script('jquery.dataTables.js');
		echo $this->Html->script('datetimepicker_css.js');
		echo $this->Html->script('jquery.tipTip');
        echo $this->Html->script('jquery.alerts');
        echo $this->Html->script('scripts');
       
        //CSS por defecto de cakePHP
		
        //Aqu� es donde quiero que se incluyas mis scripts js y mis archivos CSS 
		echo $scripts_for_layout;
	?>
</head>
<body>
<div id="contenedor">
	<div id="cabecera">
	</div>
    <div id="contenedor2">
        <div id="menu_izq">
            <?php echo $this->element('menu'); ?>
	    </div>
        
        <div id="contenido">
               <!-- Para imprimir los mensajes en el back-end -->
			<?php echo $this->Session->flash(); ?>
			<?php //debug($this->params); ?>
			
            
            <!-- Aqu� es donde quiero que se vean mis vistas -->
			<?php echo $content_for_layout; ?>
               
        </div>
        
         <div id="pie">
         Servicio Nacional de Aprendizaje SENA  CEAI Calle 2da No. 4585, Cali - PBX (54541) 545454500<br />
Linea gratuita de atencion al ciudadano 989898989<br />
Horario de atencion: lunes a viernes de 8:00 am a 5:30 pm
� 2012
                </div>
	</div>
</div>
</body>
</html>