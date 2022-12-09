<link rel="stylesheet" href="<?= base_url("recs/assets/css/nosotros.css")?>">


<meta name="keywords" content="Toks,Restaurante,Desayunos,Comida,Cenas,Café,Vips,Calidad,Postre,Pan dulce" />
<div class="container-fluid container-historia" id="">
<?php foreach($query->result() as $column):?>
    <img src="<?= base_url("recs/assets/images/Nosotros/".$column->nombre_imagen)?>" id="img-historia" class="img-fluid img_nosotros" alt="Responsive image">
        <div class="div-opciones" style="display:none" id="opciones">
            <?php endforeach;?>

                        <ul class="list-group list-group-horizontal-md list-group-opciones">

                            <li class="list-group-item list-group-item-eliminar list-group-item-img"

                                data-book-id="book-ed-"

                                data-toggle="modal" data-title="assa" data-target="#modalEditar"

                                data-tipo="">

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

 <!-- Modal editar-->

            <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

                aria-hidden="true">

                <div class="modal-dialog" role="document">

                    <div class="modal-content" style="background-color: #fff !important;">

                        <div class="modal-header">

                            <h5 class="modal-title" id="exampleModalLabel">Cambiar imagen</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                <span aria-hidden="true">&times;</span>

                            </button>

                        </div>

                        <form action="<?= base_url('index.php/HistoriaAdmin/update')?>" method="post"

                            enctype="multipart/form-data" id="form-image">

                            <div class="modal-body">

                                <input type="text" name="id_card" id="id_imagen" style="display:none">

                                <br>

                                <div class="form-row">

                                    <div class="col-md-12 col-lg-12 mb-5">

                                        <div class="custom-file">

                                            <input type="file" class="custom-file-input form-control-edit"

                                                name="imagen_historia" id="imagen_historia" required>

                                            <label class="custom-file-label" for="imagen_historia">Elige una

                                                imagen</label>

                                            <div class="invalid-feedback">Example invalid custom file feedback</div>

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

            <script>
            $("#img-historia").hover(function() {
            
                    $("#opciones").show();
            
                    //alert("show");
            
                },
            
                function() {
            
                    $("#opciones").hide();
            
                    //alert("hide");
            
                });
            
            
            
            $("#opciones").hover(function() {
            
                    $("#opciones").show();
            
                },
            
                function() {
            
                    $("#opciones").hide();
            
                });
            </script>