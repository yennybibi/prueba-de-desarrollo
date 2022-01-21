<div id="formulario">
	<form action="principal.php?da=2" method="post" enctype="multipart/form-data">
	
<input type="hidden" name="llave" value="<?php echo  $llave; ?>">
<input type="text" name="nombre" value = "<?php echo $empleado ['1'] ; ?>"; required="required" placeholder="Ingresar el nombre"><br>
<input type="text" name="email" value = "<?php echo $empleado ['2'] ; ?>"; required="required" placeholder="Ingresar el email"><br>
<input type="text" name="sexo" value = "<?php echo $empleado ['3'] ; ?>"; required="required" placeholder="escoge tu genero"><br>
<input type="text" name="area" value = "<?php echo $empleado ['4'] ; ?>"; required="required" placeholder="Seleccione el area"><br>
<input type="text" name="boletin" value = "<?php echo $empleado ['5'] ; ?>"; required="required" placeholder="Ingresar el numero del boletin"><br>
<textarea name="descripcion" rows="4" cols="50" required="required" placeholder="Descripcion"class="ckeditor"> 
		
	</form>
</div>

<?php
//preguntar si el boton se presiono ----------
	if(isset($_POST['boton'])) {
		//capturan todos los datos enviados
	//poner una condicion
	$nombre = $_POST ['nombre'];
	$email = $_POST ['email'];
	$sexo = $_POST ['sexo'];
	$area = $_POST ['area'];
	$boletin = $_POST ['boletin'];
	$descripcion = $_POST ['descripcion'];
	$llave=$_POST ['llave'];
		
		
		//grabo dentro de la base de datos
		$insertar = "insert into empleado(nombre, email, sexo,area,boletin,descripcion) values('$nombre',
		 $'email',$'sexo' '$descripcion','$area',$'boletin'$descripcion')";
		
		$ins = new sen($insertar, $conexion, 'empleado');		
		$ins->insedbo();
		
		
		header("Location: principal.php?da=1");
				
	}

?>









