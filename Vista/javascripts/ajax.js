 
    function getXMLHttp(){
      var xmlHttp

      try
      {
        //Firefox, Opera 8.0+, Safari
        xmlHttp = new XMLHttpRequest();
      }
      catch(e)
      {
        //Internet Explorer
        try
        {
          xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch(e)
        {
          try
          {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
          }
          catch(e)
          {
            alert("Your browser does not support AJAX!")
            return false;
          }
        }
      }
      return xmlHttp;
    }

    function MakeRequest(page){
      var xmlHttp = getXMLHttp();
      
      xmlHttp.onreadystatechange = function()
      {
        if(xmlHttp.readyState == 4)
        {     
          if(xmlHttp.responseText.length<3){//saca el error
            document.getElementById('mostrar').innerHTML = mensajes(xmlHttp.responseText);
          }else{
            document.getElementById('mostrar').innerHTML = xmlHttp.responseText;
          }
        }
      }

      xmlHttp.open("GET", page, true); 
      xmlHttp.send(null);
    }

    

