$("#div_2").hover(function() {

        $("#ico_ed_2").show();

        $("#ico_el_2").show();

    },

    function() {

        $("#ico_ed_2").hide();

        $("#ico_el_2").hide();

    });



$("#div_3").hover(function() {

        $("#ico_ed_3").show();

        $("#ico_el_3").show();

    },

    function() {

        $("#ico_ed_3").hide();

        $("#ico_el_3").hide();

    });



//Comunicacion con la BD para imagenes de los menus



$("#form-image").on('submit', (function(e) {

    //alert();

    if ($('#form-image input[type=file]').get(0).files.length == 0) {

        $('.alert').show();

        e.preventDefault();

    } else {

        $(".content-message").show();

    }



}));



$('#modalAgregarImagen').on('hidden.bs.modal', function(e) {

    $('.alert').hide();

});



var bookIdEliminarImg;

$('#modalEliminarImagen').on('show.bs.modal', function(e) {

    bookIdEliminarImg = $(e.relatedTarget).data('book-id').substring(8);

    //alert(bookIdEliminarImg)

});



$("#btnEliminarImagen").click(function() {

    //alert(bookIdEliminarImg + "<>" + id_menuVista);

    var id_menu = id_menuVista;

    var id_imagen = bookIdEliminarImg;

    $(".content-message").show();

    $.ajax({

        method: "POST",

        url: base_url + "index.php/Img_menusAdmin/delete",

        data: { id_menu: id_menu, id_imagen: id_imagen }

    }).done(function(data) {

        var myObj = JSON.parse(data);

        if (myObj.status == "OK") {

            window.location.href = base_url + "index.php/MenuAdmin/index?id_menu=" + id_menu;

        } else {

            alert(myObj.respuesta);

            $(".content-message").hide();

        }

    });

});





//Comunicacion con la BD para menus

(function() {

    'use strict';

    window.addEventListener('load', function() {

        // Fetch all the forms we want to apply custom Bootstrap validation styles to

        var forms = document.getElementsByClassName('needs-validation');

        // Loop over them and prevent submission

        var validation = Array.prototype.filter.call(forms, function(form) {

            form.addEventListener('submit', function(event) {

                if (form.checkValidity() === false) {

                    event.preventDefault();

                    event.stopPropagation();

                } else {

                    agregaMenu();

                }

                form.classList.add('was-validated');

                event.preventDefault();

                event.stopPropagation();

            }, false);

        });

    }, false);

})();



(function() {

    'use strict';

    window.addEventListener('load', function() {

        // Fetch all the forms we want to apply custom Bootstrap validation styles to

        var forms = document.getElementsByClassName('needs-validation-edit');

        // Loop over them and prevent submission

        var validation = Array.prototype.filter.call(forms, function(form) {

            form.addEventListener('submit', function(event) {

                if (form.checkValidity() === false) {

                    event.preventDefault();

                    event.stopPropagation();

                } else {

                    editar();

                }

                form.classList.add('was-validated');

                event.preventDefault();

                event.stopPropagation();

            }, false);

        });

    }, false);

})();



var bookIdMod;

$('#modalEditar').on('shown.bs.modal', function(e) {

    //get data-id attribute of the clicked element

    bookIdMod = $(e.relatedTarget).data('book-id').substring(8);

    var id_menu = bookIdMod;

    var nombre_menu = $("#nombre_menu_e").val();

    $.ajax({

        method: "POST",

        url: base_url + "index.php/MenuAdmin/getById",

        data: { id_menu: id_menu, nombre_menu: nombre_menu }

    }).done(function(data) {

        var myObj = JSON.parse(data);

        $("#nombre_menu_e").val(myObj.nombre_menu);



        $(".form-control-edit").prop("disabled", false);

    });

});



$('#modalEditar').on('hidden.bs.modal', function(e) {

    // do something...

    $(".form-control-edit").prop("disabled", true);

    $(".form-control-edit").val("");

});



var bookId;

$('#modalEliminar').on('shown.bs.modal', function(e) {

    //get data-id attribute of the clicked element

    bookId = $(e.relatedTarget).data('book-id').substring(8);

    //alert(bookId);

});



$("#btnEliminar").click(function() {

    var id_menu = bookId;

    $("#content-message").show();

    $.ajax({

        method: "POST",

        url: base_url + "index.php/MenuAdmin/delete",

        data: { id_menu: id_menu }

    }).done(function(data) {

        var myObj = JSON.parse(data);

        if (myObj.status == "OK") {

            window.location.href = base_url + "index.php/MenuAdmin/index";

        } else {

            //$("#alert-login").show();

            //$("#alert-login").text(myObj.respuesta);

            alert(myObj.respuesta);

            $("#content-message").hide();

        }

    });

});



function agregaMenu() {

    var nombre_menu = $("#nombre_menu").val();

    //alert(nombre_ubicacion + "<>" + direccion + "<>" + telefono + "<>" + dias);



    $.ajax({

        method: "POST",

        url: base_url + "index.php/MenuAdmin/add",

        data: { nombre_menu: nombre_menu }

    }).done(function(data) {

        var myObj = JSON.parse(data);

        if (myObj.status == "OK") {

            window.location.href = base_url + "index.php/MenuAdmin/index";

        } else {

            alert(myObj.respuesta);

        }

    });

}



/*$("#btnEditar").click(function() {

    editar();

});*/



function editar() {

    var id_menu = bookIdMod;

    var nombre_menu = $("#nombre_menu_e").val();



    $.ajax({

        method: "POST",

        url: base_url + "index.php/MenuAdmin/update",

        data: { id_menu: id_menu, nombre_menu: nombre_menu }

    }).done(function(data) {

        var myObj = JSON.parse(data);

        if (myObj.status == "OK") {

            window.location.href = base_url + "index.php/MenuAdmin/index";

        } else {

            alert(myObj.respuesta);

        }

    });

}





/* */

$(".ling-menu-comida").click(function() {

    //obtenerMenu($(this).attr('id'));

});