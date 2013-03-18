
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

		<form action="../Controlador/controladorUsuario.php" name="login" method="POST">
			<input id='codigo' type="hidden" name="codigo" value="0">

			<div class="row collapse">
				<div class="three columns"><label class="inline">Usuario</label></div>
				<div class="nine columns"><input type="text" name="usuario" id="usuario" placeholder="usuario" />
			</div>
			<div class="row collapse">
			<div class="three columns"><label class="inline">Contraseña</label></div>
			<div class="nine columns"><input type="password" id="password" name="password" placeholder="contraseña" />
			</div>		

				
			<input type="button" class="radius button" value="Acceder" onClick="BuscarUsuarioPorUserPass()"/>	
      		<div id="mostrar"></div>

		</form> 
        </li>        
      </ul>
    </div>  
  </div>

<?php include ('plantilla/pie.php'); ?>