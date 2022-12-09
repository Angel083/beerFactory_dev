var bookIdMod;



function registraEvento() {

    var nombre_evento = $("#nombre_evento").val();

    var lugar = $("#lugar").val();

    var fecha = $("#fecha").val();

    var hora = $("#hora").val();

    var url_evento = $("#url_evento").val();

    var descripcion = $("#descripcion").val();

    var promocion = $("#url_promocion").val();



    $.ajax({

        method: "POST",

        url: base_url + "index.php/CalendarioAdmin/ingresaEvento",

        data: { nombre_evento: nombre_evento, lugar: lugar, fecha: fecha, hora: hora, url_evento: url_evento, descripcion: descripcion, promocion: promocion }

    }).done(function(data) {

        var myObj = JSON.parse(data);

        if (myObj.status == "OK") {

            window.location.href = base_url + "index.php/CalendarioAdmin/index";

        } else {

            //$("#alert-login").show();

            //$("#alert-login").text(myObj.respuesta);

            alert(myObj.respuesta);

        }

    });

}



function editarEvento() {

    var nombre_evento = $("#nombre_evento_e").val();

    var lugar = $("#lugar_e").val();

    var fecha = $("#fecha_e").val();

    var hora = $("#hora_e").val();

    var url_evento = $("#url_evento_e").val();

    var descripcion = $("#descripcion_e").val();

    var promocion = $("#url_promocion_e").val();





    $.ajax({

        method: "POST",

        url: base_url + "index.php/CalendarioAdmin/actualizaEvento",

        data: { id_evento: bookIdMod.substring(8), nombre_evento: nombre_evento, lugar: lugar, fecha: fecha, hora: hora, url_evento: url_evento, descripcion: descripcion, promocion: promocion }

    }).done(function(data) {

        var myObj = JSON.parse(data);

        if (myObj.status == "OK") {

            window.location.href = base_url + "index.php/CalendarioAdmin/index";

        } else {

            alert(myObj.respuesta);

        }

    });

}



var bookId;

$('#modalEliminar').on('shown.bs.modal', function(e) {

    //get data-id attribute of the clicked element

    bookId = $(e.relatedTarget).data('book-id');
    alert(bookId);
});





$('#modalModificar').on('shown.bs.modal', function(e) {

    //get data-id attribute of the clicked element

    bookIdMod = $(e.relatedTarget).data('book-id');

    var id_evento = bookIdMod.substring(8);

    $.ajax({

        method: "POST",

        url: base_url + "index.php/CalendarioAdmin/consultaEvento",

        data: { id_evento: id_evento }

    }).done(function(data) {

        var myObj = JSON.parse(data);

        //if (myObj.status == "OK") {

        // window.location.href = "http://www.onexo.mx/beer_factory/index.php/CalendarioAdmin/index";

        //} else {

        //$("#alert-login").show();

        //$("#alert-login").text(myObj.respuesta);

        $("#nombre_evento_e").val(myObj.nombre_evento);

        $("#lugar_e").val(myObj.lugar);

        $("#fecha_e").val(myObj.fecha);

        $("#hora_e").val(myObj.hora);

        $("#url_evento_e").val(myObj.url_evento);

        $("#descripcion_e").val(myObj.descripcion);

        $("#url_promocion_e").val(myObj.promocion);



        $(".form-control-edit").prop("disabled", false);

        //}

    });

    //alert(bookIdMod);

});



$("#btnEditar").click(function() {

    editarEvento();

});

$(".btnEliminarEvent").click(function() {
    //alert($(this).attr('id').substring(7));
    id_evento = $(this).attr('id').substring(7);
    $.ajax({

        method: "POST",

        url: base_url + "index.php/CalendarioAdmin/eliminarEvento",

        data: { id_evento: id_evento }

    }).done(function(data) {

        var myObj = JSON.parse(data);

        if (myObj.status == "OK") {

            window.location.href = base_url + "index.php/CalendarioAdmin/index";

        } else {

            alert(myObj.respuesta);

        }

    });
});


$("#btnEliminar").click(function() {

    var id_evento = bookId.substring(8);

    $.ajax({

        method: "POST",

        url: base_url + "index.php/CalendarioAdmin/eliminarEvento",

        data: { id_evento: id_evento }

    }).done(function(data) {

        var myObj = JSON.parse(data);

        if (myObj.status == "OK") {

            window.location.href = base_url + "index.php/CalendarioAdmin/index";

        } else {

            alert(myObj.respuesta);

        }

    });

});