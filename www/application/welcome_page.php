<!–[if IE]>
    <style>
    .row-modulos {
        /*width: 80%;*/
    }
    </style>
    <![endif]–>

<link rel="stylesheet" type="text/css" href="<?= base_url('recs/assets/css/home.css') ?>" />

<div id="container-fluid">

    <div class="text-center containter-brewing cont-video">
        <img src="<?= base_url('recs/assets/images/imagen-home_2.png') ?>" class="img-brewing" alt="...">
        <video class="video_bff" autoplay loop>
            <source src="<?= base_url('recs/assets/video/bff.webm') ?>" type="video/webm">
            Your browser does not support the video tag.
        </video>
        
    </div>

    <div class="container-fluid container-cards-home">
        <div class="row">
        <?php foreach($query->result() as $column):?>
            <?php if($column->tipo_card == "card"):?>
            <div class="col-12 col-lg-6 col-card-1">
                <div class="card" id="card-<?= $column->id_card?>">
                    <img class="card-img-top img-card-1" id="img-card-<?= $column->id_card?>"
                        style="background-image: url('<?= base_url("recs/assets/images/").$column->nombre_imagen_fondo?>')"
                        src="<?= base_url('recs/assets/images/').$column->nombre_imagen_frontal ?>"
                        alt="Card image cap">
                    <div class="card-body card-body-img">
                        <h5 class="card-title card-title-home"><?= $column->titulo?></h5>
                        <p class="card-text card-text-home"><?= $column->contenido?></p>
                        <a href="<?= base_url("index.php/cerveceria/index")?>" class="btn boton-ver-home">Ver más</a>
                    </div>
                </div>
            </div>
            <?php endif;?>

            <?php if($column->tipo_card == "card-front-transparente"):?>
            <div class="col-12 col-lg-6 col-card-2">
                <div class="card">
                    <img class="card-img-top img-card-2"
                        src="<?= base_url('recs/assets/images/').$column->nombre_imagen_frontal ?>"
                        style="background-image: url('<?= base_url("recs/assets/images/").$column->nombre_imagen_fondo?>')"
                        alt="Card image cap" id="img-card-<?= $column->id_card?>">
                    <div class="card-body card-body-img">
                        <h5 class="card-title card-title-home"><?= $column->titulo?></h5>
                        <p class="card-text card-text-home"><?= $column->contenido?></p>
                        <a href="#" class="btn boton-ver-home" data-toggle="modal" data-target="#exampleModalCenter">Ver
                            más</a>
                    </div>

                    <div class="div-opciones" style="display:none" id="opciones-<?= $column->id_card?>">
                        <ul class="list-group list-group-horizontal-md list-group-opciones">
                            <li class="list-group-item list-group-item-eliminar list-group-item-img"
                                data-book-id="book-ed-<?= $column->id_card?>" id="ed-<?= $column->id_card?>"
                                data-toggle="modal" data-title="assa" data-target="#modalEditar"
                                data-tipo="<?= $column->tipo_card?>">
                                Editar</li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endif;?>

            <?php if($column->tipo_card == "card-custom"):?>
            <div class="col-12 col-lg-6 col-card-3">
                <div class="card">
                    <img class="card-img-top img-card-3" id="img-card-<?= $column->id_card?>"
                        style="background-image: url('<?= base_url("recs/assets/images/").$column->nombre_imagen_fondo?>')"
                        src="<?= base_url('recs/assets/images/').$column->nombre_imagen_frontal ?>"
                        alt="Card image cap">
                    <div class="card-body card-body-img">
                        <h5 class="card-title card-title-home"><?= $column->titulo?></h5>
                        <p class="card-text card-text-home"><?= $column->contenido?></p>
                        <a href="#" class="btn boton-ver-home" data-toggle="modal" data-target="#exampleModalCard3">Ver
                            más</a>
                    </div>

                    <div class="div-opciones" style="display:none" id="opciones-<?= $column->id_card?>">
                        <ul class="list-group list-group-horizontal-md list-group-opciones">
                            <li class="list-group-item list-group-item-eliminar list-group-item-img"
                                data-book-id="book-ed-<?= $column->id_card?>" id="ed-<?= $column->id_card?>"
                                data-toggle="modal" data-title="assa" data-target="#modalEditar"
                                data-tipo="<?= $column->tipo_card?>">
                                Editar</li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php endforeach;?>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <?php foreach($query->result() as $column):?>
                            <?php if($column->tipo_card == "card-front-transparente"):?>
                            <img class="modal-card-2"
                                src="<?= base_url('recs/assets/images/').$column->imagen_completa ?>">
                            <?php endif;?>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>  

             <!-- Modal -->
             <div class="modal fade" id="exampleModalCard3" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <?php foreach($query->result() as $column):?>
                            <?php if($column->tipo_card == "card-custom"):?>
                            <img class="modal-card-2"
                                src="<?= base_url('recs/assets/images/').$column->imagen_completa ?>">
                            <?php endif;?>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 col-card-carousel">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <?php $noCards = 0?>
                        <?php foreach($query->result() as $column):?>
                        <?php if($column->tipo_card == "card-carrousel"):?>
                        <?php $noCards++?>
                        <li data-target="#carouselExampleIndicators" data-slide-to="<?= $noCards - 1?>" class="<?php if($noCards == 1){echo "active";}?>"></li>
                        <?php endif;?>
                        <?php endforeach;?>
                    </ol>
                    <div class="carousel-inner">
                    <?php $noCards = 0?>
                        <?php foreach($query->result() as $column):?>
                        <?php if($column->tipo_card == "card-carrousel"):?>
                        <?php $noCards++?>
                        <div class="carousel-item <?php if($noCards == 1){echo "active";}?>">
                            <div class="card">
                                <img class="card-img-top img-card-carrousel-1" id="img-card-<?= $column->id_card?>"
                                    style="background-image: url('<?= base_url("recs/assets/images/").$column->nombre_imagen_fondo?>')"
                                    src="<?= base_url('recs/assets/images/').$column->nombre_imagen_frontal?>"
                                    alt="Card image cap">
                                <div class="card-body card-body-img">
                                    <h5 class="card-title card-title-home"><?= $column->titulo?></h5>
                                    <p class="card-text card-text-home"><?= $column->contenido?></p>
                                    <a href="<?= base_url('index.php/promociones/index')?>"
                                        class="btn boton-ver-home">Ver más</a>
                                </div>
                                <div class="div-opciones" style="display:none" id="opciones-<?= $column->id_card?>">
                                    <ul class="list-group list-group-horizontal-md list-group-opciones">
                                        <li class="list-group-item list-group-item-eliminar list-group-item-img"
                                            data-book-id="book-ed-<?= $column->id_card?>" id="ed-<?= $column->id_card?>"
                                            data-toggle="modal" data-title="assa" data-target="#modalEditar"
                                            data-tipo="<?= $column->tipo_card?>">
                                            Editar</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php endif;?>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="container-fluid" class="container-mapa">
    <h1 class="titulo-blanco">¡Encuentra la unidad más cercana a ti!</h1>
    <div class="accordion card-ubicaciones" id="accordionExample">
        <?php $nRows = 0?>
        <?php foreach($ubicaciones['consulta']->result() as $column):?>
            <?php $nRows++?>
            <div class="card card-ubi">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link btn-link-ubicacion" type="button" data-toggle="collapse"
                        data-target="#collapse<?php echo $column->id_ubicacion?>" aria-expanded="true" aria-controls="collapse<?php echo $column->id_ubicacion?>">
                        <?= $column->nombre_ubicacion ?>
                    </button>
                </h5>
            </div>

            <div id="collapse<?= $column->id_ubicacion?>" class="collapse <?php if($nRows == 1){echo "show";}?>" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dir"><?php echo $column->direccion?></p>
                    <p class="p-ubicacion-detalle p-ubicacion-detalle-tel">Tel: <?php echo $column->telefono?></p>
                    
                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dias"><?php echo $column->dias?></p>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
    <div id="map"></div>
</div>

<?php foreach($ubicaciones['consulta']->result() as $fila):?>
<script>
$('#collapse<?php echo $fila->id_ubicacion?>').on('show.bs.collapse', function() {
    // do something...
    iniciarMapa( <?php echo $fila->latitud ?> , <?php echo $fila->longitud ?> );
});
</script>
<?php endforeach;?>