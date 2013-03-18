 

    function MakeRequestUsuario(page){
      var xmlHttp = getXMLHttp();
      
      xmlHttp.onreadystatechange = function()
      {
        if(xmlHttp.readyState == 4)
        {     
          if(xmlHttp.responseText.length<3){
            document.getElementById('mostrar').innerHTML = mensajes(xmlHttp.responseText);
          }else{
            window.location=xmlHttp.responseText;
          }
        }
      }

      xmlHttp.open("GET", page, true); 
      xmlHttp.send(null);
    }

    
    function BuscarUsuarioPorUserPass(){
      var url = "../Controlador/controladorUsuario.php?codigo="+document.getElementById('codigo').value+"&usuario="+document.getElementById('usuario').value+"&password="+document.getElementById('password').value;
     MakeRequestUsuario(url);
    }

