function mensajes(error){
	var retorno="";
	switch(error){
		case "1":
			retorno="<h6>El usuario o la contraseña son incorrectos. Vuelva a intentarlo!</h6>";
			break;

		
	}
	return retorno;
}