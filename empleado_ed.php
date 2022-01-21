<?php 


$dato = $_GET ['da'] ;
$llave = $_GET ['lla']


$con = "select * from  empleado where id_empleado = $llave";

$co = new sen ($con,$conexion, 'empleado');

$co->con();

$nombre = mysqli_fetch_array($co->res) {



?>

<div id="formulario">
	<form action="principal.php?da=3&lla = <?php echo  $llave;?>" method="post" enctype="multipart/form-data">
		
		<input type="hidden" name="llave" value="<?php echo  $llave; ?>">
		
		<input type="text" name="nombre" value = "<?php echo $empleado ['1'] ; ?>"; required="required" placeholder="Ingresar plato"><br>
		<input type="text" name="email" value = "<?php echo $empleado ['1'] ; ?>"; required="required" placeholder="Ingresar plato"><br>
		<input type="text" name="sexo" value = "<?php echo $empleado ['1'] ; ?>"; required="required" placeholder="Ingresar plato"><br>
		<input type="text" name="area" value = "<?php echo $empleado ['1'] ; ?>"; required="required" placeholder="Ingresar plato"><br>
		<input type="text" name="boletin" value = "<?php echo $empleado ['1'] ; ?>"; required="required" placeholder="Ingresar plato"><br>
		<textarea name="descripcion" rows="4" cols="50" required="required" placeholder="Ingredientes"class="ckeditor"> 
		
		   <?php echo $nombre['2'] ; ?>
		
		</textarea><br>
		
		<input type="submit" name="boton" value="Guardar">
		
		
		</form>
		
		
		
</div>




<?php


// pregunta si el boton se presiono................
 if(isset($_POST ['boton']))   {
	
	//capturar los datos enviados
	
	//poner una condicion
	if(isset($_FILES ['imagen']['name']) && $_FILES ['imagen']['name'] !="") {
					$plato = $_POST ['plato'];
					$ingredientes = $_POST ['ingredientes'];
					$precio = $_POST ['precio'];
					$imagen =$_FILES ['imagen'];
					$llave=$_POST ['llave'];
					
	
	
	
	//cuando se captura un archivo o imagen
	/*$nombre= $imagen['name'] ;
	$destino = 'img/plato';
	
	//cambio el nombre de la imagen
	list ($nombre_img, $ext_img)= explode('.', $nombre );
	$tamano=$imagen ['size'];
	$nombrefinal= $plato. "_" . $precio . "_".$nombre_img.".".$ext_img;
	
	
   //se guarda la imagen en la base de datos
   $editar = "update carta SET  imagen ='$nombre_final',precio = $precio, ingredientes = $'ingredientes' where  id_carta = $llave ";

$ed= new sen ($editar,$conexion, 'carta imagen' );

$ed->insedbo () ;
   
   
// muevo el archivo a la carpeta

 if($tamano < 100000000) {                                    
move_uploaded_file($imagen ['tmp name'],$destino. '/'. $nombre_img);
}else {
	 echo "la imagen supera el tamaño permitido" ;*/


       
}                                                                                                                                   


 header("location: principal.php?da=1");



 }



$editar = "update carta SET plato = '$plato',precio = $precio, ingredientes = $'ingredientes' where  id_carta = $llave ";

$ed= new sen ($editar,$conexion, 'carta');

$ed->insedbo () ;


  } 
   
   
?>


























