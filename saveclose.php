<?php include('assets/header.php') ?>

<section id="contenido">
    <div class="container">
        <div class="row contenido">
            <div class="central">
                <div class="row">
                    <div class="col-4 saveandclose">
                        <img src="assets/image/icono-01-1.svg" alt="icono-01">
                    </div>
                    <div class="col-8 saveandclose">
                        <h3>DIAGNÓSTICO INICIAL
                            <br>DE SOSTENIBILIDAD
                        </h3>
                    </div>
                    <div class="col-12 line-central">
                        <hr>
                    </div>
                    <div class="col-12 texto-out">
                        <h3>Te enviaremos un correo con el acceso a tu formulario en proceso, para que puedas completarlo más adelante.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('assets/footer.php') ?>
<?php include('assets/get-answers.php'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $.ajax({
            url: 'assets/mail/send_mail.php',
            type: 'post',
            data: {
                id: '<?php echo $_GET["eid"] ?>',
                email: '<?php echo $preguntas["email"] ?>'
            },
            success: function(response) {
                var data = JSON.parse(response);
                if (data.status == 1) {

                } else {

                }
            },
            error: function(response) {
                alert(response);
            }
        });
    });
</script>