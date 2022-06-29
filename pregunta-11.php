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
                            <h5>Equidad de sueldos</h5>
                        </div>

                        <div class="auspician">
                            <img src="assets/image/logo-auspician.svg" alt="sponsors">
                        </div>
                    </div>
                    <div class="col-6 preguntas">
                        <h6>¿Cuenta con bandas claras de sueldos, que les permita reconocer posiciones en concordancia con rentas dignas y acorde a la realidad interna y del mercado?</h6>
                        <form action="" method="post" name="form1">
                            <div class="check-box">
                                <input name="ckb" class="cb" type="checkbox" value="1" id="chechkbox-1" onclick='chkcontrol(0)'>
                                <label class="" for="chechkbox-1">
                                    Si
                                </label>
                            </div>
                            <div class="check-box">
                                <input name="ckb" class="cb" type="checkbox" value="2" id="chechkbox-2" onclick='chkcontrol(1)'>
                                <label class="" for="chechkbox-2">
                                    No
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="barra-progress">
                <div class="row">
                    <div class="col-12 text-center barra">
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 26.19%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>PAG 11/42</p>
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
        var nro_preg = 11;
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
        ?>
            $("#chechkbox-1").prop('checked', false);
            $("#chechkbox-2").prop('checked', false);
            $("#chechkbox-3").prop('checked', false);
            $("#chechkbox-4").prop('checked', false);

            if ('<?php echo $preguntas["p8-1"] ?>' == 'Si') {
                $("#chechkbox-1").prop('checked', true);
                //$('#otherFieldDiv').show();
            } else if ('<?php echo $preguntas["p8-1"] ?>' == 'No') {
                $("#chechkbox-2").prop('checked', true);
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
                    field: 'p8-1',
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
                    field: 'p8-1',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });


        $('#continuar').click(function() {
            var chechkbox_1 = $('#chechkbox-1').is(":checked");
            var chechkbox_2 = $('#chechkbox-2').is(":checked");
            valid = true;
            if (!chechkbox_1 && !chechkbox_2) {
                alert("Ingrese Opcion");
                valid = false;
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