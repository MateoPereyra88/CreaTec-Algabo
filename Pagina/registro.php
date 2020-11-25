	<?php
	$servidor="localhost";
	$bd = "CreaTecAlgabo";
	$user ="root";
	$pass = "";
	$conexion=mysqli_connect($servidor,$user,$pass,$bd);

	if ($conexion===false) {
		die("error de conexion".mysqli_connect_error());
	}
	$sql = "insert into Empleado (dni,nombre, apellido) values ('".$_POST['DNI']."','".$_POST['nombre']."','".$_POST['apellido']."'";
	?>