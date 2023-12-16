function guardarCrud(){
    var ajaxRequest; 
               try{
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
                }

                catch (e){
                  // Internet Explorer Browsers
                  try{
                   ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                 }

                 catch (e) {
                   try{
                    ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                  }

                  catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                      }
                    }
                  }
          
               ajaxRequest.onreadystatechange = function(){
                if(ajaxRequest.readyState == 4){
                 var ajaxDisplay = document.getElementById('info');
                 ajaxDisplay.innerHTML = ajaxRequest.responseText;
               }
             }
  
               var texto = document.getElementById('nombre').value;

               var queryString = "?nombre=" + texto;
               queryString += "&appat=" + document.getElementById('appat').value;
               queryString += "&apmat=" + document.getElementById('apmat').value;
               queryString += "&rfc=" + document.getElementById('rfc').value;
               queryString += "&domicilio=" + document.getElementById('domicilio').value;
               queryString += "&tel=" + document.getElementById('tel').value;
               queryString += "&mail=" + document.getElementById('mail').value;

            
              ajaxRequest.open("GET", "ajax/saveEmpleado.php" + queryString, true);
              ajaxRequest.send(null); 
}

function buscarCrud(){
    var busqueda = document.getElementById('busqueda').value;
    var parametros = {
      "busqueda": busqueda
     }
    $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'ajax/buscarEmpleado.php', //archivo que recibe la peticion
                type:  'GET', //método de envio
                beforeSend: function () {
                        
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        
                }
          });
    
    
}