<meta name="keywords" content="Hamburguesa, pizza, nachos, papas, taquitos" />
<link rel="stylesheet" type="text/css" href="<?= base_url('recs/assets/css/menu.css') ?>" />



<div class="container-fluid container-menu">

    <div class="container_img_menu">

        <div class="text-center">

            <img src="<?= base_url('recs/assets/images/Menu/Delivery.png') ?>" style="width:240px" class="img-fluid img-text-menu" alt="Responsive image">

        </div>

    </div>



    <?php include "menu_menu.php" ?>



    <!--<div class="container-fluid container-imgs-categorias">-->

    <!--    <ul class="list-group list-group-horizontal ul_menus">-->

    <!--        <li class="list-group-item comida-contenido">Light <img class="light-icon"-->

    <!--                src="<?= base_url('recs/assets/images/Menu/iconos_menu_2.png') ?>" alt=""></li>-->

    <!--        <li class="list-group-item comida-contenido">Spicy <img class="light-icon"-->

    <!--                src="<?= base_url('recs/assets/images/Menu/icono_menu_f.png') ?>" alt=""></li>-->

    <!--        <li class="list-group-item comida-contenido">BF Favorite <img class="light-icon"-->

    <!--                src="<?= base_url('recs/assets/images/Menu/iconos_menu_3.png') ?>" alt=""></li>-->

    <!--    </ul>-->

    <!--</div>-->



    <div class="container-fluid container-imgs-manteletas">

        <div class="row">

            <?php foreach ($images['queryImgs']->result() as $column) : ?>

                <div class="col-12 col-xl-6 col-img-manteleta">

                    <img src="<?= base_url('recs/assets/images/Menu/') . $column->nombre_imagen ?>" class="img-fluid img-back-cervezas" alt="Responsive image">

                </div>

            <?php endforeach; ?>

            <!--<div class="col-12 col-xl-6 col-img-manteleta">

                <img src="<?= base_url('recs/assets/images/Menu/Guac-A-Ring_Burger.png') ?>"

                    class="img-fluid img-back-cervezas" alt="Responsive image">

            </div>

            <div class="col-12 col-xl-6 col-img-manteleta">

                <img src="<?= base_url('recs/assets/images/Menu/Tuna_Crunch.png') ?>" class="img-fluid img-back-cervezas"

                    alt="Responsive image">

            </div>

            <div class="col-12 col-xl-6 col-img-manteleta">

                <img src="<?= base_url('recs/assets/images/Menu/Shrimp___Mayo_Crunch.png') ?>"

                    class="img-fluid img-back-cervezas" alt="Responsive image">

            </div>

            <div class="col-12 col-xl-6 col-img-manteleta">

                <img src="<?= base_url('recs/assets/images/Menu/Tacos.png') ?>" class="img-fluid img-back-cervezas"

                    alt="Responsive image">

            </div>-->

        </div>

    </div>

</div>
<script>
    // Clientes con interés en DELIVERY
    bk_doJSTag(93936, 1); // Beer Factory
    // <!-- End BlueKai Tag -->

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
                    msg.payload["BFF_Scrolldown_Delivery"] = "25%";
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
                    msg.payload["BFF_Scrolldown_Delivery"] = "50%";
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
                    msg.payload["BFF_Scrolldown_Delivery"] = "75%";
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
                    msg.payload["BFF_Scrolldown_Delivery"] = "100%";
                };
                ORA.analytics.addMutation("myuniqueid", testMutation1);
                ORA.click()
                scroll100 = true;
            }
        }
    };
</script>

<script>
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
                    msg.payload["BFF_Scrolldown_Delivery"] = "25%";
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
                    msg.payload["BFF_Scrolldown_Delivery"] = "50%";
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
                    msg.payload["BFF_Scrolldown_Delivery"] = "75%";
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
                    msg.payload["BFF_Scrolldown_Delivery"] = "100%";
                };
                ORA.analytics.addMutation("myuniqueid", testMutation1);
                ORA.click()
                scroll100 = true;
            }
        }
    };
</script>