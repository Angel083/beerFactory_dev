<link rel="stylesheet" type="text/css" href="<?= base_url('recs/assets/css/menu.css') ?>" />
<script>var login = false;</script>


<div class="container-fluid container-menu">

    <div class="container_img_menu">

        <div class="text-center">

            <img src="<?= base_url('recs/assets/images/Menu/BF_Elementos-Cervezas-Paths_0.png') ?>"

                class="img-fluid img-text-menu" alt="Responsive image">

        </div>

    </div>



    <?php include "menu_menu.php"?>



    <div class="container-fluid container-imgs-categorias">

        <ul class="list-group list-group-horizontal ul_menus">

            <li class="list-group-item comida-contenido">Light <img class="light-icon"

                    src="<?= base_url('recs/assets/images/Menu/iconos_menu_2.png') ?>" alt=""></li>

            <li class="list-group-item comida-contenido">Spicy <img class="light-icon"

                    src="<?= base_url('recs/assets/images/Menu/icono_menu_f.png') ?>" alt=""></li>

            <li class="list-group-item comida-contenido">BF Favorite <img class="light-icon"

                    src="<?= base_url('recs/assets/images/Menu/iconos_menu_3.png') ?>" alt=""></li>

        </ul>

    </div>



    <div class="container-fluid container-imgs-manteletas col-img-manteletas-img">

        <div class="row">

            <?php foreach($images['queryImgs']->result() as $column):?>

            <div class="col-12 col-xl-6 col-img-manteleta col-img-manteleta-img">

                <img src="<?= base_url($column->ruta.$column->nombre_imagen)?>" class="img-fluid img-back-cervezas"

                    alt="Responsive image" id="img-menu-<?= $column->id_imagen?>">

                <div class="div-opciones" style="display:none" id="opciones-<?= $column->id_imagen?>">

                    <!--<p>hola</p>-->

                    <ul class="list-group list-group-horizontal-md list-group-opciones">

                        <li class="list-group-item list-group-item-eliminar list-group-item-img"

                            data-book-id="book-el-<?= $column->id_imagen?>" id="el-<?= $column->id_imagen?>"

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

                        <li class="list-group-item list-group-item-ver list-group-item-img" data-toggle="modal"

                            data-title="" data-target="#image-gallery">Ver</li>-->

                    </ul>

                </div>

            </div>

            <?php endforeach;?>



            <div class="col-12 col-xl-6 col-img-manteleta col-add-img">

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

</div>



<!-- Modal agregar imagen-->

<div class="modal fade" id="modalAgregarImagen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

    aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Agregar imagen</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>



            <div class="modal-body">



                <div class="text-center">



                    <div style="display:none" class="alert alert-warning alert-danger" role="alert">

                        <strong>Porfavor selecciona una imagen</strong>

                    </div>

                    <p>Selecciona la imagen que deseas agregar a la galeria</p>

                    <form action="<?= base_url("index.php/Img_menusAdmin/cargar_archivo")?>" method="post"

                        enctype="multipart/form-data" id="form-image">

                        <input type="file" name="mi_archivo"><br><br>

                        <input type="submit" value="Subir" class="btn btn-success">

                        <input type="text" name="id_menu" id="id_menu" value="<?php echo (!isset($_GET['id_menu'])? "-1" : $_GET['id_menu'])?>" style="display:none">

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

                    <p>¿Esta seguro que desea eliminar la imagen?</p>

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

                <button type="button" class="btn btn-success" id="btnEliminarImagen">Aceptar</button>

            </div>

        </div>

    </div>

</div>

<!-- Fin modal eliminar -->



<?php foreach($images['queryImgs']->result() as $column):?>

<script>

$("#img-menu-<?= $column->id_imagen?>").hover(function() {

        $("#opciones-<?= $column->id_imagen?>").show();

        //alert("show");

    },

    function() {

        $("#opciones-<?= $column->id_imagen?>").hide();

        //alert("hide");

    });



$("#opciones-<?= $column->id_imagen?>").hover(function() {

        $("#opciones-<?= $column->id_imagen?>").show();

    },

    function() {

        $("#opciones-<?= $column->id_imagen?>").hide();

    });

</script>



<?php endforeach; ?>



<script src="<?= base_url('recs/assets/js/menuAdmin.js') ?>"></script>