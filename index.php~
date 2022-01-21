<?php 
require_once ('clases/conexion.php');
require_once('clases/sentencia.php');
session_start();

if(isset($_POST["boton"])){


	
$nombre = $_POST['nombre'];
$email  = $_POST['email'];
$sexo  = $_POST['sexo']; 
$sexo  = $_POST['sexo']; 
$areas  = $_POST['areas']; 
$mensaje = $_POST['mensaje']; 
$informe  = $_POST['informe']; 
$roles  = $_POST['roles']; 

//consulta sql a las tablas
$sql = "select * from  areas where nombre='$nombre'";
$sql = "select * from empleado where  nombre='$nombre', email='$email,sexo='$sexo',area_id='$area_id',
boletin='$boletin',AND descripcion = '$descripcion'";
$sql = "select * from  empleado_rol where  empleado_id ='$empleado_id' AND  rol_id='$rol_id'";
$sql = "select * roles from  where nombre='$nombre'";	
	
$consulta = new sen($sql, $conexion, 'usuario');
$consulta = new sen($sql, $conexion, 'areas');
$consulta = new sen($sql, $conexion, 'empleado');
$consulta = new sen($sql, $conexion, 'empleado_rol');
$consulta = new sen($sql, $conexion, 'roles');
$consulta->con();
	
	$areas = mysqli_fetch_array($consulta->res);
	$empleado = mysqli_fetch_array($consulta->res);
	$empleado_rol = mysqli_fetch_array($consulta->res);
	$roles = mysqli_fetch_array($consulta->res);
	
	
if( $nombre['nombre'] != "" ) {
	 }
if( $email['email'] != "" ) {
}
if( $sexo['sexo'] != "" ) {
}	
if( $sexo['sexo'] != "" ) {	
}
if( $areas['areas'] != "" ) {	
}
if( $mensaje['mensaje'] != "" ) {
}
if( $informe['informe'] != "" ) {
}
if( $roles['roles'] != "" ) {

		
		
$_SESSION['nombre'] = $areas['id_nombre'];
$_SESSION['empleado'] = $empleado['id_empleado'];
$_SESSION['empleado_rol'] = $empleado_rol['id_empleado_rol'];
$_SESSION['roles'] = $roles['id_roles'];
		
  
 	header("Location: principal.php?da=1"); 
	}else{
		header("Location: index.php");  
  
  
  
  
	}
}

?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Prototipo de formulario</title>
<script src="ckeditor/ckeditor.js"></script>
</head>
<body>

<!-- llama a la hoja de estilo que vamos a crear nosotros -->
<link href="css/estilo.css" type="text/css" rel="stylesheet">

<!-- llama a la hoja de estilo de boostrap -->
<link href="stylesheet" href="css/bootstrap.min.css" integrity="sha384-
F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">





<h1>Crear empleado</h1>


<form action="principal.php" "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

   
    <h3>Los campos de asterisco (*) son obligatorio</h3><br>
   
    Nombre completo *
  <input type="text" name="nombre" required="required"  placeholder="nombre del empleado"maxlength="50"><br><br>
   
    Correo electronico *
    <input type="email" name="email" required="required" placeholder="correo electronico"><br><br>
    
     Sexo *
    <input type="radio" name="sexo" value="hispana">Masculino</input>
    <input type="radio" name="sexo" value="otra">Femenino</input><br><br>
   
    Areas *
    
    <select name="areas">
        <option value="Administrativa y Financiera">Administrativa y Financiera</option>
        <option value="Ingeniería" selected="selected">Ingeniería</option>
        <option value="Desarrollo de Negocio">Desarrollo de Negocio</option>
        <option value="Proyectos">Proyectos</option>
        <option value="Servicios">Servicios</option>
        <option value="Calidad">Calidad</option>
        
    </select> <br><br>
   
   Descripcion:*
<td><textarea name="mensaje" cols="30s"></textarea></td> <br><br>
</tr>
   
   
    <input type="checkbox" name="informe[]" value="empleado" checked="checked">Deseo recibir boletin informativo</input><br><br>
    
    
    Roles *
    
    <br>
    <input type="checkbox" name="roles[]" value="Desarrollador">Desarrollador</input><br>
    <input type="checkbox" name="roles[]" value="analista">Analista</input><br>
    <input type="checkbox" name="roles[]" value="tester">tester</input><br>
    <input type="checkbox" name="roles[]" value="Diseñador">Diseñador</input><br>
    <input type="checkbox" name="roles[]" value="Profesional PMO">Profesional PMO</input><br>
    <input type="checkbox" name="roles[]" value="Profesional de servicios">Profesional de servicios</input><br>
    <input type="checkbox" name="roles[]" value="Auxiliar administrativo">Auxiliar administrativo</input><br>
    <input type="checkbox" name="roles[]" value="Codirector">Codirector</input><br><br>
    
   <input type="submit" name="boton" value="Guardar"> 
     
</form>


</body>
</html>

