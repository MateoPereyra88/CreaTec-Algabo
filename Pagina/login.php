<?php
$servidor="localhost";
$bd = "CreaTecAlgabo";
$user="root";
$pass="";
$conexion=mysqli_connect($servidor,$user,$pass,$bd);

if ($conexion===false) {
	die("error de conexion".mysqli_connect_error());
}
$sql = "select * from Empleado where ((usuario = '".$_POST['user']."') and (pass = '".$_POST['pass']."'))";
$resultado = mysqli_query($conexion, $sql);
$tarjeta = "";
if(mysqli_num_rows($resultado) == 1){
	$fila = mysqli_fetch_array($resultado);
	if($fila['puesto'] == 'OPERARIO DEPOSITO')
	{
		$url ='"registroProd.php?$tarjeta='.$fila['id_tarjeta'].'"'
			?>
		<a href=<?php echo $url ?>></a>
		<?php
		header('Location: registroProd.html');
	}
	else
		header('Location: hola.html');
}
else{
	header('Location: adios.html');
}
?>
