var bookIdMod;



function guardarUbicacion() {

    var nombre_ubicacion = $("#nombre_ubicacion").val();

    var direccion = $("#direccion").val();

    var telefono = $("#telefono").val();

    var dias = $("#dias").val();

    var latitud = $("#latitud").val();

    var longitud = $("#longitud").val();

    //alert(nombre_ubicacion + "<>" + direccion + "<>" + telefono + "<>" + dias);



    $.ajax({

        method: "POST",

        url: base_url + "index.php/UbicacionesAdmin/agregaUbicacion",

        data: { nombre_ubicacion: nombre_ubicacion, direccion: direccion, telefono: telefono, dias: dias, latitud: latitud, longitud: longitud }

    }).done(function(data) {

        var myObj = JSON.parse(data);

        if (myObj.status == "OK") {

            window.location.href = base_url + "index.php/UbicacionesAdmin/index";

        } else {

            //$("#alert-login").show();

            //$("#alert-login").text(myObj.respuesta);

            alert(myObj.respuesta);

        }

    });

}



var bookId;

$('#modalEliminar').on('shown.bs.modal', function(e) {

    //get data-id attribute of the clicked element

    bookId = $(e.relatedTarget).data('book-id');

    //alert(bookId);

});



$("#btnEliminar").click(function() {

    var id_ubicacion = bookId.substring(8);



    $.ajax({

        method: "POST",

        url: base_url + "index.php/UbicacionesAdmin/eliminarUbicacion",

        data: { id_ubicacion: id_ubicacion }

    }).done(function(data) {

        var myObj = JSON.parse(data);

        if (myObj.status == "OK") {

            window.location.href = base_url + "index.php/UbicacionesAdmin/index";

        } else {

            //$("#alert-login").show();

            //$("#alert-login").text(myObj.respuesta);

            alert(myObj.respuesta);

        }

    });

});



var latitud;

var longitud;

$('#modalModificar').on('shown.bs.modal', function(e) {

    //get data-id attribute of the clicked element

    bookIdMod = $(e.relatedTarget).data('book-id');

    var id_ubicacion = bookIdMod.substring(8);

    $.ajax({

        method: "POST",

        url: base_url + "index.php/UbicacionesAdmin/consultaUbicacion",

        data: { id_ubicacion: id_ubicacion }

    }).done(function(data) {

        var myObj = JSON.parse(data);

        $("#nombre_ubicacion_e").val(myObj.nombre_ubicacion);

        $("#direccion_e").val(myObj.direccion);

        $("#telefono_e").val(myObj.telefono);

        $("#dias_e").val(myObj.dias);

        $("#latitud_e").val(myObj.latitud);

        latitud = myObj.latitud;

        $("#longitud_e").val(myObj.longitud);

        longitud = myObj.longitud;



        $(".form-control-edit").prop("disabled", false);

        initializeMap(myObj.latitud, myObj.longitud);

    });





});



$('#modalAgregar').on('shown.bs.modal', function(e) {

    initialize();

});



$("#btnEditar").click(function() {

    editarUbicacion();

});



function editarUbicacion() {

    var nombre_ubicacion = $("#nombre_ubicacion_e").val();

    var direccion = $("#direccion_e").val();

    var telefono = $("#telefono_e").val();

    var dias = $("#dias_e").val();

    var latitud = $("#latitud_e").val();

    var longitud = $("#longitud_e").val();


    $.ajax({

        method: "POST",

        url: base_url + "index.php/UbicacionesAdmin/actualizaUbicacion",

        data: { id_ubicacion: bookIdMod.substring(8), nombre_ubicacion: nombre_ubicacion, direccion: direccion, telefono: telefono, dias: dias, latitud: latitud, longitud: longitud }

    }).done(function(data) {

        var myObj = JSON.parse(data);

        if (myObj.status == "OK") {

            window.location.href = base_url + "index.php/UbicacionesAdmin/index";

        } else {

            alert(myObj.respuesta);

        }

    });

}



function initializeMap(latitud, longitud) {

    // Creating map object

    var map = new google.maps.Map(document.getElementById('map_canvas'), {

        zoom: 16,

        center: new google.maps.LatLng(latitud, longitud),

        mapTypeId: google.maps.MapTypeId.ROADMAP

    });



    // creates a draggable marker to the given coords

    var vMarker = new google.maps.Marker({

        position: new google.maps.LatLng(latitud, longitud),

        draggable: true

    });



    // adds a listener to the marker

    // gets the coords when drag event ends

    // then updates the input with the new coords

    google.maps.event.addListener(vMarker, 'dragend', function(evt) {



        $("#latitud_e").val(evt.latLng.lat().toFixed(6));

        $("#longitud_e").val(evt.latLng.lng().toFixed(6));



        map.panTo(evt.latLng);

    });



    // centers the map on markers coords

    map.setCenter(vMarker.position);



    // adds the marker on the map

    vMarker.setMap(map);

}



function initialize() {

    // Creating map object

    var map = new google.maps.Map(document.getElementById('map_agregar'), {

        zoom: 14,

        center: new google.maps.LatLng(19.4326077, -99.13320799999997),

        mapTypeId: google.maps.MapTypeId.ROADMAP

    });



    // creates a draggable marker to the given coords

    var vMarker = new google.maps.Marker({

        position: new google.maps.LatLng(19.4326077, -99.13320799999997),

        draggable: true

    });



    // adds a listener to the marker

    // gets the coords when drag event ends

    // then updates the input with the new coords

    google.maps.event.addListener(vMarker, 'dragend', function(evt) {



        $("#latitud").val(evt.latLng.lat().toFixed(6));

        $("#longitud").val(evt.latLng.lng().toFixed(6));



        map.panTo(evt.latLng);

    });



    // centers the map on markers coords

    map.setCenter(vMarker.position);



    // adds the marker on the map

    vMarker.setMap(map);

}