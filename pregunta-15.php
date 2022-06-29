<?php include('assets/header.php') ?>
<?php include('assets/check-eid.php'); ?>
<?php include('assets/get-answers.php'); ?>

<section id="contenido">
    <div class="container">
        <div class="row contenido">
            <div class="central-01">
                <div class="row ">
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
                        <h6>¿Mide el clima laboral de forma anual en su empresa?</h6>
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
                        <div class="pregunta-cond-01 cont-checkbox" id="otherFieldDiv" style="display: none; overflow: scroll; height: 40vh; width: 100%;">
                            <h6>¿Gestiona de alguna manera políticas o programas según los resultados de la Encuesta de Clima?</h6>
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
                            <h6>¿Comparte los resultados de la encuesta de clima con sus trabajadores?</h6>
                            <div class="cont-condicional">
                                <form action="" method=" post">
                                    <div class="check-box">
                                        <input class="" name="checkThird" type="checkbox" value="5" id="chechkbox-5" onclick="onlyOneThrid(this)">
                                        <label class="" for="chechkbox-5">Si</label>
                                    </div>
                                    <div class="check-box">
                                        <input class="" name="checkThird" type="checkbox" value="6" id="chechkbox-6" onclick="onlyOneThrid(this)">
                                        <label class="" for="chechkbox-6">No</label>
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
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 35.71%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>PAG 15/42</p>
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
<script type="text/javascript">
    $(document).ready(function() {
        var nro_preg = 15;
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
            $preg = 12;
            $pind1 = "p$preg-1";
            $pind2 = "p$preg-2";
            $pind3 = "p$preg-3";
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

            if ('<?php echo $preguntas[$pind3] ?>' == 'Si') {
                $("#chechkbox-5").prop('checked', true);
            } else if ('<?php echo $preguntas[$pind3] ?>' == 'No') {
                $("#chechkbox-6").prop('checked', true);
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
                    field: 'p12-1',
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
                    field: 'p12-1',
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
                    field: 'p12-2',
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
                    field: 'p12-2',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-5').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p12-3',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-6').change(function() {
            var val;
            if (this.checked) {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p12-3',
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
            var chechkbox_5 = $('#chechkbox-5').is(":checked");
            var chechkbox_6 = $('#chechkbox-6').is(":checked");
            valid = true;
            if (!chechkbox_1 && !chechkbox_2) {
                alert("Ingrese Opcion");
                valid = false;
            }
            if (chechkbox_1) {
                if (!chechkbox_3 && !chechkbox_4) {
                    alert("Ingrese Opcion 1");
                    valid = false;
                }
            }
            if (chechkbox_3) {
                if (!chechkbox_5 && !chechkbox_6) {
                    alert("Ingrese Opcion 2");
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