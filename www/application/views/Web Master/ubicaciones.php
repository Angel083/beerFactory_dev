<link rel="stylesheet" type="text/css" href="<?= base_url('recs/assets/css/restaurantes.css') ?>" />
<script>var login = false;</script>


<div id="container-fluid" class="container-mapa">

    <div class="accordion card-ubicaciones" id="accordionExample">

        <button class="btn btn-success" id="btnAddUbicacion" data-toggle="modal"

            data-target="#modalAgregar">Agregar</button>

        <?php foreach($consulta->result() as $fila):?>

        <div class="card card-ubi">

            <div class="card-header" id="headingOne">

                <h5 class="mb-0">

                    <button class="btn btn-link btn-link-ubicacion btn-link-ubicacion-admin" type="button"

                        data-toggle="collapse" data-target="#collapse<?php echo $fila->id_ubicacion?>"

                        aria-expanded="true" aria-controls="collapse<?php echo $fila->id_ubicacion?>">

                        <?php echo $fila->nombre_ubicacion?>



                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"

                            id="ico_el_<?php ?>" data-book-id="book_el_<?php echo $fila->id_ubicacion?>"

                            class="svg_eliminar" x="0px" y="0px" viewBox="0 0 475.2 475.2"

                            style="enable-background:new 0 0 475.2 475.2;" xml:space="preserve" data-toggle="modal"

                            data-target="#modalEliminar">

                            <g>

                                <g>

                                    <g>

                                        <path

                                            d="M405.6,69.6C360.7,24.7,301.1,0,237.6,0s-123.1,24.7-168,69.6S0,174.1,0,237.6s24.7,123.1,69.6,168s104.5,69.6,168,69.6    s123.1-24.7,168-69.6s69.6-104.5,69.6-168S450.5,114.5,405.6,69.6z M386.5,386.5c-39.8,39.8-92.7,61.7-148.9,61.7    s-109.1-21.9-148.9-61.7c-82.1-82.1-82.1-215.7,0-297.8C128.5,48.9,181.4,27,237.6,27s109.1,21.9,148.9,61.7    C468.6,170.8,468.6,304.4,386.5,386.5z"

                                            data-original="#000000" class="active-path" data-old_color="#000000"

                                            fill="#FFFFFF" />

                                        <path

                                            d="M342.3,132.9c-5.3-5.3-13.8-5.3-19.1,0l-85.6,85.6L152,132.9c-5.3-5.3-13.8-5.3-19.1,0c-5.3,5.3-5.3,13.8,0,19.1    l85.6,85.6l-85.6,85.6c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4l85.6-85.6l85.6,85.6c2.6,2.6,6.1,4,9.5,4    c3.5,0,6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1l-85.4-85.6l85.6-85.6C347.6,146.7,347.6,138.2,342.3,132.9z"

                                            data-original="#000000" class="active-path" data-old_color="#000000"

                                            fill="#FFFFFF" />

                                    </g>

                                </g>

                            </g>

                        </svg>



                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"

                            id="ico_ed_<?php ?>" data-book-id="book_el_<?php echo $fila->id_ubicacion?>"

                            class="svg_edit" x="0px" y="0px" viewBox="0 0 469.331 469.331"

                            style="enable-background:new 0 0 469.331 469.331;" xml:space="preserve" data-toggle="modal"

                            data-target="#modalModificar">

                            <g>

                                <g>

                                    <path

                                        d="M438.931,30.403c-40.4-40.5-106.1-40.5-146.5,0l-268.6,268.5c-2.1,2.1-3.4,4.8-3.8,7.7l-19.9,147.4   c-0.6,4.2,0.9,8.4,3.8,11.3c2.5,2.5,6,4,9.5,4c0.6,0,1.2,0,1.8-0.1l88.8-12c7.4-1,12.6-7.8,11.6-15.2c-1-7.4-7.8-12.6-15.2-11.6   l-71.2,9.6l13.9-102.8l108.2,108.2c2.5,2.5,6,4,9.5,4s7-1.4,9.5-4l268.6-268.5c19.6-19.6,30.4-45.6,30.4-73.3   S458.531,49.903,438.931,30.403z M297.631,63.403l45.1,45.1l-245.1,245.1l-45.1-45.1L297.631,63.403z M160.931,416.803l-44.1-44.1   l245.1-245.1l44.1,44.1L160.931,416.803z M424.831,152.403l-107.9-107.9c13.7-11.3,30.8-17.5,48.8-17.5c20.5,0,39.7,8,54.2,22.4   s22.4,33.7,22.4,54.2C442.331,121.703,436.131,138.703,424.831,152.403z"

                                        data-original="#000000" class="active-path" data-old_color="#000000"

                                        fill="#FFFFFF" />

                                </g>

                            </g>

                        </svg>

                    </button>



                </h5>

            </div>



            <div id="collapse<?php echo $fila->id_ubicacion?>" class="collapse" aria-labelledby="headingOne"

                data-parent="#accordionExample">

                <div class="card-body">

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dir">

                        <?php echo $fila->direccion?></p><br>

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-tel">Tel: <?php echo $fila->telefono?></p>

                    <br>

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dias"><?php echo $fila->dias?></p>

                    <!--<p class="p-ubicacion-detalle p-ubicacion-detalle-dias">Viernes y sábado: 12:00 – 02:00</p>

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dias">Domingo: 12:00 – 22:00</p>-->

                </div>

            </div>

        </div>

        <?php endforeach;?>

    </div>

    <div id="map"></div>



    <!-- Modal -->

    <div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

        aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">Agregar ubicación</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <form class="needs-validation" novalidate>

                    <div class="modal-body">



                        <div class="form-row">

                            <div class="col-md-12 mb-12 col-xl-12">

                                <label for="validationCustom01">Nombre de la ubicación</label>

                                <input type="text" class="form-control" id="nombre_ubicacion" value="" required>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Por favor ingrese el nombre de la ubicación.

                                </div>

                            </div>

                            <div class="col-sm-6 col-md-6 mb-3">

                                <label for="validationCustom02">Dirección</label>

                                <input type="text" class="form-control" id="direccion" value="" required>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Porfavor ingrese la dirección.

                                </div>

                            </div>

                            <div class="col-sm-6 col-md-6 mb-3">

                                <label for="validationCustom03">Telefono</label>

                                <input type="text" class="form-control" id="telefono" value="" required>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Porfavor ingrese el telefono del restaurante.

                                </div>

                            </div>

                            <div class="col-sm-12 col-md-12 mb-3">

                                <label for="validationCustom02">Dias y horario</label>

                                <textarea class="form-control" id="dias" value="" required rows="3"></textarea>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Porfavor ingrese el dia y el horario

                                </div>

                            </div>

                            <div class="col-sm-12 col-md-12 mb-3">

                                <label for="validationCustom02">Latitud</label>

                                <input type="text" class="form-control" id="latitud" value="" required>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Porfavor ingrese la latidud

                                </div>

                            </div>

                            <div class="col-sm-12 col-md-12 mb-3">

                                <label for="validationCustom02">Longitud</label>

                                <input type="text" class="form-control" id="longitud" value="" required>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Porfavor ingrese la longitud

                                </div>

                            </div>

                            <div class="col-sm-12 col-md-12 mb-3">

                                <div id="map_agregar" style="width: auto; height: 500px;">

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                        <button class="btn btn-primary btnEnviar" type="submit" id="btnGuardar">Guardar</button>

                    </div>

                </form>

            </div>

        </div>

    </div>



    <!-- Modal Modificar-->

    <div class="modal fade" id="modalModificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

        aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">Modificar evento</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <form class="needs-validation-edit" novalidate>

                    <div class="modal-body">

                        <div class="form-row">

                            <div class="col-md-12 mb-12 col-xl-12">

                                <label for="validationCustom01">Nombre de la ubicación</label>

                                <input type="text" class="form-control form-control-edit" id="nombre_ubicacion_e"

                                    value="" required disabled>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Por favor ingrese el nombre de la ubicación.

                                </div>

                            </div>

                            <div class="col-sm-6 col-md-6 mb-3">

                                <label for="validationCustom02">Dirección</label>

                                <input type="text" class="form-control form-control-edit" id="direccion_e" value=""

                                    required disabled>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Porfavor ingrese la dirección.

                                </div>

                            </div>

                            <div class="col-sm-6 col-md-6 mb-3">

                                <label for="validationCustom03">Telefono</label>

                                <input type="text" class="form-control form-control-edit" id="telefono_e" value=""

                                    required disabled>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Porfavor ingrese el telefono del restaurante.

                                </div>

                            </div>

                            <div class="col-sm-12 col-md-12 mb-3">

                                <label for="validationCustom02">Dias y horario</label>

                                <textarea class="form-control form-control-edit" id="dias_e" value="" required rows="3"

                                    disabled></textarea>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Porfavor ingrese el dia y el horario

                                </div>

                            </div>

                            <div class="col-sm-12 col-md-12 mb-3">

                                <label for="validationCustom02">Latitud</label>

                                <input type="text" class="form-control form-control-edit" id="latitud_e" value=""

                                    required disabled>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Porfavor ingrese la latidud

                                </div>

                            </div>

                            <div class="col-sm-12 col-md-12 mb-3">

                                <label for="validationCustom02">Longitud</label>

                                <input type="text" class="form-control form-control-edit" id="longitud_e" value=""

                                    required disabled>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Porfavor ingrese la longitud

                                </div>

                            </div>

                            <div class="col-sm-12 col-md-12 mb-3">

                                <div id="map_canvas" style="width: auto; height: 500px;">

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                        <button class="btn btn-primary btnEnviar" type="submit" id="btnEditar">Modificar</button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <!-- Fin modal eliminar -->





    <!-- Modal Eliminar-->

    <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

        aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">Eliminar evento</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <form class="needs-validation" novalidate>

                    <div class="modal-body">

                        ¿Estas seguro que desa eliminarlo?

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                        <button class="btn btn-primary btnEnviar" type="button" id="btnEliminar">Eliminar</button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <!-- Fin Modal Eliminar-->

</div>



<script>

// Example starter JavaScript for disabling form submissions if there are invalid fields

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

                    alert("todo correcto");

                } else {

                    guardarUbicacion();

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

                    alert("todo correcto edit");

                }

                form.classList.add('was-validated');

                event.preventDefault();

                event.stopPropagation();

                //registraEvento();

            }, false);

        });

    }, false);

})();

</script>

<?php foreach($consulta->result() as $fila):?>

<script>

$('#collapse<?php echo $fila->id_ubicacion?>').on('show.bs.collapse', function() {

    // do something...

    iniciarMapa( <?php echo $fila->latitud ?> , <?php echo $fila->longitud ?>);

});

</script>

<?php endforeach;?>

<script src="<?= base_url('recs/assets/js/scriptMapa.js') ?>"></script>

<script src="<?= base_url('recs/assets/js/ubicacionesAdmin.js') ?>"></script>

<script async="" defer=""

    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnbtLq2wVUvz_4_LvFiP8XXHKmIR0z53s&amp;callback=iniciarMap">