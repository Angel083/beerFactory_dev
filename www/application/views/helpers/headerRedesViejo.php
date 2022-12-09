<?php
defined('BASEPATH') OR exit('No direct script access allowed');
echo "<script>var base_url = '".base_url()."';</script>";
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
    <!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-TJMW22M');</script>

<!-- End Google Tag Manager -->

    <script src="<?= base_url('recs/assets/js/jquery-3.4.1.slim.min.js') ?>"></script>
</head>

<body>
    <div class="container-fluid nav-redes">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-1 col-lg-1 col-xl-1 col-link-facturacion">
                <div class="btn-group group-link-facturacion" role="group" aria-label="Basic example">
                    <a class="link-facturacion" href="https://efactura.beerfactory.com.mx:13443">Facturación </a>
                </div>
            </div>
            <div class="col-3 col-sm-9 col-md-9 col-lg-9">

            </div>
            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-links-redes">
                <div class="btn-group group-redes" role="group" aria-label="Basic example">
                    <a href="https://www.facebook.com/beerfactorymx" target="_blank" class="facebook_link">Facebook</a>
                    <a href="https://twitter.com/beerfactorymx" target="_blank" class="twitter_link">Twitter</a>
                    <a href="https://www.instagram.com/beerfactorymx/" target="_blank"
                        class="instagram_link">Instagram</a>
                    <a href="https://www.youtube.com/channel/UCWimavr6PdN191nEbMn0kYg?&ab_channel=BeerFactoryMexico"
                        target="_blank" class="youtube_link">Youtube</a>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?= base_url() ?>"><img class="logo-nav"
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
                            href="<?= base_url('historia')?>">NOSOTROS</a>
                    </div>
                </div>
                <div class="col col-item-nav">
                    <div class="text-center text-item">
                        <a class="link-item"
                            href="<?= base_url('cerveceria')?>">CERVECERÍA</a>
                    </div>
                </div>
                <div class="col col-item-nav">
                    <div class="text-center text-item">
                        <a class="link-item"
                            href="<?= base_url('cervezas')?>">CERVEZAS</a>
                    </div>
                </div>
                <div class="col col-item-nav">
                    <div class="text-center text-item">
                        <a class="link-item" href="<?= base_url('menu')?>">
                            MENÚ</a>
                    </div>
                </div>
                <div class="col col-item-nav">
                    <div class="text-center text-item">
                        <a class="link-item"
                            href="<?= base_url('promociones')?>">PROMOCIONES</a>
                    </div>
                </div>
                <div class="col col-item-nav">
                    <div class="text-center text-item">
                        <a class="link-item"
                            href="<?= base_url('restaurantes')?>">UBICACIONES</a>
                    </div>
                </div>
                <div class="col col-item-nav">
                    <div class="text-center text-item">
                        <a class="link-item"
                            href="<?= base_url('calendario')?>">CALENDARIO</a>
                    </div>
                </div>
                <div class="col col-item-nav">
                    <div class="text-center text-item">
                        <a class="link-item"
                            href="<?= base_url('contacto')?>">CONTACTO</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="container-fluid nav-redes nav-redes-collapse">
                <div class="row row-collapse">
                    <div class="col-12 col-sm-3 col-md-3">
                        <div class="text-center text-item">
                            <a class="link-item"
                                href="<?= base_url('historia')?>">NOSOTROS</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-md-3">
                        <div class="text-center text-item">
                            <a class="link-item"
                                href="<?= base_url('cerveceria')?>">CERVECERÍA</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-md-3">
                        <div class="text-center text-item">
                            <a class="link-item"
                                href="<?= base_url('cervezas')?>">CERVEZAS</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-md-3">
                        <div class="text-center text-item">
                            <a class="link-item" href="<?= base_url('menu')?>">MENÚ</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-md-3">
                        <div class="text-center text-item">
                            <a class="link-item"
                                href="<?= base_url('promociones')?>">PROMOCIONES</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-md-3">
                        <div class="text-center text-item">
                            <a class="link-item"
                                href="<?= base_url('restaurantes')?>">UBICACIONES</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-md-3 col-item-celendario">
                        <div class="text-center text-item">
                            <a class="link-item"
                                href="<?= base_url('calendario')?>">CALENDARIO</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-md-3">
                        <div class="text-center text-item">
                            <a class="link-item"
                                href="<?= base_url('contacto')?>">CONTACTO</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-3 col-item-facturacion">
                        <div class="text-center text-item">
                            <a class="link-item" href="https://efactura.beerfactory.com.mx:13443">FACTURACIÓN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>