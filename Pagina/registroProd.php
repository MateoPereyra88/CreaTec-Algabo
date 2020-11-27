	<?php
	$servidor="localhost";
	$bd = "CreaTecAlgabo";
	$user ="root";
	$pass = "";
	$conexion=mysqli_connect($servidor,$user,$pass,$bd);

	if ($conexion===false) {
		die("error de conexion".mysqli_connect_error());
	}
	$sql = "select * from Empleado where ((IdTarjeta = '".$_POST['id_tarjeta']."')";
	$sqli1 = "insert into RegistroProducto values (id_ingreso,id_empleado,Curdate(fecha),Curtime(hora))";
	$resultado = mysqli_query($conexion, $sql);
	if(mysqli_num_rows($resultado) == 1){
		mysqli_query($sqli1);
	else{
		header('Location: ingreso fallido.html');
	}
	?>