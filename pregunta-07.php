<?php include('assets/header.php') ?>
<?php include('assets/check-eid.php'); ?>
<?php include('assets/get-answers.php');
?>

<section id="contenido">
    <div class="container">
        <div class="row contenido">
            <div class="central-01">
                <div class="row">
                    <div class="col-6 cont-subtitulos">
                        <div class="titulo-subtitulo">
                            <h3>GOBERNANZA Y ÉTICA</h3>
                            <hr>
                            <h5>Directorio</h5>
                        </div>
                        <div class="auspician">
                            <img src="assets/image/logo-auspician.svg" alt="sponsors">
                        </div>
                    </div>
                    <div class="col-6 preguntas">
                        <div class="pregunta-cond-01">
                            <h6>¿Su empresa cuenta con un directorio formal?</h6>
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
                            <h6>Incluye al menos una persona</h6>
                            <div class="cont-condicional cont-checkbox">
                                <form action="" method=" post">
                                    <div class="check-box">
                                        <input class="" name="" type="checkbox" value="3" id="chechkbox-3">
                                        <label class="" for="chechkbox-3"><strong>Independiente</strong> <a class="btn_ayuda_01" href="#" data-placement="top" data-toggle="tooltip" title="Integrante que no sea ejecutivo/a ni accionista de la empresa"><img class="btn_ayuda" src="assets/image/btn_ayuda.svg" alt="ayuda"></a></label>
                                    </div>
                                    <div class="check-box">
                                        <input class="" name="" type="checkbox" value="4" id="chechkbox-4">
                                        <label class="" for="chechkbox-4">Migrante</label>
                                    </div>
                                    <div class="check-box">
                                        <input class="" name="" type="checkbox" value="5" id="chechkbox-5">
                                        <label class="" for="chechkbox-5">Mujer</label>
                                    </div>
                                    <div class="check-box">
                                        <input class="" name="" type="checkbox" value="6" id="chechkbox-6">
                                        <label class="" for="chechkbox-6">Persona parte de la comunidad LGTBQ+</label>
                                    </div>
                                    <div class="check-box">
                                        <input class="" name="" type="checkbox" value="7" id="chechkbox-7">
                                        <label class="" for="chechkbox-7">Ninguna de las anteriores</label>
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
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 16.67%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>PAG 07/42</p>
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
        var nro_preg = 7
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
            $preg = 4;
            $nro_pregs = 6;
            $other_preg = 0; // 0 if none
            $conditional = 1;
        ?>
            $('input[type=checkbox]').each(function() {
                $(this).prop("checked", false);
            }) // Deselect all

            // Check the needed ones
            <?php
            for ($i = 1; $i <= 1; $i++) {
                $pind = "p$preg-$i";
            ?>
                if ('<?php echo $preguntas[$pind] ?>' == 'Si') {
                    $("#chechkbox-<?php echo $i ?>").prop('checked', true);
                }
            <?php
            }
            ?>



            if ('<?php echo $preguntas["p4-1"] ?>' == 'No') {
                $("#chechkbox-2").prop('checked', true);
            } else {
                $("#chechkbox-2").prop('checked', false);
            }

            if ('<?php echo $preguntas["p4-2"] ?>' == 'Si') {
                $("#chechkbox-3").prop('checked', true);
            }
            if ('<?php echo $preguntas["p4-3"] ?>' == 'Si') {
                $("#chechkbox-4").prop('checked', true);
            }
            if ('<?php echo $preguntas["p4-4"] ?>' == 'Si') {
                $("#chechkbox-5").prop('checked', true);
            }
            if ('<?php echo $preguntas["p4-5"] ?>' == 'Si') {
                $("#chechkbox-6").prop('checked', true);
            }
            if ('<?php echo $preguntas["p4-6"] ?>' == 'Si') {
                $("#chechkbox-7").prop('checked', true);
            }

            // Get Other value
            <?php
            if ($other_preg <> 0) {
                $pind = "p$preg-$other_preg";
            ?>
                if ('<?php echo $preguntas[$pind] ?>' != '' && '<?php echo $preguntas[$pind] ?>' != 'No' && '<?php echo $preguntas[$pind] ?>' != 'Si') {
                    $('#other').val('<?php echo $preguntas[$pind] ?>');
                    if ($('#other').val() != '') {
                        $("#chechkbox-<?php echo $other_preg ?>").prop('checked', true);
                    }
                }
            <?php
            }
            ?>

            // Show Div
            <?php
            $pind = "p$preg-$conditional";
            ?>
            if ('<?php echo $preguntas[$pind] ?>' == 'Si') {
                $("#otherFieldDiv").show();
            }

            // If No
            <?php
            $pregsino = 1;
            $ckbox = 2;
            $pind = "p$preg-$pregsino";
            ?>
            if ('<?php echo $preguntas[$pind] ?>' != 'Si' && '<?php echo $preguntas[$pind] ?>' != '') {
                $("#chechkbox-<?php echo $ckbox ?>").prop('checked', true);
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
                    field: 'p4-1',
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
                    field: 'p4-1',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-3').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('#chechkbox-7').prop("checked", false);
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p4-2',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-4').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('#chechkbox-7').prop("checked", false);
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p4-3',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-5').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('#chechkbox-7').prop("checked", false);
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p4-4',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-6').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('#chechkbox-7').prop("checked", false);
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p4-5',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-7').change(function() {
            var val;
            if (this.checked) {
                val = "Si";

                $('#chechkbox-3').prop("checked", false);
                $('#chechkbox-4').prop("checked", false);
                $('#chechkbox-5').prop("checked", false);
                $('#chechkbox-6').prop("checked", false);

                $('#chechkbox-3').trigger("change");
                $('#chechkbox-4').trigger("change");
                $('#chechkbox-5').trigger("change");
                $('#chechkbox-6').trigger("change");
                $(this).prop("checked", true);
            } else {
                val = "No";
                $('#chechkbox-7').prop("checked", false);
            }



            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p4-6',
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
            var chechkbox_7 = $('#chechkbox-7').is(":checked");

            valid = true;
            if (!chechkbox_1 && !chechkbox_2) {
                alert("Ingrese Opcion");
                valid = false;
            }
            if (chechkbox_1) {
                if (!chechkbox_3 && !chechkbox_4 && !chechkbox_5 && !chechkbox_6 && !chechkbox_7) {
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