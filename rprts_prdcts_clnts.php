<?php
require_once 'query/login.php';
$conexion = pg_connect('host='.$hn.' port=5432 dbname='.$db.' user='.$un.' password='.$pw.'');
$tabla="SELECT * FROM clientes ORDER BY numero";
$Consulta = pg_query($conexion, $tabla);
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Villantax Reporte Productos / Clientes</title>
<link rel="stylesheet" href="./css/style.css">
</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>

	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form id="login-form" class="form" action= "/Villantax/3.0/query/.php" method="post">
					<div class="title">
					</div>
					<div class="info">
						<br>
			<br>
            <br>
			<br>
			<br>
			<br> 
						<label for="chk" aria-hidden="true">Productos</label>
					<div class="form-container">
						<div class="form-group">
							<input type="text" maxlength="10" class="form-input" id="idproducto" name="idproducto" placeholder="Codigo Producto " required/>

							<span class="form-line"></span>
						</div>
						<button name="buscar_producto" type="submit" href="/.php">Buscar </button>	

					</form>
					</div>
					
					</div>

			</div>

			<div class="login">
				<form id="login-form" class="form" action=".php" method="post">
					<label for="chk" aria-hidden="true">Clientes</label>
					<input type="text" maxlength="10" class="form-input" id="idcliente" name="idcliente" placeholder="Id / NIT" required/>
					<button type="submit" href="/.php">Cargar</button>
			</div>
			
	</div>


</body>
</html>


</body>
</html>