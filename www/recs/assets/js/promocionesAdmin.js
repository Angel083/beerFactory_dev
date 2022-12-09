$("#form-image").on('submit', (function(e) {

    //alert();

    if ($('#form-image input[type=file]').get(0).files.length == 0) {

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



$("#btnEliminarPromocion").click(function() {

    //alert(bookIdEliminarImg + "<>" + id_menuVista);

    var id_promocion = bookIdEliminarImg;

    $(".content-message").show();

    $.ajax({

        method: "POST",

        url: base_url + "index.php/PromocionesAdmin/delete",

        data: { id_promocion: id_promocion }

    }).done(function(data) {

        var myObj = JSON.parse(data);

        if (myObj.status == "OK") {

            window.location.href = base_url + "index.php/PromocionesAdmin/index";

        } else {

            alert(myObj.respuesta);

            $(".content-message").hide();

        }

    });

});