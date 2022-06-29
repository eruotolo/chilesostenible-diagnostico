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
                            <h3>DATOS GENERALES</h3>
                            <hr>
                        </div>
                        <div class="auspician">
                            <img src="assets/image/logo-auspician.svg" alt="sponsors">
                        </div>
                    </div>
                    <div class="col-6 preguntas">
                        <h6>Indique su rubro:</h6>
                        <div class="cont-checkbox" style="overflow: scroll; height: 53vh; width: 100%">
                            <form action="" method="post" name="form1">
                                <div class="check-box">
                                    <input name="ckb" class="" type="checkbox" value="1" id="chechkbox-1" onclick='chkcontrol(0)'>
                                    <label class="" for="chechkbox-1">Actividades de extracción de Recursos Naturales</label>
                                </div>
                                <div class="check-box">
                                    <input name="ckb" class="" type="checkbox" value="2" id="chechkbox-2" onclick='chkcontrol(1)'>
                                    <label class="" for="chechkbox-2">Energías Renovables (ERNC)</label>
                                </div>
                                <div class="check-box">
                                    <input name="ckb" class="" type="checkbox" value="3" id="chechkbox-3" onclick='chkcontrol(2)'>
                                    <label class="" for="chechkbox-3">Gastronomía</label>
                                </div>
                                <div class="check-box">
                                    <input name="ckb" class="" type="checkbox" value="4" id="chechkbox-4" onclick='chkcontrol(3)'>
                                    <label class="" for="chechkbox-4">Gestión de residuos</label>
                                </div>
                                <div class="check-box">
                                    <input name="ckb" class="" type="checkbox" value="5" id="chechkbox-5" onclick='chkcontrol(4)'>
                                    <label class="" for="chechkbox-5">Medios de comunicación</label>
                                </div>
                                <div class="check-box">
                                    <input name="ckb" class="" type="checkbox" value="6" id="chechkbox-6" onclick='chkcontrol(5)'>
                                    <label class="" for="chechkbox-6">Petróleo y gas</label>
                                </div>
                                <div class="check-box">
                                    <input name="ckb" class="" type="checkbox" value="7" id="chechkbox-7" onclick='chkcontrol(6)'>
                                    <label class="" for="chechkbox-7">Productos agrícolas</label>
                                </div>
                                <div class="check-box">
                                    <input name="ckb" class="" type="checkbox" value="8" id="chechkbox-8" onclick='chkcontrol(7)'>
                                    <label class="" for="chechkbox-8">Productos físicos que incluyen envases</label>
                                </div>
                                <div class="check-box">
                                    <input name="ckb" class="" type="checkbox" value="9" id="chechkbox-9" onclick='chkcontrol(8)'>
                                    <label class="" for="chechkbox-9">Reconversión de residuos industriales</label>
                                </div>
                                <div class="check-box">
                                    <input name="ckb" class="" type="checkbox" value="10" id="chechkbox-10" onclick='chkcontrol(9)'>
                                    <label class="" for="chechkbox-10">Sector farmacéutico</label>
                                </div>
                                <div class="check-box">
                                    <input name="ckb" class="" type="checkbox" value="11" id="chechkbox-11" onclick='chkcontrol(10)'>
                                    <label class="" for="chechkbox-11">Servicios</label>
                                </div>
                                <div class="check-box">
                                    <input name="ckb" class="" type="checkbox" value="12" id="chechkbox-12" onclick='chkcontrol(11)'>
                                    <label class="" for="chechkbox-12">Servicios bancarios y financieros</label>
                                </div>
                                <div class="check-box">
                                    <input name="ckb" class="" type="checkbox" value="13" id="chechkbox-13" onclick='chkcontrol(12)'>
                                    <label class="" for="chechkbox-13">Tecnologías de la información y la comunicación</label>
                                </div>
                                <div class="check-box">
                                    <input name="ckb" class="" type="checkbox" value="14" id="chechkbox-14" onclick='chkcontrol(13)'>
                                    <label class="" for="chechkbox-14">Turismo</label>
                                </div>

                                <div class="input-group mb-3 check-text">
                                    <div class="check-box">
                                        <input name="ckb" class="form-check-input mt-3" type="checkbox" value="15" aria-label="Checkbox for following text input" id="chechkbox-15" onclick='chkcontrol(14)'>
                                        <label class="" for="chechkbox-15">Otro: </label>
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
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 7.14%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>PAG 03/42</p>
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
        var nro_preg = 3;
        var valid = false;

        <?php
        if (isset($preguntas)) {
        ?>
            $("#chechkbox-1").prop('checked', false);
            $("#chechkbox-2").prop('checked', false);
            $("#chechkbox-3").prop('checked', false);
            $("#chechkbox-4").prop('checked', false);
            $("#chechkbox-5").prop('checked', false);
            $("#chechkbox-6").prop('checked', false);
            $("#chechkbox-7").prop('checked', false);
            $("#chechkbox-8").prop('checked', false);
            $("#chechkbox-9").prop('checked', false);
            $("#chechkbox-10").prop('checked', false);
            $("#chechkbox-11").prop('checked', false);
            $("#chechkbox-12").prop('checked', false);
            $("#chechkbox-13").prop('checked', false);
            $("#chechkbox-14").prop('checked', false);
            $("#chechkbox-15").prop('checked', false);

            if ('<?php echo $preguntas["rubro"] ?>' == 'Actividades de extracción de Recursos Naturales') {
                $("#chechkbox-1").prop('checked', true);
            } else if ('<?php echo $preguntas["rubro"] ?>' == 'Energías Renovables (ERNC)') {
                $("#chechkbox-2").prop('checked', true);
            } else if ('<?php echo $preguntas["rubro"] ?>' == 'Gastronomía') {
                $("#chechkbox-3").prop('checked', true);
            } else if ('<?php echo $preguntas["rubro"] ?>' == 'Gestión de residuos') {
                $("#chechkbox-4").prop('checked', true);
            } else if ('<?php echo $preguntas["rubro"] ?>' == 'Medios de comunicación') {
                $("#chechkbox-5").prop('checked', true);
            } else if ('<?php echo $preguntas["rubro"] ?>' == 'Petróleo y gas') {
                $("#chechkbox-6").prop('checked', true);
            } else if ('<?php echo $preguntas["rubro"] ?>' == 'Productos agrícolas') {
                $("#chechkbox-7").prop('checked', true);
            } else if ('<?php echo $preguntas["rubro"] ?>' == 'Productos físicos que incluyen envases') {
                $("#chechkbox-8").prop('checked', true);
            } else if ('<?php echo $preguntas["rubro"] ?>' == 'Reconversión de residuos industriales') {
                $("#chechkbox-9").prop('checked', true);
            } else if ('<?php echo $preguntas["rubro"] ?>' == 'Sector farmacéutico') {
                $("#chechkbox-10").prop('checked', true);
            } else if ('<?php echo $preguntas["rubro"] ?>' == 'Servicios') {
                $("#chechkbox-11").prop('checked', true);
            } else if ('<?php echo $preguntas["rubro"] ?>' == 'Servicios bancarios y financieros') {
                $("#chechkbox-12").prop('checked', true);
            } else if ('<?php echo $preguntas["rubro"] ?>' == 'Tecnologías de la información y la comunicación') {
                $("#chechkbox-13").prop('checked', true);
            } else if ('<?php echo $preguntas["rubro"] ?>' == 'Turismo') {
                $("#chechkbox-14").prop('checked', true);
            } else {
                if ('<?php echo $preguntas["rubro"] ?>' != '' && '<?php echo $preguntas["rubro"] ?>' != 'No') {
                    $("#chechkbox-15").prop('checked', true);
                    $('#other').val('<?php echo $preguntas["rubro"] ?>');
                }
            }

            $('#selectemployed').val('<?php echo $preguntas["nroempleado"] ?>');
        <?php
        }
        ?>

        $('#atras').click(function() {
            var lastpage = nro_preg - 1;
            window.location.href = "pregunta-" + addleadingZero(lastpage) + ".php?eid=" + '<?php echo $_GET["eid"] ?>';
        })

        function addleadingZero(number) {
            return ('0' + number).slice(-2);
        }

        $('#selectemployed').change(function() {
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'nroempleado',
                    value: $(this).val(),
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });


        $('#other').change(function() {
            $('input[type=checkbox]').each(function() {
                $(this).prop("checked", false);
                $('#chechkbox-15').prop("checked", true);
            })
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'rubro',
                    value: $('#other').val(),
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('input[type=checkbox]').change(function() {
            var chkid = $(this).attr('id').replace('chechkbox-', '');
            var ckbox = "chechkbox-" + chkid;
            if (chkid != 15) {
                var txt = $("label[for='" + ckbox + "']").html();
                $.ajax({
                    url: 'api/updateField.php',
                    type: 'POST',
                    data: {
                        field: 'rubro',
                        value: txt,
                        id: '<?php echo $_GET["eid"] ?>'
                    }
                });
            } else {
                var txt = $("label[for='" + ckbox + "']").html();
                $.ajax({
                    url: 'api/updateField.php',
                    type: 'POST',
                    data: {
                        field: 'rubro',
                        value: txt,
                        id: '<?php echo $_GET["eid"] ?>'
                    }
                });
            }
        });

        $('#continuar').click(function() {
            var chechkbox_1 = $('#chechkbox-1').is(":checked");
            var chechkbox_2 = $('#chechkbox-2').is(":checked");
            var chechkbox_3 = $('#chechkbox-3').is(":checked");
            var chechkbox_4 = $('#chechkbox-4').is(":checked");
            var chechkbox_5 = $('#chechkbox-5').is(":checked");
            var chechkbox_6 = $('#chechkbox-6').is(":checked");
            var chechkbox_7 = $('#chechkbox-7').is(":checked");
            var chechkbox_8 = $('#chechkbox-8').is(":checked");
            var chechkbox_9 = $('#chechkbox-9').is(":checked");
            var chechkbox_10 = $('#chechkbox-10').is(":checked");
            var chechkbox_11 = $('#chechkbox-11').is(":checked");
            var chechkbox_12 = $('#chechkbox-12').is(":checked");
            var chechkbox_13 = $('#chechkbox-13').is(":checked");
            var chechkbox_14 = $('#chechkbox-14').is(":checked");
            var chechkbox_15 = $('#chechkbox-15').is(":checked");

            if ((!chechkbox_1 && !chechkbox_2 && !chechkbox_3 && !chechkbox_4 &&
                    !chechkbox_5 && !chechkbox_6 && !chechkbox_7 && !chechkbox_8 && !chechkbox_9 && !chechkbox_10 &&
                    !chechkbox_11 && !chechkbox_12 && !chechkbox_13 && !chechkbox_14 && !chechkbox_15)) {
                alert("Ingrese Opcion");
            } else {
                if (chechkbox_15) {
                    if ($('#other').val() != '') {
                        valid = true;
                    } else {
                        alert("Ingrese Otra");
                        return false;
                    }
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