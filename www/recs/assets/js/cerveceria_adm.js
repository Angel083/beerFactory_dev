$('.alert').hide();
var id_eliminar_procesos;


$("#btnEliminar").click(function() {

    $.ajax({

        method: "POST",

        url: base_url + "index.php/AdminWelcome/eliminarImgGaleria",

        data: { id_imagen: bookId, }

    }).done(function(data) {

        var myObj = JSON.parse(data);

        if (myObj.status == "OK") {

            window.location.href = base_url + "index.php/AdminWelcome/cerveceria";

        } else {

            $("#alert-login").show();

            $("#alert-login").text(myObj.respuesta);

        }

    });

});


$("#btnEliminarProceso").click(function() {

    $.ajax({

        method: "POST",

        url: base_url + "index.php/AdminWelcome/eliminarImgProceso",

        data: { id_imagen: id_eliminar_procesos, }

    }).done(function(data) {

        var myObj = JSON.parse(data);

        if (myObj.status == "OK") {

            window.location.href = base_url + "index.php/AdminWelcome/cerveceria";

        } else {

            alert("Algo fallo, intentar nuevamente");

        }

    });

});



$('#subir').on('hidden.bs.modal', function(e) {

    $('.alert').hide();

});

$('#eliminar-proceso').on('shown.bs.modal', function(e) {

        //get data-id attribute of the clicked element

        id_eliminar_procesos = $(e.relatedTarget).data('book-id');
        //alert(id_eliminar_procesos);
});




$("#form-image").on('submit', (function(e) {

    if ($('#form-image input[type=file]').get(0).files.length == 0) {

        $('.alert').show();

        //$('.alert').show();

        e.preventDefault();

    }
}));