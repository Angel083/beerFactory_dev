<link rel="stylesheet" type="text/css" href="<?= base_url('recs/assets/css/calendario.css') ?>" />

<div class="container-fluid container-calendario">
    <div class="text-center">
        <img src="<?= base_url('recs/assets/images/Calendario/BF_Elementos-Cervezas-Paths_8.png') ?>"
            class="img-fluid img-calendario" alt="Responsive image">
    </div>

    <!--<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por fecha" title="Type in a name">
        <input type="text" id="myInputCountry" onkeyup="findByEvent()" placeholder="Buscar por descripción" title="Type in a name">-->

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
                           
                            <div class="col-12 text-left col-checks">
                                <label><input class="checkbox" type="checkbox" id="cbox<?php  echo $fila->id_evento;?>"
                                        value="<?php  echo $fila->fecha;?>"><?php  echo $fila->fecha;?></label></br>
                            </div>
                            <?php endforeach;?>
                            <!--<label><input type="checkbox" id="cbox1" value="30 DE DICIEMBRE"> Este es mi primer
                                checkbox</label><br>
                            <label><input type="checkbox" id="cbox1" value="30 DE DICIEMBRE"> Este es mi primer
                                checkbox</label><br>
                            <label><input type="checkbox" id="cbox1" value="30 DE DICIEMBRE"> Este es mi primer
                                checkbox</label><br>
                            <label><input type="checkbox" id="cbox3" value="30 DE DICIEMBRE"> Este es mi segundo
                                checkbox</label><br>
                            <label class="cboxm"><input class="cboxm" type="checkbox" id="cbox4"
                                    value="30 DE DICIEMBRE"> Este es mi segundo
                                checkbox</label><br class="cboxm">
                            <label class="cboxm"><input class="cboxm" type="checkbox" id="cbox5"
                                    value="30 DE DICIEMBRE"> Este es mi segundo
                                checkbox</label><br class="cboxm">
                            <label class="cboxm"><input class="cboxm" type="checkbox" id="cbox6"
                                    value="30 DE DICIEMBRE"> Este es mi segundo
                                checkbox</label><br class="cboxm">
                            <label class="cboxm"><input class="cboxm" type="checkbox" id="cbox7"
                                    value="30 DE DICIEMBRE"> Este es mi segundo
                                checkbox</label><br class="cboxm">
                                <br>-->
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
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>



    </head>

    <body>
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

        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>-->
        <script src="<?= base_url('recs/assets/js/calendario.js') ?>">
        </script>
</div>