<?php
	require_once 'login.php';
	$conexion = pg_connect('host='.$hn.' port=5432 dbname='.$db.' user='.$un.' password='.$pw.'');

	if (isset($_POST['ingresar'])){
		$idclientes = $_POST['idclientes'];
		$nombres = $_POST['nombres'];
		$primer_apellido = $_POST['primer_apellido'];
		$segundo_apellido = $_POST['segundo_apellido'];
		$direccion = $_POST['direccion'];
		$email = $_POST['email'];
		$telefono = $_POST['telefono'];

		$sql="INSERT INTO clientes (idclientes,nombres,primer_apellido,segundo_apellido,direccion,email,telefono) values('$idclientes','$nombres','$primer_apellido','$segundo_apellido','$direccion','$email','$telefono')";
		$s="SELECT * FROM clientes";
		$result = pg_query($conexion, $sql);
		$r = pg_query($conexion, $s);

		$url2 ="/Villantax/3_0/gstn_clnts.php"; 
		$tiempo_espera = 0.001; 

		header("refresh: $tiempo_espera; url=$url2");
	}
if (isset($_POST['modificar']))
	{
		$idcliente = $_POST['idclientes'];
		$nombres = $_POST['nombres'];
		$primer_apellido = $_POST['primer_apellido'];
		$segundo_apellido = $_POST['segundo_apellido'];
		$direccion = $_POST['direccion'];
		$email = $_POST['email'];
		$telefono = $_POST['telefono'];
		
		$s="SELECT * FROM clientes";
		$sql="UPDATE clientes 
		SET idclientes = '$idcliente',
		nombres = '$nombres',
		primer_apellido = '$primer_apellido',
		segundo_apellido = '$segundo_apellido',
		direccion = '$direccion',
		email = '$email',
		telefono = '$telefono' 
		WHERE idclientes = '$idcliente'";
		
		$result = pg_query($conexion, $sql);
		$r = pg_query($conexion, $s);

		$url2 ="/Villantax/3_0/gstn_clnts.php"; 
		$tiempo_espera = 0.001; 

		header("refresh: $tiempo_espera; url=$url2");
}

?>
