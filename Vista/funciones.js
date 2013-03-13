
   $(document).ready(function () {
    $("#boton").click(function (){
        $(".error").remove();
        if ($(".dni").val() == "" ) {
            $(".dni").focus().after("<span class='error'>Ingrese un DNI</span>");
            return false;
        }else if( $(".dni").val().length <9){
            $(".dni").focus().after("<span class='error'>El DNI debe contener 9 caracteres</span>");
            return false;
        }else if ($(".contraseña").val()==""){
            $(".contraseña").focus().after("<span class='error'>Debe especificar una contraseña</span>");
            return false;
        }else if( $(".empresa").val() == "" ){
            $(".empresa").focus().after("<span class='error'>Ingrese una empresa</span>");
            return false;
        }else if( $(".centrotrabajo").val() == ""){
            $(".centrotrabajo").focus().after("<span class='error'>Ingrese un centro de trabajo</span>");
            return false;
        }else if( $(".nombre").val() == ""){
            $(".nombre").focus().after("<span class='error'>Ingrese su nombre</span>");
            return false;
        }else if( $(".apellido1").val() == "" ){
            $(".apellido1").focus().after("<span class='error'>Ingrese el primer apellido</span>");
            return false;
        }else if( $(".apellido2").val() == "" ){
            $(".apellido2").focus().after("<span class='error'>Ingrese el segundo apellido</span>");
            return false;
        }else if( $(".telefono").val().length <1){
            $(".telefono").focus().after("<span class='error'>Ingrese un telefono</span>");
            return false;
        }else if (isNaN( $(".telefono").val())){
            $(".telefono").focus().after("<span class='error'>El telefono unicamente debe contener numeros</span>");
            return false;
        }else if ($(".telefono").val().length <9){
            $(".telefono").focus().after("<span class='error'>El telefono debe tener 9 caracteres</span>");
            return false;
        }
    });

    $(".dni, .contraseña, .empresa , .centrotrabajo , .nombre , .apellido1 , .apellido2, .telefono").keyup(function(){
        if( $(this).val() != "" ){
            $(".error").fadeOut();
            return false;
        }
    });
  
});
