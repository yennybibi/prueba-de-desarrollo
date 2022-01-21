<section>

<h1>aqui va los contenidos</h1>

<?php
	
			$dato = $_GET['da'];

	switch($dato) {
		case 1:
			require_once('partes/empleado/empleado.php');
			break;
		case 2:
			require_once('partes/empleado/empleado_ins.php');
			break;
		case 3:
			require_once('partes/empleado/empleado_ed.php');
			break;
		case 4:
			require_once('partes/empleado/empleado_bo.php');
			break;
		
	}

?>
</section>
























</body>
</html>