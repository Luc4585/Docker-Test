<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD PHP</title>
</head>
<body>
	<div>
		<form action="">
			<h1>Crear usuario</h1>
			<input type="text" name="nombre" placeholder="Juan">
			<input type="text" name="apellido" placeholder="Perez" >
			<input type="text" name="user name" placeholder="iLHost">
			<input type="text" name="password">
			<input type="text" name="email"	placeholder="tunombre@gmail.com">

			<input type="submit" name="Agregar usuario">
		</form>
	</div>
	<div>
		<h2>Usuarios registrados</h2>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>User name</th>
					<th>Password</th>
					<th>Email</th>

					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
	
					<th><a href="Editar"> </a> </th>
					<th><a href="Eliminar"> </a> </th>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>