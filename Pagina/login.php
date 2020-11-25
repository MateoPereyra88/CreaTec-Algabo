	<?php
	$servidor="localhost";
	$bd = "CreaTecAlgabo";
	$user="root";
	$pass="";
	$conexion=mysqli_connect($servidor,$user,$pass,$bd);

	if ($conexion===false) {
		die("error de conexion".mysqli_connect_error());
	}
	$sql = "select * from Empleado where ((user = '".$_POST['user']."') and (pass = '".$_POST['pass']."'))";
	$resultado = mysqli_query($conexion, $sql);
	if(mysqli_num_rows($resultado) == 1){
		$fila = mysqli_fetch_array($resultado);
		echo $fila['nombre'];
		echo " ";
		echo $fila['apellido'];
	}
	else{
		header('Location: ingreso fallido.html');
	}
	?>