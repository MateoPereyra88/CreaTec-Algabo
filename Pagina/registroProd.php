	<?php
	$servidor="localhost";
	$bd = "CreaTecAlgabo";
	$user ="root";
	$pass = "";
	$conexion=mysqli_connect($servidor,$user,$pass,$bd);

	if ($conexion===false) {
		die("error de conexion".mysqli_connect_error());
	}
	$idtarjeta = $_GET["$tarjeta"];
	$sqli = "insert into MateriaPrima (id_empleado, proveedor, fecha, hora, nom_mat, cant) values ('".$_POST['idtarjeta']."','".$_POST['proveedor']."',Curdate(),Curtime(),'".$_POST['producto'].",'".$_POST['cantidad'].")";
		mysqli_query($sqli1);
	}
	else{
		echo 'Error al importar los productos';
	}
	?>