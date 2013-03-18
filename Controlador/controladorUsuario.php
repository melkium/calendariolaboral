<?php

session_start();
require_once "../Modelo/BD/trabajadorBD.php";


	if (isset($_REQUEST)){

	switch ($_REQUEST['codigo'])
	{
		case 0: //Login
		
		$trabajador = TrabajadorBD::obtenerUsuarioPorUsername($_REQUEST['usuario'],$_REQUEST['password']);

		if ($trabajador)
		{	

			$_SESSION['sesion']  = true;
			$_SESSION['rol']  = $trabajador->getPerfil()->getRol();
			

			switch ($_SESSION['rol']->getId()){
				case 0://administrador
						$url="../Vista/administrador.php";
					break;
				
			}	

			echo $url;
		}
		else
		{
			echo "1";		
		}
		break;
		}
	}

?>