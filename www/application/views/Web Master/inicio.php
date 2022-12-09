ce<link rel="stylesheet" type="text/css" href="<?= base_url('recs/assets/css/home.css') ?>" />
<script>var login = false;</script>


<div id="container-fluid">



    <div class="container-fluid container-cards-home">
    <button type="button" class="btn btn-success" data-toggle="modal" data-title="assa" data-target="#modalAgregarCardLink">Agregar sección</button>
    <button type="button" class="btn btn-success" data-toggle="modal" data-title="assa" data-target="#modalAgregarCardModal">Agregar anuncio</button>
    <button type="button" class="btn btn-success" data-toggle="modal" data-title="assa" data-target="#modalAgregarBaner">Agregar banner carrousel</button>
        <div class="row">

            <?php foreach($query->result() as $column):?>

            <?php if($column->tipo_card == "card"):?>

            <div class="col-12 col-lg-6 col-card-1">

                <div class="card centrar-opciones" id="card-<?= $column->id_card?>">

                    <img class="card-img-top img-card-1" id="img-card-<?= $column->id_card?>"

                        style="padding:0;"

                        src="<?= base_url('recs/assets/images/').$column->nombre_imagen_frontal ?>"

                        alt="Card image cap">

                    <div class="card-body card-body-img" style="width: 100%;">

                        <h5 class="card-title card-title-home"><?= $column->titulo?></h5>

                        <p class="card-text card-text-home"><?= $column->contenido?></p>

                        <a href="<?= base_url($column->accion)?>" class="btn boton-ver-home">Ver más</a>

                    </div>



                    <div class="div-opciones" style="display:none" id="opciones-<?= $column->id_card?>">

                        <ul class="list-group list-group-horizontal-md list-group-opciones">

                            <li class="list-group-item list-group-item-eliminar list-group-item-img "

                                data-book-id="book-ed-<?= $column->id_card?>" id="ed-<?= $column->id_card?>"

                                data-toggle="modal" data-title="assa" data-target="#modalEditar"

                                data-tipo="<?= $column->tipo_card?>">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-opciones"
                                viewBox="0 0 83.07 83.07"> <defs> 
                                    <style>
                                        .cls-1{
                                        fill: #fff;
                                        }
                                    .cls-2{
                                        fill: #010101;
                                        }
                                    </style>
                                    </defs>
                                
                                <title>editar</title>
                                <g id="Capa_2"
                                        data-name="Capa 2"> <g id="Capa_1-2"
                                        data-name="Capa 1"> <path class="cls-1"
                                        d="M83.07,41.54A41.54,41.54,0,1,1,41.54,0,41.53,41.53,0,0,1,83.07,41.54"/> <path class="cls-2"
                                        d="M81.21,41.54A39.68,39.68,0,1,1,41.54,1.86,39.67,39.67,0,0,1,81.21,41.54"/> <path class="cls-1"
                                        d="M64.85,18.75a6.35,6.35,0,0,0-8.48-2.94l-32,15.53a1.37,1.37,0,0,0-.54.47l-7,10.2a1.4,1.4,0,0,0,1.07,2.2L30.25,45a1.32,1.32,0,0,0,.7-.14l32-15.52a6.36,6.36,0,0,0,2.94-8.48ZM27,33.21,53.17,20.5l4.1,8.44L31.09,41.65Zm-2.12,2.08L28.14,42l-7.59-.48Zm36.83-8.5-1.9.92-4.1-8.44,1.9-.92A3.53,3.53,0,0,1,62.31,20l1,2.1A3.53,3.53,0,0,1,61.7,26.79Z"/> <path class="cls-1"
                                        d="M25.53,53.92h5.78v1.72h-3.9v1.59h3.68V59H27.41v1.72h4.11v1.73h-6Z"/> <path class="cls-1"
                                        d="M38.91,62.41H37.26v-.77h0A1.6,1.6,0,0,1,37,62a1.89,1.89,0,0,1-.41.3,2.36,2.36,0,0,1-.51.21,1.9,1.9,0,0,1-.58.09,3,3,0,0,1-1.18-.23,2.59,2.59,0,0,1-.91-.62,3,3,0,0,1-.58-1,3.67,3.67,0,0,1-.2-1.22,3.86,3.86,0,0,1,.18-1.17,3.36,3.36,0,0,1,.53-1,2.82,2.82,0,0,1,.84-.69,2.36,2.36,0,0,1,1.11-.25,3,3,0,0,1,1,.17,1.68,1.68,0,0,1,.8.59h0V53.34h1.8ZM37.26,59.5a1.52,1.52,0,0,0-.38-1.07A1.39,1.39,0,0,0,35.82,58a1.37,1.37,0,0,0-1.06.41,1.48,1.48,0,0,0-.38,1.07,1.45,1.45,0,0,0,.38,1.06,1.34,1.34,0,0,0,1.06.41,1.35,1.35,0,0,0,1.06-.41A1.5,1.5,0,0,0,37.26,59.5Z"/> <path class="cls-1"
                                        d="M40.23,54.74a1,1,0,0,1,.31-.73,1,1,0,0,1,.74-.31,1,1,0,0,1,1,1,1,1,0,0,1-.3.74,1,1,0,0,1-.74.31,1,1,0,0,1-.74-.31A1,1,0,0,1,40.23,54.74Zm.15,1.84h1.8v5.83h-1.8Z"/> <path class="cls-1"
                                        d="M47.45,58H45.86V60a2.94,2.94,0,0,0,0,.44.85.85,0,0,0,.1.34.65.65,0,0,0,.26.23,1.2,1.2,0,0,0,.46.07l.38,0a.66.66,0,0,0,.36-.13v1.5a2.62,2.62,0,0,1-.63.14c-.21,0-.43,0-.63,0a3.58,3.58,0,0,1-.84-.1,1.92,1.92,0,0,1-.68-.31,1.48,1.48,0,0,1-.45-.54,2,2,0,0,1-.16-.82V58H42.91V56.58h1.15V54.85h1.8v1.73h1.59Z"/> <path class="cls-1"
                                        d="M52,61.68h0a1.66,1.66,0,0,1-.79.67,2.73,2.73,0,0,1-1.05.21,2.56,2.56,0,0,1-.79-.12,2,2,0,0,1-.67-.34,1.64,1.64,0,0,1-.45-.56,1.79,1.79,0,0,1-.17-.78,1.76,1.76,0,0,1,.19-.86,1.61,1.61,0,0,1,.5-.57,2.62,2.62,0,0,1,.73-.36,5.69,5.69,0,0,1,.84-.18,6.52,6.52,0,0,1,.88-.07l.81,0a1,1,0,0,0-.34-.76,1.23,1.23,0,0,0-.81-.28,1.67,1.67,0,0,0-.81.19,2,2,0,0,0-.66.51l-1-1a3.42,3.42,0,0,1,1.18-.7A4.1,4.1,0,0,1,51,56.44a3.68,3.68,0,0,1,1.3.19,2,2,0,0,1,.82.59,2.25,2.25,0,0,1,.42.94,6.16,6.16,0,0,1,.12,1.29v3H52Zm-.45-1.82h-.51a2.71,2.71,0,0,0-.58.11,1.22,1.22,0,0,0-.48.25.56.56,0,0,0-.2.47.53.53,0,0,0,.27.48,1.22,1.22,0,0,0,.58.15,1.7,1.7,0,0,0,.51-.07,2,2,0,0,0,.44-.2.89.89,0,0,0,.3-.34,1,1,0,0,0,.12-.48v-.38Z"/> <path class="cls-1"
                                        d="M54.8,56.58h1.8v.94h0a2.22,2.22,0,0,1,.68-.81,1.73,1.73,0,0,1,1-.27h.31a1.35,1.35,0,0,1,.29,0v1.64l-.38-.09-.39,0a2,2,0,0,0-.82.14,1.08,1.08,0,0,0-.46.41,1.42,1.42,0,0,0-.21.61,6.47,6.47,0,0,0,0,.8v2.43H54.8Z"/> </g></g >
                                </svg>

                                </li>
                                
                                <li class="list-group-item list-group-item-eliminar list-group-item-img"

                                data-book-id="book-el-<?= $column->id_card?>" id="el-<?= $column->id_card?>"

                                data-toggle="modal" data-title="assa" data-target="#modalEliminar"

                                data-tipo="<?= $column->tipo_card?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 83.07 83.07" class="svg-opciones">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #fff;
                                            }
                                
                                            .cls-2 {
                                                fill: #010101;
                                            }
                                        </style>
                                    </defs>
                                    <title>elminar</title>
                                    <g id="Capa_2" data-name="Capa 2">
                                        <g id="Capa_1-2" data-name="Capa 1">
                                            <path class="cls-1" d="M83.07,41.54A41.54,41.54,0,1,1,41.54,0,41.53,41.53,0,0,1,83.07,41.54" />
                                            <path class="cls-2" d="M81.21,41.54A39.68,39.68,0,1,1,41.54,1.86,39.67,39.67,0,0,1,81.21,41.54" />
                                            <path class="cls-1" d="M19.29,55.77h5.77V57.5h-3.9v1.58h3.68v1.73H21.16v1.73h4.12v1.73h-6Z" />
                                            <path class="cls-1" d="M26.57,55.19h1.8v9.08h-1.8Z" />
                                            <path class="cls-1"
                                                d="M29.55,56.6a1,1,0,0,1,.3-.74,1,1,0,0,1,.74-.31,1.06,1.06,0,0,1,1.05,1.05,1,1,0,0,1-.31.74,1,1,0,0,1-.74.3,1,1,0,0,1-1-1Zm.14,1.83h1.8v5.84h-1.8Z" />
                                            <path class="cls-1"
                                                d="M32.79,58.43h1.73v.8h0a1.51,1.51,0,0,1,.24-.34,1.86,1.86,0,0,1,.37-.3,2.43,2.43,0,0,1,.49-.22,2.35,2.35,0,0,1,.6-.08,2.28,2.28,0,0,1,1.09.25,1.57,1.57,0,0,1,.71.79,2,2,0,0,1,.76-.8,2.57,2.57,0,0,1,2.08,0,1.61,1.61,0,0,1,.64.54,2.21,2.21,0,0,1,.33.8,4.48,4.48,0,0,1,.11,1v3.45h-1.8v-3.4a1.3,1.3,0,0,0-.18-.7.65.65,0,0,0-.62-.3,1.17,1.17,0,0,0-.52.11.75.75,0,0,0-.33.28,1,1,0,0,0-.18.42,2.07,2.07,0,0,0-.06.5v3.09h-1.8V61.18c0-.1,0-.23,0-.38a2.14,2.14,0,0,0-.08-.44.81.81,0,0,0-.24-.34.66.66,0,0,0-.47-.15,1.2,1.2,0,0,0-.57.13.9.9,0,0,0-.33.34,1.62,1.62,0,0,0-.15.47,4.93,4.93,0,0,0,0,.55v2.91h-1.8Z" />
                                            <path class="cls-1"
                                                d="M43.11,56.6a1,1,0,0,1,.3-.74,1,1,0,0,1,1.48,0,1,1,0,0,1,.3.74,1,1,0,1,1-2.08,0Zm.14,1.83h1.8v5.84h-1.8Z" />
                                            <path class="cls-1"
                                                d="M46.35,58.43h1.73v.8h0a1.51,1.51,0,0,1,.24-.34,1.86,1.86,0,0,1,.37-.3,2.2,2.2,0,0,1,.49-.22,2.35,2.35,0,0,1,.6-.08,2.5,2.5,0,0,1,1.11.21,1.53,1.53,0,0,1,.65.58,2.36,2.36,0,0,1,.32.88A7.34,7.34,0,0,1,52,61.05v3.22h-1.8V61.41a4.61,4.61,0,0,0,0-.52,1.59,1.59,0,0,0-.1-.5.8.8,0,0,0-.28-.37.82.82,0,0,0-.53-.15,1.2,1.2,0,0,0-.57.13.9.9,0,0,0-.33.34,1.62,1.62,0,0,0-.15.47,4.93,4.93,0,0,0,0,.55v2.91h-1.8Z" />
                                            <path class="cls-1"
                                                d="M56.89,63.53h0a1.7,1.7,0,0,1-.8.68,2.84,2.84,0,0,1-1,.2,2.88,2.88,0,0,1-.78-.11,1.86,1.86,0,0,1-.67-.35,1.8,1.8,0,0,1-.46-.56,1.73,1.73,0,0,1-.16-.78,1.81,1.81,0,0,1,.18-.85,1.78,1.78,0,0,1,.51-.58,2.41,2.41,0,0,1,.72-.35,5,5,0,0,1,.85-.19,8.47,8.47,0,0,1,.88-.07h.8a.91.91,0,0,0-.34-.76,1.24,1.24,0,0,0-.81-.29,1.86,1.86,0,0,0-.81.19,2.1,2.1,0,0,0-.65.51l-1-1a3.21,3.21,0,0,1,1.18-.71,4.31,4.31,0,0,1,1.39-.23,3.66,3.66,0,0,1,1.3.2,1.89,1.89,0,0,1,.82.58,2.31,2.31,0,0,1,.42.94,6.16,6.16,0,0,1,.12,1.29v3H56.89Zm-.44-1.82-.51,0a2.35,2.35,0,0,0-.59.1,1.57,1.57,0,0,0-.48.25.58.58,0,0,0-.19.47A.51.51,0,0,0,55,63a1.24,1.24,0,0,0,.58.16,1.81,1.81,0,0,0,.51-.08,1.22,1.22,0,0,0,.43-.2,1,1,0,0,0,.31-.34.9.9,0,0,0,.11-.48v-.38Z" />
                                            <path class="cls-1"
                                                d="M59.68,58.43h1.8v.94h0a2.24,2.24,0,0,1,.69-.81,1.7,1.7,0,0,1,1-.27h.32a1.16,1.16,0,0,1,.28.05V60a2.49,2.49,0,0,0-.37-.09,2.6,2.6,0,0,0-.4,0,1.83,1.83,0,0,0-.81.15,1.06,1.06,0,0,0-.46.4,1.47,1.47,0,0,0-.21.62,6.3,6.3,0,0,0-.05.79v2.44h-1.8Z" />
                                            <path class="cls-1"
                                                d="M50.58,23.08A15.06,15.06,0,1,0,55,33.74,15,15,0,0,0,50.58,23.08Zm-4.14,15.1a1.48,1.48,0,0,1,0,2.08,1.45,1.45,0,0,1-1,.43,1.44,1.44,0,0,1-1-.43l-4.44-4.44-4.44,4.44a1.47,1.47,0,0,1-1,.43,1.44,1.44,0,0,1-1-.43,1.46,1.46,0,0,1,0-2.08l4.43-4.44L33.4,29.3a1.47,1.47,0,1,1,2.08-2.08l4.44,4.44,4.44-4.44a1.46,1.46,0,0,1,2.08,0,1.48,1.48,0,0,1,0,2.08L42,33.74Z" />
                                        </g>
                                    </g>
                                </svg>
                            </li>

                        </ul>
                    </div>

                </div>

            </div>

            <?php endif;?>


            <?php if($column->tipo_card == "card-custom"):?>

            <div class="col-12 col-lg-6 col-card-3">

                <div class="card  centrar-opciones">

                    <img class="card-img-top img-card-3" id="img-card-<?= $column->id_card?>"

                        style="background-image: url('<?= base_url("recs/assets/images/").$column->nombre_imagen_fondo?>')"

                        src="<?= base_url('recs/assets/images/').$column->nombre_imagen_frontal ?>"

                        alt="Card image cap">

                    <div class="card-body card-body-img">

                        <h5 class="card-title card-title-home"><?= $column->titulo?></h5>

                        <p class="card-text card-text-home"><?= $column->contenido?></p>

                        <a href="#" class="btn boton-ver-home" data-url="<?= base_url($column->ruta_imagen_completa.$column->imagen_completa)?>" data-toggle="modal" data-target="#modalImagenCompleta">Ver

                            más</a>

                    </div>



                    <div class="div-opciones" style="display:none" id="opciones-<?= $column->id_card?>">

                        <ul class="list-group list-group-horizontal-md list-group-opciones">

                            <li class="list-group-item list-group-item-eliminar list-group-item-img"

                                data-book-id="book-ed-<?= $column->id_card?>" id="ed-<?= $column->id_card?>"

                                data-toggle="modal" data-title="assa" data-target="#modalEditar"

                                data-tipo="<?= $column->tipo_card?>">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-opciones"
                                                viewBox="0 0 83.07 83.07"> <defs> 
                                                    <style>
                                                        .cls-1{
                                                        fill: #fff;
                                                        }
                                                    .cls-2{
                                                        fill: #010101;
                                                        }
                                                    </style>
                                                    </defs>
                                                
                                                <title>editar</title>
                                                <g id="Capa_2"
                                                        data-name="Capa 2"> <g id="Capa_1-2"
                                                        data-name="Capa 1"> <path class="cls-1"
                                                        d="M83.07,41.54A41.54,41.54,0,1,1,41.54,0,41.53,41.53,0,0,1,83.07,41.54"/> <path class="cls-2"
                                                        d="M81.21,41.54A39.68,39.68,0,1,1,41.54,1.86,39.67,39.67,0,0,1,81.21,41.54"/> <path class="cls-1"
                                                        d="M64.85,18.75a6.35,6.35,0,0,0-8.48-2.94l-32,15.53a1.37,1.37,0,0,0-.54.47l-7,10.2a1.4,1.4,0,0,0,1.07,2.2L30.25,45a1.32,1.32,0,0,0,.7-.14l32-15.52a6.36,6.36,0,0,0,2.94-8.48ZM27,33.21,53.17,20.5l4.1,8.44L31.09,41.65Zm-2.12,2.08L28.14,42l-7.59-.48Zm36.83-8.5-1.9.92-4.1-8.44,1.9-.92A3.53,3.53,0,0,1,62.31,20l1,2.1A3.53,3.53,0,0,1,61.7,26.79Z"/> <path class="cls-1"
                                                        d="M25.53,53.92h5.78v1.72h-3.9v1.59h3.68V59H27.41v1.72h4.11v1.73h-6Z"/> <path class="cls-1"
                                                        d="M38.91,62.41H37.26v-.77h0A1.6,1.6,0,0,1,37,62a1.89,1.89,0,0,1-.41.3,2.36,2.36,0,0,1-.51.21,1.9,1.9,0,0,1-.58.09,3,3,0,0,1-1.18-.23,2.59,2.59,0,0,1-.91-.62,3,3,0,0,1-.58-1,3.67,3.67,0,0,1-.2-1.22,3.86,3.86,0,0,1,.18-1.17,3.36,3.36,0,0,1,.53-1,2.82,2.82,0,0,1,.84-.69,2.36,2.36,0,0,1,1.11-.25,3,3,0,0,1,1,.17,1.68,1.68,0,0,1,.8.59h0V53.34h1.8ZM37.26,59.5a1.52,1.52,0,0,0-.38-1.07A1.39,1.39,0,0,0,35.82,58a1.37,1.37,0,0,0-1.06.41,1.48,1.48,0,0,0-.38,1.07,1.45,1.45,0,0,0,.38,1.06,1.34,1.34,0,0,0,1.06.41,1.35,1.35,0,0,0,1.06-.41A1.5,1.5,0,0,0,37.26,59.5Z"/> <path class="cls-1"
                                                        d="M40.23,54.74a1,1,0,0,1,.31-.73,1,1,0,0,1,.74-.31,1,1,0,0,1,1,1,1,1,0,0,1-.3.74,1,1,0,0,1-.74.31,1,1,0,0,1-.74-.31A1,1,0,0,1,40.23,54.74Zm.15,1.84h1.8v5.83h-1.8Z"/> <path class="cls-1"
                                                        d="M47.45,58H45.86V60a2.94,2.94,0,0,0,0,.44.85.85,0,0,0,.1.34.65.65,0,0,0,.26.23,1.2,1.2,0,0,0,.46.07l.38,0a.66.66,0,0,0,.36-.13v1.5a2.62,2.62,0,0,1-.63.14c-.21,0-.43,0-.63,0a3.58,3.58,0,0,1-.84-.1,1.92,1.92,0,0,1-.68-.31,1.48,1.48,0,0,1-.45-.54,2,2,0,0,1-.16-.82V58H42.91V56.58h1.15V54.85h1.8v1.73h1.59Z"/> <path class="cls-1"
                                                        d="M52,61.68h0a1.66,1.66,0,0,1-.79.67,2.73,2.73,0,0,1-1.05.21,2.56,2.56,0,0,1-.79-.12,2,2,0,0,1-.67-.34,1.64,1.64,0,0,1-.45-.56,1.79,1.79,0,0,1-.17-.78,1.76,1.76,0,0,1,.19-.86,1.61,1.61,0,0,1,.5-.57,2.62,2.62,0,0,1,.73-.36,5.69,5.69,0,0,1,.84-.18,6.52,6.52,0,0,1,.88-.07l.81,0a1,1,0,0,0-.34-.76,1.23,1.23,0,0,0-.81-.28,1.67,1.67,0,0,0-.81.19,2,2,0,0,0-.66.51l-1-1a3.42,3.42,0,0,1,1.18-.7A4.1,4.1,0,0,1,51,56.44a3.68,3.68,0,0,1,1.3.19,2,2,0,0,1,.82.59,2.25,2.25,0,0,1,.42.94,6.16,6.16,0,0,1,.12,1.29v3H52Zm-.45-1.82h-.51a2.71,2.71,0,0,0-.58.11,1.22,1.22,0,0,0-.48.25.56.56,0,0,0-.2.47.53.53,0,0,0,.27.48,1.22,1.22,0,0,0,.58.15,1.7,1.7,0,0,0,.51-.07,2,2,0,0,0,.44-.2.89.89,0,0,0,.3-.34,1,1,0,0,0,.12-.48v-.38Z"/> <path class="cls-1"
                                                        d="M54.8,56.58h1.8v.94h0a2.22,2.22,0,0,1,.68-.81,1.73,1.73,0,0,1,1-.27h.31a1.35,1.35,0,0,1,.29,0v1.64l-.38-.09-.39,0a2,2,0,0,0-.82.14,1.08,1.08,0,0,0-.46.41,1.42,1.42,0,0,0-.21.61,6.47,6.47,0,0,0,0,.8v2.43H54.8Z"/> </g></g >
                                            </svg>
                                
                                </li>
                                <li class="list-group-item list-group-item-eliminar list-group-item-img"

                                data-book-id="book-el-<?= $column->id_card?>" id="el-<?= $column->id_card?>"

                                data-toggle="modal" data-title="assa" data-target="#modalEliminar"

                                data-tipo="<?= $column->tipo_card?>">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 83.07 83.07" class="svg-opciones">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #fff;
                                            }
                                
                                            .cls-2 {
                                                fill: #010101;
                                            }
                                        </style>
                                    </defs>
                                    <title>elminar</title>
                                    <g id="Capa_2" data-name="Capa 2">
                                        <g id="Capa_1-2" data-name="Capa 1">
                                            <path class="cls-1" d="M83.07,41.54A41.54,41.54,0,1,1,41.54,0,41.53,41.53,0,0,1,83.07,41.54" />
                                            <path class="cls-2" d="M81.21,41.54A39.68,39.68,0,1,1,41.54,1.86,39.67,39.67,0,0,1,81.21,41.54" />
                                            <path class="cls-1" d="M19.29,55.77h5.77V57.5h-3.9v1.58h3.68v1.73H21.16v1.73h4.12v1.73h-6Z" />
                                            <path class="cls-1" d="M26.57,55.19h1.8v9.08h-1.8Z" />
                                            <path class="cls-1"
                                                d="M29.55,56.6a1,1,0,0,1,.3-.74,1,1,0,0,1,.74-.31,1.06,1.06,0,0,1,1.05,1.05,1,1,0,0,1-.31.74,1,1,0,0,1-.74.3,1,1,0,0,1-1-1Zm.14,1.83h1.8v5.84h-1.8Z" />
                                            <path class="cls-1"
                                                d="M32.79,58.43h1.73v.8h0a1.51,1.51,0,0,1,.24-.34,1.86,1.86,0,0,1,.37-.3,2.43,2.43,0,0,1,.49-.22,2.35,2.35,0,0,1,.6-.08,2.28,2.28,0,0,1,1.09.25,1.57,1.57,0,0,1,.71.79,2,2,0,0,1,.76-.8,2.57,2.57,0,0,1,2.08,0,1.61,1.61,0,0,1,.64.54,2.21,2.21,0,0,1,.33.8,4.48,4.48,0,0,1,.11,1v3.45h-1.8v-3.4a1.3,1.3,0,0,0-.18-.7.65.65,0,0,0-.62-.3,1.17,1.17,0,0,0-.52.11.75.75,0,0,0-.33.28,1,1,0,0,0-.18.42,2.07,2.07,0,0,0-.06.5v3.09h-1.8V61.18c0-.1,0-.23,0-.38a2.14,2.14,0,0,0-.08-.44.81.81,0,0,0-.24-.34.66.66,0,0,0-.47-.15,1.2,1.2,0,0,0-.57.13.9.9,0,0,0-.33.34,1.62,1.62,0,0,0-.15.47,4.93,4.93,0,0,0,0,.55v2.91h-1.8Z" />
                                            <path class="cls-1"
                                                d="M43.11,56.6a1,1,0,0,1,.3-.74,1,1,0,0,1,1.48,0,1,1,0,0,1,.3.74,1,1,0,1,1-2.08,0Zm.14,1.83h1.8v5.84h-1.8Z" />
                                            <path class="cls-1"
                                                d="M46.35,58.43h1.73v.8h0a1.51,1.51,0,0,1,.24-.34,1.86,1.86,0,0,1,.37-.3,2.2,2.2,0,0,1,.49-.22,2.35,2.35,0,0,1,.6-.08,2.5,2.5,0,0,1,1.11.21,1.53,1.53,0,0,1,.65.58,2.36,2.36,0,0,1,.32.88A7.34,7.34,0,0,1,52,61.05v3.22h-1.8V61.41a4.61,4.61,0,0,0,0-.52,1.59,1.59,0,0,0-.1-.5.8.8,0,0,0-.28-.37.82.82,0,0,0-.53-.15,1.2,1.2,0,0,0-.57.13.9.9,0,0,0-.33.34,1.62,1.62,0,0,0-.15.47,4.93,4.93,0,0,0,0,.55v2.91h-1.8Z" />
                                            <path class="cls-1"
                                                d="M56.89,63.53h0a1.7,1.7,0,0,1-.8.68,2.84,2.84,0,0,1-1,.2,2.88,2.88,0,0,1-.78-.11,1.86,1.86,0,0,1-.67-.35,1.8,1.8,0,0,1-.46-.56,1.73,1.73,0,0,1-.16-.78,1.81,1.81,0,0,1,.18-.85,1.78,1.78,0,0,1,.51-.58,2.41,2.41,0,0,1,.72-.35,5,5,0,0,1,.85-.19,8.47,8.47,0,0,1,.88-.07h.8a.91.91,0,0,0-.34-.76,1.24,1.24,0,0,0-.81-.29,1.86,1.86,0,0,0-.81.19,2.1,2.1,0,0,0-.65.51l-1-1a3.21,3.21,0,0,1,1.18-.71,4.31,4.31,0,0,1,1.39-.23,3.66,3.66,0,0,1,1.3.2,1.89,1.89,0,0,1,.82.58,2.31,2.31,0,0,1,.42.94,6.16,6.16,0,0,1,.12,1.29v3H56.89Zm-.44-1.82-.51,0a2.35,2.35,0,0,0-.59.1,1.57,1.57,0,0,0-.48.25.58.58,0,0,0-.19.47A.51.51,0,0,0,55,63a1.24,1.24,0,0,0,.58.16,1.81,1.81,0,0,0,.51-.08,1.22,1.22,0,0,0,.43-.2,1,1,0,0,0,.31-.34.9.9,0,0,0,.11-.48v-.38Z" />
                                            <path class="cls-1"
                                                d="M59.68,58.43h1.8v.94h0a2.24,2.24,0,0,1,.69-.81,1.7,1.7,0,0,1,1-.27h.32a1.16,1.16,0,0,1,.28.05V60a2.49,2.49,0,0,0-.37-.09,2.6,2.6,0,0,0-.4,0,1.83,1.83,0,0,0-.81.15,1.06,1.06,0,0,0-.46.4,1.47,1.47,0,0,0-.21.62,6.3,6.3,0,0,0-.05.79v2.44h-1.8Z" />
                                            <path class="cls-1"
                                                d="M50.58,23.08A15.06,15.06,0,1,0,55,33.74,15,15,0,0,0,50.58,23.08Zm-4.14,15.1a1.48,1.48,0,0,1,0,2.08,1.45,1.45,0,0,1-1,.43,1.44,1.44,0,0,1-1-.43l-4.44-4.44-4.44,4.44a1.47,1.47,0,0,1-1,.43,1.44,1.44,0,0,1-1-.43,1.46,1.46,0,0,1,0-2.08l4.43-4.44L33.4,29.3a1.47,1.47,0,1,1,2.08-2.08l4.44,4.44,4.44-4.44a1.46,1.46,0,0,1,2.08,0,1.48,1.48,0,0,1,0,2.08L42,33.74Z" />
                                        </g>
                                    </g>
                                </svg>
                                </li>

                        </ul>

                    </div>

                </div>

            </div>

            <?php endif;?>

            <?php endforeach;?>



            <!-- Modal -->

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"

                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-content">

                        <div class="modal-body">

                            <?php foreach($query->result() as $column):?>

                            <?php if($column->tipo_card == "card-front-transparente"):?>

                            <img class="modal-card-2"

                                src="<?= base_url('recs/assets/images/').$column->imagen_completa ?>">

                            <?php endif;?>

                            <?php endforeach;?>

                        </div>

                    </div>

                </div>

            </div>
            
            <!-- Modal -->

            <div class="modal fade" id="modalImagenCompleta" tabindex="-1" role="dialog"

                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-content">

                        <div class="modal-body">

                            <img class="modal-card-2" id="imagenCompleta"

                                src="<?= base_url('recs/assets/images/').$column->imagen_completa ?>">

                        </div>

                    </div>

                </div>

            </div>



            <!-- Modal editar-->

            <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

                aria-hidden="true">

                <div class="modal-dialog" role="document">

                    <div class="modal-content" style="background-color: #fff !important;">

                        <div class="modal-header">

                            <h5 class="modal-title" id="exampleModalLabel">Editar menú</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                <span aria-hidden="true">&times;</span>

                            </button>

                        </div>

                        <form action="<?= base_url('index.php/AdminWelcome/update')?>" method="post"

                            enctype="multipart/form-data" id="form-image">

                            <div class="modal-body">

                                <input type="text" name="id_card" id="id_card" style="display:none">

                                <div class="form-row">

                                    <div class="col-md-12 col-lg-6 mb-12 col-xl-12">

                                        <label for="validationCustom01">Titulo</label>

                                        <input type="text" class="form-control form-control-edit" id="titulo_e"

                                            name="titulo_e" value="" required disabled>

                                        <div class="valid-feedback">

                                            Correcto!

                                        </div>

                                        <div class="invalid-feedback">

                                            Por favor ingrese algún titulo.

                                        </div>

                                    </div>



                                    <div class="col-md-12 col-lg-6 mb-12 col-xl-12">

                                        <label for="validationCustom01" disabled>Contenido</label>

                                        <textarea type="text" class="form-control form-control-edit" id="contenido_e"

                                            name="contenido_e" value="" required rows="5"></textarea>

                                        <div class="valid-feedback">

                                            Correcto!

                                        </div>

                                        <div class="invalid-feedback">

                                            Por favor ingrese alguna descripción.

                                        </div>

                                    </div>

                                </div>



                                <br>



                                <!--<div class="form-row">

                                    <div class="col-md-12 col-lg-12 mb-5">

                                        <div class="custom-file">

                                            <input type="file" class="custom-file-input form-control-edit"

                                                name="imagen_fondo" id="imagen_fondo" disabled>

                                            <label class="custom-file-label" for="validatedCustomFile">Elige una

                                                imagen de fondo</label>

                                            <div class="invalid-feedback">Example invalid custom file feedback</div>

                                        </div>

                                    </div>

                                </div>-->

                                <div class="form-row">

                                    <div class="col-md-12 col-lg-12 mb-5">

                                        <div class="custom-file">

                                            <input type="file" class="custom-file-input form-control-edit"

                                                id="imagen_front" name="imagen_front" disabled>

                                            <label class="custom-file-label" for="validatedCustomFile">Elige una imagen

                                                principal</label>

                                            <div class="invalid-feedback">Porfavor elige una imagen principal</div>

                                        </div>

                                    </div>

                                </div>

                                <div class="form-row" id="row-img_vista">

                                    <div class="col-md-12 col-lg-12 mb-5">

                                        <div class="custom-file">

                                            <input type="file" class="custom-file-input form-control-edit"

                                                id="imagen_vista" name="imagen_vista" disabled>

                                            <label class="custom-file-label" for="imagen_vista"

                                                id="label-imagen_vista">Elige una imagen para vista completa</label>

                                            <div class="invalid-feedback">Porfavor elige una imagen para vista completa

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="modal-footer">

                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

                                <button class="btn btn-success btnEnviar" type="submit" id="btnEditar">Guardar</button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

            <!-- Fin modal editar -->

            <!-- Modal agregar banmer carrousel-->

            <div class="modal fade" id="modalAgregarBaner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

                aria-hidden="true">

                <div class="modal-dialog" role="document">

                    <div class="modal-content" style="background-color: #fff !important;">

                        <div class="modal-header">

                            <h5 class="modal-title" id="exampleModalLabel">Agregar card banner</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                <span aria-hidden="true">&times;</span>

                            </button>

                        </div>

                        <form action="<?= base_url('index.php/AdminWelcome/agregarModalBaner')?>" method="post"

                            enctype="multipart/form-data" id="form-image">

                            <div class="modal-body">

                                <input type="text" name="id_card" id="id_card" style="display:none">

                                <div class="form-row">

                                    <div class="col-md-12 col-lg-6 mb-12 col-xl-12">

                                        <label for="tituloModalBaner">Titulo</label>

                                        <input type="text" class="form-control" id="tituloModalBaner"

                                            name="tituloModalBaner" value="" required>

                                        <div class="valid-feedback">

                                            Correcto!

                                        </div>

                                        <div class="invalid-feedback">

                                            Por favor ingrese algún titulo.

                                        </div>

                                    </div>



                                    <div class="col-md-12 col-lg-6 mb-12 col-xl-12">

                                        <label for="contenidoModalBaner" disabled>Contenido</label>

                                        <textarea type="text" class="form-control" id="contenidoModalBaner"

                                            name="contenidoModalBaner" value="" required rows="5"></textarea>

                                        <div class="valid-feedback">

                                            Correcto!

                                        </div>

                                        <div class="invalid-feedback">

                                            Por favor ingrese alguna descripción.

                                        </div>

                                    </div>

                                </div>

                                <br>


                                <div class="form-row">

                                    <div class="col-md-12 col-lg-12 mb-5">

                                        <div class="custom-file">

                                            <input type="file" class="custom-file-input"

                                                id="imgFrontModalBaner" name="imgFrontModalBaner" >

                                            <label class="custom-file-label" for="imgFrontModalBaner">Elige una imagen

                                                principal</label>

                                            <div class="invalid-feedback">Porfavor elige una imagen principal</div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="modal-footer">

                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

                                <button class="btn btn-success btnEnviar" type="submit" id="btnAgregarBaner">Guardar</button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

            <!-- Fin modal agregar banner carrousel -->
            
            <!-- Modal agregar card modal-->

            <div class="modal fade" id="modalAgregarCardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

                aria-hidden="true">

                <div class="modal-dialog" role="document">

                    <div class="modal-content" style="background-color: #fff !important;">

                        <div class="modal-header">

                            <h5 class="modal-title" id="exampleModalLabel">Agregar anuncio</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                <span aria-hidden="true">&times;</span>

                            </button>

                        </div>

                        <form action="<?= base_url('index.php/AdminWelcome/agregarModalAnuncio')?>" method="post"

                            enctype="multipart/form-data" id="form-image">

                            <div class="modal-body">

                                <input type="text" name="id_card" id="id_card" style="display:none">

                                <div class="form-row">

                                    <div class="col-md-12 col-lg-6 mb-12 col-xl-12">

                                        <label for="tituloModalAnuncio">Titulo</label>

                                        <input type="text" class="form-control" id="tituloModalAnuncio"

                                            name="tituloModalAnuncio" value="" required>

                                        <div class="valid-feedback">

                                            Correcto!

                                        </div>

                                        <div class="invalid-feedback">

                                            Por favor ingrese algún titulo.

                                        </div>

                                    </div>



                                    <div class="col-md-12 col-lg-6 mb-12 col-xl-12">

                                        <label for="contenidoModalAnuncio" disabled>Contenido</label>

                                        <textarea type="text" class="form-control" id="contenidoModalAnuncio"

                                            name="contenidoModalAnuncio" value="" required rows="5"></textarea>

                                        <div class="valid-feedback">

                                            Correcto!

                                        </div>

                                        <div class="invalid-feedback">

                                            Por favor ingrese alguna descripción.

                                        </div>

                                    </div>

                                </div>



                                <br>


                                <div class="form-row">

                                    <div class="col-md-12 col-lg-12 mb-5">

                                        <div class="custom-file">

                                            <input type="file" class="custom-file-input"

                                                id="imgFrontModalAnuncio" name="imgFrontModalAnuncio"  required>

                                            <label class="custom-file-label" for="imgFrontModalAnuncio">Elige una imagen

                                                principal</label>

                                            <div class="invalid-feedback">Porfavor elige una imagen principal</div>

                                        </div>

                                    </div>

                                </div>

                                <div class="form-row" id="row-img_vista">

                                    <div class="col-md-12 col-lg-12 mb-5">

                                        <div class="custom-file">

                                            <input type="file" class="custom-file-input"

                                                id="imgCompletaModalAnuncio" name="imgCompletaModalAnuncio"  required>

                                            <label class="custom-file-label" for="imgCompletaModalAnuncio"

                                                id="label-imagen_vista">Elige una imagen para vista completa</label>

                                            <div class="invalid-feedback">Porfavor elige una imagen para vista completa

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="modal-footer">

                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

                                <button class="btn btn-success btnEnviar" type="submit" id="btnAgregarBaner">Guardar</button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

            <!-- Fin modal agregar modal card -->
            
            <!-- Modal agregar card modal link-->

            <div class="modal fade" id="modalAgregarCardLink" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

                aria-hidden="true">

                <div class="modal-dialog" role="document">

                    <div class="modal-content" style="background-color: #fff !important;">

                        <div class="modal-header">

                            <h5 class="modal-title" id="exampleModalLabel">Agregar sección</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                <span aria-hidden="true">&times;</span>

                            </button>

                        </div>

                        <form action="<?= base_url('index.php/AdminWelcome/agregarModalLink')?>" method="post"

                            enctype="multipart/form-data" id="">

                            <div class="modal-body">

                                <input type="text" name="id_card" id="id_card" style="display:none">

                                <div class="form-row">

                                    <div class="col-md-12 col-lg-6 mb-12 col-xl-12">

                                        <label for="tituloModalLink">Titulo</label>

                                        <input type="text" class="form-control" id="tituloModalLink"

                                            name="tituloModalLink" value="" required>

                                        <div class="valid-feedback">

                                            Correcto!

                                        </div>

                                        <div class="invalid-feedback">

                                            Por favor ingrese algún titulo.

                                        </div>

                                    </div>



                                    <div class="col-md-12 col-lg-6 mb-12 col-xl-12">

                                        <label for="contenidoModalLink" disabled>Contenido</label>

                                        <textarea type="text" class="form-control" id="contenidoModalLink"

                                            name="contenidoModalLink" value="" required rows="5"></textarea>

                                        <div class="valid-feedback">

                                            Correcto!

                                        </div>

                                        <div class="invalid-feedback">

                                            Por favor ingrese alguna descripción.

                                        </div>

                                    </div>

                                </div>

                                <br>

                                <div class="form-row">

                                    <div class="col-md-12 col-lg-12 mb-5">

                                        <div class="custom-file">

                                            <input type="file" class="custom-file-input"

                                                id="imgFrontModalLink" name="imgFrontModalLink" required>

                                            <label class="custom-file-label" for="imgFrontModalLink">Elige una imagen

                                                principal</label>

                                            <div class="invalid-feedback">Porfavor elige una imagen principal</div>

                                        </div>

                                    </div>

                                </div>
                                
                                <div class="form-group">
                                    <label for="redirecionarA">Redireccionar a</label>
                                    <select class="form-control" id="redirecionarA" name="redirecionarA" required>
                                      <option value="Historia">Nosotros</option>
                                      <option value="Cerveceria">Cerveceria</option>
                                      <option value="Cervezas">Cervezas</option>
                                      <option value="Menu">Menu</option>
                                      <option value="Promociones">Promociones</option>
                                      <option value="Calendario">Calendario</option>
                                      <option value="Contacto">Contacto</option>
                                      <option value="Restaurantes">Ubicaciones</option>
                                    </select>
                                  </div>

                            </div>

                            <div class="modal-footer">

                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

                                <button class="btn btn-success btnEnviar" type="submit" id="btnAgregarModalLink">Guardar</button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

            <!-- Fin modal agregar modal link -->
            
            
            <!-- Modal eliminar-->
            
            <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"

                aria-hidden="true">

                <div class="modal-dialog modal-lg">

                    <div class="modal-content" style="background-color:#FFF !important">

                        <div class="modal-header">

                            <h4 class="modal-title" id="image-gallery-title"></h4>

                            <button type="button" class="close" data-dismiss="modal"><span

                                    aria-hidden="true">×</span><span class="sr-only">Close</span>

                            </button>

                        </div>

                        <div class="modal-body">

                            <div class="text-center">

                                <p>¿Esta seguro que desea eliminar la imagen?</p>

                                <!--<form action="cargar_archivo" method="post" enctype="multipart/form-data">-->



                                <!--</form>-->



                            </div>

                        </div>

                        <div class="modal-footer modal-footer-subir">

                            <div class="w-lightbox-control w-lightbox-left"></div>

                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

                            <input type="submit" value="Aceptar" class="btn btn-success" id="btnEliminar">

                        </div>

                    </div>

                </div>

            </div>
            
            <!-- Fin Modal eliminar-->
            
            
            

            <!-- Modal -->

            <div class="modal fade" id="exampleModalCard3" tabindex="-1" role="dialog"

                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-content">

                        <div class="modal-body">

                            <?php foreach($query->result() as $column):?>

                            <?php if($column->tipo_card == "card-custom"):?>

                            <img class="modal-card-2"

                                src="<?= base_url('recs/assets/images/').$column->imagen_completa ?>">

                            <?php endif;?>

                            <?php endforeach;?>

                        </div>

                    </div>

                </div>

            </div>



            <div class="col-12 col-lg-6 col-card-carousel">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">

                        <?php $noCards = 0?>

                        <?php foreach($query->result() as $column):?>

                        <?php if($column->tipo_card == "card-carrousel"):?>

                        <?php $noCards++?>

                        <li data-target="#carouselExampleIndicators" data-slide-to="<?= $noCards - 1?>" class="<?php if($noCards == 1){echo "active";}?>"></li>

                        <?php endif;?>

                        <?php endforeach;?>

                    </ol>

                    <div class="carousel-inner">

                        <?php $noCards = 0?>

                        <?php foreach($query->result() as $column):?>

                        <?php if($column->tipo_card == "card-carrousel"):?>

                        <?php $noCards++?>

                        <div class="carousel-item <?php if($noCards == 1){echo "active";}?>">

                            <div class="card  centrar-opciones">

                                <img class="card-img-top img-card-carrousel-1" id="img-card-<?= $column->id_card?>"

                                    style="padding:0"

                                    src="<?= base_url('recs/assets/images/').$column->nombre_imagen_frontal?>"

                                    alt="Card image cap">

                                <div class="card-body card-body-img" style="width:100%">

                                    <h5 class="card-title card-title-home"><?= $column->titulo?></h5>

                                    <p class="card-text card-text-home"><?= $column->contenido?></p>

                                    <a href="<?= base_url("index.php/PromocionesAdmin/index")?>"

                                        class="btn boton-ver-home">Ver más</a>

                                </div>

                                <div class="div-opciones" style="display:none" id="opciones-<?= $column->id_card?>">

                                    <ul class="list-group list-group-horizontal-md list-group-opciones">

                                        <li class="list-group-item list-group-item-eliminar list-group-item-img"

                                            data-book-id="book-ed-<?= $column->id_card?>" id="ed-<?= $column->id_card?>"

                                            data-toggle="modal" data-title="assa" data-target="#modalEditar"

                                            data-tipo="<?= $column->tipo_card?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-opciones"
                                                viewBox="0 0 83.07 83.07"> <defs> 
                                                    <style>
                                                        .cls-1{
                                                        fill: #fff;
                                                        }
                                                    .cls-2{
                                                        fill: #010101;
                                                        }
                                                    </style>
                                                    </defs>
                                                
                                                <title>editar</title>
                                                <g id="Capa_2"
                                                        data-name="Capa 2"> <g id="Capa_1-2"
                                                        data-name="Capa 1"> <path class="cls-1"
                                                        d="M83.07,41.54A41.54,41.54,0,1,1,41.54,0,41.53,41.53,0,0,1,83.07,41.54"/> <path class="cls-2"
                                                        d="M81.21,41.54A39.68,39.68,0,1,1,41.54,1.86,39.67,39.67,0,0,1,81.21,41.54"/> <path class="cls-1"
                                                        d="M64.85,18.75a6.35,6.35,0,0,0-8.48-2.94l-32,15.53a1.37,1.37,0,0,0-.54.47l-7,10.2a1.4,1.4,0,0,0,1.07,2.2L30.25,45a1.32,1.32,0,0,0,.7-.14l32-15.52a6.36,6.36,0,0,0,2.94-8.48ZM27,33.21,53.17,20.5l4.1,8.44L31.09,41.65Zm-2.12,2.08L28.14,42l-7.59-.48Zm36.83-8.5-1.9.92-4.1-8.44,1.9-.92A3.53,3.53,0,0,1,62.31,20l1,2.1A3.53,3.53,0,0,1,61.7,26.79Z"/> <path class="cls-1"
                                                        d="M25.53,53.92h5.78v1.72h-3.9v1.59h3.68V59H27.41v1.72h4.11v1.73h-6Z"/> <path class="cls-1"
                                                        d="M38.91,62.41H37.26v-.77h0A1.6,1.6,0,0,1,37,62a1.89,1.89,0,0,1-.41.3,2.36,2.36,0,0,1-.51.21,1.9,1.9,0,0,1-.58.09,3,3,0,0,1-1.18-.23,2.59,2.59,0,0,1-.91-.62,3,3,0,0,1-.58-1,3.67,3.67,0,0,1-.2-1.22,3.86,3.86,0,0,1,.18-1.17,3.36,3.36,0,0,1,.53-1,2.82,2.82,0,0,1,.84-.69,2.36,2.36,0,0,1,1.11-.25,3,3,0,0,1,1,.17,1.68,1.68,0,0,1,.8.59h0V53.34h1.8ZM37.26,59.5a1.52,1.52,0,0,0-.38-1.07A1.39,1.39,0,0,0,35.82,58a1.37,1.37,0,0,0-1.06.41,1.48,1.48,0,0,0-.38,1.07,1.45,1.45,0,0,0,.38,1.06,1.34,1.34,0,0,0,1.06.41,1.35,1.35,0,0,0,1.06-.41A1.5,1.5,0,0,0,37.26,59.5Z"/> <path class="cls-1"
                                                        d="M40.23,54.74a1,1,0,0,1,.31-.73,1,1,0,0,1,.74-.31,1,1,0,0,1,1,1,1,1,0,0,1-.3.74,1,1,0,0,1-.74.31,1,1,0,0,1-.74-.31A1,1,0,0,1,40.23,54.74Zm.15,1.84h1.8v5.83h-1.8Z"/> <path class="cls-1"
                                                        d="M47.45,58H45.86V60a2.94,2.94,0,0,0,0,.44.85.85,0,0,0,.1.34.65.65,0,0,0,.26.23,1.2,1.2,0,0,0,.46.07l.38,0a.66.66,0,0,0,.36-.13v1.5a2.62,2.62,0,0,1-.63.14c-.21,0-.43,0-.63,0a3.58,3.58,0,0,1-.84-.1,1.92,1.92,0,0,1-.68-.31,1.48,1.48,0,0,1-.45-.54,2,2,0,0,1-.16-.82V58H42.91V56.58h1.15V54.85h1.8v1.73h1.59Z"/> <path class="cls-1"
                                                        d="M52,61.68h0a1.66,1.66,0,0,1-.79.67,2.73,2.73,0,0,1-1.05.21,2.56,2.56,0,0,1-.79-.12,2,2,0,0,1-.67-.34,1.64,1.64,0,0,1-.45-.56,1.79,1.79,0,0,1-.17-.78,1.76,1.76,0,0,1,.19-.86,1.61,1.61,0,0,1,.5-.57,2.62,2.62,0,0,1,.73-.36,5.69,5.69,0,0,1,.84-.18,6.52,6.52,0,0,1,.88-.07l.81,0a1,1,0,0,0-.34-.76,1.23,1.23,0,0,0-.81-.28,1.67,1.67,0,0,0-.81.19,2,2,0,0,0-.66.51l-1-1a3.42,3.42,0,0,1,1.18-.7A4.1,4.1,0,0,1,51,56.44a3.68,3.68,0,0,1,1.3.19,2,2,0,0,1,.82.59,2.25,2.25,0,0,1,.42.94,6.16,6.16,0,0,1,.12,1.29v3H52Zm-.45-1.82h-.51a2.71,2.71,0,0,0-.58.11,1.22,1.22,0,0,0-.48.25.56.56,0,0,0-.2.47.53.53,0,0,0,.27.48,1.22,1.22,0,0,0,.58.15,1.7,1.7,0,0,0,.51-.07,2,2,0,0,0,.44-.2.89.89,0,0,0,.3-.34,1,1,0,0,0,.12-.48v-.38Z"/> <path class="cls-1"
                                                        d="M54.8,56.58h1.8v.94h0a2.22,2.22,0,0,1,.68-.81,1.73,1.73,0,0,1,1-.27h.31a1.35,1.35,0,0,1,.29,0v1.64l-.38-.09-.39,0a2,2,0,0,0-.82.14,1.08,1.08,0,0,0-.46.41,1.42,1.42,0,0,0-.21.61,6.47,6.47,0,0,0,0,.8v2.43H54.8Z"/> </g></g >
                                            </svg>
                                            </li>
                                            <li class="list-group-item list-group-item-eliminar list-group-item-img"

                                            data-book-id="book-el-<?= $column->id_card?>" id="el-<?= $column->id_card?>"
            
                                            data-toggle="modal" data-title="assa" data-target="#modalEliminar"
            
                                            data-tipo="<?= $column->tipo_card?>">
            
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 83.07 83.07" class="svg-opciones">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #fff;
                                            }
                                
                                            .cls-2 {
                                                fill: #010101;
                                            }
                                        </style>
                                    </defs>
                                    <title>elminar</title>
                                    <g id="Capa_2" data-name="Capa 2">
                                        <g id="Capa_1-2" data-name="Capa 1">
                                            <path class="cls-1" d="M83.07,41.54A41.54,41.54,0,1,1,41.54,0,41.53,41.53,0,0,1,83.07,41.54" />
                                            <path class="cls-2" d="M81.21,41.54A39.68,39.68,0,1,1,41.54,1.86,39.67,39.67,0,0,1,81.21,41.54" />
                                            <path class="cls-1" d="M19.29,55.77h5.77V57.5h-3.9v1.58h3.68v1.73H21.16v1.73h4.12v1.73h-6Z" />
                                            <path class="cls-1" d="M26.57,55.19h1.8v9.08h-1.8Z" />
                                            <path class="cls-1"
                                                d="M29.55,56.6a1,1,0,0,1,.3-.74,1,1,0,0,1,.74-.31,1.06,1.06,0,0,1,1.05,1.05,1,1,0,0,1-.31.74,1,1,0,0,1-.74.3,1,1,0,0,1-1-1Zm.14,1.83h1.8v5.84h-1.8Z" />
                                            <path class="cls-1"
                                                d="M32.79,58.43h1.73v.8h0a1.51,1.51,0,0,1,.24-.34,1.86,1.86,0,0,1,.37-.3,2.43,2.43,0,0,1,.49-.22,2.35,2.35,0,0,1,.6-.08,2.28,2.28,0,0,1,1.09.25,1.57,1.57,0,0,1,.71.79,2,2,0,0,1,.76-.8,2.57,2.57,0,0,1,2.08,0,1.61,1.61,0,0,1,.64.54,2.21,2.21,0,0,1,.33.8,4.48,4.48,0,0,1,.11,1v3.45h-1.8v-3.4a1.3,1.3,0,0,0-.18-.7.65.65,0,0,0-.62-.3,1.17,1.17,0,0,0-.52.11.75.75,0,0,0-.33.28,1,1,0,0,0-.18.42,2.07,2.07,0,0,0-.06.5v3.09h-1.8V61.18c0-.1,0-.23,0-.38a2.14,2.14,0,0,0-.08-.44.81.81,0,0,0-.24-.34.66.66,0,0,0-.47-.15,1.2,1.2,0,0,0-.57.13.9.9,0,0,0-.33.34,1.62,1.62,0,0,0-.15.47,4.93,4.93,0,0,0,0,.55v2.91h-1.8Z" />
                                            <path class="cls-1"
                                                d="M43.11,56.6a1,1,0,0,1,.3-.74,1,1,0,0,1,1.48,0,1,1,0,0,1,.3.74,1,1,0,1,1-2.08,0Zm.14,1.83h1.8v5.84h-1.8Z" />
                                            <path class="cls-1"
                                                d="M46.35,58.43h1.73v.8h0a1.51,1.51,0,0,1,.24-.34,1.86,1.86,0,0,1,.37-.3,2.2,2.2,0,0,1,.49-.22,2.35,2.35,0,0,1,.6-.08,2.5,2.5,0,0,1,1.11.21,1.53,1.53,0,0,1,.65.58,2.36,2.36,0,0,1,.32.88A7.34,7.34,0,0,1,52,61.05v3.22h-1.8V61.41a4.61,4.61,0,0,0,0-.52,1.59,1.59,0,0,0-.1-.5.8.8,0,0,0-.28-.37.82.82,0,0,0-.53-.15,1.2,1.2,0,0,0-.57.13.9.9,0,0,0-.33.34,1.62,1.62,0,0,0-.15.47,4.93,4.93,0,0,0,0,.55v2.91h-1.8Z" />
                                            <path class="cls-1"
                                                d="M56.89,63.53h0a1.7,1.7,0,0,1-.8.68,2.84,2.84,0,0,1-1,.2,2.88,2.88,0,0,1-.78-.11,1.86,1.86,0,0,1-.67-.35,1.8,1.8,0,0,1-.46-.56,1.73,1.73,0,0,1-.16-.78,1.81,1.81,0,0,1,.18-.85,1.78,1.78,0,0,1,.51-.58,2.41,2.41,0,0,1,.72-.35,5,5,0,0,1,.85-.19,8.47,8.47,0,0,1,.88-.07h.8a.91.91,0,0,0-.34-.76,1.24,1.24,0,0,0-.81-.29,1.86,1.86,0,0,0-.81.19,2.1,2.1,0,0,0-.65.51l-1-1a3.21,3.21,0,0,1,1.18-.71,4.31,4.31,0,0,1,1.39-.23,3.66,3.66,0,0,1,1.3.2,1.89,1.89,0,0,1,.82.58,2.31,2.31,0,0,1,.42.94,6.16,6.16,0,0,1,.12,1.29v3H56.89Zm-.44-1.82-.51,0a2.35,2.35,0,0,0-.59.1,1.57,1.57,0,0,0-.48.25.58.58,0,0,0-.19.47A.51.51,0,0,0,55,63a1.24,1.24,0,0,0,.58.16,1.81,1.81,0,0,0,.51-.08,1.22,1.22,0,0,0,.43-.2,1,1,0,0,0,.31-.34.9.9,0,0,0,.11-.48v-.38Z" />
                                            <path class="cls-1"
                                                d="M59.68,58.43h1.8v.94h0a2.24,2.24,0,0,1,.69-.81,1.7,1.7,0,0,1,1-.27h.32a1.16,1.16,0,0,1,.28.05V60a2.49,2.49,0,0,0-.37-.09,2.6,2.6,0,0,0-.4,0,1.83,1.83,0,0,0-.81.15,1.06,1.06,0,0,0-.46.4,1.47,1.47,0,0,0-.21.62,6.3,6.3,0,0,0-.05.79v2.44h-1.8Z" />
                                            <path class="cls-1"
                                                d="M50.58,23.08A15.06,15.06,0,1,0,55,33.74,15,15,0,0,0,50.58,23.08Zm-4.14,15.1a1.48,1.48,0,0,1,0,2.08,1.45,1.45,0,0,1-1,.43,1.44,1.44,0,0,1-1-.43l-4.44-4.44-4.44,4.44a1.47,1.47,0,0,1-1,.43,1.44,1.44,0,0,1-1-.43,1.46,1.46,0,0,1,0-2.08l4.43-4.44L33.4,29.3a1.47,1.47,0,1,1,2.08-2.08l4.44,4.44,4.44-4.44a1.46,1.46,0,0,1,2.08,0,1.48,1.48,0,0,1,0,2.08L42,33.74Z" />
                                        </g>
                                    </g>
                                </svg>
                                            
                                            </li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                        <?php endif;?>

                        <?php endforeach;?>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?php foreach($query->result() as $column):?>

<script>

$("#img-card-<?= $column->id_card?>").hover(function() {

        $("#opciones-<?= $column->id_card?>").show();

        //alert("show");

    },

    function() {

        $("#opciones-<?= $column->id_card?>").hide();

        //alert("hide");

    });



$("#opciones-<?= $column->id_card?>").hover(function() {

        $("#opciones-<?= $column->id_card?>").show();

    },

    function() {

        $("#opciones-<?= $column->id_card?>").hide();

    });

</script>





<?php endforeach; ?>



<script src="<?= base_url("recs/assets/js/Admin/inicio.js")?>"></script>