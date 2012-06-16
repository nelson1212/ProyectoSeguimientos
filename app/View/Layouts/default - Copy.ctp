<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('CakePHP: the rapid development php framework:'); ?>
         <!-- Titulo del layout -->
		<?php echo $title_for_layout; ?>
	
	</title>
	<?php
        //Favicon
		echo $this->Html->meta('icon');
        //CSS por defecto de cakePHP
		echo $this->Html->css('cake.generic');
        //Aquí es donde quiero que se incluyas mis scripts js y mis archivos CSS 
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>
			<?php echo "ADMINISTRADOR DE CONTENIDOS"; ?>
			</h1>
		</div>
		<div id="content">
            <!-- Para imprimir los mensajes en el back-end -->
			<?php echo $this->Session->flash(); ?>
			<?php //debug($this->params); ?>
			
            <!-- Elemento que contiene el menu para el back-end -->
			<?php  echo $this->element('menu');  ?>
            
            <!-- Aquí es donde quiero que se vean mis vistas -->
			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
     <!-- Aquí es donde apareceran las consultas SQL que se ejecutan -->
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>