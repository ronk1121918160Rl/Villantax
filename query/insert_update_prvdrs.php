<?php
	require_once 'login.php';
	$conexion = pg_connect('host='.$hn.' port=5432 dbname='.$db.' user='.$un.' password='.$pw.'');

	if (isset($_POST['ingresar_pv'])){
		$id_nit = $_POST['id_nit'];
		$nombre = $_POST['nombre'];
		$direccion = $_POST['direccion'];
		$email = $_POST['email'];
		$telefono = $_POST['telefono'];

		$sql="INSERT INTO proveedor (id_nit,nombre,direccion,email,telefono) values('$id_nit','$nombre','$direccion','$email','$telefono')";
		$s="SELECT * FROM proveedor";
		$result = pg_query($conexion, $sql);
		$r = pg_query($conexion, $s);

		$url2 ="/Villantax/3_0/gstn_prvdrs.php"; 
		$tiempo_espera = 0.001; 

		header("refresh: $tiempo_espera; url=$url2");
	}
if (isset($_POST['modificar_pv']))
	{
		$id_nit = $_POST['id_nit'];
		$nombre = $_POST['nombre'];
		$direccion = $_POST['direccion'];
		$email = $_POST['email'];
		$telefono = $_POST['telefono'];
		
		$s="SELECT * FROM proveedor";
		$sql="UPDATE proveedor 
		SET id_nit = '$id_nit',
		nombre = '$nombre',
		direccion = '$direccion',
		email = '$email',
		telefono = '$telefono' 
		WHERE id_nit = '$id_nit'";
		
		$result = pg_query($conexion, $sql);
		$r = pg_query($conexion, $s);

		$url2 ="/Villantax/3_0/gstn_prvdrs.php"; 
		$tiempo_espera = 0.001; 

		header("refresh: $tiempo_espera; url=$url2");
}

?>
