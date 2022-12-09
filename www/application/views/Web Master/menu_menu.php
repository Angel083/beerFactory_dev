<script>var login = false;</script>



<div class="container-fluid container_links_menu">

    <button class="btn btn-success btnAdd" data-toggle="modal" data-target="#modalAgregar">

        <svg xmlns="http://www.w3.org/2000/svg" class="icon-add" viewBox="0 0 512 512" data-target="#subir"

            data-toggle="modal">

            <g>

                <path class="svg-add"

                    d="m437.019531 74.980469c-48.351562-48.351563-112.640625-74.980469-181.019531-74.980469s-132.667969 26.628906-181.019531 74.980469c-48.351563 48.351562-74.980469 112.640625-74.980469 181.019531s26.628906 132.667969 74.980469 181.019531c48.351562 48.351563 112.640625 74.980469 181.019531 74.980469s132.667969-26.628906 181.019531-74.980469c48.351563-48.351562 74.980469-112.640625 74.980469-181.019531s-26.628906-132.667969-74.980469-181.019531zm-181.019531 397.019531c-119.101562 0-216-96.898438-216-216s96.898438-216 216-216 216 96.898438 216 216-96.898438 216-216 216zm20-236.019531h90v40h-90v90h-40v-90h-90v-40h90v-90h40zm0 0"

                    data-original="#000000" class="thumbnail" data-old_color="#000000" fill="#7D7D7D" />

            </g>

        </svg>Agregar</button>

    <div class="row">

    <?php $nRowsMenus = 0;?>

        <?php foreach($query->result() as $column):?>

            <?php 

                $nRowsMenus++;

                if($nRowsMenus == 1){

                    echo "<script>var id_menuVista = ".(!isset($_GET['id_menu'])? $column->id_menu : $_GET['id_menu'])."</script>";

                }

            ?>

        <div class="col-6 col-sm-4 col-xl-3">

            <div id="div_<?= $column->id_menu?>">

                <a class="ling-menu-comida" style="<?php if(isset($_GET['id_menu'])) {if($_GET['id_menu'] == $column->id_menu){echo "color:hsla(0, 0%, 100%, 0.5)";}}?>" id="<?= $column->id_menu?>" href="<?= base_url("index.php/MenuAdmin/index?id_menu=").$column->id_menu?>"><?= $column->nombre_menu?></a>

                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"

                    id="ico_ed_<?= $column->id_menu?>" data-book-id="book_el_<?= $column->id_menu?>" class="svg_edit"

                    x="0px" y="0px" viewBox="0 0 469.331 469.331" style="display:none" xml:space="preserve"

                    data-toggle="modal" data-target="#modalEditar">

                    <g>

                        <g>

                            <path

                                d="M438.931,30.403c-40.4-40.5-106.1-40.5-146.5,0l-268.6,268.5c-2.1,2.1-3.4,4.8-3.8,7.7l-19.9,147.4   c-0.6,4.2,0.9,8.4,3.8,11.3c2.5,2.5,6,4,9.5,4c0.6,0,1.2,0,1.8-0.1l88.8-12c7.4-1,12.6-7.8,11.6-15.2c-1-7.4-7.8-12.6-15.2-11.6   l-71.2,9.6l13.9-102.8l108.2,108.2c2.5,2.5,6,4,9.5,4s7-1.4,9.5-4l268.6-268.5c19.6-19.6,30.4-45.6,30.4-73.3   S458.531,49.903,438.931,30.403z M297.631,63.403l45.1,45.1l-245.1,245.1l-45.1-45.1L297.631,63.403z M160.931,416.803l-44.1-44.1   l245.1-245.1l44.1,44.1L160.931,416.803z M424.831,152.403l-107.9-107.9c13.7-11.3,30.8-17.5,48.8-17.5c20.5,0,39.7,8,54.2,22.4   s22.4,33.7,22.4,54.2C442.331,121.703,436.131,138.703,424.831,152.403z"

                                data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF" />

                        </g>

                    </g>

                </svg>



                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"

                    id="ico_el_<?= $column->id_menu?>" data-book-id="book_el_<?= $column->id_menu?>"

                    class="svg_eliminar" x="0px" y="0px" viewBox="0 0 475.2 475.2" style="display:none"

                    xml:space="preserve" data-toggle="modal" data-target="#modalEliminar">

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

            </div>

        </div>

        <?php endforeach;?>

        <!--<div class="col-6 col-sm-4 col-xl-3 col-add">



        </div>-->

    </div>

</div>





<!-- Modal Eliminar-->

<div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

    aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <div class="modal-body">

                <div class="text-center">

                    ¿Esta seguro que desea eliminarlo?

                    <br>

                    <div id="content-message" style="display:none">

                        <img width="50" heigth="40" src="<?= base_url("recs/assets/images/loading.svg") ?>" alt="">

                        <p id="txtMessage">Eliminando..</p>

                    </div>

                </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

                <button type="button" class="btn btn-success" id="btnEliminar">Eliminar</button>

            </div>

        </div>

    </div>

</div>

<!-- fin Modal eliminar-->



<!-- Modal agregar-->

<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

    aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Agregar menú</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <form class="needs-validation" novalidate>

                <div class="modal-body">



                    <div class="form-row">

                        <div class="col-md-12 mb-12 col-xl-12">

                            <label for="validationCustom01">Nombre del menú</label>

                            <input type="text" class="form-control" id="nombre_menu" value="" required>

                            <div class="valid-feedback">

                                Correcto!

                            </div>

                            <div class="invalid-feedback">

                                Por favor ingrese el nombre para el munú.

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

<!-- Fin modal agregar -->



<!-- Modal editar-->

<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"

    aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Editar menú</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <form class="needs-validation-edit" novalidate>

                <div class="modal-body">



                    <div class="form-row">

                        <div class="col-md-12 mb-12 col-xl-12">

                            <label for="validationCustom01">Nombre del menú</label>

                            <input type="text" class="form-control form-control-edit" id="nombre_menu_e" value=""

                                required disabled>

                            <div class="valid-feedback">

                                Correcto!

                            </div>

                            <div class="invalid-feedback">

                                Por favor ingrese el nombre para el munú.

                            </div>

                        </div>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                    <button class="btn btn-primary btnEnviar" type="submit" id="btnEditar">Guardar</button>

                </div>

            </form>

        </div>

    </div>

</div>

<!-- Fin modal editar -->

<script>

<?php foreach($query->result() as $column):?>

    $("#div_<?= $column->id_menu?>").hover(function() {

            $("#ico_ed_<?= $column->id_menu?>").show();

            $("#ico_el_<?= $column->id_menu?>").show();

        },

        function() {

            $("#ico_ed_<?= $column->id_menu?>").hide();

            $("#ico_el_<?= $column->id_menu?>").hide();

        }); 

        <?php endforeach;?>

</script>

