<?php include('assets/header.php') ?>

<section id="contenido">
    <div class="container">
        <div class="row contenido">
            <div class="central-01">
                <div class="row align-items-center">
                    <div class="col-6 cont-subtitulos">
                        <div class="titulo-subtitulo">
                            <h3>DATOS GENERALES</h3>
                            <hr>
                        </div>
                        <div class="auspician">
                            <img src="assets/image/logo-auspician.svg" alt="sponsors">
                        </div>
                    </div>
                    <div class="col-6 preguntas">
                        <form method="post" action="checklogin.php" name="signin-form" class="login-form">

                            <div class="form-element form-login">
                                <label>Usuario</label>
                                <input type="text" name="myusername" pattern="[a-zA-Z0-9]+" required />
                            </div>
                            <div class="form-element form-login">
                                <label>Contraseña</label>
                                <input type="password" name="mypassword" required />
                            </div>
                            <?php
                            if ($_GET['error'] == 'y') {
                                echo "<h4>Usuario incorrecto</h4>";
                            }
                            ?>
                            <button type="submit" name="login" value="login" class="btn-amarillo btn-ingresar">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('assets/footer.php') ?>