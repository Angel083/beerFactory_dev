<link rel="stylesheet" href="<?= base_url("recs/assets/css/nosotros.css")?>">
<meta name="keywords" content="Toks,Restaurante,Desayunos,Comida,Cenas,Café,Vips,Calidad,Postre,Pan dulce" />
<div class="container-fluid " id="">

<?php foreach($query->result() as $column):?>
 
    <div class="row">
        <div class="col-md-12 container-historia">
        <img src="<?= base_url("recs/assets/images/Nosotros/".$column->nombre_imagen)?>" class="img-fluid img_nosotros" alt="Responsive image">
        </div>
    </div>
    
<?php endforeach;?>
<div class="row contenedor-grupo">
    <div class="col-md-2 demo"></div>
    <div class="col-md-3 demo2" id="col1">
        <img src="<?= base_url("recs/assets/images/Nosotros/bf_logo.png")?>" class="img-fluid " id='logo-grupo' alt="Responsive image">
    </div>
    <div class="col-md-3 demo2" id="col2">
        <h2 id="titular"> forma parte de </h2> 
    </div>
    <div class="col-md-3 demo2" id="col3">
        <img src="<?= base_url("recs/assets/images/Nosotros/grupo.png")?>" class="img-fluid " id='logo-grupo' alt="Responsive image">
    </div>
    <div class="col-md-2 demo"></div>
</div>
<div class="row contenedor-grupo2">
    <div class="col-md-3 demo"></div>
    <div class="col-md-6">
        <div class="contenedor-text">
            <a href="https://gruporestauranterogigante.com.mx/" id="enlace"> Haz click aquí para conocer más.</a>
        </div>
    </div>
    <div class="col-md-3 demo2"></div>
</div>
</div>