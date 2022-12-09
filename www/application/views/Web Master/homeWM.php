<link rel="stylesheet" href="<?= base_url("recs/assets/css/login.css")?>">
<script>var login = true;</script>




<div class="container h-100">

    <div class="d-flex justify-content-center h-100">

        <div class="user_card">

            <div class="d-flex justify-content-center">

                <div class="brand_logo_container">

                    <img src="<?= base_url("recs/assets/images/Beerfactory-Icon-128-blackpx.ico")?>" class="brand_logo"

                        alt="Logo">

                </div>

            </div>

            <div class="d-flex justify-content-center form_container">

                <form class="needs-validation" novalidate method="post">

                    <div class="alert alert-danger" role="alert" id="alert-login">

                        This is a danger alert—check it out!

                    </div>

                    <div class="input-group mb-3">

                        <div class="input-group-append">

                            <span class="input-group-text"><img class="ico-login"

                                    src="<?= base_url("recs/assets/images/account (2).png")?>" alt=""></span>

                        </div>

                        <input type="text" id="user" name="user" class="form-control input_user" value=""

                            placeholder="USUARIO" required>

                        <div class="invalid-feedback">

                            El campo no puede ir vacio.

                        </div>

                    </div>

                    <div class="input-group mb-2">

                        <div class="input-group-append">

                            <span class="input-group-text"><img class="ico-login"

                                    src="<?= base_url("recs/assets/images/key.png")?>" alt=""></span>

                        </div>

                        <input type="password" id="password" name="password" class="form-control input_pass" value=""

							placeholder="CONTRASEÑA" required><br>

							<div class="invalid-feedback">

                            El campo no puede ir vacio.

                        </div>

                    </div>

                    <div class="d-flex justify-content-center mt-3 login_container">

                        <button type="button" name="button" class="btn login_btn" id="btnLogin">ENTRAR</button>

                    </div>
                    
                    <div id="content-message" style="display:none">

                        <img width="50" heigth="40" src="<?= base_url("recs/assets/images/loading.svg") ?>" alt="" class="img-loading">

                        <!--<p id="txtMessage">Eliminando..</p>-->

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>





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

                }

                form.classList.add('was-validated');

            }, false);

        });

    }, false);

})();

</script>