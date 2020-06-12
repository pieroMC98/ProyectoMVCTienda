				<!-- barra lateral -->
				<aside id="aside">
					<?php if (!isset($_SESSION['identity'])) : ?>
						<h3>Entrar a la web</h3>
						<div id="login" class="block_aside">
							<form action="<?= root ?>usuario/login" method="post">
								<label for="email">Email</label>
								<input type="email" name="email" id="email" />

								<label for="password">Contraseha</label>
								<input type="password" name="password" id="password" />
								<input type="submit" value="Enviar" />
							</form>
						</div>
					<?php else : ?>
						<h3><?= $_SESSION['identity']->nombre ?></h3>
					<?php endif; ?>
					<ul>
						<?php if (isset($_SESSION['admin']) && (true == $_SESSION['admin'])) : ?>
							<li>
								<a href="">Gestionar
									pedidos</a>
							</li>
							<li>
								<a href="">Gestionar
									categoria</a>
							</li>
							<li>
								<a href="">Gestionar</a>
							</li>
						<?php endif; ?>

						<?php if (isset($_SESSION['identity'])) : ?>
							<li>
								<a href="">Mis
									pedidos</a>
							</li>
							<li><a href="<?= root ?>usuario/logout">Cerrar sesi'on</a></li>
						<?php endif ?>
					</ul>
				</aside>
				<div id="central">
					<!-- !barra lateral -->