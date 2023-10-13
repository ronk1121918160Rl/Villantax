<?php
	require_once 'login.php';
	$conexion = pg_connect('host='.$hn.' port=5432 dbname='.$db.' user='.$un.' password='.$pw.'');

	if (isset($_POST['ingresar_p'])){
		$idproducto = $_POST['idproducto'];
		$nombre = $_POST['nombre'];
		$tipo = $_POST['tipo'];
		$referencia = $_POST['referencia'];
		$marca = $_POST['marca'];
		$existencia = $_POST['existencia'];
		$precio_costo = $_POST['precio_costo'];
		$precio_bruto = $_POST['precio_bruto'];
		$precio_iva = $_POST['precio_iva'];

		$sql="INSERT INTO producto (idproducto,nombre,tipo,referencia,marca,existencia,precio_costo,precio_bruto,precio_iva) values('$idproducto','$nombre','$tipo','$referencia','$marca','$existencia','$precio_costo','$precio_bruto','$precio_iva')";
		$s="SELECT * FROM producto";
		$result = pg_query($conexion, $sql);
		$r = pg_query($conexion, $s);

		$url2 ="/Villantax/3_0/gstn_prdcts.php"; 
		$tiempo_espera = 0.001; 

	header("refresh: $tiempo_espera; url=$url2");
	}
if (isset($_POST['modificar_p'])){
		$idproducto = $_POST['idproducto'];
		$nombre = $_POST['nombre'];
		$tipo = $_POST['tipo'];
		$referencia = $_POST['referencia'];
		$marca = $_POST['marca'];
		$existencia = $_POST['existencia'];
		$precio_costo = $_POST['precio_costo'];
		$precio_bruto = $_POST['precio_bruto'];
		$precio_iva = $_POST['precio_iva'];
		
		$s="SELECT * FROM producto";
		$sql="UPDATE producto 
		SET idproducto = '$idproducto',
		nombre = '$nombre',
		tipo = '$tipo',
		referencia = '$referencia',
		marca = '$marca',
		existencia = '$existencia',
		precio_costo = '$precio_costo',
		precio_bruto = '$precio_bruto',
		precio_iva = '$precio_iva'
		WHERE idproducto = '$idproducto'";
		
		$result = pg_query($conexion, $sql);
		$r = pg_query($conexion, $s);
		
		$url2 ="/Villantax/3_0/gstn_prdcts.php"; 
		$tiempo_espera = 0.001; 

		header("refresh: $tiempo_espera; url=$url2");
}

?>