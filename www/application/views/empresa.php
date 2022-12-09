<link rel="stylesheet" href="<?= base_url("recs/assets/css/empresa.css")?>">

<div class="container-fluid" id="container-empresas">
    <div class="tabs-submenu-cervezas w-tab-menu">
        <a class="tab-link w-inline-block w-tab-link w--current" data-w-tab="Tab 1" id="btn_nosotros">
            <div>Nosotros</div>
        </a>
        <a class="cerveceria tab-link w-inline-block w-tab-link" data-w-tab="Tab 2" id="btn_nuestra_historia">
            <div>Nuestra historia</div>
        </a>
    </div>

    <div class="container-nosotros" id="container-empresa">
        <div class="container-fluid img-empresa" id="img-empresa">

        </div>

        <div class="container container-nosotros container-nostros-info">
            <div class="row">
                <div class="col-12">
                    <h1 class="titulo-nosotros">Nosotros</h1>
                    <p class="texto-nosotros-2">
                        Somos BeerFactory, cerveceros de profesión y también de corazón. En México, somos pioneros en la
                        creación "Brewpubs", termino acuñado en Europa durante los años 70s que se refiere a Restaurante
                        o Pub que tiene la capacidad de producir su propia cerveza mediante procesos artesanales.
                    </p>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <h1 class="titulo-nosotros">Misión</h1>
                    <h2 class="subitulo-nosotros">Pasión Cervecera</h2>
                    <p class="texto-nosotros-2">
                        Vivir y compartir la experiencia de una fábrica de cerveza artesanal premium, ofreciendo
                        platillos excepcionales de la más alta calidad a través de cerveceros de corazón y profesión,
                        provocando un estilo de vida único.
                    </p>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-lg-6 col-xl-6">
                    <h1 class="titulo-nosotros">Visión</h1>
                    <h2 class="subitulo-nosotros">Referencia Nacional</h2>
                    <p class="texto-nosotros-2">
                        Ser la referencia de la cerveza artesanal en México.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="container-historia">
        <img src="<?= base_url('recs/assets/images/Empresa/timeline.png') ?>" class="img-fluid img-historia" alt="Responsive image">
    </div>
</div>

<script src="<?= base_url('recs/assets/js/empresa.js') ?>"></script>