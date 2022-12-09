<meta name="keywords" content="Proceso cervecería, conoce el proceso" />
<link rel="stylesheet" type="text/css" href="<?= base_url('recs/assets/css/cerveceria.css') ?>" />

<div id="container-fluid" class="container-cerveceria">
    <div class="tabs-submenu-cerveceria w-tab-menu">
        <a class="tab-link w-inline-block w-tab-link w--current" data-w-tab="Tab 1" id="btn_nuestro">
            <div>Nuestro Proceso</div>
        </a>
        <a class="cerveceria tab-link w-inline-block w-tab-link" data-w-tab="Tab 2" id="btn_galeria">
            <div>Galería</div>
        </a>
    </div>

    <div id="nuestro_proceso">
        <div class="text-center">
            <img src="<?= base_url('recs/assets/images/BF_Elementos-Cervezas-Paths_9.png') ?>" class="img-fluid img-como_hacemos" alt="Responsive image">
        </div>

        <div class="container-fluid">
            <div class="row">
                <?php foreach ($procesos['query']->result() as $column) : ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="text-center">
                            <img src="<?= base_url('recs/assets/images/Cerveceria/' . $column->nombre_imagen) ?>" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                <?php endforeach; ?>
                <!--<div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="text-center">
                        <img src="<?= base_url('recs/assets/images/') ?>" class="img-fluid"
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
                </div>
                <div class="col-12 col-lg-5">
                    <div class="text-center">
                        <img src="<?= base_url('recs/assets/images/7_cerveza_terminada.png') ?>" class="img-fluid"
                            alt="Responsive image">
                    </div>
                </div>-->
            </div>
        </div>

        <div class="text-center">
            <img src="<?= base_url('recs/assets/images/BF_Elementos-Cervezas-Paths_11.png') ?>" class="img-fluid img-ven" alt="Responsive image">
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">

    <!-- GALERIA -->
    <div class="container" id="galeria">
        <div class="row">
            <div class="row">
                <?php foreach ($consulta->result() as $fila) : ?>
                    <div class="col-12 col-sm-6 col-lg-4 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?= base_url('recs/assets/images/Cerveceria/') . $fila->nombre ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-target="#image-gallery">
                            <img class="img-thumbnail" src="<?= base_url('recs/assets/images/Cerveceria/') . $fila->nombre ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Another alt text">
                        </a>
                    </div>
                <?php endforeach; ?>
                <!--<div class="col-12 col-sm-6 col-lg-4 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                        data-image="<?= base_url('recs/assets/images/Cerveceria/g_9_b.jpg') ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="img-thumbnail"
                            src="<?= base_url('recs/assets/images/Cerveceria/g_9_b.jpg') ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                            alt="Another alt text">
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                        data-image="<?= base_url('recs/assets/images/Cerveceria/Santa_Fe_1.jpg') ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="img-thumbnail"
                            src="<?= base_url('recs/assets/images/Cerveceria/Santa_Fe_1.jpg') ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                            alt="Another alt text">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                        data-image="<?= base_url('recs/assets/images/Cerveceria/Santa_Fe_2.jpg') ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="img-thumbnail"
                            src="<?= base_url('recs/assets/images/Cerveceria/Santa_Fe_2.jpg') ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                            alt="Another alt text">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                        data-image="<?= base_url('recs/assets/images/Cerveceria/Santa_Fe_3.jpg') ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="img-thumbnail"
                            src="<?= base_url('recs/assets/images/Cerveceria/Santa_Fe_3.jpg') ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                            alt="Another alt text">
                    </a>
                </div>



                <div class="col-12 col-sm-6 col-lg-4 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                        data-image="<?= base_url('recs/assets/images/Cerveceria/Santa_Fe_4.jpg') ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="img-thumbnail"
                            src="<?= base_url('recs/assets/images/Cerveceria/Santa_Fe_4.jpg') ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                            alt="Another alt text">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                        data-image="<?= base_url('recs/assets/images/Cerveceria/Santa_Fe_5.jpg') ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="img-thumbnail"
                            src="<?= base_url('recs/assets/images/Cerveceria/Santa_Fe_5.jpg') ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                            alt="Another alt text">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                        data-image="<?= base_url('recs/assets/images/Cerveceria/30623787_10156317093519628_497005721343229952_o.jpg') ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="img-thumbnail"
                            src="<?= base_url('recs/assets/images/Cerveceria/30623787_10156317093519628_497005721343229952_o.jpg') ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                            alt="Another alt text">
                    </a>
                </div>



                <div class="col-12 col-sm-6 col-lg-4 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                        data-image="<?= base_url('recs/assets/images/Cerveceria/30629194_10156317093549628_2231042082124857344_o.jpg') ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="img-thumbnail"
                            src="<?= base_url('recs/assets/images/Cerveceria/30629194_10156317093549628_2231042082124857344_o.jpg') ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                            alt="Another alt text">
                    </a>
                </div>-->
            </div>


            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                <button type="button" class="btn btn-secondary btn-left-image" id="show-previous-image">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve" width="24px" height="24px">
                                        <g>
                                            <g>
                                                <g>
                                                    <path d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12    C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084    c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864    l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </button>

                                <button type="button" id="show-next-image" class="btn btn-secondary btn-next-image">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;" xml:space="preserve" width="24px" height="24px">
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
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

    <script>
        $(document).on("click", '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
    <script src="<?= base_url('recs/assets/js/cerveceria.js') ?>"></script>
</div>

<script>
    // Identificar clientes con interés en Proceso de cerveza 
    bk_doJSTag(93936, 1); // Beer Factory
</script>