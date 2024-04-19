// Realizar una petición fetch para obtener los datos desde el servidor
fetch('./backend-php/perfil-backend.php')
    .then(response => {
        if (!response.ok) {
            throw new Error('Error al obtener los datos: ' + response.status);
        }
        // Devolver la respuesta como JSON
        return response.json();
    })
    .then(datos => {
        console.log(datos);

        if(datos.redireccion){
            var usuarioDB = "?usuario="+datos.objRegistro[0].usuario;
            var url = window.location.href = datos.redireccion+usuarioDB;
            console.log("url: "+url);
        }else{
            if (!datos.objRegistro) {
                alert(datos.error);
            } else {
                //var datosPrincipales = "Bienvenido Nestor Fernandez Valdivia (nesti2024)"
                var datosPrincipales = `Bienvenido ${datos.objRegistro[0].nombre} 
                                                   ${datos.objRegistro[0].apellido} 
                                                  (${datos.objRegistro[0].usuario})`;

                document.querySelector("#datosPrincipales").textContent = datosPrincipales;

                
                // var linkInvitacion = `http://ayni.com/registro.php?usuario=${datos.objRegistro[0].usuario}`;
                // document.querySelector("#link-invitacion").textContent = linkInvitacion;

                // var linkHREF = document.querySelector("#link-invitacion");
                // linkHREF.href = linkInvitacion;

                var linkLocal = `http://localhost/projectZero/registro.php?usuario=${datos.objRegistro[0].usuario}`;
                // var linkLocal = `http://localhost/projectZero?usuario=${datos.objRegistro[0].usuario}`;
                document.querySelector("#link-invitacion").textContent = linkLocal;
                var linkLocalHref = document.querySelector("#link-invitacion");
                linkLocalHref.href = linkLocal;


                // http://localhost/projectZero/perfil.php
                //console.log(datos.objRegistro[0].url); // Acceder al nombre del primer registro
            }
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });


    document.querySelector("#btn-copiar").addEventListener("click", function(){
        var linkCopiado = document.querySelector("#link-invitacion");
        var enlace = linkCopiado.textContent;
    
        // Crear un elemento de texto temporal
        var textarea = document.createElement("textarea");
        textarea.value = enlace;
        document.body.appendChild(textarea);
    
        // Seleccionar y copiar el texto
        textarea.select();
        
            var copiado = document.execCommand('copy');
            if (copiado) {
                // Cambiar el valor del atributo "value" del botón
                document.querySelector("#btn-copiar").value = "Copiado";
    
                // Después de 3 segundos, restaurar el valor del botón
                setTimeout(function() {
                    document.querySelector("#btn-copiar").value = "Copiar   ";
                }, 2000);
            }
        
    
        // Eliminar el elemento temporal
        document.body.removeChild(textarea);
    });
    
    
    
    
    
    
    
    


    // ************************************************************************************************




