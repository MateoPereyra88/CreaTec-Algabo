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
	$sqli1 = "insert into lecturasRFID values (IdTarjeta,IdLector,Curdate(fecha),Curtime(hora))";
	$sqli2 = "insert into accesoPersonal values (IdTarjeta,IdMolinete,Curdate(fecha),Curtime(hora))";
	$resultado = mysqli_query($conexion, $sql);
	if(mysqli_num_rows($resultado) == 1){
		mysqli_query($sqli1);
		mysqli_query($sqli2);
	else{
		header('Location: ingreso fallido.html');
	}
	?>