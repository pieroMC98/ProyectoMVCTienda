<h1>Registro</h1>
<?php if (isset($_SESSION['register'])) : ?>
	<?php if ($_SESSION['register'] == true) : ?>
		<strong>Registro Completado</strong>
	<?php endif ?>

	<?php if ($_SESSION['register'] == false) : ?>
		<strong>Registro Fallido</strong>
		<?php Utils::deleteSession('register'); ?>
	<?php endif; ?>
<?php endif; ?>

<form action="<?= root ?>usuario/save" method="post">
	<label for="name">Nombre:</label>
	<input type="text" name="name" id="name" require />

	<label for="fullname">Apellido:</label>
	<input type="text" name="fullname" require />

	<label for="email">Email:</label>
	<input type="email" name="email" require />

	<label for="pass">Password:</label>
	<input type="password" name="password" id="password" require />
	<input type="submit" value="Enviar">
</form>