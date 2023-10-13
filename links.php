<?php //query-mysql.php
	require_once 'query/login.php';
	$conexion = pg_connect('host='.$hn.' port=5432 dbname='.$db.' user='.$un.' password='.$pw.'');
    if (isset($_POST['clientes']))
    {
	$url ="gstn_clnts.php"; 
		$tiempo_espera = 0.01; 

	header("refresh: $tiempo_espera; url=$url");
    }
    if (isset($_POST['cs']))
    {
	$url ="login.html"; 
		$tiempo_espera = 0.01; 

	header("refresh: $tiempo_espera; url=$url");
    }
	if (isset($_POST['inventario']))
    {
	$url ="gstn_prdcts.php"; 
		$tiempo_espera = 0.01; 

	header("refresh: $tiempo_espera; url=$url");
    }
	if (isset($_POST['proveedores']))
    {
	$url ="gstn_prvdrs.php"; 
		$tiempo_espera = 0.01; 

	header("refresh: $tiempo_espera; url=$url");
    }
	if (isset($_POST['facturas']))
    {
	$url ="factura.php"; 
		$tiempo_espera = 0.01; 

	header("refresh: $tiempo_espera; url=$url");
    }
	if (isset($_POST['rventas']))
    {
	$url ="rprt_vnts.php"; 
		$tiempo_espera = 0.01; 

	header("refresh: $tiempo_espera; url=$url");
    }
	if (isset($_POST['pc']))
    {
	$url ="rprts_prdcts_clnts.php"; 
		$tiempo_espera = 0.01; 

	header("refresh: $tiempo_espera; url=$url");
    }
	if (isset($_POST['usuario']))
    {
	$url ="gstn_usuarios.php"; 
		$tiempo_espera = 0.01; 

	header("refresh: $tiempo_espera; url=$url");
    }
    ?>