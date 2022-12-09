<?php

defined('BASEPATH') OR exit('No direct script access allowed');
echo "<script>var base_url = ".base_url()."</script>";
?>

<!DOCTYPE html>

<html lang="en">



<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <link rel="icon" type="image/png" href="<?= base_url('recs/assets/images/Beerfactory-Icon-48-blackpx.ico') ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Beer Factory - Inicio</title>



    <link rel="stylesheet" type="text/css" href="<?= base_url('recs/assets/css/bootstrap.min.css') ?>" />

    <link rel="stylesheet" type="text/css" href="<?= base_url('recs/assets/css/headerRedes.css') ?>" />



    <script src="<?= base_url('recs/assets/js/jquery-3.4.1.min.js') ?>"></script>

    <?php if (!isset($login)):?>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="http://www.onexo.mx/beer_factory/index.php/AdminWelcome"><img class="logo-nav"

                src="<?= base_url('recs/assets/images/bf_logo_actual_blanco_2.png') ?>" width="191"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"

            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>



        <div class="container-modulos">

            <div class="row row-modulos">

                <div class="col col-item-nav">

                    <div class="text-center text-item">

                        <a class="link-item"

                            href="http://www.onexo.mx/beer_factory/index.php/AdminWelcome/cerveceria">CERVECERÍA</a>

                    </div>

                </div>

                <div class="col col-item-nav">

                    <div class="text-center text-item">

                        <a class="link-item"

                            href="http://www.onexo.mx/beer_factory/index.php/CervezasAdmin/index">CERVEZAS</a>

                    </div>

                </div>

                <div class="col col-item-nav">

                    <div class="text-center text-item">

                        <a class="link-item" href="http://www.onexo.mx/beer_factory/index.php/MenuAdmin/index">

                            MENÚ</a>

                    </div>

                </div>

                <div class="col col-item-nav">

                    <div class="text-center text-item">

                        <a class="link-item"

                            href="http://www.onexo.mx/beer_factory/index.php/PromocionesAdmin/index">PROMOCIONES</a>

                    </div>

                </div>

                <!--<div class="col col-item-nav">

                    <div class="text-center text-item text-item-wolfpack">

                        WOLF PACK

                    </div>

                </div>

                <div class="col col-item-nav">

                    <div class="text-center text-item text-item-mrhops">

                        MR. HOPS

                    </div>

                </div>-->

                <div class="col col-item-nav">

                    <div class="text-center text-item">

                       <a class="link-item"

                            href="http://www.onexo.mx/beer_factory/index.php/CalendarioAdmin/index">CALENDARIO</a>

                    </div>

                </div>

                <div class="col col-item-nav">

                    <div class="text-center text-item">

                        <a class="link-item"

                            href="http://www.onexo.mx/beer_factory/index.php/UbicacionesAdmin/index">UBICACIONES</a>

                    </div>

                </div>

                <div class="col col-item-nav">

                    <div class="text-center text-item">

                        <a class="link-item"

                            href="http://www.onexo.mx/beer_factory/index.php/HomeWM/index">SALIR</a>

                    </div>

                </div>

                 <!--<div class="col col-item-nav">

                    <div class="text-center text-item">

                        <a class="link-item" href="">HISTORIA</a>

                    </div>

                </div>

                <div class="col col-item-nav">

                    <div class="text-center text-item">

                        <a class="link-item"

                            href="">CONTACTO</a>

                    </div>

                </div>

               <div class="col col-item-facturacion">

                    <div class="text-center text-item">

                        FACTURACIÓN

                    </div>

                </div>

                <div class="col col-item-nav col-item-celendario">

                    <div class="text-center text-item">

                        CALENDARIO

                    </div>

                </div>

                <div class="col col-item-nav col-item-cerveceria">

                    <div class="text-center text-item">

                        CERVECERÍA

                    </div>

                </div>-->

            </div>

        </div>



        <div class="collapse navbar-collapse" id="navbarNav">

            <div class="container-fluid nav-redes nav-redes-collapse">

                <div class="row row-collapse">

                    <div class="col-12 col-sm-4 col-md-3">

                        <div class="text-center text-item">

                            <a class="link-item"

                                href="http://www.onexo.mx/beer_factory/index.php/cerveceria/index">CERVECERÍA</a>

                        </div>

                    </div>

                    <div class="col-12 col-sm-4 col-md-3">

                        <div class="text-center text-item">

                            <a class="link-item"

                                href="http://www.onexo.mx/beer_factory/index.php/cervezas/index">CERVEZAS</a>

                        </div>

                    </div>

                    <div class="col-12 col-sm-4 col-md-3">

                        <div class="text-center text-item">

                        <a class="link-item"

                                href="http://www.onexo.mx/beer_factory/index.php/menu/index">MENÚ</a>

                        </div>

                    </div>

                    <div class="col-12 col-sm-4 col-md-3">

                        <div class="text-center text-item">

                        <a class="link-item"

                                href="">PROMOCIONES</a>

                        </div>

                    </div>

                    <!--<div class="col-12 col-sm-4 col-md-3">

                        <div class="text-center text-item">

                            WOLF PACK

                        </div>

                    </div>

                    <div class="col-12 col-sm-4 col-md-3">

                        <div class="text-center text-item">

                            MR. HOPS

                        </div>

                    </div>

                    <div class="col-12 col-sm-4 col-md-4">

                        <div class="text-center text-item">

                            CALENDARIO

                        </div>

                    </div>-->

                    <div class="col-12 col-sm-4 col-md-4">

                        <div class="text-center text-item">

                        <a class="link-item"

                                href="http://www.onexo.mx/beer_factory/index.php/UbicacionesAdmin/index">UBICACIONES</a>

                        </div>

                    </div>

                    <div class="col-12 col-sm-4 col-md-3 col-item-celendario">

                        <div class="text-center text-item">

                        <a class="link-item"

                                href="http://www.onexo.mx/beer_factory/index.php/CalendarioAdmin/index">CALENDARIO</a>

                        </div>

                    </div>

                    <div class="col-12 col-sm-12 col-md-4">

                        <div class="text-center text-item">

                        <a class="link-item"

                                href="">CONTACTO</a>

                        </div>

                    </div>

                    <div class="col-12 col-sm-12 col-md-4">

                        <div class="text-center text-item">

                        <a class="link-item"

                                href="">SALIR</a>

                        </div>

                    </div>

                    <div class="col-12 col-sm-4 col-md-3 col-item-facturacion">

                        <div class="text-center text-item">

                            FACTURACIÓN

                        </div>

                    </div>

                    

                    <!--<div class="col-12 col-sm-4 col-md-3 col-item-cerveceria">

                        <div class="text-center text-item">

                            CERVECERÍA

                        </div>

                    </div>-->

                </div>

            </div>

            <!--<ul class="navbar-nav">

            <li class="nav-item active">

                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>

            </li>

            <li class="nav-item">

                <a class="nav-link" href="#">Features</a>

            </li>

            <li class="nav-item">

                <a class="nav-link" href="#">Pricing</a>

            </li>

            <li class="nav-item">

                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>

            </li>

            </ul>-->

        </div>

    </nav>



    <?php endif;?>

</head>



<body>