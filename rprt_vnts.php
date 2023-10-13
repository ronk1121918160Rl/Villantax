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
  <title>Villantax Reporte Ventas</title>
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
				<form id="login-form" class="form" action= ".php" method="post">
					<div class="title">
					</div>
					<div class="info">
						<br>
			<br>
            <br>
			<br>
			<br>
			<br> 
						<label for="chk" aria-hidden="true">Detalle Producto</label>
					<div class="form-container">
						<div class="form-group">
							<input type="text" maxlength="10" class="form-input" id="id_nit" name="id_nit" placeholder="Codigo Producto " required/>
						  
							<span class="form-line"></span>
						</div>
						<button name="buscar_producto" type="submit" href="/.php">Buscar </button>	

					</form>
					</div>
					
					</div>

			</div>

			<div class="login">
				<form id="login-form" class="form" action=".php" method="post">
					<label for="chk" aria-hidden="true">Observaciones</label>
					<input type="text" maxlength="10" class="form-input" id="obs" name="obs" placeholder="Escribir observacion(es)" required/>
					<button type="submit" href="/.php">Cargar</button>
			</div>
			
	</div>

	<!-- <div class="main2">  
		<form id="login-form" class="form" action=".php" method="post">
			<label for="chk" aria-hidden="true">Reporte Ventas</label>
			<br>
			<!-- <br> aparecer los datos del producto con el id en detalle de producto-->
			<br>
			<br>
			<!-- <br> aparecer una tabla en la que muestre los datos del inventario y ventas del producto-->
			<br>
			<br>
			<!-- <br> aparecer dos cuadros para colocar los datos de la tabla y se multiplican por el valor de precio fac y precio->
            <!-- <br> aparecer dos cuadros para colocar las observaciones cargadas->

                <!-- partial -->
                <br>
			<!-- <button type="submit" href="/.php">Imprimir</button>
		</form> -->
	</div> 
</body>
</html>

  
</body>
</html>