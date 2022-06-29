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
                            <h3>GOBERNANZA Y ÉTICA</h3>
                            <hr>
                            <h5>Reporte financiero público / Transparencia de la Empresa</h5>
                        </div>

                        <div class="auspician">
                            <img src="assets/image/logo-auspician.svg" alt="sponsors">
                        </div>
                    </div>
                    <div class="col-6 preguntas">
                        <h6>¿Qué información es comunicada de manera pública y transparente por la empresa?</h6>
                        <div class="cont-checkbox">
                            <form action="" method="post" name="form1">
                                <div class="check-box">
                                    <input name="" class="" type="checkbox" value="1" id="chechkbox-1" onclick='chkcontrol(0)'>
                                    <label class="" for="chechkbox-1"><strong>Titularidad Real</strong> <a class="btn_ayuda_01" href="#" data-placement="top" data-toggle="tooltip" title="Personas detrás de la(s) sociedad(es) dueña(s) de la organización"><img class="btn_ayuda" src="assets/image/btn_ayuda.svg" alt="ayuda"></a></label>
                                </div>
                                <div class="check-box">
                                    <input name="" class="" type="checkbox" value="2" id="chechkbox-2" onclick='chkcontrol(0)'>
                                    <label class="" for="chechkbox-2">Desempeño financiero</label>
                                </div>
                                <div class="check-box">
                                    <input name="" class="" type="checkbox" value="3" id="chechkbox-3" onclick='chkcontrol(0)'>
                                    <label class="" for="chechkbox-3">Desempeño social y ambiental (Reporte de Impacto)</label>
                                </div>
                                <div class="check-box">
                                    <input name="" class="" type="checkbox" value="4" id="chechkbox-4" onclick='chkcontrol(0)'>
                                    <label class="" for="chechkbox-4">Miembros del directorio (Junta Directiva)</label>
                                </div>
                                <div class="check-box">
                                    <input name="" class="" type="checkbox" value="6" id="chechkbox-6" onclick='chkcontrol(0)'>
                                    <label class="" for="chechkbox-6">Ninguna de las anteriores</label>
                                </div>
                                <div class="input-group mb-3 check-text">
                                    <div class="check-box">
                                        <input name="ckb" class="form-check-input mt-3" type="checkbox" value="5" aria-label="Checkbox for following text input" id="chechkbox-5">
                                        <label class="" for="chechkbox-5">Otra: </label>
                                    </div>
                                    <input id='other' type="text" class="form-control" aria-label="Text input with checkbox">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="barra-progress">
                <div class="row">
                    <div class="col-12 text-center barra">
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 19.05%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>PAG 08/42</p>
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
        var nro_preg = 8;
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
            $preg = 5;
            $nro_pregs = 6;
            $other_preg = 5; // 0 if none
        ?>
            $('input[type=checkbox]').each(function() {
                $(this).prop("checked", false);
            }) // Deselect all

            // Check the needed ones
            <?php
            for ($i = 1; $i <= $nro_pregs; $i++) {
                $pind = "p$preg-$i";
            ?>
                if ('<?php echo $preguntas[$pind] ?>' == 'Si') {
                    $("#chechkbox-<?php echo $i ?>").prop('checked', true);
                }
            <?php
            }
            ?>

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

        <?php
        }
        ?>

        $('#chechkbox-1').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('#chechkbox-5').prop("checked", false);
                $('#chechkbox-6').prop("checked", false);
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p5-1',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-2').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('#chechkbox-5').prop("checked", false);
                $('#chechkbox-6').prop("checked", false);
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p5-2',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-3').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('#chechkbox-5').prop("checked", false);
                $('#chechkbox-6').prop("checked", false);
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p5-3',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-4').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('#chechkbox-5').prop("checked", false);
                $('#chechkbox-6').prop("checked", false);
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p5-4',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-5').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('#chechkbox-1').prop("checked", false);
                $('#chechkbox-2').prop("checked", false);
                $('#chechkbox-3').prop("checked", false);
                $('#chechkbox-4').prop("checked", false);
                $('#chechkbox-6').prop("checked", false);
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p5-5',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-6').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('input[type=checkbox]').each(function() {
                    $(this).prop("checked", false);

                })
                $('#other').val('');
                $('#other').trigger("change");
                $('#chechkbox-1').trigger("change");
                $('#chechkbox-2').trigger("change");
                $('#chechkbox-3').trigger("change");
                $('#chechkbox-4').trigger("change");
                $('#chechkbox-5').prop("checked", false);
                $('#chechkbox-5').trigger("change");
                $(this).prop("checked", true);
            } else {
                val = "No";
                $('#chechkbox-6').prop("checked", false);
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p5-6',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });


        $('#other').change(function() {
            $('input[type=checkbox]').each(function() {
                //$(this).prop("checked", false);
                $('#chechkbox-5').prop("checked", true);
            })
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p5-5',
                    value: $('#other').val(),
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
            if ((!chechkbox_1 && !chechkbox_2 && !chechkbox_3 && !chechkbox_4 &&
                    !chechkbox_5 && !chechkbox_6 && !chechkbox_7)) {
                alert("Ingrese Opcion");
                valid = false;
            }
            if (chechkbox_5) {
                if ($('#other').val() != '') {
                    valid = true;
                } else {
                    alert("Ingrese Otra");
                    return false;
                }
                valid = true;
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