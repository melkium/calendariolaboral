<?php include('plantilla/cabecera.php');?>
<?php include('plantilla/menu_trabajador.php');?>

  <!-- Contenido -->

<div class="four columns">
<p></p>
	
	<form>
		<input type="text" id="datepickerSolicitarFecha">
		<label for="radio4"><input name="radio2" type="radio" id="vacacion" CHECKED> Vacaciones</label>
      	<label for="radio5"><input name="radio2" type="radio" id="baja"> Baja laboral</label><br><br>
	 	<input type="submit" class="small button" name="solicitar" value="Solicitar"> 
	</form>

</div>
     

  <!-- Fin del contenido -->

<?php include('plantilla/pie.php');?>