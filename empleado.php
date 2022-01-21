<button name="botonc"  type="button" onclick="document.location ='principal.php?da=2'">
      Ingresar el nuevo  empleado

</button>


<br><br>


</div>


<br><br>


<table border="1" cellspacing="0" width="100%">
		<tr>
		<th>Nombre</th>
		<th>Email</th>
		<th>Sexo</th>
		<th>Area</th>
		<th>Boletin</th>
		<th>Descripcion</th>
		</tr>

		
<?php

 $consulta = "select *  from empleado  order by nombre";
 $co = new sen ($consulta,$conexion,'empleado');
 $co->con();
 while($empleado=mysqli_fetch_array($co->res)) {

}

?>


	
		<td><?php echo $empleado['nombre']; ?></td>
		<td><?php echo $empleado['email']; ?></td>
		<td><?php echo $empleado['sexo']; ?></td>
		<td><?php echo $empleado['area']; ?></td>
		<td><?php echo $empleado['boletin']; ?></td>
		<td><?php echo $empleado['descripcion']; ?></td>
		<td><a href="#">Editar</a></td>
		<td><a href="#" onclick="pregunta(<?php echo $empleado['id_empleado']; ?>">Borrar</a></td>
	

</table>


<script>
	function pregunta(id, nombre) {
		if (confirm('¿Esta seguro de borrar el dato del empleado?')) {
			document.location="principal.php?da=4&lla=" + id + "&empleado=" + empleado;
		}else{
			document.location="principal.php?da=1";		
		}
	}
</script>



