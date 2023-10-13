<?php
require_once 'query/login.php';
$conexion = pg_connect('host='.$hn.' port=5432 dbname='.$db.' user='.$un.' password='.$pw.'');
$tabla="SELECT * FROM factura ORDER BY idfactura";
$Consulta = pg_query($conexion, $tabla);
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Villantax Factura</title>
  <link rel="stylesheet" href="./css/stylefactura.css">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>

	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form id="login-form" class="form" action= "/Villantax/3_0/query/insert_update_prvdrs.php" method="post">
					<div class="title">
					</div>
					<div class="info">
					
						<label for="chk" aria-hidden="true">Detalle Cliente</label>
					<div class="form-container">
						<div class="form-group">
							<input type="text" maxlength="10" class="form-input" id="id_nit" name="id_nit" placeholder="Id / NIT " required/>
						
							<span class="form-line"></span>
						</div>
						<button name="cargar_cliente" type="submit" href="/.php">Cargar </button>	
						
						<label for="chk" aria-hidden="true">Detalle Producto</label>
						<div class="form-group">
							<input type="text" class="form-input"  name="idproducto" placeholder="Codigo" maxlength="35" required/>
						
							<span class="form-line"></span>
						</div>

						<div class="form-group">
							<input type="text" class="form-input"  name="cant" placeholder="Cantidad" maxlength="10" required/>
							
							<span class="form-line"></span>
						</div>

				
						<button name="cargar_producto" type="submit" href="/.php">Cargar </button>	

					</form>
					</div>
					</div>
				</form>
			</div>
			<div class="login">
				<form id="login-form" class="form" action=".php" method="post">
					<label for="chk" aria-hidden="true">Observaciones</label>
					<input type="text" maxlength="10" class="form-input" id="obs" name="obs" placeholder="Escribir observacion(es)" required/>
					<button type="submit" href="/.php">Cargar</button>
			</div>
			
	</div>

	<div class="main2">  
		<div class="container">
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>CC</th>
						<th>Fecha</th>
						<th>Descuento</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while($obj=pg_fetch_object($Consulta)){ ?>
						<tr>

							<td><?php echo $obj->idfactura;?></td>
							<td><?php echo $obj->clientes_idclientes;?></td>
							<td><?php echo $obj->fecha;?></td>
							<td><?php echo $obj->descuento;?></td>
							<td><?php echo $obj->total;?></td>
							

						</tr>
				</tbody>
				<?php
					}?>
			</table>
		</div>
		
</body>
</html>
<!-- partial -->
  
</body>
</html>