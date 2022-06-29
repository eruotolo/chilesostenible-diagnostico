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
                        <h6>¿Monitorea de forma periódica la brecha de salario de sus trabajadores según...?</h6>
                        <form action="" method="post" name="form1">
                            <div class="check-box">
                                <input name="" class="" type="checkbox" value="1" id="chechkbox-1" onclick='chkcontrol(0)'>
                                <label class="" for="chechkbox-1">Cargo</label>
                            </div>
                            <div class="check-box">
                                <input name="" class="" type="checkbox" value="2" id="chechkbox-2" onclick='chkcontrol(0)'>
                                <label class="" for="chechkbox-2">Género</label>
                            </div>
                            <div class="check-box">
                                <input name="" class="" type="checkbox" value="3" id="chechkbox-3" onclick='chkcontrol(0)'>
                                <label class="" for="chechkbox-3">Edad</label>
                            </div>
                            <div class="check-box">
                                <input name="" class="" type="checkbox" value="4" id="chechkbox-4" onclick='chkcontrol(0)'>
                                <label class="" for="chechkbox-4">Ninguna de las anteriores</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="barra-progress">
                <div class="row">
                    <div class="col-12 text-center barra">
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 28.57%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>PAG 12/42</p>
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
        var nro_preg = 12;
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
            $preg = 9;
            $nro_pregs = 4;
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
        <?php
        }
        ?>


        $('#chechkbox-1').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('#chechkbox-4').prop("checked", false);
                $('#chechkbox-4').trigger("change");
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p9-1',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-2').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('#chechkbox-4').prop("checked", false);
                $('#chechkbox-4').trigger("change");
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p9-2',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-3').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('#chechkbox-4').prop("checked", false);
                $('#chechkbox-4').trigger("change");
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p9-3',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });


        $('#chechkbox-4').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('input[type=checkbox]').each(function() {
                    $(this).prop("checked", false);

                })
                $('#chechkbox-1').trigger("change");
                $('#chechkbox-2').trigger("change");
                $('#chechkbox-3').trigger("change");
                $(this).prop("checked", true);
            } else {
                val = "No";
                $('#chechkbox-4').prop("checked", false);
            }



            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p9-4',
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
            if ((!chechkbox_1 && !chechkbox_2 && !chechkbox_3 && !chechkbox_4)) {
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