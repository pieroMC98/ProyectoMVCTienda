<h1>Registro</h1>
<form action="<?= base_url ?>?controller=usuario&action=save" method="post">
	<label for="name">Nombre:</label>
	<input type="text" name="name" id="name" require />

	<label for="fullname">Apellido:</label>
	<input type="text" name="fullname" require />

	<label for="email">Email:</label>
	<input type="email" name="email" require />

	<label for="pass">Password:</label>
	<input type="password" name="pass" require />
	<input type="submit" value="Enviar">
</form>