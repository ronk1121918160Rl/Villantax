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

	$contrasenaEncriptada = password_hash($password, PASSWORD_DEFAULT);

while($fila=pg_fetch_array($result)){
		$r_nombre= $fila['idusuario'];
		$r_pass= $fila['contraseña'];
	
	
}

if ($username==$r_nombre && $r_pass==$password) {

	if ($username=='US1' && $r_pass==$password) { 
	
		echo"Datos correctos!!! <br/><br/>Bienvenido ".$username."<br/><br/>";
		
	
			$url2 ="/Villantax/3_0/menu_admin.html"; 
			$tiempo_espera = 1; 
	
		header("refresh: $tiempo_espera; url=$url2");
		
		}

	else{

	echo"Datos correctos!!! <br/><br/>Bienvenido ".$username."<br/><br/>";
	

		$url2 ="/Villantax/3_0/menu.html"; 
		$tiempo_espera = 1; 

	header("refresh: $tiempo_espera; url=$url2");
	
	}
}
else{
	
	echo "Error al iniciar sesion.";
	echo "Verifica el nombre de usuario o password";
	


	$url1 ="/Villantax/3_0/login.html"; 
	$tiempo_espera = 2; 

	header("refresh: $tiempo_espera; url=$url1");
}

?>