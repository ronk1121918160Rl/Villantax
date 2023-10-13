<?php //query-mysql.php
	require_once 'login.php';
	$conexion = pg_connect('host='.$hn.' port=5432 dbname='.$db.' user='.$un.' password='.$pw.'');
	//if($conexion->connect_error) die("Fatal Error");
    $username = $_POST['usuario'];
	$password = $_POST['password'];

    $query = "SELECT * FROM usuario WHERE idusuario='$username'AND contraseña='$password'";
	$s="SELECT * FROM usuario";
	
    $result = pg_query($conexion,$query);
	$r = pg_query($conexion,$s);
	//if(!$result) die("FATAL ERROR");
	$r_nombre='';
	$r_pass= '';
    
    while($fila=pg_fetch_array($result)){
		$r_nombre= $fila['idusuario'];
		$r_pass= $fila['contraseña'];
	
	
    }
    
    if ($username==$r_nombre && $r_pass==$password) {

        $idproducto = $_POST['idproducto'];
        //Cliente a eliminar
        
        $query1="DELETE FROM producto WHERE idproducto = '$idproducto'";
        //eliminar cliente
        $s1="SELECT * FROM producto";

        $result1 = pg_query($conexion,$query1);
	    $r1 = pg_query($conexion,$s1);

        $url2 ="/Villantax/3_0/gstn_prdcts.php"; 
		$tiempo_espera = 0.001; 

		header("refresh: $tiempo_espera; url=$url2");
}
else{
    echo "Usuario o password invalido";
	echo "Verifique usuario o password";
	
    $url2 ="/Villantax/3_0/gstn_prdcts.php"; 
    $tiempo_espera = 3; 

    header("refresh: $tiempo_espera; url=$url2");
}
?>