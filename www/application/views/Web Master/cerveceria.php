<link rel="stylesheet" type="text/css" href="<?= base_url('recs/assets/css/cerveceria.css') ?>" />
<script>var login = false;</script>

<link rel="stylesheet" type="text/css" href="<?= base_url('recs/assets/css/cerveceria_admin.css') ?>" />



<div id="container-fluid" class="container-cerveceria">

    <div class="tabs-submenu-cerveceria w-tab-menu">

        <a style="" class="tab-link w-inline-block w-tab-link" data-w-tab="Tab 1"

            id="btn_nuestro">

            <div>Nuestro Proceso</div>

        </a>

        <a class="cerveceria tab-link w-inline-block w-tab-link w--current" data-w-tab="Tab 2" id="btn_galeria">

            <div>Galería</div>

        </a>

    </div>



    <div id="nuestro_proceso" >

        <div class="text-center">

            <img src="<?= base_url('recs/assets/images/BF_Elementos-Cervezas-Paths_9.png') ?>"

                class="img-fluid img-como_hacemos" alt="Responsive image">

        </div>



        <div class="container-fluid">

            <div class="row">
                <?php foreach($procesos['query']->result() as $column):?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                    <div class="text-center">

                        <img src="<?= base_url($column->ruta.$column->nombre_imagen) ?>" class="img-fluid"

                            alt="Responsive image" id="img_proceso_<?= $column->id_imagen?>">
                            
                        <div class="opciones" id="proceso_<?=$column->id_imagen?>" style="background-color: inherit">

                            <ul class="list-group list-group-horizontal-md list-group-opciones">

                                <li class="list-group-item list-group-item-eliminar"

                                    data-book-id="<?=$column->id_imagen?>" id="e-<?php echo $column->id_imagen?>"

                                    data-toggle="modal" data-title="assa" data-target="#eliminar-proceso">
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

                                <li class="list-group-item list-group-item-ver" data-toggle="modal" data-title=""

                                    data-target="#image-gallery" style="visibility: hidden;">Ver</li>

                            </ul>

                        </div>

                    </div>

                </div>
                <?php endforeach;?>

                <!--<div class="col-12 col-sm-6 col-md-4 col-lg-3">

                    <div class="text-center">

                        <img src="<?= base_url('recs/assets/images/1_materias_primas.png') ?>" class="img-fluid"

                            alt="Responsive image">

                    </div>

                </div>
                
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                    <div class="text-center">

                        <img src="<?= base_url('recs/assets/images/2_molieda.png') ?>" class="img-fluid"

                            alt="Responsive image">

                    </div>

                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                    <div class="text-center">

                        <img src="<?= base_url('recs/assets/images/3_brewhouse.png') ?>" class="img-fluid"

                            alt="Responsive image">

                    </div>

                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                    <div class="text-center">

                        <img src="<?= base_url('recs/assets/images/4_fermentación.png') ?>" class="img-fluid"

                            alt="Responsive image">

                    </div>

                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                    <div class="text-center">

                        <img src="<?= base_url('recs/assets/images/5_filtrado.png') ?>" class="img-fluid"

                            alt="Responsive image">

                    </div>

                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                    <div class="text-center">

                        <img src="<?= base_url('recs/assets/images/6_almacenado.png') ?>" class="img-fluid"

                            alt="Responsive image">

                    </div>

                </div>-->
                
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-add">

                    <div class="text-center">

                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-add" viewBox="0 0 512 512"

                            data-target="#subirImagenProceso" data-toggle="modal">

                            <g>

                                <path class="svg-add"

                                    d="m437.019531 74.980469c-48.351562-48.351563-112.640625-74.980469-181.019531-74.980469s-132.667969 26.628906-181.019531 74.980469c-48.351563 48.351562-74.980469 112.640625-74.980469 181.019531s26.628906 132.667969 74.980469 181.019531c48.351562 48.351563 112.640625 74.980469 181.019531 74.980469s132.667969-26.628906 181.019531-74.980469c48.351563-48.351562 74.980469-112.640625 74.980469-181.019531s-26.628906-132.667969-74.980469-181.019531zm-181.019531 397.019531c-119.101562 0-216-96.898438-216-216s96.898438-216 216-216 216 96.898438 216 216-96.898438 216-216 216zm20-236.019531h90v40h-90v90h-40v-90h-90v-40h90v-90h40zm0 0"

                                    data-original="#000000" class="thumbnail" data-old_color="#000000" fill="#7D7D7D" />

                            </g>

                        </svg>

                    </div>

                </div>

                <!--<div class="col-12 col-lg-5">

                    <div class="text-center">

                        <img src="<?= base_url('recs/assets/images/7_cerveza_terminada.png') ?>" class="img-fluid"

                            alt="Responsive image">

                    </div>

                </div>-->

            </div>

        </div>



        <div class="text-center">

            <img src="<?= base_url('recs/assets/images/BF_Elementos-Cervezas-Paths_11.png') ?>"

                class="img-fluid img-ven" alt="Responsive image">

        </div>

    </div>
    
            <div class="modal fade" id="subirImagenProceso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"

                aria-hidden="true">

                <div class="modal-dialog modal-lg">

                    <div class="modal-content modal-content-subir">

                        <div class="modal-header">

                            <h4 class="modal-title" id="image-gallery-title">Agregar nueva imagen</h4>

                            <button type="button" class="close" data-dismiss="modal"><span

                                    aria-hidden="true">×</span><span class="sr-only">Close</span>

                            </button>

                        </div>

                        <div class="modal-body">

                            <div class="text-center">

                                <div class="alert alert-warning alert-danger" role="alert">

                                    <strong>Porfavor selecciona una imagen</strong>

                                

                                </div>

                                <p>Selecciona la imagen que deseas agregar</p>

                                <form action="agregarImagenProceso" method="post" enctype="multipart/form-data"

                                    id="form">

                                    <div class="form-row">

                                        <div class="col-md-12 col-lg-12 mb-5">
    
                                            <div class="custom-file">
    
                                                <input type="file" class="custom-file-input form-control-edit"
    
                                                    name="img_proceso" id="img_proceso" required>
    
                                                <label class="custom-file-label" for="img_proceso">Elige una
    
                                                    imagen</label>
    
                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
    
                                            </div>
    
                                        </div>
    
                                    </div>

                                    <input type="submit" value="Subir" class="btn btn-success">

                                </form>



                            </div>

                        </div>

                        <div class="modal-footer modal-footer-subir">

                            <div class="w-lightbox-control w-lightbox-left"></div>



                        </div>

                    </div>

                </div>

            </div>

            <div class="modal fade" id="eliminar-proceso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"

                aria-hidden="true">

                <div class="modal-dialog modal-lg">

                    <div class="modal-content modal-content-subir">

                        <div class="modal-header">

                            <h4 class="modal-title" id="image-gallery-title"></h4>

                            <button type="button" class="close" data-dismiss="modal"><span

                                    aria-hidden="true">×</span><span class="sr-only">Close</span>

                            </button>

                        </div>

                        <div class="modal-body">

                            <div class="text-center">

                                <p>¿Esta seguro que desea eliminar la imagen?</p>
                            </div>

                        </div>

                        <div class="modal-footer modal-footer-subir">

                            <div class="w-lightbox-control w-lightbox-left"></div>

                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

                            <input type="submit" value="Aceptar" class="btn btn-success" id="btnEliminarProceso">

                        </div>

                    </div>

                </div>

            </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">



    <!-- GALERIA -->

    <div class="container" id="galeria" style="display:none">

        <div class="row">

            <div class="row">

                <?php $n_imgs = 0;?>

                <?php foreach($consulta->result() as $fila):?>

                <?php $n_imgs++;?>

                <div class="col-12 col-sm-6 col-lg-4 col-md-4 col-xs-6 thumb">

                    <a class="thumbnail" href="#" data-image-id=""

                        data-image="<?= base_url('recs/assets/images/Cerveceria/'.$fila->nombre) ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">

                        <img class="img-thumbnail" id="img_<?php echo $n_imgs?>"

                            src="<?= base_url('recs/assets/images/Cerveceria/'.$fila->nombre) ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"

                            alt="Another alt text">

                        <div class="opciones" id="opciones_<?php echo $n_imgs?>">

                            <ul class="list-group list-group-horizontal-md list-group-opciones">

                                <li class="list-group-item list-group-item-eliminar"

                                    data-book-id="<?php echo $fila->id_imagen?>" id="e-<?php echo $fila->id_imagen?>"

                                    data-toggle="modal" data-title="assa" data-target="#eliminar-gallery" style="margin-left: auto;margin-right: auto;">
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

                                <li class="list-group-item list-group-item-ver" data-toggle="modal" data-title=""

                                    data-target="#image-gallery">Ver</li>-->

                            </ul>

                        </div>

                    </a>

                </div>

                <?php endforeach;?>



                <div class="col-12 col-sm-6 col-lg-4 col-md-4 col-xs-6 thumb col-add">

                    <div class="text-center">

                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-add" viewBox="0 0 512 512"

                            data-target="#subir" data-toggle="modal">

                            <g>

                                <path class="svg-add"

                                    d="m437.019531 74.980469c-48.351562-48.351563-112.640625-74.980469-181.019531-74.980469s-132.667969 26.628906-181.019531 74.980469c-48.351563 48.351562-74.980469 112.640625-74.980469 181.019531s26.628906 132.667969 74.980469 181.019531c48.351562 48.351563 112.640625 74.980469 181.019531 74.980469s132.667969-26.628906 181.019531-74.980469c48.351563-48.351562 74.980469-112.640625 74.980469-181.019531s-26.628906-132.667969-74.980469-181.019531zm-181.019531 397.019531c-119.101562 0-216-96.898438-216-216s96.898438-216 216-216 216 96.898438 216 216-96.898438 216-216 216zm20-236.019531h90v40h-90v90h-40v-90h-90v-40h90v-90h40zm0 0"

                                    data-original="#000000" class="thumbnail" data-old_color="#000000" fill="#7D7D7D" />

                            </g>

                        </svg>

                    </div>

                </div>

            </div>





            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"

                aria-hidden="true">

                <div class="modal-dialog modal-lg">

                    <div class="modal-content modal-content-galeria">

                        <!--<div class="modal-header">

                            <h4 class="modal-title" id="image-gallery-title"></h4>

                            <button type="button" class="close" data-dismiss="modal"><span

                                    aria-hidden="true">×</span><span class="sr-only">Close</span>

                            </button>

                        </div>-->

                        <div class="modal-body">

                            <img id="image-gallery-image" class="img-responsive col-md-12" src="">

                        </div>

                        <div class="modal-footer modal-footer-galeria">

                            <div class="w-lightbox-control w-lightbox-left"></div>

                            <div class="text-center">

                                <button type="button" class="btn btn-secondary btn-left-image"

                                    id="show-previous-image"><i class="fa fa-arrow-left"></i>

                                </button>



                                <button type="button" id="show-next-image" class="btn btn-secondary btn-next-image"><i

                                        class="fa fa-arrow-right"></i>

                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <div class="modal fade" id="eliminar-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"

                aria-hidden="true">

                <div class="modal-dialog modal-lg">

                    <div class="modal-content modal-content-subir">

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



            <div class="modal fade" id="subir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"

                aria-hidden="true">

                <div class="modal-dialog modal-lg">

                    <div class="modal-content modal-content-subir">

                        <div class="modal-header">

                            <h4 class="modal-title" id="image-gallery-title">Agregar nueva imagen</h4>

                            <button type="button" class="close" data-dismiss="modal"><span

                                    aria-hidden="true">×</span><span class="sr-only">Close</span>

                            </button>

                        </div>

                        <div class="modal-body">

                            <div class="text-center">

                                <div class="alert alert-warning alert-danger" role="alert">

                                    <strong>Porfavor selecciona una imagen</strong>

                                

                                </div>

                                <p>Selecciona la imagen que deseas agregar a la galeria</p>

                                <form action="cargar_archivo" method="post" enctype="multipart/form-data"

                                    id="form-image">

                                    <input type="file" name="mi_archivo"><br><br>

                                    <input type="submit" value="Subir" class="btn btn-success">

                                </form>



                            </div>

                        </div>

                        <div class="modal-footer modal-footer-subir">

                            <div class="w-lightbox-control w-lightbox-left"></div>



                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>



    <script>

    $(document).on("click", '[data-toggle="lightbox"]', function(event) {

        event.preventDefault();

        $(this).ekkoLightbox();

    });

    </script>

    <script src="<?= base_url('recs/assets/js/cerveceria.js') ?>"></script>



    <?php $n_imgs = 0;?>

    <?php foreach($consulta->result() as $fila):?>

    <?php $n_imgs++;?>

    <?php echo '<script>$("#img_'.$n_imgs.'").hover(function() {

            $("#opciones_'.$n_imgs.'").show();

        },

        function() {

            $("#opciones_'.$n_imgs.'").hide();

        });



    $("#opciones_'.$n_imgs.'").hover(function() {

            $("#opciones_'.$n_imgs.'").show();

        },

        function() {

            $("#opciones_'.$n_imgs.'").hide();

        });</script>'?>

    <?php endforeach;?>

    <script>

    var imagen_selected;

    var bookId

    //$("#galeria").show();

    $(".opciones").hide();


    $('#eliminar-gallery').on('shown.bs.modal', function(e) {

        //get data-id attribute of the clicked element

        bookId = $(e.relatedTarget).data('book-id').substring(8);

    });

    </script>
    
    
    <?php foreach($procesos['query']->result() as $column):?>

    <?php echo '<script>$("#img_proceso_'.$column->id_imagen.'").hover(function() {

            $("#proceso_'.$column->id_imagen.'").show();

        },

        function() {

            $("#proceso_'.$column->id_imagen.'").hide();

        });



    $("#proceso_'.$column->id_imagen.'").hover(function() {

            $("#proceso_'.$column->id_imagen.'").show();

        },

        function() {

            $("#proceso_'.$column->id_imagen.'").hide();

        });</script>'?>

    <?php endforeach;?>



    <script src="<?= base_url('recs/assets/js/cerveceria_adm.js') ?>"></script>

</div>