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
                            <h3>PARA FINALIZAR</h3>
                            <hr>
                        </div>
                        <div class="auspician">
                            <img src="assets/image/logo-auspician.svg" alt="sponsors">
                        </div>
                    </div>
                    <div class="col-6 preguntas">
                        <h6>¿Por medio de qué organización te enteraste de esta iniciativa?</h6>
                        <div class="cont-checkbox">
                            <form action="" method="post" name="form1">
                                <div class="check-box">
                                    <input name="" class="group1" type="checkbox" value="1" id="chechkbox-1">
                                    <label class="" for="chechkbox-1">BCI</label>
                                </div>
                                <div class="check-box">
                                    <input name="" class="group1" type="checkbox" value="2" id="chechkbox-2">
                                    <label class="" for="chechkbox-2">EBCO</label>
                                </div>

                                <div class="check-box">
                                    <input name="" class="group1" type="checkbox" value="3" id="chechkbox-3">
                                    <label class="" for="chechkbox-3">Endeavor</label>
                                </div>

                                <div class="check-box">
                                    <input name="" class="group1" type="checkbox" value="4" id="chechkbox-4">
                                    <label class="" for="chechkbox-4">Explora</label>
                                </div>

                                <div class="check-box">
                                    <input name="" class="group1" type="checkbox" value="5" id="chechkbox-5">
                                    <label class="" for="chechkbox-5">Fundación Imagen de Chile</label>
                                </div>

                                <div class="check-box">
                                    <input name="" class="enable" type="checkbox" value="6" id="chechkbox-6">
                                    <label class="" for="chechkbox-6">Sistema B Chile</label>
                                </div>

                                <div class="check-box">
                                    <input name="" class="enable" type="checkbox" value="7" id="chechkbox-7">
                                    <label class="" for="chechkbox-7">Universidad Adolfo Ibáñez</label>
                                </div>

                                <div class="input-group mb-3 check-text">
                                    <div class="check-box">
                                        <input name="ckb" class="form-check-input mt-3" type="checkbox" value="8" aria-label="Checkbox for following text input" id="chechkbox-8">
                                        <label class="" for="chechkbox-8">Otra (detallar):</label>
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
        var nro_preg = 43;
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
            $preg = 40;
            $nro_pregs = 8;
            $other_preg = 8; // 0 if none
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
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p40-1',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-2').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p40-2',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-3').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p40-3',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-4').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p40-4',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-5').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p40-5',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-6').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p40-6',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-7').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p40-7',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-8').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
            } else {
                val = "No";
                $.ajax({
                    url: 'api/updateField.php',
                    type: 'POST',
                    data: {
                        field: 'p40-8',
                        value: val,
                        id: '<?php echo $_GET["eid"] ?>'
                    }
                });
                $('#other').val('');
                $('#other').trigger("change");
                $('#chechkbox-8').prop("checked", false);
            }

        });

        $('#other').change(function() {
            $('input[type=checkbox]').each(function() {
                //$(this).prop("checked", false);
                $('#chechkbox-8').prop("checked", true);
            })
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p40-8',
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
            var chechkbox_8 = $('#chechkbox-8').is(":checked");

            if ((!chechkbox_1 && !chechkbox_2 && !chechkbox_3 && !chechkbox_4 &&
                    !chechkbox_5 && !chechkbox_6 && !chechkbox_7 && !chechkbox_8)) {
                alert("Ingrese Opcion");
            } else {
                if (chechkbox_8) {
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
                $.ajax({
                    url: 'assets/mail/send_mail-done.php',
                    type: 'post',
                    data: {
                        id: '<?php echo $_GET["eid"] ?>',
                        email: '<?php echo $preguntas["email"] ?>'
                    },
                    success: function(response) {
                        console.log(response);
                        var data = JSON.parse(response);
                        if (data.status == 1) {

                        } else {

                        }
                    },
                    error: function(response) {
                        alert(response);
                    }
                });
                var nextpage = nro_preg + 1;
                window.location.href = "resumen.php?eid=" + <?php echo $_GET['eid'] ?>;
            } else {
                return false;
            }
        })

    });
</script>