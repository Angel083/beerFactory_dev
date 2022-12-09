$("#container-contacto").hide();



$("#btn_trabajo").click(function() {

    $("#container-trabajo").show();

    $("#img-unete").show();

    $("#container-contacto").hide();

    $("#btn_trabajo").addClass("w-current w--current");

    $("#btn_contacto").removeClass("w--current");

});



$("#btn_contacto").click(function() {

    $("#container-trabajo").hide();

    $("#img-unete").hide();

    $("#container-contacto").show();

    $("#btn_contacto").addClass("w-current w--current");

    $("#btn_trabajo").removeClass("w--current");

});

/**
     * Convierte un texto de la forma 2017-01-10 a la forma
     * 10/01/2017
     *
     * @param {string} texto Texto de la forma 2017-01-10
     * @return {string} texto de la forma 10/01/2017
     *
     */
    function formato(texto){
      return texto.replace(/^(\d{4})-(\d{2})-(\d{2})$/g,'$3/$2/$1');
    }
    
    var tipo_empleo = "";

$('#trabaja_actualmente').on('change', function() {
  if($("#trabaja_actualmente option:selected").text() === "No"){
      $("#tipo_empleo").attr("disabled",true);
      tipo_empleo = "";
  }else{
      $("#tipo_empleo").attr("disabled",false);
      tipo_empleo = $("#tipo_empleo option:selected").text();
  }
});

function enviarEmailRecultamiento(){
    var nombre = $("#nombre").val();
    var fecha_nacimiento = $("#fecha_nacimiento").val();
    var salida_fecha = formato(fecha_nacimiento);
    var lugar_nacimiento = $("#lugar_nacimiento").val();
    var sexo = $("#sexo option:selected").text();
    var estado_civil = $("#estado_civil option:selected").text();
    var telefono = $("#telefono_recultamiento").val();
    var email = $("#email_reclutamiento").val();
    var ultimo_grado_estudio = $("#ultimo_grado_estudio option:selected").text();
    var estudia_actualmente = $("#estudia_actualmente option:selected").text();
    var trabaja_actualmente = $("#trabaja_actualmente option:selected").text();
    
    var descripcion = $("#descripcion").val();
    
    if($("#trabaja_actualmente option:selected").text() === "No"){
      tipo_empleo = "";
    }else{
        tipo_empleo = $("#tipo_empleo option:selected").text();
    }
    
    
    
    /*alert("nombre: " + nombre + "\n fecha_nacimiento: " + salida_fecha + "\n lugar_nacimiento: " + lugar_nacimiento + "\n sexo: " + sexo + "\n estado_civil: " + estado_civil + "\n telefono: " + telefono + "\n email: " + email + "\n ultimo_grado_estudio: " + ultimo_grado_estudio + "\n estudia_actualmente: " + estudia_actualmente + "\n trabaja_actualmente: " + trabaja_actualmente + "\n tipo_empleo: " + tipo_empleo + " \n descripcion: " + descripcion);*/
    
    $('#modalSend').modal('show');
    $("#message").text("Enviando correo....");
    $('#modalSend').modal({backdrop: 'static', keyboard: false})  
    $.ajax({

        method: "POST",

        url: base_url + "index.php/Contacto/enviarCorreoReclutamiento",

        data: { nombre: nombre, fecha_nacimiento: fecha_nacimiento, lugar_nacimiento: lugar_nacimiento, sexo: sexo, estado_civil: estado_civil, telefono: telefono, email: email, ultimo_grado_estudio: ultimo_grado_estudio, estudia_actualmente: estudia_actualmente, trabaja_actualmente:trabaja_actualmente,tipo_empleo:tipo_empleo,descripcion:descripcion}

    }).done(function(data) {
        if(data === 'Email Successfully Send !'){
            $("#message").text("Correo enviado, en breve nos comunicaremos contigo");
            $("#loading").hide();
            $("#sucess").show();
            setTimeout(hideModal,5000);
        }else{
            $("#message").text("Correo no enviado, por favor intente mas tarde");
        }
        
        /*var myObj = JSON.parse(data);

        if (myObj.status == "OK") {

            window.location.href = base_url + "index.php/UbicacionesAdmin/index";

        } else {

            //$("#alert-login").show();

            //$("#alert-login").text(myObj.respuesta);

            alert(myObj.respuesta);

        }*/

    });
}

function hideModal(){
    $('#modalSend').modal('hide');
    window.location.replace(base_url);
}

function enviarEmailContacto(){
    var nombre = $("#nombre_contacto").val();
    var telefono = $("#telefono_contacto").val();
    var email = $("#email_contacto").val();
    var edad = $("#edad").val();
    var sucursal = $("#sucursales option:selected").text();
    var comentarios = $("#comentarios option:selected").text();
    var descripcion = $("#descripcion_contacto").val();
    
    // Envia los datos solicitados para los nuevos tags
    var nombreSend = function(msg) {
                        //key               value
        msg.payload["BF_CampoNombre"] = nombre;
    };
    ORA.analytics.addMutation("myuniqueid", nombreSend);
    ORA.click()
    
    var telefonoSend = function(msg) {
        //key               value
        msg.payload["BF_CampoTelefono"] = telefono;
    };
    ORA.analytics.addMutation("myuniqueid", telefonoSend);
    ORA.click()
    var emailSend = function (msg) {
        //key               value
        msg.payload["BF_CampoEmail"] = email;
    };
    ORA.analytics.addMutation("myuniqueid", emailSend);
    ORA.click()
    var edadSend = function (msg) {
        //key               value
        msg.payload["BF_CampoEdad"] = edad;
    };
    ORA.analytics.addMutation("myuniqueid", edadSend);
    ORA.click()
    
    
    /*alert("nombre: " + nombre + "\n fecha_nacimiento: " + "\n telefono: " + telefono + "\n email: " + email + "\n edad: " + edad +  "\n sucursal: " + sucursal + "\n comentarios: " + comentarios + " \n descripcion: " + descripcion);*/
    $('#modalSend').modal('show');
    $("#message").text("Enviando correo....");
    $('#modalSend').modal({backdrop: 'static', keyboard: false})  
    $.ajax({

        method: "POST",

        url: base_url + "index.php/Contacto/enviarCorreoContacto",

        data: { nombre: nombre, telefono: telefono, email: email, edad: edad, sucursal: sucursal, comentarios: comentarios, descripcion: descripcion}

    }).done(function(data) {
        if(data === 'Email Successfully Send !'){
            $("#message").text("Correo enviado, gracias por darnos tu opinion");
            $("#loading").hide();
            $("#sucess").show();
            setTimeout(hideModal,5000);
        }else{
            $("#message").text("Correo no enviado, por favor intente mas tarde");
        }

    });
}