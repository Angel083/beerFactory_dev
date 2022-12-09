var bookIdEditar;
var bookIdEliminar;

var tipo;

$('#modalEditar').on('show.bs.modal', function(e) {

    bookIdEditar = $(e.relatedTarget).data('book-id').substring(8);

    tipo = $(e.relatedTarget).data('tipo');



    //alert(tipo)

});

$('#modalEliminar').on('show.bs.modal', function(e) {

    bookIdEliminar = $(e.relatedTarget).data('book-id').substring(8);

    //tipo = $(e.relatedTarget).data('tipo');

    //alert(bookIdEliminar)

});

$('#modalImagenCompleta').on('show.bs.modal', function(e) {

    //alert($(e.relatedTarget).data('url'));
    $("#imagenCompleta").attr("src",$(e.relatedTarget).data('url'));

});


$("#btnEliminar").click(function() {

    eliminarCard();

});

function eliminarCard(){
    $.ajax({

        method: "POST",

        url: base_url + "index.php/AdminWelcome/delete",

        data: { id_card: bookIdEliminar }

    }).done(function(data) {

        var myObj = JSON.parse(data);
        
        if (myObj.status == "OK") {

            window.location.href = base_url + "index.php/AdminWelcome/index";

        } else {

            alert(myObj.respuesta);

        }

    });
}



$('#modalEditar').on('shown.bs.modal', function(e) {

    //get data-id attribute of the clicked element

    var id_card = bookIdEditar;

    $("#id_card").val(id_card);

    $.ajax({

        method: "POST",

        url: base_url + "index.php/AdminWelcome/getById",

        data: { id_card: id_card }

    }).done(function(data) {

        var myObj = JSON.parse(data);

        $("#titulo_e").val(myObj.titulo);

        $("#contenido_e").val(myObj.contenido);



        $(".form-control-edit").prop("disabled", false);

        if (tipo == "card-front-transparente" || tipo == "card-custom") {

            $("#row-img_vista").show();

        } else {

            $("#row-img_vista").hide();

        }

    });

});



$('#modalEditar').on('hidden.bs.modal', function(e) {

    $(".form-control-edit").prop("disabled", true);

    $(".form-control-edit").prop("value", "");

});



function editar() {

    var titulo = $("#titulo_e").val();

    var contenido = $("#contenido_e").val();

    var id_card = bookIdEditar;

    //var img_fondo = $('#form-image input[type=file]').get(0).files;

    var img_fondo = $('#form-image input[type=file]').get(0).files;

    var img_front = $('#form-image input[type=file]').get(1).files;

    var images = $('#form-image input[type=file]').get(0);

    var formData = new FormData();

    //var files = $('#form-image input[type=file]').get(0).files;

    formData.append('titulo', titulo);

    formData.append('contenido', contenido);

    formData.append('id_card', id_card);

    formData.append('file', img_fondo);

}