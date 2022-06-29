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
                            <h3>MEDIO AMBIENTE</h3>
                            <hr>
                            <h5>Recursos Naturales</h5>
                        </div>

                        <div class="auspician">
                            <img src="assets/image/logo-auspician.svg" alt="sponsors">
                        </div>
                    </div>
                    <div class="col-6 preguntas ">
                        <h6>¿Alguno de los siguientes recursos naturales es un insumo clave o se ve impactado en su proceso productivo?</h6>
                        <div class="cont-checkbox">
                            <form action="" method="post" name="form1">
                                <div class="check-box">
                                    <input name="" class="" type="checkbox" value="1" id="chechkbox-1" onclick='chkcontrol(0)'>
                                    <label class="" for="chechkbox-1">Agua</label>
                                </div>
                                <div class="check-box">
                                    <input name="" class="" type="checkbox" value="2" id="chechkbox-2" onclick='chkcontrol(0)'>
                                    <label class="" for="chechkbox-2">Aire</label>
                                </div>
                                <div class="check-box">
                                    <input name="" class="" type="checkbox" value="3" id="chechkbox-3" onclick='chkcontrol(0)'>
                                    <label class="" for="chechkbox-3">Suelo</label>
                                </div>
                                <div class="check-box">
                                    <input name="" class="" type="checkbox" value="4" id="chechkbox-4" onclick='chkcontrol(0)'>
                                    <label class="" for="chechkbox-4">Flora o vegetación</label>
                                </div>
                                <div class="check-box">
                                    <input name="" class="" type="checkbox" value="5" id="chechkbox-5" onclick='chkcontrol(0)'>
                                    <label class="" for="chechkbox-5">Fauna o animales</label>
                                </div>
                                <div class="check-box">
                                    <input name="" class="" type="checkbox" value="6" id="chechkbox-6" onclick='chkcontrol(0)'>
                                    <label class="" for="chechkbox-6">No sabe</label>
                                </div>
                                <div class="check-box">
                                    <input name="" class="" type="checkbox" value="7" id="chechkbox-7" onclick='chkcontrol(0)'>
                                    <label class="" for="chechkbox-7">Ninguna de las anteriores</label>
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
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 57.14%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>PAG 24/42</p>
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
        // If checkbox6 o 7 => Paso a pregunta 25
        // else pasa a la 26

        var nro_preg = 24;
        var valid = false;

        $('#atras').click(function() {
            var lastpage = nro_preg - 1;
            window.location.href = "pregunta-" + addleadingZero(lastpage) + ".php?eid=" + '<?php echo $_GET["eid"] ?>';
        })

        function addleadingZero(number) {
            return ('0' + number).slice(-2);
        }

        // All questions        
        <?php
        if (isset($preguntas)) {
            $preg = 21;
            $nro_pregs = 7;
            $other_preg = 0; // 0 if none
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
                $('#chechkbox-6').prop("checked", false);
                $('#chechkbox-7').prop("checked", false);
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p21-1',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-2').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('#chechkbox-6').prop("checked", false);
                $('#chechkbox-7').prop("checked", false);
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p21-2',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-3').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('#chechkbox-6').prop("checked", false);
                $('#chechkbox-7').prop("checked", false);
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p21-3',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-4').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('#chechkbox-6').prop("checked", false);
                $('#chechkbox-7').prop("checked", false);
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p21-4',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-5').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('#chechkbox-6').prop("checked", false);
                $('#chechkbox-7').prop("checked", false);
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p21-5',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-6').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('#chechkbox-1').prop("checked", false);
                $('#chechkbox-2').prop("checked", false);
                $('#chechkbox-3').prop("checked", false);
                $('#chechkbox-4').prop("checked", false);
                $('#chechkbox-5').prop("checked", false);
                $('#chechkbox-7').prop("checked", false);
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p21-6',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-7').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('input[type=checkbox]').each(function() {
                    $(this).prop("checked", false);

                })
                $('#chechkbox-1').trigger("change");
                $('#chechkbox-2').trigger("change");
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
                    field: 'p21-7',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });


        $('#chechkbox-7').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('input[type=checkbox]').each(function() {
                    $(this).prop("checked", false);

                })
                $('#chechkbox-1').trigger("change");
                $('#chechkbox-2').trigger("change");
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
                    field: 'p21-7',
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
            if ((!chechkbox_1 && !chechkbox_2 && !chechkbox_3 && !chechkbox_4 &&
                    !chechkbox_5 && !chechkbox_6 && !chechkbox_6 && !chechkbox_7)) {
                alert("Ingrese Opcion");
                valid = false;
            }
            if (valid) {
                if ($('#chechkbox-7').prop("checked")) {
                    var nextpage = nro_preg + 2;
                } else {
                    var nextpage = nro_preg + 1;
                }

                window.location.href = "pregunta-" + addleadingZero(nextpage) + ".php?eid=<?php echo $_GET['eid'] ?>";
            } else {
                return false;
            }
        })

    });
</script>