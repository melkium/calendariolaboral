
<?php include ('plantilla/cabecera.php'); ?>

	<!-- Validador de los datos del login -->
	<script src="./javascripts/validar_login.js"></script>

  <div class="row">

  
    <div class="eight columns centered">

      <dl class="contained tabs">
        <dd class="active"><a href="#loginForm">Login</a></dd>       
      </dl>

      <ul class="tabs-content contained">
        <li id="loginFormTab" class="active">
		<form action="_administrador.php" name="login" method="POST">
			<div class="row collapse">
				<div class="three columns"><label class="inline">Usuario</label></div>
				<div class="nine columns"><input type="text" name="usuario" id="usuario" placeholder="usuario" />
			</div>
			<div class="row collapse">
			<div class="three columns"><label class="inline">Contraseña</label></div>
			<div class="nine columns"><input type="password" id="password" name="password" placeholder="contraseña" />
			</div>		
			<input type="submit" class="radius button" value="Acceder"/>	
		</form> 
        </li>        
      </ul>
    </div>  
  </div>

<?php include ('plantilla/pie.php'); ?>