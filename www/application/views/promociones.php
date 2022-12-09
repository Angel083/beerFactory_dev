<meta name="keywords" content="2x1, Lunes come gratis, Beerday, promoción cumpleañeros" />
<link rel="stylesheet" type="text/css" href="<?= base_url('recs/assets/css/promociones.css') ?>" />

<iframe name="__bkframe" height="0" width="0" frameborder="0" style="display:none;position:absolute;clip:rect(0px 0px 0px 0px)" src="about:blank"></iframe>
<script type="text/javascript" src="https://tags.bkrtx.com/js/bk-coretag.js"></script>
<!-- https://www.beerfactory.com.mx/ -->
<script type="text/javascript">
    bk_allow_multiple_calls = true;
    bk_use_multiple_iframes = true;
    bk_addPageCtx('__bk_l', '*_', 'promociones'); //Clave y Valor para una regla personalizada
    bk_doJSTag(93936, 1); // Beer Factory
</script>

<div class="container-fluid container-promociones">

    <div class="text-center">

        <img src="<?= base_url('recs/assets/images/Promociones/BF_Elementos-Cervezas-Paths_6.png') ?>" class="img-fluid img-promociones" alt="Responsive image" />

    </div>



    <div class="container-fluid" id="sec-promociones">

        <!-- Seccion cervezas-->

        <div class="row">

            <?php foreach ($query->result() as $column) : ?>

                <div class="col-12 col-md-6" id="col-img-cervezas-<?= $column->id_promocion ?>">

                    <a class="thumbnail content-imgs" data-image-id="" data-toggle="modal" data-title="" data-image="<?= base_url('recs/assets/images/Promociones/' . $column->nombre_imagen) ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-target="#image-gallery">

                        <img src="<?= base_url('recs/assets/images/Promociones/') . $column->nombre_imagen; ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img-fluid img-back-cervezas" alt="Responsive image">

                        <div class="text-center">

                            <a target="_blank" href="<?= base_url('recs/assets/images/Promociones/') . $column->nombre_pdf ?>" class="restricciones">Restricciones</a>

                        </div>

                    </a>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</div>



<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-promo modal-lg">

        <div class="modal-content modal-content-galeria">

            <!--<div class="modal-header">

                            <h4 class="modal-title" id="image-gallery-title"></h4>

                            <button type="button" class="close" data-dismiss="modal"><span

                                    aria-hidden="true">×</span><span class="sr-only">Close</span>

                            </button>

                        </div>-->

            <div class="modal-body modal-body-promo">

                <img id="image-gallery-image" class="img-responsive col-md-12" src="">

            </div>

            <div class="modal-footer modal-footer-galeria">

                <div class="w-lightbox-control w-lightbox-left"></div>

                <div class="text-center controles controles-promo" style="">

                    <div class="row">

                        <div class="col-6">

                            <button type="button" class="btn btn-secondary btn-left-image btnLeftPromo" id="show-previous-image">

                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve" width="48px" height="48px" class="svg-left">

                                    <g>

                                        <g>

                                            <g>

                                                <path d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12    C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084    c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864    l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF" />

                                            </g>

                                        </g>

                                    </g>

                                </svg>

                            </button>

                        </div>



                        <div class="col-6">

                            <button type="button" id="show-next-image" class="btn btn-secondary btn-next-image btnNextPromo">

                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;" xml:space="preserve" width="48px" height="48px" class="svg-rigth">

                                    <g>

                                        <g>

                                            <g>

                                                <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12    c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028    c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265    c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF" />

                                            </g>

                                        </g>

                                    </g>

                                </svg>

                            </button>

                        </div>

                    </div>





                </div>







                <div class='row'>

                    <div class="demo">

                        <ul id="lightSlider" class="list-img">

                            <?php foreach ($query->result() as $column) : ?>

                                <li>

                                    <img src="<?= base_url('recs/assets/images/Promociones/' . $column->nombre_imagen) ?>" id="img-<?= $column->id_promocion ?>" />

                                </li>

                            <?php endforeach; ?>

                        </ul>

                    </div>

                </div>



                <style>
                    ul {

                        list-style: none outside none;

                        padding-left: 0;

                        margin-bottom: 0;

                    }



                    li {

                        display: block;

                        float: left;

                        margin-right: 6px;

                        cursor: pointer;

                    }



                    img {

                        display: block;

                        height: auto;

                        max-width: 100%;

                    }
                </style>



            </div>

        </div>

    </div>

</div>

<script>
    let modalId = $('#image-gallery');



    $(document)

        .ready(function() {



            loadGallery(true, 'a.thumbnail');



            //This function disables buttons when needed

            function disableButtons(counter_max, counter_current) {

                $('#show-previous-image, #show-next-image')

                    .show();

                if (counter_max === (counter_current + 1)) {

                    $('#show-next-image')

                        .hide();

                } else if (counter_current === 1) {

                    $('#show-previous-image')

                        .hide();

                }

                //alert(counter_max + "<>" + counter_current);    

            }



            /**

             *

             * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.

             * @param setClickAttr  Sets the attribute for the click handler.

             */



            function loadGallery(setIDs, setClickAttr) {

                let current_image,

                    selector,

                    counter = 0;



                $('#show-next-image, #show-previous-image')

                    .click(function() {

                        if ($(this)

                            .attr('id') === 'show-previous-image') {

                            current_image--;

                            current_image -= 1;

                        } else {

                            current_image++;

                            current_image += 1;

                        }

                        selector = $('[data-image-id="' + current_image + '"]');

                        updateGallery(selector);

                    });



                function updateGallery(selector) {

                    let $sel = selector;

                    current_image = $sel.data('image-id');

                    $('#image-gallery-title')

                        .text($sel.data('title'));

                    $('#image-gallery-image')

                        .attr('src', $sel.data('image'));

                    disableButtons(counter, $sel.data('image-id'));

                }



                if (setIDs == true) {

                    $('[data-image-id]')

                        .each(function() {

                            counter++;

                            $(this)

                                .attr('data-image-id', counter);

                        });

                }

                $(setClickAttr)

                    .on('click', function() {

                        updateGallery($(this));

                    });

            }

        });



    // build key actions

    $(document)

        .keydown(function(e) {

            switch (e.which) {

                case 37: // left

                    if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {

                        $('#show-previous-image')

                            .click();

                    }

                    break;



                case 39: // right

                    if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {

                        $('#show-next-image')

                            .click();

                    }

                    break;



                default:

                    return; // exit this handler for other keys

            }

            e.preventDefault(); // prevent the default action (scroll / move caret)

        });
</script>



<?php foreach ($query->result() as $column) : ?>

    <script>
        $("#img-<?= $column->id_promocion ?>").click(function() {

            var src = $("#img-<?= $column->id_promocion ?>").attr("src");

            //alert(src);

            $("#image-gallery-image").attr("src", src);

        });

        // image - gallery - image
    </script>

<?php endforeach; ?>

<script>
    bk_doJSTag(93936, 1); // Beer Factory
    // Identificar clientes con interés en Promociones
    // // Posiciones
    // // LunesComeGratis -> 80
    // // Martes_y_Jueves_2x1 -> 82
    // // MiercolesUpgrade -> 81
    // // Tarros_1L_2x1 -> 83
    // // DomingoExotica -> 84
    let LunesComeGratis = document.getElementById("col-img-cervezas-80");
    let Martes_y_Jueves_2x1 = document.getElementById("col-img-cervezas-82");
    let MiercolesUpgrade = document.getElementById("col-img-cervezas-81");
    let Tarros_1L_2x1 = document.getElementById("col-img-cervezas-83");
    let DomingoExotica = document.getElementById("col-img-cervezas-84");
    let Cumpleanos = document.getElementById("col-img-cervezas-85");

    LunesComeGratis.addEventListener('click', () => {
        bk_addPageCtx('BF_BotonPromociones', 'LunesComeGratis'); //Clave y Valor para una regla personalizada
        bk_doJSTag(93936, 1); // Beer Factory
    });
    Martes_y_Jueves_2x1.addEventListener('click', () => {
        bk_addPageCtx('BF_BotonPromociones', 'Martes_y_Jueves_2x1'); //Clave y Valor para una regla personalizada
        bk_doJSTag(93936, 1); // Beer Factory
    });
    MiercolesUpgrade.addEventListener('click', () => {
        bk_addPageCtx('BF_BotonPromociones', 'MiercolesUpgrade'); //Clave y Valor para una regla personalizada
        bk_doJSTag(93936, 1); // Beer Factory
    });
    Tarros_1L_2x1.addEventListener('click', () => {
        bk_addPageCtx('BF_BotonPromociones', 'Tarros_1L_2x1'); //Clave y Valor para una regla personalizada
        bk_doJSTag(93936, 1); // Beer Factory
    });
    DomingoExotica.addEventListener('click', () => {
        bk_addPageCtx('BF_BotonPromociones', 'DomingoExotica'); //Clave y Valor para una regla personalizada
        bk_doJSTag(93936, 1); // Beer Factory
    });
    Cumpleanos.addEventListener('click', () => {
        bk_addPageCtx('BF_BotonPromociones', 'Cumpleanos'); //Clave y Valor para una regla personalizada
        bk_doJSTag(93936, 1); // Beer Factory
    });
    window.onload = () => {
        // Altura total del documento
        let containerBody = document.body.offsetHeight;
        // Altura total de la ventana
        let containerClientView = document.body.clientHeight;
        // Se resta la altura del documento con la de la ventana para obtener la altura scrolleable del documento
        let containerScroll = containerBody - containerClientView;
        // Banderas para determinar hasta que parte del documento va el cliente
        let scroll25, scroll50, scroll75, scroll100 = false;
        let view25 = containerScroll * .25;
        let view50 = containerScroll * .5;
        let view75 = containerScroll * .75;
        let view100 = containerScroll;
        window.onscroll = function() {
            // Altura de scroll
            let currentScroll = document.body.scrollTop;
            if (!scroll25 && currentScroll >= view25) {
                // Tag infinity
                // // Cliente recorre el 25% de la pagina
                var testMutation1 = function(msg) {
                                //key               value
                    msg.payload["BFF_Scrolldown_Promociones"] = "25%";
                };
                ORA.analytics.addMutation("myuniqueid", testMutation1);
                ORA.click()
                scroll25 = true;
            }
            if (!scroll50 && currentScroll >= view50) {
                // // Cliente recorre el 50% de la pagina
                // Tag infinity
                // // Cliente recorre el 25% de la pagina
                var testMutation1 = function(msg) {
                                //key               value
                    msg.payload["BFF_Scrolldown_Promociones"] = "50%";
                };
                ORA.analytics.addMutation("myuniqueid", testMutation1);
                ORA.click()
                scroll50 = true;
            }
            if (!scroll75 && currentScroll >= view75) {
                // // Cliente recorre el 75% de la pagina
                // Tag infinity
                // // Cliente recorre el 25% de la pagina
                var testMutation1 = function(msg) {
                                //key               value
                    msg.payload["BFF_Scrolldown_Promociones"] = "75%";
                };
                ORA.analytics.addMutation("myuniqueid", testMutation1);
                ORA.click()
                scroll75 = true;
            }
            if (!scroll100 && currentScroll == view100) {
                // // Cliente recorre el 100% de la pagina
                // Tag infinity
                // // Cliente recorre el 25% de la pagina
                var testMutation1 = function(msg) {
                                //key               value
                    msg.payload["BFF_Scrolldown_Promociones"] = "100%";
                };
                ORA.analytics.addMutation("myuniqueid", testMutation1);
                ORA.click()
                scroll100 = true;
            }
        }
    };
</script>