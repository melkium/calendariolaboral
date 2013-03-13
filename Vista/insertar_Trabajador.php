<?php include ('plantilla/cabecera.php'); ?>
<?php include ('plantilla/menu_admin.php'); ?>  
<<<<<<< HEAD

  <!-- Contenido -->

	<div class="row">
		<form action="alumno_nuevo.php" method="post">
=======
<link rel='stylesheet' href='estilos.css'>
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script src="funciones.js"></script>
<!-- Contenido -->

	<div class="row">
		<form>
>>>>>>> 940e7eb517648c97f1b8d9d8fe1cc4918b05b209
		  <fieldset>
			<legend>Insertar Trabajador</legend>

			<div class="row">
<<<<<<< HEAD
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
=======
			  	<div class="five columns">
				<div><label>DNI</label></div>
				<input type="text" id="dni" name="dni" class="dni" value="" style="display: inline;">
				
				<div><label>Contraseña</label></div>
				<input type="text" id="password" name="password" class="contraseña" value="" style="display: inline;">
			
				<div><label>Empresa</label></div>
				<input type="text" id="empresa" name="empresa" class="empresa" value="" style="display: inline;">

				<div><label>Centro de trabajo</label></div>
				<input type="text" id="centro" name="centro" class="centrotrabajo" value="" style="display: inline;">
				
				<div><label>Nombre</label></div>
				<input type="text" id="nombre" name="nombre" class="nombre" value="" style="display: inline;">

				<div><label>Primer apellido</label></div>
				<input type="text" id="apellido1" name="apellido1" class="apellido1" value="" style="display: inline;">
				
				<div><label>Segundo apellido</label></div>
				<input type="text" id="apellido2" name="apellido2" class="apellido2" value="" style="display: inline;">	
				
				<div><label>Telefono</label></div>
				<input type="text" id="telefono" name="telefono" class="telefono" value="" style="display: inline;">
			</div>
			
				
			  </div>

			<div class="row">
				<div class="four columns centered">
					<input class="button left" type="submit" value="Enviar" id="boton" />
>>>>>>> 940e7eb517648c97f1b8d9d8fe1cc4918b05b209
					<input class="button right" type="reset" value="Borrar" />
				</div> 
			</div>
		  </fieldset>
		</form>
	</div>
<<<<<<< HEAD
=======
</div>
>>>>>>> 940e7eb517648c97f1b8d9d8fe1cc4918b05b209

	
  <!-- Fin del contenido -->

<?php include ('plantilla/pie.php'); ?>  


