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
<title>Villantax Clientes</title>
<link rel="stylesheet" href="./css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="signup">
				<form id="login-form" class="form" action= "/Villantax/3_0/query/insert_update_clnts.php" method="post">
					<div class="title">
					</div>
					<div class="info">
						<label for="chk" aria-hidden="true">Clientes</label>
					<div class="form-container">
						<div class="form-group">
							<input type="text" maxlength="10" class="form-input" id="idclientes" name="idclientes" placeholder="Id Cliente " required/>
							<span class="form-line"></span>
						</div>
						<div class="form-group">
							<input type="text" class="form-input"  name="nombres" placeholder="Nombre " maxlength="35" required/>
							<span class="form-line"></span>
						</div>
						<div class="form-group">
							<input type="text" class="form-input"  name="primer_apellido" placeholder="Primer apellido " maxlength="20" required/>
							<span class="form-line"></span>
						</div>
						<div class="form-group">
							<input type="text" class="form-input"  name="segundo_apellido" placeholder="Segundo apellido " maxlength="20">
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
							<input type="email" class="form-input"  name="email" placeholder="Correo " maxlength="45">
							<span class="form-line"></span>
						</div>

						<button name="ingresar" type="submit" href="/insert_update_clnts.php">Ingresar </button>	
						<button name="modificar" type="submit" href="/insert_update_clnts.php">Modificar </button>
					</form>
					</div>
					
					</div>

				</form>
			</div>

			<div class="login">
				<form id="login-form" class="form" action="/Villantax/3_0/query/delete_cltns.php" method="post">
					<label for="chk" aria-hidden="true">Eliminar</label>
					<input type="text" maxlength="10" class="form-input" id="idclientes" name="idclientes" placeholder="Id Cliente " required/>
					<input type="text" placeholder="Digite Usuario" id="username" name="usuario" required/>
					<input type="password" placeholder="Digite Password" id="password" name="password" required/>
					<button type="submit" href="/query/delete_cltns.php">Confirmar</button>
				</form>
			</div>
			
	</div>

	<div class="main2">
		<div class="container">
			<table>
				<thead>
					<tr>

						<th>CC</th>
						<th>Nombres</th>
						<th>Primer Apellido</th>
						<th>Segundo Apellido</th>
						<th>Direccion</th>
						<th>Email</th>
						<th>Telefono</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while($obj=pg_fetch_object($Consulta)){ ?>
						<tr>

							<td><?php echo $obj->idclientes;?></td>
							<td><?php echo $obj->nombres;?></td>
							<td><?php echo $obj->primer_apellido;?></td>
							<td><?php echo $obj->segundo_apellido;?></td>
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
