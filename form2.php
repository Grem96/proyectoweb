<form action="registro.php" class="formulario" name="formulario_registro" method="POST">
				<div>
					<div class="input-group">
						<input type="text" id="nombre" name="nombre">
						<label class="label" for="nombre">Nombre:</label>
					</div>
					<div class="input-group">
						<input type="email" id="correo" name="correo">
						<label class="label" for="correo">Correo:</label>
					</div>
					<div class="input-group">
						<input type="password" id="pass" name="pass">
						<label class="label" for="pass">Contraseña:</label>
					</div>
					<div class="input-group">
						<input type="password" id="pass2" name="pass2">
						<label class="label" for="pass2">Repetir Contraseña:</label>
					</div>
					<input type="submit" id="btn-submit" value="Enviar">
				</div>
			</form>