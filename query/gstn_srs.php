<?php
	require_once 'login.php';
	$conexion = pg_connect('host='.$hn.' port=5432 dbname='.$db.' user='.$un.' password='.$pw.'');

	if (isset($_POST['ingresar'])){

		$idusuario = $_POST['idusuario'];
		$idempleado = $_POST['idempleado'];
		$contraseña = $_POST['contraseña'];

		$contrasenaEncriptada = password_hash($contraseña, PASSWORD_DEFAULT);


		$sql="INSERT INTO usuario (idusuario,idempleado,contraseña) values('$idusuario','$idempleado','$contraseña')";
		$s="SELECT * FROM usuario";
		$result = pg_query($conexion, $sql);
		$r = pg_query($conexion, $s);

		$url2 ="/Villantax/3_0/gstn_usuarios.php"; 
		$tiempo_espera = 0.001; 

		header("refresh: $tiempo_espera; url=$url2");
	}
if (isset($_POST['modificar']))
	{
		$idusuario = $_POST['idusuario'];
		$idempleado = $_POST['idempleado'];
		$contraseña = $_POST['contraseña'];

		$contrasenaEncriptada = password_hash($contraseña, PASSWORD_DEFAULT);
		
		$s="SELECT * FROM usuario";
		$sql="UPDATE usuario 
		SET idusuario = '$idusuario',
		idempleado = '$idempleado',
		contraseña = '$contraseña'
		WHERE idusuario = '$idusuario'";
		
		$result = pg_query($conexion, $sql);
		$r = pg_query($conexion, $s);

		$url2 ="/Villantax/3_0/gstn_usuarios.php"; 
		$tiempo_espera = 0.001; 

		header("refresh: $tiempo_espera; url=$url2");
}

?>
