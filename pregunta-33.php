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
                            <h5>Gestión ambiental</h5>
                        </div>
                        <div class="auspician">
                            <img src="assets/image/logo-auspician.svg" alt="sponsors">
                        </div>
                    </div>
                    <div class="col-6 preguntas">
                        <h6>¿Su empresa está comprometida con algún ODS relacionado al medio ambiente en particular? <a class="btn_ayuda_01" href="#" data-placement="top" data-toggle="tooltip" title="Los Objetivos de Desarrollo Sostenible (ODS) fueron adoptados por las Naciones Unidas en 2015 como un llamado universal a la acción para poner fin a la pobreza, proteger el planeta y garantizar que para el 2030 todas las personas disfruten de paz y prosperidad. Estos reconocen que la acción en un área afectará los resultados en otras y que el desarrollo debe equilibrar la sostenibilidad social, económica y ambiental."><img class="btn_ayuda" src="assets/image/btn_ayuda.svg" alt="ayuda"></a></h6>
                        <div class="cont-checkbox">
                            <form action="" method="post" name="form1">
                                <div class="check-box">
                                    <input name="" class="group1" type="checkbox" value="1" id="chechkbox-1">
                                    <label class="" for="chechkbox-1">No </label>
                                </div>

                                <div class="input-group mb-3 check-text">
                                    <div class="check-box">
                                        <input name="ckb" class="form-check-input mt-3" type="checkbox" value="2" aria-label="Checkbox for following text input" id="chechkbox-2">
                                        <label class="" for="chechkbox-2">Sí, ¿cuáles? </label>
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
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 78.57%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>PAG 33/42</p>
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
        var nro_preg = 33;
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
            $preg = 30;
            $nro_pregs = 2;
            $other_preg = 2; // 0 if none
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
                $('#chechkbox-2').prop("checked", false);
                $('#chechkbox-2').trigger("change");
                $('#chechkbox-1').prop("checked", true);
                //$('#other').trigger("change");
                //$('#other').val('');				
            } else {
                val = "No";
            }

            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p30-1',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-2').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('#other').val('');
                $('#chechkbox-1').prop("checked", false);
                $('#chechkbox-1').trigger("change");
                $('#other').trigger("change");
            } else {
                val = "No";
                $('#other').val('');
                $('#other').trigger("change");
                $('#chechkbox-2').prop("checked", false);
            }
        });


        $('#other').change(function() {
            $('input[type=checkbox]').each(function() {
                $('#chechkbox-2').prop("checked", true);
                $('#chechkbox-1').prop("checked", false);
                $('#chechkbox-1').trigger("change");
            })
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p30-2',
                    value: $('#other').val(),
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#continuar').click(function() {
            var chechkbox_1 = $('#chechkbox-1').is(":checked");
            var chechkbox_2 = $('#chechkbox-2').is(":checked");
            valid = true;
            if ((!chechkbox_1 && !chechkbox_2)) {
                alert("Ingrese Opcion");
                valid = false;
            }
            if (chechkbox_2) {
                if ($('#other').val() != '') {
                    valid = true;
                } else {
                    alert("Ingrese Cuales");
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