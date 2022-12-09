if (window.sessionStorage) {
    var usuario = sessionStorage.getItem("usuario");
    if(usuario === null){
        if(login === true){
            
        }else{
            window.location.href = base_url + "index.php/HomeWM/index";
        }
        //alert(usuario);
    }else{
        if(login === false){
            
        }else{
            if(login === true){
               window.location.href = base_url + "index.php/AdminWelcome/index"; 
            }
        }
    }
  //sessionStorage.setItem("nombre", "Gonzalo");
    //
}
else
 {
     alert('Tu navegador no soporta los recursos necesarios para el administador de contenido');
  throw new Error('Tu Browser no soporta sessionStorage!');
}

$("#btnLogout").click(function() {
    sessionStorage.removeItem("usuario");
   window.location.href = base_url + "index.php/HomeWM/index";
});


$("#btnLogin").click(function() {
    var forms = document.getElementsByClassName('needs-validation');

    var validation = Array.prototype.filter.call(forms, function(form) {

        form.addEventListener('click', function(event) {
            $("#content-message").show();

            if (form.checkValidity() === false) {

                event.preventDefault();

                event.stopPropagation();

            } else {
                if (window.sessionStorage) {
                    $.ajax({

                        method: "POST",
    
                        url: base_url + "index.php/HomeWM/validar_login",
    
                        data: { user: $("#user").val(), password: $("#password").val() }
    
                    }).done(function(data) {
                        
    
                        var myObj = JSON.parse(data);
    
                        if (myObj.status == "OK") {
                            sessionStorage.setItem("usuario", $("#user").val());
                            window.location.href = base_url + "index.php/AdminWelcome/index";
    
                        } else {
    
                            $("#alert-login").show();
    
                            $("#alert-login").text(myObj.respuesta);
                        }
                        $("#content-message").hide();
    
                    })
                    .fail(function() {
                        $("#content-message").hide();
                        $("#alert-login").text("Error de red");
                      });
                  //sessionStorage.setItem("nombre", "Gonzalo");
                    //sessionStorage.removeItem("nombre");
                  //var nombre = sessionStorage.getItem("nombre");
                }
                else
                 {
                     alert('Tu navegador no soporta los recursos necesarios para el administador de contenido');
                  throw new Error('Tu Browser no soporta sessionStorage!');
                }

                

            }

            form.classList.add('was-validated');

        }, false);

    });

});