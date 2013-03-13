<?php include ('plantilla/cabecera.php'); ?>
<?php include ('plantilla/menu_admin.php'); ?>  
<link rel='stylesheet' href='estilos.css'>
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script src="funciones.js"></script>
<!-- Contenido -->

	<div class="row">
		<form>
		  <fieldset>
			<legend>Insertar Trabajador</legend>

			<div class="row">
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
					<input class="button right" type="reset" value="Borrar" />
				</div> 
			</div>
		  </fieldset>
		</form>
	</div>
</div>

	
  <!-- Fin del contenido -->

<?php include ('plantilla/pie.php'); ?>  


