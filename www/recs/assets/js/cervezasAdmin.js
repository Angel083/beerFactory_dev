var id_botella = 0;

$('#modalModificarBotella').on('show.bs.modal', function(e) {

    id_botella = $(e.relatedTarget).data('book-id').substring(8);
    
    $.ajax({

        method: "POST",

        url: base_url + "index.php/CervezasAdmin/getByIdBotellas",

        data: { id_imagen: id_botella }

    }).done(function(data) {

        var myObj = JSON.parse(data);
        //alert(myObj.titulo);

        $("#titulo_botella_m").val(myObj.titulo);
        $("#titulo_botella_m").prop("disabled", false);

        $("#descripcion_botella_m").val(myObj.descripcion);
        $("#descripcion_botella_m").prop("disabled", false);
        $("#id_imagen").val(id_botella);
        
        $("#img_botella_m").prop("disabled", false);


         //$(".form-botella-editar").prop("disabled", false);

        /*if (tipo == "card-front-transparente" || tipo == "card-custom") {

            $("#row-img_vista").show();

        } else {

            $("#row-img_vista").hide();

        }*/

    });
    
    //alert(id_botella)

});

$('#modalModificarBotella').on('hide.bs.modal', function(e) {
    $("#titulo_botella_m").prop("disabled", true);
    $("#descripcion_botella_m").prop("disabled", true);
     $("#img_botella_m").prop("disabled", true);
});

$("#form-image").on('submit', (function(e) {

    //alert();

    if ($('#form-image input[type=file]').get(0).files.length === 0) {

        $('.alert').show();

        e.preventDefault();

    } else {

        $(".content-message").show();

    }

}));



$("#form-img-carrousel").on('submit', (function(e) {

    //alert();

    if ($('#form-img-carrousel input[type=file]').get(0).files.length === 0) {

        $('.alert').show();

        e.preventDefault();

    } else {

        $(".content-message").show();

    }

}));



var bookIdEliminarImg;

$('#modalEliminarImagen').on('show.bs.modal', function(e) {

    bookIdEliminarImg = $(e.relatedTarget).data('book-id').substring(8);

    //alert(bookIdEliminarImg)

});

var bookIdEliminarBotella;

$('#modalEliminarBotella').on('show.bs.modal', function(e) {

    bookIdEliminarBotella = $(e.relatedTarget).data('book-id').substring(8);

    //alert(bookIdEliminarBotella)

});

$("#btnEliminarBotella").click(function() {

    var id_imagen = bookIdEliminarBotella;

    $(".content-message").show();

    $.ajax({

        method: "POST",

        url: base_url + "index.php/CervezasAdmin/deleteBotella",

        data: { id_imagen: id_imagen }

    }).done(function(data) {

        var myObj = JSON.parse(data);

        if (myObj.status == "OK") {

            window.location.href = base_url + "index.php/CervezasAdmin/index";

        } else {

            alert(myObj.respuesta);

            $(".content-message").hide();

        }

    });

});



$("#btnEliminarPromocion").click(function() {

    var id_cerveza = bookIdEliminarImg;

    $(".content-message").show();

    $.ajax({

        method: "POST",

        url: base_url + "index.php/CervezasAdmin/delete",

        data: { id_cerveza: id_cerveza }

    }).done(function(data) {

        var myObj = JSON.parse(data);

        if (myObj.status == "OK") {

            window.location.href = base_url + "index.php/CervezasAdmin/index";

        } else {

            alert(myObj.respuesta);

            $(".content-message").hide();

        }

    });

});



var bookIdEliminarImgCarrousel;

$('#modalEliminarImagenCarrousel').on('show.bs.modal', function(e) {

    bookIdEliminarImgCarrousel = $(e.relatedTarget).data('book-id').substring(8);

    //alert(bookIdEliminarImgCarrousel)

});



$("#btnEliminarImgCarrousel").click(function() {

    var id_imagen = bookIdEliminarImgCarrousel;

    $(".content-message").show();

    $.ajax({

        method: "POST",

        url: base_url + "index.php/CarrouselCervezasAdmin/delete",

        data: { id_imagen: id_imagen }

    }).done(function(data) {

        var myObj = JSON.parse(data);

        if (myObj.status == "OK") {

            window.location.href = base_url + "index.php/CervezasAdmin/index";

        } else {

            alert(myObj.respuesta);

            $(".content-message").hide();

        }

    });

});