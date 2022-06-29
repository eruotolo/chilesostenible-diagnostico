<?php include('assets/header.php') ?>
<?php include('assets/check-eid.php'); ?>
<?php include('assets/get-answers.php'); ?>

<section id="contenido">
    <div class="container">
        <div class="row contenido">
            <div class="central-01">
                <div class="row">
                    <div class="col-6 cont-subtitulos">
                        <div class="titulo-subtitulo">
                            <h3>SOCIAL - PERSONAS</h3>
                            <hr>
                            <h5>Desarrollo Organizacional</h5>
                        </div>

                        <div class="auspician">
                            <img src="assets/image/logo-auspician.svg" alt="sponsors">
                        </div>
                    </div>
                    <div class="col-6 preguntas">
                        <div class="pregunta-cond-01">
                            <h6>¿Cuenta con un modelo de gestión del desempeño que permita establecer un plan de acompañamiento y desarrollo de carrera?</h6>
                            <div class="cont-condicional">
                                <form action="" method="post" name="">
                                    <div class="check-box" id="seeAnotherField">
                                        <input class="" name="check" type="checkbox" value="1" id="chechkbox-1" onclick="onlyOne(this)">
                                        <label class="" for="chechkbox-1">Si</label>
                                    </div>
                                    <div class="check-box" id="seeAnotherField-1">
                                        <input class="" name="check" type="checkbox" value="2" id="chechkbox-2" onclick="onlyOne(this)">
                                        <label class="" for="chechkbox-2">No</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="pregunta-cond-01" id="otherFieldDiv" style="display: none;">
                            <h6>¿Capacita y promueve formalmente el uso de las evaluaciones de desempeño y la retroalimentación por parte de la Jefaturas y Gerentes con sus equipos?</h6>
                            <div class="cont-condicional">
                                <form action="" method=" post">
                                    <div class="check-box">
                                        <input class="" name="checkSecond" type="checkbox" value="3" id="chechkbox-3" onclick="onlyOneSecond(this)">
                                        <label class="" for="chechkbox-3">Si</label>
                                    </div>
                                    <div class="check-box">
                                        <input class="" name="checkSecond" type="checkbox" value="4" id="chechkbox-4" onclick="onlyOneSecond(this)">
                                        <label class="" for="chechkbox-4">No</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="barra-progress">
                <div class="row">
                    <div class="col-12 text-center barra">
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 38.10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>PAG 16/42</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="botonera">
    <?php include('assets/botones.php') ?>
</section>

<?php include('assets/footer.php') ?>
<?php include('assets/footer.php') ?>
<script type="text/javascript">
    $(document).ready(function() {
        var nro_preg = 16;
        var valid = false;

        $('#atras').click(function() {
            var lastpage = nro_preg - 1;
            window.location.href = "pregunta-" + addleadingZero(lastpage) + ".php?eid=" + '<?php echo $_GET["eid"] ?>';
        })

        function addleadingZero(number) {
            return ('0' + number).slice(-2);
        }

        <?php
        if (isset($preguntas)) {
            $preg = 13;
            $pind1 = "p$preg-1";
            $pind2 = "p$preg-2";
        ?>
            $("#chechkbox-1").prop('checked', false);
            $("#chechkbox-2").prop('checked', false);
            $("#chechkbox-3").prop('checked', false);
            $("#chechkbox-4").prop('checked', false);

            if ('<?php echo $preguntas[$pind1] ?>' == 'Si') {
                $("#chechkbox-1").prop('checked', true);
                $('#otherFieldDiv').show();
            } else if ('<?php echo $preguntas[$pind1] ?>' == 'No') {
                $("#chechkbox-2").prop('checked', true);
            }

            if ('<?php echo $preguntas[$pind2] ?>' == 'Si') {
                $("#chechkbox-3").prop('checked', true);
            } else if ('<?php echo $preguntas[$pind2] ?>' == 'No') {
                $("#chechkbox-4").prop('checked', true);
            }
        <?php
        }
        ?>

        $('#chechkbox-1').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p13-1',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-2').change(function() {
            var val;
            if (this.checked) {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p13-1',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-3').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p13-2',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-4').change(function() {
            var val;
            if (this.checked) {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p13-2',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#continuar').click(function() {
            var chechkbox_1 = $('#chechkbox-1').is(":checked");
            var chechkbox_2 = $('#chechkbox-2').is(":checked");
            var chechkbox_3 = $('#chechkbox-3').is(":checked");
            var chechkbox_4 = $('#chechkbox-4').is(":checked");
            valid = true;
            if (!chechkbox_1 && !chechkbox_2) {
                alert("Ingrese Opcion");
                valid = false;
            }
            if (chechkbox_1) {
                if (!chechkbox_3 && !chechkbox_4) {
                    alert("Ingrese Opcion");
                    valid = false;
                }
            }
            if (valid) {
                var nextpage = nro_preg + 1;
                window.location.href = "pregunta-" + addleadingZero(nextpage) + ".php?eid=<?php echo $_GET['eid'] ?>";
            } else {
                return false;
            }
        })

    });
</script>