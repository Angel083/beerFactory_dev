<link rel="stylesheet" type="text/css" href="<?= base_url('recs/assets/css/restaurantes.css') ?>" />

<div id="container-fluid" class="container-mapa">

    <div class="accordion card-ubicaciones" id="accordionExample">

        <?php foreach ($consulta->result() as $fila) : ?>

            <div class="card card-ubi">

                <div class="card-header" id="headingOne">

                    <h5 class="mb-0">

                        <button class="btn btn-link btn-link-ubicacion btn-link-ubicacion-admin" type="button" data-toggle="collapse" data-target="#collapse<?php echo
                                                                                                                                                            $fila->id_ubicacion ?>" aria-expanded="true" aria-controls="collapse<?php echo
                                                                                                                                                                                                                                $fila->id_ubicacion ?>">

                            <?php echo $fila->nombre_ubicacion ?>

                        </button>



                    </h5>

                </div>



                <div id="collapse<?php echo $fila->id_ubicacion ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">

                    <div class="card-body">

                        <p class="p-ubicacion-detalle p-ubicacion-detalle-dir">

                            <?php echo $fila->direccion ?></p><br>

                        <p class="p-ubicacion-detalle p-ubicacion-detalle-tel">Tel: <?php echo $fila->telefono ?></p>

                        <br>

                        <p class="p-ubicacion-detalle p-ubicacion-detalle-dias"><?php echo $fila->dias ?></p>

                        <!--<p class="p-ubicacion-detalle p-ubicacion-detalle-dias">Viernes y sábado: 12:00 – 02:00</p>

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dias">Domingo: 12:00 – 22:00</p>-->

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

        <!--<div class="card card-ubi">

            <div class="card-header" id="headingTwo">

                <h5 class="mb-0">

                    <button class="btn btn-link btn-link-ubicacion collapsed" type="button" data-toggle="collapse"

                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                        Mundo E

                    </button>

                </h5>

            </div>

            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">

                <div class="card-body">

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dir">

                        Mundo E, M. Avíla Camacho

                        1007 local 19A, San Lucas

                        Tepetlacalco, 54056 Tlalnepantla, Méx.</p>

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-tel">Tel: 55 53.66.96.51</p>



                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dias">Lunes a jueves: 12:00 – 00:00</p>

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dias">Viernes y sábado: 12:00 – 02:00</p>

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dias">Domingo: 12:00 – 22:00</p>

                </div>

            </div>

        </div>



        <div class="card card-ubi">

            <div class="card-header" id="headingThree">

                <h5 class="mb-0">

                    <button class="btn btn-link btn-link-ubicacion collapsed" type="button" data-toggle="collapse"

                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

                        Santa FE

                    </button>

                </h5>

            </div>

            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">

                <div class="card-body">

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dir">

                        Centro Comercial Santa Fe,

                        Av. Vasco de Quiroga 3800,

                        Lomas de Santa Fe, Cuajimalpa de Morelos,

                        01210 Ciudad de México, D.F.</p>

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-tel">Tel: 55 52.57.11.19</p>



                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dias">Lunes a jueves: 12:00 – 00:00</p>

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dias">Viernes y sábado: 12:00 – 02:00</p>

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dias">Domingo: 12:00 – 22:00</p>

                </div>

            </div>

        </div>



        <div class="card card-ubi">

            <div class="card-header" id="headingFour">

                <h5 class="mb-0">

                    <button class="btn btn-link btn-link-ubicacion collapsed" type="button" data-toggle="collapse"

                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">

                        Lindavista

                    </button>

                </h5>

            </div>

            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">

                <div class="card-body">

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dir">

                        Av. Insurgentes Norte 1812,

                        Gustavo A. Madero, Lindavista,

                        07300 Ciudad de México, D.F..</p>

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-tel">Tel: 55 55.77.37.11</p>



                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dias">Lunes a jueves: 12:00 – 00:00</p>

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dias">Viernes y sábado: 12:00 – 02:00</p>

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dias">Domingo: 12:00 – 22:00</p>

                </div>

            </div>

        </div>



        <div class="card card-ubi">

            <div class="card-header" id="headingFive">

                <h5 class="mb-0">

                    <button class="btn btn-link btn-link-ubicacion collapsed" type="button" data-toggle="collapse"

                        data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">

                        Tezontle

                    </button>

                </h5>

            </div>

            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">

                <div class="card-body">

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dir">

                        Av. Canal de Tezontle 1512,

                        Área Federal Central de Abastos,

                        Ciudad de México, CDMX.

                    </p>

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-tel">Tel: 55 91.29.01.72</p>



                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dias">Lunes a jueves y domingo: 12:00 – 23:00</p>

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dias">Viernes y sábado: 12:00 – 01:00</p>

                </div>

            </div>

        </div>



        <div class="card card-ubi">

            <div class="card-header" id="headingSix">

                <h5 class="mb-0">

                    <button class="btn btn-link btn-link-ubicacion collapsed" type="button" data-toggle="collapse"

                        data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">

                        Terraza coapa

                    </button>

                </h5>

            </div>

            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">

                <div class="card-body">

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dir">

                        Calz Acoxpa 610, Coapa, Equipamiento Plaza Coapa,

                        14390 Ciudad de México, CDMX

                    </p>

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-tel">Tel: 55 59.10.39.82</p>



                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dias">Lunes a jueves: 12:00 – 00:00</p>

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dias">Viernes y sábado: 12:00 – 02:00</p>

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dias">Domingo: 12:00 – 22:00</p>

                </div>

            </div>

        </div>



        <div class="card card-ubi">

            <div class="card-header" id="headingSeven">

                <h5 class="mb-0">

                    <button class="btn btn-link btn-link-ubicacion collapsed" type="button" data-toggle="collapse"

                        data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">

                        Los Cabos

                    </button>

                </h5>

            </div>

            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">

                <div class="card-body">

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dir">

                        Beer Factory Los Cabos

                        Carr. Transpeninsular Km 43.5, 23420 San José del Cabo, B.C.S.



                    </p>

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-tel">Tel. 62.410.41.913</p>



                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dias">Lunes a jueves: 08:00 – 22:00</p>

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dias">Viernes y sábado: 08:00 – 22:00</p>

                    <p class="p-ubicacion-detalle p-ubicacion-detalle-dias">Domingo: 08:00 – 22:00</p>

                </div>

            </div>

        </div>-->

    </div>

    <div id="map"></div>

</div>


<?php foreach ($consulta->result() as $fila) : ?>

    <script>
        $('#collapse<?php echo $fila->id_ubicacion ?>').on('show.bs.collapse', function() {

            // do something...

            iniciarMapa(<?php echo $fila->latitud ?>, <?php echo $fila->longitud ?>);

        });
    </script>

<?php endforeach; ?>
<script>
    // Clientes con interés en buscar la ubicación de una sucursal
    bk_doJSTag(93936, 1);

    // Clientes con interés en las diferentes sucursales
    var cards = document.querySelectorAll('.card-header');
    cards.forEach(element => {
        console.log(typeof element);
        let card = element.textContent.trim();
        element.addEventListener('click', function() {
            switch (card) {
                case "Cuicuilco":
                    bk_addPageCtx('BF_BotonSucursales', 'SucursalCuicuilco'); //Clave y Valor
                    bk_doJSTag(93936, 1); // Beer Factory
                    // Tag infinity
                    // // Cliente de click en el boton de Maridaje
                    var testMutation1 = function(msg) {
                        //key               value
                        msg.payload["BF_BotonSucursales"] = "SucursalCuicuilco";
                    };
                    ORA.analytics.addMutation("myuniqueid", testMutation1);
                    ORA.click()
                    break;
                case "Mundo E":
                    bk_addPageCtx('BF_BotonSucursales', 'SucursalMundoE'); //Clave y Valor
                    bk_doJSTag(93936, 1); // Beer Factory
                    // Tag infinity
                    // // Cliente de click en el boton de Maridaje
                    var testMutation1 = function(msg) {
                        //key               value
                        msg.payload["BF_BotonSucursales"] = "SucursalMundoE";
                    };
                    ORA.analytics.addMutation("myuniqueid", testMutation1);
                    ORA.click()
                    break;
                case "Santa Fe":
                    bk_addPageCtx('BF_BotonSucursales', 'SucursalSantaFe'); //Clave y Valor
                    bk_doJSTag(93936, 1); // Beer Factory
                    // Tag infinity
                    // // Cliente de click en el boton de Maridaje
                    var testMutation1 = function(msg) {
                        //key               value
                        msg.payload["BF_BotonSucursales"] = "SucursalSantaFe";
                    };
                    ORA.analytics.addMutation("myuniqueid", testMutation1);
                    ORA.click()
                    break;
                case "Lindavista":
                    bk_addPageCtx('BF_BotonSucursales', 'SucursalLindaVista'); //Clave y Valor
                    bk_doJSTag(93936, 1); // Beer Factory
                    // Tag infinity
                    // // Cliente de click en el boton de Maridaje
                    var testMutation1 = function(msg) {
                        //key               value
                        msg.payload["BF_BotonSucursales"] = "SucursalLindaVista";
                    };
                    ORA.analytics.addMutation("myuniqueid", testMutation1);
                    ORA.click()
                    break;
                case "Tezontle":
                    bk_addPageCtx('BF_BotonSucursales', 'SucursalTezontle'); //Clave y Valor
                    bk_doJSTag(93936, 1); // Beer Factory
                    // Tag infinity
                    // // Cliente de click en el boton de Maridaje
                    var testMutation1 = function(msg) {
                        //key               value
                        msg.payload["BF_BotonSucursales"] = "SucursalTezontle";
                    };
                    ORA.analytics.addMutation("myuniqueid", testMutation1);
                    ORA.click()
                    break;
                case "Terraza Coapa":
                    bk_addPageCtx('BF_BotonSucursales', 'SucursalTerrazaCoapa'); //Clave y Valor
                    bk_doJSTag(93936, 1); // Beer Factory
                    // Tag infinity
                    // // Cliente de click en el boton de Maridaje
                    var testMutation1 = function(msg) {
                        //key               value
                        msg.payload["BF_BotonSucursales"] = "SucursalTerrazaCoapa";
                    };
                    ORA.analytics.addMutation("myuniqueid", testMutation1);
                    ORA.click()
                    break;
                default:
                    break;
            }
        })
    });
</script>