<?php
require_once 'query/login.php';
$conexion = pg_connect('host='.$hn.' port=5432 dbname='.$db.' user='.$un.' password='.$pw.'');
$tabla="SELECT * FROM public.producto ORDER BY idproducto ASC ";
$Consulta = pg_query($conexion, $tabla);
?>
<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Villantax Productos</title>
	<link rel="stylesheet" href="./css/styleinventario.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>

	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form id="login-form" class="form" action= "/Villantax/3_0/query/insert_update_prdct.php" method="post">
					<div class="title">
					</div>
					<div class="info">
						<label for="chk" aria-hidden="true">Inventario</label>
					<div class="form-container">
						<div class="form-group">
							<input type="text" maxlength="10" class="form-input" id="idproducto" name="idproducto" placeholder="Id Producto " required/>
							<span class="form-line"></span>
						</div>
						<div class="form-group">
							<input type="text" class="form-input"  name="nombre" placeholder="Descripcion " maxlength="35" required/>
							<span class="form-line"></span>
						</div>
						<div class="form-group">
							<input type="text" class="form-input"  name="tipo" placeholder="Tipo " maxlength="20" required/>
							<span class="form-line"></span>
						</div>
						<div class="form-group">
							<input type="text" class="form-input"  name="referencia" placeholder="Referencia " maxlength="20">
							<span class="form-line"></span>
						</div>
						<div class="form-group">
							<input type="text" class="form-input"  name="marca" placeholder="Marca " maxlength="45" required/>
							<span class="form-line"></span>
						</div>
						<div class="form-group">
							<input type="text" class="form-input"  name="existencia" placeholder="Cantidad " maxlength="10" required/>
							<span class="form-line"></span>
						</div>
						<div class="form-group">
							<input type="text" class="form-input"  name="precio_costo" placeholder="Precio Costo " maxlength="45">
							<span class="form-line"></span>
						</div>
						<div class="form-group">
							<input type="text" class="form-input"  name="precio_bruto" placeholder="Precio Bruto " maxlength="45">
							<span class="form-line"></span>
						</div>
						<div class="form-group">
							<input type="text" class="form-input"  name="precio_iva" placeholder="Precio IVA " maxlength="45">
							<span class="form-line"></span>
						</div>
				
						<button name="ingresar_p" type="submit" href="/insert_update_prdct.php">Ingresar </button>	
						<button name="modificar_p" type="submit" href="/insert_update_prdct.php">Modificar </button>
					</form>
					</div>
					
					</div>

				</form>
			</div>

			<div class="login">
				<form id="login-form" class="form" action="/Villantax/3_0/query/delete_prdct.php" method="post">
					<label for="chk" aria-hidden="true">Eliminar</label>
					<input type="text" maxlength="10" class="form-input" id="idproducto" name="idproducto" placeholder="Id Producto " required/>
					<input type="text" placeholder="Digite Usuario" id="username" name="usuario" required/>
					<input type="password" placeholder="Digite Password" id="password" name="password" required/>
					<button type="submit" href="/delete_prdct.php">Confirmar</button>
				</form>
			</div>
			
	</div>

	<div class="main2">
		<div class="container">
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Tipo</th>
						<th>Referencia</th>
						<th>Marca</th>
						<th>Existencia</th>
						<th>Precio Costo</th>
						<th>Precio Bruto</th>
						<th>Iva</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while($obj=pg_fetch_object($Consulta)){ ?>
						<tr>

							<td><?php echo $obj->idproducto;?></td>
							<td><?php echo $obj->nombre;?></td>
							<td><?php echo $obj->tipo;?></td>
							<td><?php echo $obj->referencia;?></td>
							<td><?php echo $obj->marca;?></td>
							<td><?php echo $obj->existencia;?></td>
							<td><?php echo $obj->precio_costo;?></td>
							<td><?php echo $obj->precio_bruto;?></td>
							<td><?php echo $obj->precio_iva;?></td>

						</tr>
				</tbody>
				<?php
					}?>
			</table>
		</div>
	</div>
</body>
</html>
<!-- partial -->

</body>
</html>