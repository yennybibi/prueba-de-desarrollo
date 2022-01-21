<?php 

$servidor='localhost';
$usuario='viviana';
$clave='ED4-7@SO50tH]xac';
$based= 'prueba_tecnica_dev';


//funcion que nos conecta a mysqli
$conexion=mysqli_connect($servidor,$usuario,$clave) or die('no se conecto a mysqli');



//conecta a la base de datos
mysqli_select_db($conexion,$based) or die ('no se encontro a prueba_tecnica_dev');






//utf8 para que todos los simbolos salgan bien
mysqli_set_charset($conexion,'utf8');


?>