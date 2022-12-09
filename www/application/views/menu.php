<meta name="keywords" content="Hamburguesa, pizza, nachos, papas, taquitos" />
<link rel="stylesheet" type="text/css" href="<?= base_url('recs/assets/css/menu.css') ?>" />



<div class="container-fluid container-menu">

    <div class="container_img_menu">

        <div class="text-center">

            <img src="<?= base_url('recs/assets/images/Menu/BF_Elementos-Cervezas-Paths_0.png') ?>"

                class="img-fluid img-text-menu" alt="Responsive image">

        </div>

    </div>



    <?php include "menu_menu.php"?>



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

            <?php foreach($images['queryImgs']->result() as $column):?>

                <div class="col-12 col-xl-6 col-img-manteleta">

                <img src="<?= base_url('recs/assets/images/Menu/').$column->nombre_imagen?>"

                    class="img-fluid img-back-cervezas" alt="Responsive image">

            </div>

            <?php endforeach;?>

            <!--<div class="col-12 col-xl-6 col-img-manteleta">

                <img src="<?= base_url('recs/assets/images/Menu/Guac-A-Ring_Burger.png')?>"

                    class="img-fluid img-back-cervezas" alt="Responsive image">

            </div>

            <div class="col-12 col-xl-6 col-img-manteleta">

                <img src="<?= base_url('recs/assets/images/Menu/Tuna_Crunch.png')?>" class="img-fluid img-back-cervezas"

                    alt="Responsive image">

            </div>

            <div class="col-12 col-xl-6 col-img-manteleta">

                <img src="<?= base_url('recs/assets/images/Menu/Shrimp___Mayo_Crunch.png')?>"

                    class="img-fluid img-back-cervezas" alt="Responsive image">

            </div>

            <div class="col-12 col-xl-6 col-img-manteleta">

                <img src="<?= base_url('recs/assets/images/Menu/Tacos.png')?>" class="img-fluid img-back-cervezas"

                    alt="Responsive image">

            </div>-->

        </div>

    </div>

</div>