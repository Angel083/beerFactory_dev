<link rel="stylesheet" type="text/css" href="<?= base_url('recs/assets/css/calendario.css') ?>" />
<script>var login = false;</script>


<div class="container-fluid container-calendario">

    <div class="text-center">

        <img src="<?= base_url('recs/assets/images/Calendario/BF_Elementos-Cervezas-Paths_8.png') ?>"

            class="img-fluid img-calendario" alt="Responsive image">

    </div>



    <!--<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por fecha" title="Type in a name">

        <input type="text" id="myInputCountry" onkeyup="findByEvent()" placeholder="Buscar por descripción" title="Type in a name">-->



    <button class="btn btn-success btnAdd" data-toggle="modal" data-target="#modalAgregar">

        <svg xmlns="http://www.w3.org/2000/svg" class="icon-add" viewBox="0 0 512 512" data-target="#subir"

            data-toggle="modal">

            <g>

                <path class="svg-add"

                    d="m437.019531 74.980469c-48.351562-48.351563-112.640625-74.980469-181.019531-74.980469s-132.667969 26.628906-181.019531 74.980469c-48.351563 48.351562-74.980469 112.640625-74.980469 181.019531s26.628906 132.667969 74.980469 181.019531c48.351562 48.351563 112.640625 74.980469 181.019531 74.980469s132.667969-26.628906 181.019531-74.980469c48.351563-48.351562 74.980469-112.640625 74.980469-181.019531s-26.628906-132.667969-74.980469-181.019531zm-181.019531 397.019531c-119.101562 0-216-96.898438-216-216s96.898438-216 216-216 216 96.898438 216 216-96.898438 216-216 216zm20-236.019531h90v40h-90v90h-40v-90h-90v-40h90v-90h40zm0 0"

                    data-original="#000000" class="thumbnail" data-old_color="#000000" fill="#7D7D7D" />

            </g>

        </svg>Agregar</button>

    <table class="table table-bordered table-striped sortable" id="calendarioTable">

        <thead>

            <tr>

                <th data-defaultsign="_19" class="col-icon"></th>

                <th>EVENTO </th>

                <th data-defaultsign="AZ">LUGAR</th>

                <th data-defaultsign="month">FECHA <img

                        src="<?= base_url('recs/assets/images/Calendario/BeerFactory-Flecha.png') ?>" alt="..."

                        class="img-thumbnail img-sort" onclick="openForm()">



                    <div class="form-popup" id="myForm">

                        <form action="/action_page.php" class="form-container">



                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por fecha"

                                title="Type in a name">



                            <?php $nChecks = 0;?>

                            <?php foreach($consultaGroupBy->result() as $fila):?>

                            <?php $nChecks++;?>

                            <?php if($nChecks < 4):?>

                            <div class="col-12 text-left col-checks">

                                <label><input class="checkbox" type="checkbox" id="cbox<?php  echo $fila->id_evento;?>"

                                        value="<?php  echo $fila->fecha;?>"><?php  echo $fila->fecha;?></label></br>

                            </div>

                            <?php endif;?>



                            <?php if($nChecks > 3):?>

                            <div class="col-12 text-left col-checks">

                                <label class="cboxm"><input class="checkbox" type="checkbox"

                                        id="cbox<?php  echo $fila->id_evento;?>"

                                        value="<?php  echo $fila->fecha;?>"><?php  echo $fila->fecha;?></label>

                            </div>

                            <br class="cboxm">

                            <?php endif;?>

                            <?php endforeach;?>

                            <a id="mostrar_todo" class="mostrar_todo_fecha">MOSTRAR TODOS</a>

                        </form>

                    </div>

                </th>

                <th>HORA</th>

                <th>DESCARGAR <br> EVENTO</th>

                <th>DESCRIPCIÓN <img src="<?= base_url('recs/assets/images/Calendario/BeerFactory-Flecha.png') ?>"

                        alt="..." class="img-thumbnail img-sort" onclick="openFormDes()">

                    <div class="form-popup" id="myFormDes">

                        <form action="/action_page.php" class="form-container">

                            <input type="text" id="myInputCountry" onkeyup="findByEvent()"

                                placeholder="Buscar por descripción" title="Type in a name">

                            <?php $nChecksD = 0;?>

                            <?php foreach($consultaGroupByDes->result() as $fila):?>

                            <?php $nChecksD++;?>

                            <?php if($nChecksD < 4):?>

                            <div class="col-12 text-left col-checks">

                                <label><input type="checkbox" id="cboxe<?php  echo $fila->id_evento;?>"

                                        value="<?php  echo $fila->descripcion;?>"><?php  echo $fila->descripcion;?></label><br>

                            </div>

                            <?php endif;?>



                            <?php if($nChecksD > 3):?>

                            <div class="col-12 text-left col-checks">

                                <label class="cboxd"><input class="checkbox" type="checkbox"

                                        id="cboxe<?php  echo $fila->id_evento;?>"

                                        value="<?php  echo $fila->descripcion;?>"><?php  echo $fila->descripcion;?></label>

                            </div>

                            <br class="cboxd">

                            <?php endif;?>

                            <?php endforeach;?>

                            <a id="mostrar_todo" class="mostrar_todo_des">MOSTRAR TODOS</a>

                        </form>

                    </div>

                </th>

                <th>PROMOCIÓN</th>

                <th>OPCIONES</th>

            </tr>

        </thead>

        <tbody>

            <?php foreach($consulta->result() as $fila):?>

            <tr>

                <td data-value="1" class="td-icon">

                    <img src="<?= base_url('recs/assets/images/Calendario/icon_sport_1.png') ?>" alt="..."

                        class="img-thumbnail"></th>

                <td>

                    <p class="text-titulo-col">EVENTO</p>

                    <?php echo $fila->nombre_evento;?>

                </td>

                <td>

                    <p class="text-titulo-col">LUGAR</p><?php echo $fila->lugar;?>

                </td>

                <td data-dateformat="MM-DD-YYYY">

                    <p class="text-titulo-col">FECHA </p><?php echo $fila->fecha;?>

                </td>

                <td>

                    <p class="text-titulo-col">HORA</p><?php echo $fila->hora;?>

                </td>

                <td>

                    <p class="text-titulo-col">DESCARGAR <br>EVENTO</p><?php echo $fila->url_evento;?>

                </td>

                <td>

                    <p class="text-titulo-col">DESCRIPCIÓN</p><?php echo $fila->descripcion;?>

                </td>

                <td class="td-promocion">

                    <p class="text-titulo-col">PROMOCIÓN</p><?php echo $fila->promocion;?>

                </td>

                <td class="td-promocion">

                    <p class="text-titulo-col">OPCIONES</p>

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"

                        id="ico_ed_<?php echo $fila->id_evento;?>" data-book-id="book_el_<?php echo $fila->id_evento;?>"

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



                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"

                        id="ico_el_<?php echo $fila->id_evento;?>" data-book-id="book_el_<?php echo $fila->id_evento;?>"

                        class="svg_eliminar btnEliminarEvent" x="0px" y="0px" viewBox="0 0 475.2 475.2"

                        style="enable-background:new 0 0 475.2 475.2;" xml:space="preserve" data-toggle="modal"

                        data-target="#">

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

                </td>

            </tr>

            <?php endforeach;?>

        </tbody>

    </table>



    <!-- Modal -->

    <div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

        aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">Agregar evento</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <form class="needs-validation" novalidate>

                    <div class="modal-body">



                        <div class="form-row">

                            <div class="col-md-12 mb-12 col-xl-12">

                                <label for="validationCustom01">Nombre del evento</label>

                                <input type="text" class="form-control" id="nombre_evento" value="" required>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Por favor ingrese el nombre del evento.

                                </div>

                            </div>

                            <div class="col-sm-6 col-md-6 mb-3">

                                <label for="validationCustom02">Lugar</label>

                                <input type="text" class="form-control" id="lugar" value="" required>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Porfavor ingrese el lugar del evento.

                                </div>

                            </div>

                            <div class="col-sm-6 col-md-6 mb-3">

                                <label for="validationCustom03">Fecha</label>

                                <input type="text" class="form-control" id="fecha" value="" required>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Porfavor ingrese la fecha del evento.

                                </div>

                            </div>

                            <div class="col-sm-6 col-md-6 mb-3">

                                <label for="validationCustom02">Hora</label>

                                <input type="text" class="form-control" id="hora" value="" required>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Porfavor ingrese la hora del evento

                                </div>

                            </div>

                            <div class="col-sm-6 col-md-6 mb-3">

                                <label for="validationCustom03">Url del evento</label>

                                <input type="text" class="form-control" id="url_evento" value="" required>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Porfavor ingrese la url del pdf del evento

                                </div>

                            </div>

                            <div class="col-sm-6 col-md-6 mb-3">

                                <label for="validationCustom03">Descripción</label>

                                <input type="text" class="form-control" id="descripcion" value="" required>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Porfavor ingrese alguna descripcion

                                </div>

                            </div>

                            <div class="col-sm-6 col-md-6 mb-3">

                                <label for="validationCustom03">Url de promocion</label>

                                <input type="text" class="form-control" id="url_promocion" value="" required>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Porfavor ingrese la url del pdf de la promocion.

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

                                <label for="validationCustom01">Nombre del evento</label>

                                <input type="text" class="form-control form-control-edit" id="nombre_evento_e" value=""

                                    required disabled>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Por favor ingrese el nombre del evento.

                                </div>

                            </div>

                            <div class="col-sm-6 col-md-6 mb-3">

                                <label for="validationCustom02">Lugar</label>

                                <input type="text" class="form-control form-control-edit" id="lugar_e" value="" required

                                    disabled>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Porfavor ingrese el lugar del evento.

                                </div>

                            </div>

                            <div class="col-sm-6 col-md-6 mb-3">

                                <label for="validationCustom03">Fecha</label>

                                <input type="text" class="form-control form-control-edit" id="fecha_e" value="" required

                                    disabled>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Porfavor ingrese la fecha del evento.

                                </div>

                            </div>

                            <div class="col-sm-6 col-md-6 mb-3">

                                <label for="validationCustom02">Hora</label>

                                <input type="text" class="form-control form-control-edit" id="hora_e" value="" required

                                    disabled>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Porfavor ingrese la hora del evento

                                </div>

                            </div>

                            <div class="col-sm-6 col-md-6 mb-3">

                                <label for="validationCustom03">Url del evento</label>

                                <input type="text" class="form-control form-control-edit" id="url_evento_e" value=""

                                    required disabled>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Porfavor ingrese la url del pdf del evento

                                </div>

                            </div>

                            <div class="col-sm-6 col-md-6 mb-3">

                                <label for="validationCustom03">Descripción</label>

                                <input type="text" class="form-control form-control-edit" id="descripcion_e" value=""

                                    required disabled>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Porfavor ingrese alguna descripcion

                                </div>

                            </div>

                            <div class="col-sm-6 col-md-6 mb-3">

                                <label for="validationCustom03">Url de promocion</label>

                                <input type="text" class="form-control form-control-edit" id="url_promocion_e" value=""

                                    required disabled>

                                <div class="valid-feedback">

                                    Correcto!

                                </div>

                                <div class="invalid-feedback">

                                    Porfavor ingrese la url del pdf de la promocion.

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

                    }

                    form.classList.add('was-validated');

                    event.preventDefault();

                    event.stopPropagation();

                    registraEvento();

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



    </head>



    <body>

        <script src="<?= base_url('recs/assets/js/calendario.js') ?>"></script>

        <script src="<?= base_url('recs/assets/js/Admin/calendarioAdmin.js') ?>"></script>



        <?php foreach($consulta->result() as $fila):?>

        <?php echo "<script>

            

        $('#cbox".$fila->id_evento."').change(function() {

            if ($('#cbox".$fila->id_evento."').prop('checked')) {

                $('input:checkbox').prop('checked',false);

                $('#cbox".$fila->id_evento."').prop('checked',true);

                $('#myInput').val($('#cbox".$fila->id_evento."').val());

                myFunction();

            } else {

                $('#myInput').val('');

                myFunction();

            }

        });

            </script>";?>

        <?php endforeach;?>



        <?php foreach($consultaGroupByDes->result() as $fila):?>





        <?php echo "<script>

            

            $('#cboxe".$fila->id_evento."').change(function() {

                if ($('#cboxe".$fila->id_evento."').prop('checked')) {

                    $('input:checkbox').prop('checked',false);

                    $('#cboxe".$fila->id_evento."').prop('checked',true);

                    $('#myInputCountry').val($('#cboxe".$fila->id_evento."').val());

                    findByEvent();

                } else {

                    $('#myInputCountry').val('');

                    findByEvent();

                }

            });

                </script>";?>

        <?php endforeach;?>



</div>