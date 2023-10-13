<?php
require_once 'query/login.php';
$conexion = pg_connect('host='.$hn.' port=5432 dbname='.$db.' user='.$un.' password='.$pw.'');
$tabla="SELECT * FROM usuario ORDER BY idusuario";
$Consulta = pg_query($conexion, $tabla);
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Villantax Usuario</title>
<link rel="stylesheet" href="./css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="signup">
				<form id="login-form" class="form" action= "/Villantax/3_0/query/gstn_srs.php" method="post">
					<div class="title">
					</div>
					<div class="info">
						<label for="chk" aria-hidden="true">Admin Usuario</label>
					<div class="form-container">
						<div class="form-group">
							<input type="text" maxlength="3" class="form-input" id="idusuario" name="idusuario" placeholder="Id Usuario " required/>
							<span class="form-line"></span>
						</div>
						<div class="form-group">
							<input type="text" class="form-input"  name="idempleado" placeholder="Identificacion Empleado " maxlength="35" required/>
							<span class="form-line"></span>
						</div>
						<div class="form-group">
							<input type="text" class="form-input"  name="contraseña" placeholder="Contraseña " maxlength="20" required/>
							<span class="form-line"></span>
						</div>
						

						<button name="ingresar" type="submit" href="/gstn_srs.php">Ingresar </button>	
						<button name="modificar" type="submit" href="/gstn_srs.php">Modificar </button>
					</form>
					</div>
					
					</div>

				</form>
			</div>

			<div class="login">
				<form id="login-form" class="form" action="/Villantax/3_0/query/gstn_srs.php" method="post">
					<label for="chk" aria-hidden="true">Eliminar</label>
					<input type="text" maxlength="10" class="form-input" id="idusuario" name="idusuario" placeholder="Id Usuario " required/>
					<input type="text" placeholder="Digite Usuario" id="username" name="usuario" required/>
					<input type="password" placeholder="Digite Password" id="password" name="password" required/>
					<button type="submit" href="/query/delete_srs.php">Confirmar</button>
				</form>
			</div>
			
	</div>

	<div class="main2">
		<div class="container">
			<table>
				<thead>
					<tr>

						<th>ID USUARIO</th>
						<th>CC</th>
						<th>CONTRASEÑA</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while($obj=pg_fetch_object($Consulta)){ ?>
						<tr>

							<td><?php echo $obj->idusuario;?></td>
							<td><?php echo $obj->idempleado;?></td>
							<td><?php echo $obj->contraseña;?></td>

							

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
