<link rel="stylesheet" type="text/css" href="<?= base_url('recs/assets/css/cervezas.css') ?>" />
<script>var login = false;</script>


<div id="container-cervezas">

    <button class="btn btn-success btnAdd" data-toggle="modal" data-target="#modalAgregarImagenCarrousel">

        <svg xmlns="http://www.w3.org/2000/svg" class="icon-add" viewBox="0 0 512 512" data-target="#subir"

            data-toggle="modal">

            <g>

                <path class="svg-add"

                    d="m437.019531 74.980469c-48.351562-48.351563-112.640625-74.980469-181.019531-74.980469s-132.667969 26.628906-181.019531 74.980469c-48.351563 48.351562-74.980469 112.640625-74.980469 181.019531s26.628906 132.667969 74.980469 181.019531c48.351562 48.351563 112.640625 74.980469 181.019531 74.980469s132.667969-26.628906 181.019531-74.980469c48.351563-48.351562 74.980469-112.640625 74.980469-181.019531s-26.628906-132.667969-74.980469-181.019531zm-181.019531 397.019531c-119.101562 0-216-96.898438-216-216s96.898438-216 216-216 216 96.898438 216 216-96.898438 216-216 216zm20-236.019531h90v40h-90v90h-40v-90h-90v-40h90v-90h40zm0 0"

                    data-original="#000000" class="thumbnail" data-old_color="#000000" fill="#7D7D7D" />

            </g>

        </svg>Agregar</button>



    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">

            <?php $nRows = 0;?>

            <?php foreach($images['query']->result() as $column):?>

            <?php $nRows++?>



            <div class="carousel-item  <?php if($nRows == 1) { echo "active";}?>" style="">

                <img src="<?= base_url('recs/assets/images/Cervezas/').$column->nombre_imagen ?>" class="d-block w-100"

                    alt="..." id="img-carrousel-<?= $column->id_imagen?>">



                <div class="div-opciones div-opciones-carrousel" style="display:none"

                    id="opciones-carrousel-<?= $column->id_imagen?>">

                    <!--<p>hola</p>-->

                    <ul class="list-group list-group-horizontal-md list-group-opciones">

                        <li class="list-group-item list-group-item-eliminar list-group-item-img"

                            data-book-id="book-el-<?= $column->id_imagen?>" id="el-<?= $column->id_imagen?>"

                            data-toggle="modal" data-title="assa" data-target="#modalEliminarImagenCarrousel">

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

                        <!--<li class="list-group-item" data-toggle="modal" data-title="" data-target="#subir">

                                    Modificar</li>

                        <li class="list-group-item list-group-item-ver list-group-item-eliminar list-group-item-img">Ver</li>-->

                    </ul>

                </div>

            </div>

            <?php endforeach;?>

        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">

            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            <span class="sr-only">Previous</span>

        </a>

        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">

            <span class="carousel-control-next-icon" aria-hidden="true"></span>

            <span class="sr-only">Next</span>

        </a>

    </div>



    <div class="tabs-submenu-cervezas w-tab-menu">

        <a class="tab-link w-inline-block w-tab-link w--current" data-w-tab="Tab 1" id="btn_nuestras">

            <div>Nuestras cervezas</div>

        </a>

        <a style="" class="cerveceria tab-link w-inline-block w-tab-link" data-w-tab="Tab 2"

            id="btn_maridaje">

            <div>Maridaje</div>

        </a>

    </div>

    <div class="container-fluid" id="sec-cervezas">

        <!-- Seccion cervezas-->

        <div class="row">

            <?php foreach($query->result() as $column):?>

            <div class="col-12 col-md-6 col-lg-6 col-xl-6 col-img-cervezas"

                id="col-img-cervezas-<?= $column->id_cerveza?>">

                <img src="<?= base_url('recs/assets/images/Cervezas/').$column->nombre_imagen_fondo?>"

                    class="img-fluid img-back-cervezas" alt="Responsive image">



                <img src="<?= base_url('recs/assets/images/Cervezas/').$column->nombre_imagen_frontal?>"

                    id="img-front-cervezas-<?= $column->id_cerveza?>" class="img-fluid img-front-cervezas"

                    alt="Responsive image">



                <div class="div-opciones" style="display:none" id="opciones-<?= $column->id_cerveza?>">

                    <!--<p>hola</p>-->

                    <ul class="list-group list-group-horizontal-md list-group-opciones">

                        <li class="list-group-item list-group-item-eliminar list-group-item-img"

                            data-book-id="book-el-<?= $column->id_cerveza?>" id="el-<?= $column->id_cerveza?>"

                            data-toggle="modal" data-title="assa" data-target="#modalEliminarImagen">

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

                        <!--<li class="list-group-item" data-toggle="modal" data-title="" data-target="#subir">

                                    Modificar</li>

                        <li class="list-group-item list-group-item-ver list-group-item-eliminar list-group-item-img">Ver</li>-->

                    </ul>

                </div>

            </div>

            <?php endforeach;?>



            <div class="col-12 col-md-6 col-add-img " id="col-img-cervezas-8">

                <svg xmlns="http://www.w3.org/2000/svg" class="icon-add-img" viewBox="0 0 512 512"

                    data-target="#modalAgregarImagen" data-toggle="modal">

                    <g>

                        <path class="svg-add-img" data-toggle="modal" data-target="#modalAgregarImagen"

                            d="m437.019531 74.980469c-48.351562-48.351563-112.640625-74.980469-181.019531-74.980469s-132.667969 26.628906-181.019531 74.980469c-48.351563 48.351562-74.980469 112.640625-74.980469 181.019531s26.628906 132.667969 74.980469 181.019531c48.351562 48.351563 112.640625 74.980469 181.019531 74.980469s132.667969-26.628906 181.019531-74.980469c48.351563-48.351562 74.980469-112.640625 74.980469-181.019531s-26.628906-132.667969-74.980469-181.019531zm-181.019531 397.019531c-119.101562 0-216-96.898438-216-216s96.898438-216 216-216 216 96.898438 216 216-96.898438 216-216 216zm20-236.019531h90v40h-90v90h-40v-90h-90v-40h90v-90h40zm0 0"

                            data-original="#000000" class="thumbnail" data-old_color="#000000" fill="#7D7D7D" />

                    </g>

                </svg>

            </div>

        </div>

    </div>



    <div id="sec-maridaje">

        <div class="container-fluid">

            <div class="text-center">

                <img src="<?= base_url('recs/assets/images/Cervezas/info-maridaje-1.1.png') ?>"

                    class="img-fluid img-maridaje" alt="Responsive image">

            </div>

        </div>



        <div class="container-fluid">

            <div class="text-center">

                <img src="<?= base_url('recs/assets/images/Cervezas/info-maridaje-2.1.png') ?>"

                    class="img-fluid img-maridaje-info" alt="Responsive image">

            </div>

        </div>



        <div class="seccion-desc-maridaje">

            <div class="container-fluid container-maridaje">

                <div class="text-center">
                    
                    <div class="div-opciones div-opciones-carrousel" style="display:non"

                    id="opciones-carrousel-¿">

                    <!--<p>hola</p>-->

                    <ul class="list-group list-group-horizontal-md list-group-opciones">

                        <li class="list-group-item list-group-item-eliminar list-group-item-img"

                            data-book-id="book-el-" id="el-"

                            data-toggle="modal" data-title="assa" data-target="#modalEditarMaridaje">

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

                        <!--<li class="list-group-item" data-toggle="modal" data-title="" data-target="#subir">

                                    Modificar</li>

                        <li class="list-group-item list-group-item-ver list-group-item-eliminar list-group-item-img">Ver</li>-->

                    </ul>

                </div> 
                <?php foreach($maridaje['query']->result() as $column):?>
                    <img src="<?= base_url('recs/assets/images/Cervezas/'.$column->nombre_imagen) ?>"

                        class="img-fluid img-maridaje_sec2" alt="Responsive image">
                <?php endforeach;?>
                </div>

            </div>

        </div>

    </div>
    
    <div class="container-fluid container-tamanos">
        <div class="row">
            <?php $nRegistros = 0;?>
            <?php $nSalto = 1;?>
            <?php foreach($botellas['query']->result() as $column):?>
            <?php $nRegistros++;?>
            <?php echo '<p>'.$nSalto.$nRegistros.'</p>'?>
            <div class="col-12 col-md-4 <?php if($nRegistros == $nSalto){ echo 'offset-xl-1';$nSalto = $nSalto + 3;}?> col-xl-3 col-img-cervezas" >
                <div class="text-center">
                    <img src="<?= base_url('recs/assets/images/Cervezas/'.$column->nombre_imagen) ?>"
                        class="img-fluid imgs-beer_to_go" alt="Responsive image" id="opciones-botellas-<?= $column->id_imagen?>">
                    <h4><?= $column->titulo?></h4>
                    <p class="descripcion-cerveza-extra">
                        <?= $column->descripcion?>
                    </p>
                </div>
                <div class="div-opciones" style="display:none" id="el-botellas-<?= $column->id_imagen?>">

                        <!--<p>hola</p>-->
    
                        <ul class="list-group list-group-horizontal-md list-group-opciones">
    
                            <li class="list-group-item list-group-item-eliminar list-group-item-img"
    
                                data-book-id="book-el-<?= $column->id_imagen?>" 
    
                                data-toggle="modal" data-title="assa" data-target="#modalEliminarBotella">
                                
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
    
                            <!--<li class="list-group-item" data-toggle="modal" data-title="" data-target="#subir">
    
                                        Modificar</li>-->
    
                            <li class="list-group-item list-group-item-ver list-group-item-eliminar list-group-item-img"  data-toggle="modal" data-book-id="book-ed-<?= $column->id_imagen?>" data-target="#modalModificarBotella">
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
    
                        </ul>
    
                    </div>
            </div>
            <?php endforeach;?>
            
            <!--<div class="col-12 col-md-4 offset-xl-1 col-xl-3">
                <div class="text-center">   
                    <img src="<?= base_url('recs/assets/images/Cervezas/BF_Elementos_Cervezas-03.png') ?>"
                        class="img-fluid imgs-beer_to_go" alt="Responsive image">
                    <h4>Botella</h4>
                    <p class="descripcion-cerveza-extra">
                        Es difícil tomar solo una,
                        ¡llévate seis en botella!
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-4 col-xl-3">
                <div class="text-center">
                    <img src="<?= base_url('recs/assets/images/Cervezas/BF_Elementos-Cervezas-Paths_4.png') ?>"
                        class="img-fluid imgs-beer_to_go" alt="Responsive image">
                    <h4>Growler</h4>
                    <p class="descripcion-cerveza-extra">No te separes de ella, lleva tu cerveza favorita a todos
                        lados en nuestro Growler de 1.89L.</p>
                </div>
            </div>

            <div class="col-12 col-md-4 col-xl-3">
                <div class="text-center">
                    <img src="<?= base_url('recs/assets/images/Cervezas/BF_Elementos-Cervezas-Paths_5.png') ?>"
                        class="img-fluid imgs-beer_to_go" alt="Responsive image">
                    <h4>Barril</h4>
                    <p class="descripcion-cerveza-extra">El mejor pretexto para compartir con amigos es nuestro
                        barril de 20, 50 y 58 L.</p>
                </div>
            </div>-->
            
            <div class="col-12 col-md-4 offset-xl-1 col-xl-3 col-img-cervezas">
                <div class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon-add-img" viewBox="0 0 512 512"

                    data-target="#modalAgregarBotella" data-toggle="modal">

                    <g>

                        <path class="svg-add-img" data-toggle="modal" data-target="#modalAgregarBotella"

                            d="m437.019531 74.980469c-48.351562-48.351563-112.640625-74.980469-181.019531-74.980469s-132.667969 26.628906-181.019531 74.980469c-48.351563 48.351562-74.980469 112.640625-74.980469 181.019531s26.628906 132.667969 74.980469 181.019531c48.351562 48.351563 112.640625 74.980469 181.019531 74.980469s132.667969-26.628906 181.019531-74.980469c48.351563-48.351562 74.980469-112.640625 74.980469-181.019531s-26.628906-132.667969-74.980469-181.019531zm-181.019531 397.019531c-119.101562 0-216-96.898438-216-216s96.898438-216 216-216 216 96.898438 216 216-96.898438 216-216 216zm20-236.019531h90v40h-90v90h-40v-90h-90v-40h90v-90h40zm0 0"

                            data-original="#000000" class="thumbnail" data-old_color="#000000" fill="#7D7D7D" />

                    </g>
                    <br><br>
                    <!--<p class="descripcion-cerveza-extra">Agregar botella</p>-->
                </svg>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Modal agregar botella-->

<div class="modal fade" id="modalAgregarBotella" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

    aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Agregar botella</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>



            <div class="modal-body">



                <div class="text-center">

                    <div style="display:none" class="alert alert-warning alert-danger" role="alert">

                        <strong>Porfavor selecciona una imagen</strong>

                    </div>

                    <form action="<?= base_url("index.php/CervezasAdmin/agregarBotella")?>" method="post"

                        enctype="multipart/form-data" id="form-image">

                        <!--<input type="file" name="mi_archivo">-->

                        <div class="form-row">

                            <div class="col-md-12 mb-3">

                                <div class="custom-file">

                                    <input type="file" class="custom-file-input" id="img_botella"

                                        name="img_botella" required>

                                    <label class="custom-file-label" for="img_botella">Selecciona imagen</label>

                                    <div class="invalid-feedback">Example invalid custom file feedback</div>

                                </div>

                            </div>

                        </div>

                        <div class="form-row">

                            <div class="col-md-12 col-lg-6 mb-12 col-xl-12">

                                        <label for="titulo_botella">Titulo</label>

                                        <input type="text" class="form-control form-control-edit" id="titulo_botella"

                                            name="titulo_botella" value="" required>

                                        <div class="valid-feedback">

                                            Correcto!

                                        </div>

                                        <div class="invalid-feedback">

                                            Por favor ingrese algún titulo.

                                        </div>

                                    </div>



                                    <div class="col-md-12 col-lg-6 mb-12 col-xl-12">

                                        <label for="descripcion_botella">Contenido</label>

                                        <textarea type="text" class="form-control form-control-edit" id="descripcion_botella"

                                            name="descripcion_botella" value="" required rows="5"></textarea>

                                        <div class="valid-feedback">

                                            Correcto!

                                        </div>

                                        <div class="invalid-feedback">

                                            Por favor ingrese alguna descripción.

                                        </div>

                                    </div>

                                </div>

                        </div>

                        <br>

                        <div class="text-center">
                            <input type="submit" value="Subir" class="btn btn-success">
                        </div>

                        <br>

                        <div class="content-message" style="display:none">

                            <img width="50" heigth="40" src="<?= base_url("recs/assets/images/loading.svg")?>" alt="">

                            <p id="txtMessage">Subiendo archivo..</p>

                        </div>

                    </form>

                </div>

            </div>

            <!--<div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                <button class="btn btn-primary btnEnviar" type="submit" id="btnGuardar">Guardar</button>

            </div>-->



        </div>

    </div>

</div>

<!-- Fin modal agregar -->

<!-- Modal agregar botella-->

<div class="modal fade" id="modalModificarBotella" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

    aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Modificar botella</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>



            <div class="modal-body">



                <div class="text-center">

                    <div style="display:none" class="alert alert-warning alert-danger" role="alert">

                        <strong>Porfavor selecciona una imagen</strong>

                    </div>

                    <form action="<?= base_url("index.php/CervezasAdmin/actualizaBotella")?>" method="post"

                        enctype="multipart/form-data" id="form-botella-editar" class="form-botella-editar">

                        <input type="text" id="id_imagen" name="id_imagen" style="display:none">

                        <div class="form-row">

                            <div class="col-md-12 mb-3">

                                <div class="custom-file">

                                    <input type="file" class="custom-file-input" id="img_botella_m"

                                        name="img_botella_m" disabled>

                                    <label class="custom-file-label" for="img_botella_m">Selecciona imagen</label>

                                    <div class="invalid-feedback">Example invalid custom file feedback</div>

                                </div>

                            </div>

                        </div>

                        <div class="form-row">

                            <div class="col-md-12 col-lg-6 mb-12 col-xl-12">

                                        <label for="titulo_botella_m">Titulo</label>

                                        <input type="text" class="form-control form-control-edit" id="titulo_botella_m"

                                            name="titulo_botella_m" value="" required  disabled>

                                        <div class="valid-feedback">

                                            Correcto!

                                        </div>

                                        <div class="invalid-feedback">

                                            Por favor ingrese algún titulo.

                                        </div>

                                    </div>



                                    <div class="col-md-12 col-lg-6 mb-12 col-xl-12">

                                        <label for="descripcion_botella_m">Contenido</label>

                                        <textarea type="text" class="form-control form-control-edit" id="descripcion_botella_m"

                                            name="descripcion_botella_m" value="" required rows="5"  disabled></textarea>

                                        <div class="valid-feedback">

                                            Correcto!

                                        </div>

                                        <div class="invalid-feedback">

                                            Por favor ingrese alguna descripción.

                                        </div>

                                    </div>

                                </div>

                        </div>

                        <br>

                        <div class="text-center">
                            <input type="submit" value="Subir" class="btn btn-success">
                        </div>

                        <br>

                        <div class="content-message" style="display:none">

                            <img width="50" heigth="40" src="<?= base_url("recs/assets/images/loading.svg")?>" alt="">

                            <p id="txtMessage">Subiendo archivo..</p>

                        </div>

                    </form>

                </div>

            </div>

            <!--<div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                <button class="btn btn-primary btnEnviar" type="submit" id="btnGuardar">Guardar</button>

            </div>-->



        </div>

    </div>

</div>

<!-- Fin modal agregar -->




<!-- Modal agregar imagen-->

<div class="modal fade" id="modalAgregarImagen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

    aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Agregar imagen cervezas</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>



            <div class="modal-body">



                <div class="text-center">

                    <div class="alert alert-info" role="alert">

                        Se debe de elegir dos imagenes para poder crear el efecto al pasar el cursor sobre cada imagen.

                    </div>

                    <div style="display:none" class="alert alert-warning alert-danger" role="alert">

                        <strong>Porfavor selecciona una imagen</strong>

                    </div>

                    <form action="<?= base_url("index.php/CervezasAdmin/cargar_archivo")?>" method="post"

                        enctype="multipart/form-data" id="form-image">

                        <!--<input type="file" name="mi_archivo">-->

                        <div class="form-row">

                            <div class="col-md-12 mb-3">

                                <div class="custom-file">

                                    <input type="file" class="custom-file-input" id="validatedCustomFile"

                                        name="mi_archivo" required>

                                    <label class="custom-file-label" for="validatedCustomFile">Imagen de fondo</label>

                                    <div class="invalid-feedback">Example invalid custom file feedback</div>

                                </div>

                            </div>

                        </div>

                        <div class="form-row">

                            <div class="col-md-12 mb-3">

                                <div class="custom-file">

                                    <input type="file" class="custom-file-input" id="validatedCustomFile"

                                        name="mi_archivo_frontal" required>

                                    <label class="custom-file-label" for="validatedCustomFile">Imagen frontal</label>

                                    <div class="invalid-feedback">Example invalid custom file feedback</div>

                                </div>

                            </div>

                        </div>

                        <br>

                        <input type="submit" value="Subir" class="btn btn-success">

                        <br>

                        <div class="content-message" style="display:none">

                            <img width="50" heigth="40" src="<?= base_url("recs/assets/images/loading.svg")?>" alt="">

                            <p id="txtMessage">Subiendo archivo..</p>

                        </div>

                    </form>

                </div>

            </div>

            <!--<div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                <button class="btn btn-primary btnEnviar" type="submit" id="btnGuardar">Guardar</button>

            </div>-->



        </div>

    </div>

</div>

<!-- Fin modal agregar -->

<!-- Modal modifcar imagen maridaje-->

<div class="modal fade" id="modalEditarMaridaje" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

    aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Modificar imagen</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>



            <div class="modal-body">



                <div class="text-center">

                    <div style="display:none" class="alert alert-warning alert-danger" role="alert">

                        <strong>Porfavor selecciona una imagen</strong>

                    </div>

                    <form action="<?= base_url("index.php/CervezasAdmin/actualizaImagenMaridaje")?>" method="post"

                        enctype="multipart/form-data" id="form-image">

                        <!--<input type="file" name="mi_archivo">-->

                        <div class="form-row">

                            <div class="col-md-12 mb-3">

                                <div class="custom-file">

                                    <input type="file" class="custom-file-input" id="imagen_maridaje"

                                        name="imagen_maridaje" required>

                                        <label class="custom-file-label" for="imagen_maridaje">Elegir imagen</label>

                                    <div class="invalid-feedback">Example invalid custom file feedback</div>

                                </div>

                            </div>

                        </div>

                        <br>

                        <input type="submit" value="Subir" class="btn btn-success">

                        <br>

                        <div class="content-message" style="display:none">

                            <img width="50" heigth="40" src="<?= base_url("recs/assets/images/loading.svg")?>" alt="">

                            <p id="txtMessage">Subiendo archivo..</p>

                        </div>

                    </form>

                </div>

            </div>

            <!--<div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                <button class="btn btn-primary btnEnviar" type="submit" id="btnGuardar">Guardar</button>

            </div>-->



        </div>

    </div>

</div>

<!-- Fin modal agregar -->


<!-- Modal eliminar imagen-->

<div class="modal fade" id="modalEliminarImagen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"

    aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <div class="modal-content modal-content-subir">

            <div class="modal-header">

                <h4 class="modal-title" id="image-gallery-title"></h4>

                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span

                        class="sr-only">Close</span>

                </button>

            </div>

            <div class="modal-body">

                <div class="text-center">

                    <p>¿Esta seguro que desea eliminarlo?</p>

                    <br>

                    <div class="content-message" style="display:none">

                        <img width="50" heigth="40" src="<?= base_url("recs/assets/images/loading.svg") ?>" alt="">

                        <p id="txtMessage">Eliminando..</p>

                    </div>

                </div>

            </div>

            <div class="modal-footer modal-footer-subir">

                <div class="w-lightbox-control w-lightbox-left"></div>

                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

                <button type="button" class="btn btn-success" id="btnEliminarPromocion">Aceptar</button>

            </div>

        </div>

    </div>

</div>

<!-- Fin modal eliminar -->


<div class="modal fade" id="modalEliminarBotella" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"

    aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <div class="modal-content modal-content-subir">

            <div class="modal-header">

                <h4 class="modal-title" id="image-gallery-title"></h4>

                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span

                        class="sr-only">Close</span>

                </button>

            </div>

            <div class="modal-body">

                <div class="text-center">

                    <p>¿Esta seguro que desea eliminarlo?</p>

                    <br>

                    <div class="content-message" style="display:none">

                        <img width="50" heigth="40" src="<?= base_url("recs/assets/images/loading.svg") ?>" alt="">

                        <p id="txtMessage">Eliminando..</p>

                    </div>

                </div>

            </div>

            <div class="modal-footer modal-footer-subir">

                <div class="w-lightbox-control w-lightbox-left"></div>

                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

                <button type="button" class="btn btn-success" id="btnEliminarBotella">Aceptar</button>

            </div>

        </div>

    </div>

</div>

<!-- Fin modal eliminar -->



<!-- Modal agregar imagen a carrousel-->

<div class="modal fade" id="modalAgregarImagenCarrousel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

    aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Agregar imagen cervezas</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>



            <div class="modal-body">



                <div class="text-center">

                    <div style="display:none" class="alert alert-warning alert-danger" role="alert">

                        <strong>Porfavor selecciona una imagen</strong>

                    </div>

                    <form action="<?= base_url("index.php/CarrouselCervezasAdmin/cargar_archivo")?>" method="post"

                        enctype="multipart/form-data" id="form-img-carrousel">

                        <!--<input type="file" name="mi_archivo">-->

                        <div class="form-row">

                            <div class="col-md-12 mb-3">

                                <div class="custom-file">

                                    <input type="file" class="custom-file-input" id="validatedCustomFile"

                                        name="mi_archivo" required>

                                    <label class="custom-file-label" for="validatedCustomFile">Imagen para

                                        carrousel</label>

                                    <div class="invalid-feedback">Example invalid custom file feedback</div>

                                </div>

                            </div>

                        </div>

                        <br>

                        <input type="submit" value="Subir" class="btn btn-success">

                        <br>

                        <div class="content-message" style="display:none">

                            <img width="50" heigth="40" src="<?= base_url("recs/assets/images/loading.svg")?>" alt="">

                            <p id="txtMessage">Subiendo archivo..</p>

                        </div>

                    </form>

                </div>

            </div>

            <!--<div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                <button class="btn btn-primary btnEnviar" type="submit" id="btnGuardar">Guardar</button>

            </div>-->



        </div>

    </div>

</div>

<!-- Fin modal agregar imagen a carrouse-->



<!-- Modal eliminar imagen de carrousel-->

<div class="modal fade" id="modalEliminarImagenCarrousel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"

    aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <div class="modal-content modal-content-subir">

            <div class="modal-header">

                <h4 class="modal-title" id="image-gallery-title"></h4>

                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span

                        class="sr-only">Close</span>

                </button>

            </div>

            <div class="modal-body">

                <div class="text-center">

                    <p>¿Esta seguro que desea eliminar la imagen de carrousel?</p>

                    <br>

                    <div class="content-message" style="display:none">

                        <img width="50" heigth="40" src="<?= base_url("recs/assets/images/loading.svg") ?>" alt="">

                        <p id="txtMessage">Eliminando..</p>

                    </div>

                </div>

            </div>

            <div class="modal-footer modal-footer-subir">

                <div class="w-lightbox-control w-lightbox-left"></div>

                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

                <button type="button" class="btn btn-success" id="btnEliminarImgCarrousel">Aceptar</button>

            </div>

        </div>

    </div>

</div>

<!-- Fin modal eliminar imagen de carrousel-->







<?php foreach($query->result() as $column):?>

<script>

$("#col-img-cervezas-<?= $column->id_cerveza?>").hover(function() {

        $("#img-front-cervezas-<?= $column->id_cerveza?>").show();

        $("#opciones-<?= $column->id_cerveza?>").show();

    },

    function() {

        $("#img-front-cervezas-<?= $column->id_cerveza?>").hide();

        $("#opciones-<?= $column->id_cerveza?>").hide();

    });

</script>

<?php endforeach;?>



<?php foreach($images['query']->result() as $column):?>

<script>

$("#img-carrousel-<?= $column->id_imagen?>").hover(function() {

        $("#opciones-carrousel-<?= $column->id_imagen?>").show();

    },

    function() {

        $("#opciones-carrousel-<?= $column->id_imagen?>").hide();

    });



    $("#opciones-carrousel-<?= $column->id_imagen?>").hover(function() {

        $("#opciones-carrousel-<?= $column->id_imagen?>").show();

    },

    function() {

        $("#opciones-carrousel-<?= $column->id_imagen?>").hide();

    });

</script>

<?php endforeach;?>



<?php foreach($botellas['query']->result() as $column):?>

<script>

$("#opciones-botellas-<?= $column->id_imagen?>").hover(function() {

        $("#el-botellas-<?= $column->id_imagen?>").show();

    },

    function() {

        $("#el-botellas-<?= $column->id_imagen?>").hide();

    });



    $("#el-botellas-<?= $column->id_imagen?>").hover(function() {

        $("#el-botellas-<?= $column->id_imagen?>").show();

    },

    function() {

        $("#el-botellas-<?= $column->id_imagen?>").hide();

    });

</script>

<?php endforeach;?>



<script src="<?= base_url('recs/assets/js/cervezas.js')?>"></script>

<script src="<?= base_url('recs/assets/js/cervezasAdmin.js')?>"></script>