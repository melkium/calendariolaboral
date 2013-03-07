<?php include ('plantilla/cabecera.php'); ?>
<?php include ('plantilla/menu_admin.php'); ?>  

  <!-- Contenido -->

	<div class="row">
		<form action="alumno_nuevo.php" method="post">
		  <fieldset>
			<legend>Insertar Trabajador</legend>

			<div class="row">
			  <div class="five columns">
			  
				<label>DNI</label>
				<input type="text" id="dni" name="dni" required>
				
				<label>Contraseña</label>
				<input type="text" id="password" name="password" required>
				
				<label>Empresa</label>
				<input type="text" id="empresa" name="empresa" required>

				<label>Centro de trabajo</label>
				<input type="text" id="centro" name="centro" required>
				
				<label>Nombre</label>
				<input type="text" id="nombre" name="nombre" required>

				<label>Primer apellido</label>
				<input type="text" id="apellido1" name="apellido1" required>
				
				<label>Segundo apellido</label>
				<input type="text" id="apellido2" name="apellido2" required>	
				
				<label>Telefono</label>
				<input type="text" id="telefono" name="telefono" >
				
			  </div>
			</div>
			<div class="row">
				<div class="four columns centered">
					<input class="button left" type="submit" value="Enviar" />
					<input class="button right" type="reset" value="Borrar" />
				</div> 
			</div>
		  </fieldset>
		</form>
	</div>

	
  <!-- Fin del contenido -->

<?php include ('plantilla/pie.php'); ?>  


