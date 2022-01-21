<?php
	$llave = $_GET['lla'];	
		
	$bor = "delete from carta where id_empleado = $llave";
	$borrar = new sen($bor, $conexion, 'empleado');
	$borrar->insedbo();
	
	header("Location: principal.php?da=1");	
	
?>