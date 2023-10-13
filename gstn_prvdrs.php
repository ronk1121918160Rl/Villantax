<?php
require_once 'query/login.php';
$conexion = pg_connect('host='.$hn.' port=5432 dbname='.$db.' user='.$un.' password='.$pw.'');
$tabla="SELECT * FROM public.proveedor ORDER BY id_nit ASC ";
$Consulta = pg_query($conexion, $tabla);
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Villantax Proveedores</title>
  <link rel="stylesheet" href="./css/style_proveedores.css">

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
				<form id="login-form" class="form" action= "/Villantax/3_0/query/insert_update_prvdrs.php" method="post">
					<div class="title">
					</div>
					<div class="info">
					 
						<label for="chk" aria-hidden="true">Proveedores</label>
					<div class="form-container">
						<div class="form-group">
							<input type="text" maxlength="10" class="form-input" id="id_nit" name="id_nit" placeholder="Id / NIT " required/>
						  
							<span class="form-line"></span>
						</div>
						<div class="form-group">
							<input type="text" class="form-input"  name="nombre" placeholder="Nombre / Razon Social" maxlength="35" required/>
						   
							<span class="form-line"></span>
						</div>
						<div class="form-group">
							<input type="text" class="form-input"  name="direccion" placeholder="Direccion " maxlength="45" required/>
						   
							<span class="form-line"></span>
						</div>
						<div class="form-group">
							<input type="text" class="form-input"  name="telefono" placeholder="Numero contacto " maxlength="10" required/>
							
							<span class="form-line"></span>
						</div>
						<div class="form-group">
							<input type="text" class="form-input"  name="email" placeholder="E-Mail " maxlength="45">
						   
							<span class="form-line"></span>
						</div>
				
						<button name="ingresar_pv" type="submit" href="/insert_update_prvdrs.php">Ingresar </button>	
						<button name="modificar_pv" type="submit" href="/insert_update_prvdrs.php">Modificar </button>
					</form>
					</div>
					
					</div>

				  </form>
			</div>

			<div class="login">
				<form id="login-form" class="form" action="/Villantax/3_0/query/delete_prvdrs.php" method="post">
					<label for="chk" aria-hidden="true">Eliminar</label>
					<input type="text" maxlength="10" class="form-input" id="id_nit" name="id_nit" placeholder="Id / NIT " required/>
					<input type="text" placeholder="Digite Usuario" id="username" name="usuario" required/>
					<input type="password" placeholder="Digite Password" id="password" name="password" required/>
					<button type="submit" href="/delete_prvdrs.php">Confirmar</button>
				</form>
			</div>
			
	</div>

	<div class="main2">
		<div class="container">
			<table>
				<thead>
					<tr>
						<th>CC/NIT</th>
						<th>Nombre</th>
						<th>Direccion</th>
						<th>Email</th>
						<th>Telefono</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while($obj=pg_fetch_object($Consulta)){ ?>
						<tr>
							<td><?php echo $obj->id_nit;?></td>
							<td><?php echo $obj->nombre;?></td>
							<td><?php echo $obj->direccion;?></td>
							<td><?php echo $obj->email;?></td>
							<td><?php echo $obj->telefono;?></td>
							

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
