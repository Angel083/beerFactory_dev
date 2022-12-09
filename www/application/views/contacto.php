<link rel="stylesheet" href="<?= base_url("recs/assets/css/contacto.css")?>">



<div class="container-fluid container-contacto">

    <div class="container_img_contacto">

        <div class="text-center">

            <img src="<?= base_url('recs/assets/images/Contacto/titulo_contacto.png') ?>"

                class="img-fluid img-text-menu" alt="Responsive image">

        </div>

    </div>



    <div class="tabs-submenu-cervezas w-tab-menu">

        <a class="tab-link w-inline-block w-tab-link w--current" data-w-tab="Tab 1" id="btn_trabajo">

            <div>Trabaja con nosotros</div>
            
        </a>

        <a class="cerveceria tab-link w-inline-block w-tab-link" data-w-tab="Tab 2" id="btn_contacto">

            <div>Comentarios y sugerencias</div>

        </a>

    </div>



    <div class="container-fluid img-unete img-empresa" id="img-unete">



    </div>



    <div class="container" id="container-trabajo">

        <form class="needs-validation" novalidate>

            <div class="form-row">

                <div class="col-md-12 mb-12 col-xl-12">

                    <label for="validationCustom01">Nombre</label>

                    <input type="text" class="form-control" id="nombre" value="" required>

                    <div class="valid-feedback">

                        Correcto!

                    </div>

                    <div class="invalid-feedback">

                        Por favor ingresa tu nombre completo.

                    </div>

                </div>

                <div class="col-sm-6 col-md-6 mb-3">

                    <label for="validationCustom02">Fecha de nacimiento</label>

                    <input class="form-control" type="date" value="2020-02-18" id="fecha_nacimiento" required>

                    <div class="valid-feedback">

                        Correcto!

                    </div>

                    <div class="invalid-feedback">

                        Porfavor ingrese su fecha de nacimiento.

                    </div>

                </div>

                <div class="col-sm-6 col-md-6 mb-3">

                    <label for="validationCustom03">Lugar de nacimiento</label>

                    <input type="text" class="form-control" id="lugar_nacimiento" value="" required>

                    <div class="valid-feedback">

                        Correcto!

                    </div>

                    <div class="invalid-feedback">

                        Porfavor ingrese su lugar de nacimiento.

                    </div>

                </div>

            </div>

            <div class="form-row">

                <div class="col-sm-6 col-md-6 mb-3">

                    <label for="validationCustom04">Sexo</label>

                    <select class="custom-select" id="sexo" required>

                        <option>Masculino</option>

                        <option>Femenino</option>v

                    </select>

                    <div class="invalid-feedback">

                        Porfavor seleccione su sexo.

                    </div>

                </div>

                <div class="col-sm-6 col-md-6 mb-3">

                    <label for="estado_civil">Estado Civil</label>

                    <select class="custom-select" id="estado_civil" required>

                        <option>Soltero(a)</option>

                        <option>Casado(a)</option>v

                    </select>

                    <div class="invalid-feedback">

                        Por favor seleccione estado civil.

                    </div>

                </div>

                <div class="col-sm-6 col-md-6 mb-3">

                    <label for="telefono_recultamiento">Telefono</label>

                    <input type="text" class="form-control" id="telefono_recultamiento" required>

                    <div class="invalid-feedback">

                        Porfavor ingrese su telefono.

                    </div>

                </div>

                <div class="col-sm-6 col-md-6 mb-3">

                    <label for="email_reclutamiento">Email</label>

                    <input type="text" class="form-control" id="email_reclutamiento" required>

                    <div class="invalid-feedback">

                        Por favor ingrese su correo electronico.

                    </div>

                </div>

                <div class="col-sm-6 col-md-6 mb-3">

                    <label for="ultimo_grado_estudio">Ultimo grado de ESTUDIO</label>

                    <select class="custom-select" id="ultimo_grado_estudio" required>

                        <option>Profesional terminada</option>

                        <option>Carrera trunca</option>

                        <option>Carrera trunca/Prepa terminada</option>

                        <option>Carrera trunca/Secundaria terminada</option>

                        <option>Primaria terminada</option>

                        <option>Sin estudios</option>

                    </select>

                    <div class="invalid-feedback">

                        Por favor indique su grado de estudios.

                    </div>

                </div>

                <div class="col-sm-6 col-md-6 mb-3">

                    <label for="estudia_actualmente">¿Estudias actualmente?</label>

                    <select class="custom-select" id="estudia_actualmente" required>

                        <option>Si</option>

                        <option>No</option>

                    </select>

                    <div class="invalid-feedback">

                        Porfavor indicar si estudia actualmente.

                    </div>

                </div>

                <div class="col-sm-6 col-md-6 mb-3">

                    <label for="trabaja_actualmente">¿Trabajas actualmente</label>

                    <select class="custom-select" id="trabaja_actualmente" required>

                        <option>Si</option>

                        <option>No</option>

                    </select>

                    <div class="invalid-feedback">

                        Por favor indicar si trabaja actualmente.

                    </div>

                </div>

                <div class="col-sm-6 col-md-6 mb-3">

                    <label for="tipo_empleo">Tipo de empleo</label>

                    <select class="custom-select" id="tipo_empleo" required>

                        <option>Medio tiempo</option>

                        <option>Tiempo completo</option>

                    </select>

                    <div class="invalid-feedback">

                        Porfavor indicar el tipo de empleo.

                    </div>

                </div>

            </div>

            <div class="mb-3">

                <label for="descripcion">¿Como te autodescribes?</label>

                <textarea class="form-control" id="descripcion" placeholder="" required></textarea>

                <div class="invalid-feedback">

                    Por favor escribe una breve descripción.

                </div>

            </div>

            <div class="form-group">

                <div class="form-check">

                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>

                    <label class="form-check-label" for="invalidCheck">

                        He leído y estoy de acuerdo con el aviso de privacidad de reclutamiento. <a target="_blank"

                            href="<?= base_url('recs/assets/pdf/Aviso de Privacidad Integral para Reclutamiento BFF.pdf') ?>">Leer

                            Aviso de Privacidad Integral para reclutamiento BF&F</a>

                    </label>

                    <div class="invalid-feedback">

                        Debes de aceptar el acuerdo de privacidad.

                    </div>

                </div>

            </div>

            <button class="btn btnEnviar" type="submit">Enviar</button>

        </form>

    </div>





    <!--Contacto-->

    <div class="container" id="container-contacto">

        <form class="needs-validation-contacto" novalidate>

            <div class="form-row">

                <div class="col-md-12 mb-12 col-xl-12">

                    <label for="nombre_contacto">Nombre</label>

                    <input type="text" class="form-control" id="nombre_contacto" value="" required>

                    <div class="valid-feedback">

                        Correcto!

                    </div>

                    <div class="invalid-feedback">

                        Por favor ingresa tu nombre.

                    </div>

                </div>

                <div class="col-sm-6 col-md-6 mb-3">

                    <label for="telefono_contacto">Telefono</label>

                    <input type="text" class="form-control" id="telefono_contacto" value="" required>

                    <div class="valid-feedback">

                        Correcto!

                    </div>

                    <div class="invalid-feedback">

                        Porfavor ingresa su telefono.

                    </div>

                </div>

                <div class="col-sm-6 col-md-6 mb-3">

                    <label for="email_contacto">Email</label>

                    <input type="text" class="form-control" id="email_contacto" value="" required>

                    <div class="valid-feedback">

                        Correcto!

                    </div>

                    <div class="invalid-feedback">

                        Porfavor ingrese su correo electronico.

                    </div>

                </div>

            </div>

            <div class="form-row">

                <div class="col-sm-6 col-md-6 mb-3">

                    <label for="edad">Edad</label>

                    <input type="text" class="form-control" id="edad" required>

                    <div class="invalid-feedback">

                        Porfavor ingrese su edad.

                    </div>

                </div>

                <div class="col-sm-6 col-md-6 mb-3">

                    <label for="sucursales">Sucursal</label>

                    <select class="custom-select" id="sucursales" required>
                        <?php foreach($consulta->result() as $fila):?>
                            <option><?php echo $fila->nombre_ubicacion?></option>
                        <?php endforeach;?>
                    </select>

                    <div class="invalid-feedback">

                        Porfavor indicar la sucursal

                    </div>

                </div>

            </div>

            <div class="form-row">



                <div class="col-sm-12 col-md-12 mb-3">

                    <label for="comentarios">Comentarios</label>

                    <select class="custom-select" id="comentarios" required>

                        <option>Alimentos</option>

                        <option>Servicios</option>

                        <option>Cervezas</option>

                    </select>

                    <div class="invalid-feedback">

                        Porfavor indique una opción.

                    </div>

                </div>

            </div>

            <div class="mb-3">

                <textarea class="form-control" id="descripcion_contacto" placeholder="" required></textarea>

                <div class="invalid-feedback">

                    Porfavor agregue un comentario

                </div>

            </div>

            <div class="form-group">

                <div class="form-check">

                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>

                    <label class="form-check-label" for="invalidCheck">

                        Leer Aviso de Privacidad Integral para Solicitud de Documentos BF&F <a target="_blank"

                            href="<?= base_url('recs/assets/pdf/Aviso de Privacidad Integral para Solicitud de Documentos BFF.pdf') ?>">

                            Leer Aviso de Privacidad Integral para Solicitud de Documentos BF&F</a>

                    </label>

                    <div class="invalid-feedback">

                        Debes de aceptar el acuerdo de privacidad.

                    </div>

                </div>

            </div>

            <button class="btn btnEnviar" type="submit">Enviar</button>

        </form>



        <script>

        // Example starter JavaScript for disabling form submissions if there are invalid fields

        (function() {

            'use strict';

            window.addEventListener('load', function() {

                // Fetch all the forms we want to apply custom Bootstrap validation styles to

                var forms = document.getElementsByClassName('needs-validation-contacto');

                // Loop over them and prevent submission

                var validation = Array.prototype.filter.call(forms, function(form) {

                    form.addEventListener('submit', function(event) {

                        if (form.checkValidity() === false) {

                            event.preventDefault();

                            event.stopPropagation();

                        }else{
                            enviarEmailContacto();
                        }
                        event.preventDefault();
                        event.stopPropagation();
                        form.classList.add('was-validated');

                    }, false);

                });

            }, false);

        })();

        </script>

    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="modalSend" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="text-center">
            <p style="text-align: center" id="message"></p>
            <img id="loading" width="50" heigth="40" src="<?= base_url('recs/assets/images/loading.svg')?>" alt="">
            <img id="sucess" width="80" heigth="80" src="<?= base_url('recs/assets/images/succesfull.gif')?>" alt="" style="display:none">
        </div>
      </div>
  </div>
</div>


<!-- load jQuery 1.10.2 -->
<script src="<?= base_url('recs/assets/js/jquery-3.4.1.min.js') ?>"></script>
<script type="text/javascript">
//var jQuery_3_4_1 = $.noConflict(true);
//alert(jQuery_3_4_1().jquery)
</script>
<script src="<?= base_url('recs/assets/js/contacto.js') ?>"></script>

<script>

        // Example starter JavaScript for disabling form submissions if there are invalid fields

        (function() {

            'use strict';

            window.addEventListener('load', function() {

                // Fetch all the forms we want to apply custom Bootstrap validation styles to

                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission

                var validation = Array.prototype.filter.call(forms, function(form) {

                    form.addEventListener('submit', function(event) {

                        if (form.checkValidity() === false) {

                            event.preventDefault();

                            event.stopPropagation();

                        }else{
                            enviarEmailRecultamiento();
                        }
                        form.classList.add('was-validated');
                        event.preventDefault();
                            event.stopPropagation();
                    }, false);

                });

            }, false);

        })();

        </script>
<script>
    // Identificar clientes con interés en Proceso de cerveza 
    bk_doJSTag(93936, 1); // Beer Factory
</script>