<div class="container-fluid footer">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3 col-footer">
            <div class="container-fluid">
                <p class="texto-footer">BEER FACTORY © 2016</p>
                <a class="link-footer w--current" href="<?= base_url("index.php/empresa/index") ?>">Empresa</a>
                <a class="link-footer" href="https://efactura.beerfactory.com.mx:13443">Facturación</a>
                <a class="link-footer" href="<?= base_url("index.php/privacidad/index") ?>">Política de privacidad</a>
                <a class="link-footer" href="<?= base_url("index.php/mapa_sitio/index") ?>">Mapa de sitio</a>
                <a class="link-footer" href="<?= base_url("index.php/calendario/index") ?>">Calendario</a>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 col-secciones">
            <div class="container-fluid">
                <p class="texto-footer">Secciones</p>
                <div class="row">
                    <div class="col-6">
                        <a class="link-footer mitad" href="<?= base_url("index.php/historia/index") ?>">Nosotros</a>
                        <a class="link-footer mitad" href="<?= base_url("MenuWeb") ?>">Menú</a>
                        <a class="link-footer mitad" href="<?= base_url("index.php/promociones/index") ?>">Promociones</a>
                        <!--<a class="link-footer mitad" href="/blog">Mr. Hops</a>-->
                        <a class="link-footer mitad" href="<?= base_url("index.php/contacto/index") ?>">Contacto</a>
                    </div>

                    <div class="col-6">
                        <a class="link-footer mitad" href="<?= base_url("index.php/cervezas/index") ?>">Cervezas</a>
                        <a class="link-footer mitad" href="<?= base_url("index.php/cerveceria/index") ?>">Cervecería</a>
                        <a class="link-footer mitad" href="<?= base_url("index.php/restaurantes/index") ?>">Ubicaciones</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm col-md-2 col-footer-redes">
            <div class="container-fluid">
                <p class="texto-footer">REDES SOCIALES</p>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-links-redes-footer">
                    <div class="btn-group group-redes-footer" role="group" aria-label="Basic example">
                        <a href="https://www.facebook.com/beerfactorymx" target="_blank" class="facebook_link-footer">Facebook</a>
                        <a href="https://twitter.com/beerfactorymx" target="_blank" class="twitter_link-footer">Twitter</a>
                        <a href="https://www.instagram.com/beerfactorymx/   " target="_blank" class="instagram_link-footer">Instagram</a>
                        <a href="https://www.youtube.com/channel/UCWimavr6PdN191nEbMn0kYg?&ab_channel=BeerFactoryMexico" target="_blank" class="youtube_link-footer">Youtube</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm col-footer-redes">
            <div class="container-fluid">
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-links-redes-footer">
                    <a href="https://www.beerfactory.com.mx/recs/assets/pdf/Aviso%20de%20Privacidad%20Beer%20Factory%20&%20Food%20para%20Cientes%20Dic.pdf" target="_blank">
                        <img src="https://www.beerfactory.com.mx/recs/assets/images/Privacidad/Aviso%20Privacidad.png" alt="Card image cap" style="
    width: 273px;
">

                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Google Tag Manager (noscript) -->

<noscript><iframe src=" https://www.googletagmanager.com/ns.html?id=GTM-TJMW22M" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->
</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="<?= base_url('recs/assets/js/popper.min.js') ?>"></script>
<script src="<?= base_url('recs/assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('recs/assets/js/scriptMapa.js') ?>"></script>
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>-->
<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCT2_SR9mvf823PWjY6qz97IaNpQ3w4nh8&amp;callback=iniciarMap">
</script>
<script type="text/javascript">
    bk_allow_multiple_calls=true;
    bk_use_multiple_iframes=true;

    // Identificar clientes con interes en dirigirse a FB
    let facebook_link           = document.querySelector(".facebook_link");
    let facebook_link_footer    = document.querySelector(".facebook_link-footer");
    let instagram_link          = document.querySelector(".instagram_link");
    let instagram_link_footer   = document.querySelector(".instagram_link-footer");
    facebook_link.addEventListener("click" , () => {
        bk_addPageCtx('BF_BotonRRSS', 'Facebook'); //Clave y Valor para una regla personalizada
        bk_doJSTag(93936, 1);
    })
    facebook_link_footer.addEventListener("click" , () => {
        bk_addPageCtx('BF_BotonRRSS', 'Facebook'); //Clave y Valor para una regla personalizada
        bk_doJSTag(93936, 1);
    })
    instagram_link.addEventListener("click" , () => {
        bk_addPageCtx('BF_BotonRRSS', 'Instagram'); //Clave y Valor para una regla personalizada
        bk_doJSTag(93936, 1);
    })
    instagram_link_footer.addEventListener("click" , () => {
        bk_addPageCtx('BF_BotonRRSS', 'Instagram'); //Clave y Valor para una regla personalizada
        bk_doJSTag(93936, 1);
    })

    // Identificar clientes con interes en dirigirse a IG

</script>

</html>