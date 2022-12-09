<meta name="keywords" content="American Pale Ale, IPA, Light Ale, Ale, Vienna Lager, Stout, Saison, Ale, Coyote, Mil Culpas, Mediterránea, Santa Fe, Luna Llena, Ave de mal agüero, Wannabe" />
<link rel="stylesheet" type="text/css" href="<?= base_url('recs/assets/css/cervezas.css') ?>" />




<div id="container-cervezas">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php $nRows = 0; ?>
            <?php foreach ($images['query']->result() as $column) : ?>
                <?php $nRows++ ?>
                <div class="carousel-item <?php if ($nRows == 1) {
                                                echo "active";
                                            } ?>">
                    <img src="<?= base_url('recs/assets/images/Cervezas/') . $column->nombre_imagen ?>" class="d-block w-100" alt="...">
                </div>
            <?php endforeach; ?>
            <!--<div class="carousel-item">
                <img src="<?= base_url('recs/assets/images/Cervezas/BeerFactory-Banner-Avemalaguero.jpg') ?>"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('recs/assets/images/Cervezas/BeerFactory-Banner-Festiva.jpg') ?>"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('recs/assets/images/Cervezas/BeerFactory-Banner-Lunallena.jpg') ?>"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('recs/assets/images/Cervezas/BeerFactory-Banner-Mediterraneo.jpg') ?>"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('recs/assets/images/Cervezas/BeerFactory-Banner-MilCulpas.jpg') ?>"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('recs/assets/images/Cervezas/BeerFactory-Banner-SantaFe.jpg') ?>"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('recs/assets/images/Cervezas/BeerFactory-Banner-Wannabe.jpg') ?>"
                    class="d-block w-100" alt="...">
            </div>-->
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
        <a class="cerveceria tab-link w-inline-block w-tab-link" data-w-tab="Tab 2" id="btn_maridaje">
            <div>Maridaje</div>
        </a>
    </div>
    <div class="container-fluid" id="sec-cervezas">
        <!-- Seccion cervezas-->
        <div class="row">
            <?php foreach ($query->result() as $column) : ?>
                <div class="col-12 col-md-6 col-lg-6 col-xl-6" id="col-img-cervezas-<?= $column->id_cerveza ?>">
                    <img src="<?= base_url('recs/assets/images/Cervezas/') . $column->nombre_imagen_fondo ?>" class="img-fluid img-back-cervezas" alt="Responsive image">

                    <img src="<?= base_url('recs/assets/images/Cervezas/') . $column->nombre_imagen_frontal ?>" id="img-front-cervezas-<?= $column->id_cerveza ?>" class="img-fluid img-front-cervezas" alt="Responsive image">
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div id="sec-maridaje">
        <div class="container-fluid">
            <div class="text-center">
                <img src="<?= base_url('recs/assets/images/Cervezas/info-maridaje-1.1.png') ?>" class="img-fluid img-maridaje" alt="Responsive image">
            </div>
        </div>

        <div class="container-fluid">
            <div class="text-center">
                <img src="<?= base_url('recs/assets/images/Cervezas/info-maridaje-2.1.png') ?>" class="img-fluid img-maridaje-info" alt="Responsive image">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="text-center">
            <img src="<?= base_url('recs/assets/images/Cervezas/BF_Elementos-Cervezas-Paths_2.png') ?>" class="img-fluid img-beer_to_go" alt="Responsive image">
        </div>
    </div>

    <div class="container-fluid container-tamanos">
        <div class="row">
            <?php $nRegistros = 0; ?>
            <?php $nSalto = 1; ?>
            <?php foreach ($botellas['query']->result() as $column) : ?>
                <?php $nRegistros++; ?>
                <?php echo '<p>' . $nSalto . $nRegistros . '</p>' ?>
                <div class="col-12 col-md-4 <?php if ($nRegistros == $nSalto) {
                                                echo 'offset-xl-1';
                                                $nSalto = $nSalto + 3;
                                            } ?> col-xl-3 col-img-cervezas">
                    <div class="text-center">
                        <img src="<?= base_url('recs/assets/images/Cervezas/' . $column->nombre_imagen) ?>" class="img-fluid imgs-beer_to_go" alt="Responsive image">
                        <h4><?= $column->titulo ?></h4>
                        <p class="descripcion-cerveza-extra">
                            <?= $column->descripcion ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>

            <!--<div class="col-12 col-md-4 col-xl-3">
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
        </div>
    </div>
</div>

<?php foreach ($query->result() as $column) : ?>
    <script>
        $("#col-img-cervezas-<?= $column->id_cerveza ?>").hover(function() {
                $("#img-front-cervezas-<?= $column->id_cerveza ?>").show();
                $("#opciones-<?= $column->id_cerveza ?>").show();
            },
            function() {
                $("#img-front-cervezas-<?= $column->id_cerveza ?>").hide();
                $("#opciones-<?= $column->id_cerveza ?>").hide();
            });
    </script>
<?php endforeach; ?>

<script src="<?= base_url('recs/assets/js/cervezas.js') ?>"></script>
<script>
    // Identificar clientes con interés en sección Cervezas
    bk_doJSTag(93936, 1); // Beer Factory

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
                    msg.payload["BFF_Scrolldown_Cervezas"] = "25%";
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
                    msg.payload["BFF_Scrolldown_Cervezas"] = "50%";
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
                    msg.payload["BFF_Scrolldown_Cervezas"] = "75%";
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
                    msg.payload["BFF_Scrolldown_Cervezas"] = "100%";
                };
                ORA.analytics.addMutation("myuniqueid", testMutation1);
                ORA.click()
                scroll100 = true;
            }

        };
    }
    let btnMaridaje = document.getElementById("btn_maridaje");
    btnMaridaje.addEventListener('click', () => {
        // Tag infinity
        // // Cliente de click en el boton de Maridaje
        var testMutation1 = function(msg) {
                        //key               value
            msg.payload["BFF_Boton_Maridaje"] = "BotonMaridaje";
        };
        ORA.analytics.addMutation("myuniqueid", testMutation1);
        ORA.click()
    })
</script>