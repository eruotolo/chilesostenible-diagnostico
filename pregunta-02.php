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
                            <h3>DATOS GENERALES</h3>
                            <hr>
                        </div>
                        <div class="auspician">
                            <img src="assets/image/logo-auspician.svg" alt="sponsors">
                        </div>
                    </div>
                    <div class="col-6 preguntas">
                        <h6>Número de Trabajadores/as con contrato (incluye tiempo completo y parcial).</h6>
                        <div class="mb-3 form-select">
                            <select name="trabajadores" id="selectemployed" required>
                                <option value="">Seleccione</option>
                                <option value="De 0 a 9">De 0 a 9</option>
                                <option value="De 10 a 49">De 10 a 49</option>
                                <option value="De 50 a 199">De 50 a 199</option>
                                <option value="De 200 a 300">De 200 a 300</option>
                                <option value="De 301 a más">De 301 a más</option>
                            </select>
                        </div>
                        <h6>Según sus ingresos anuales, indique el tamaño de su empresa (UF corresponde a unidad de fomento):</h6>

                        <div class="cont-checkbox scroll-02">
                            <form action="" method="post" name="form1">
                                <div class="check-box">
                                    <input name="ckb" class="cb" type="checkbox" value="1" id="chechkbox-1" onclick='chkcontrol(0)'>
                                    <label class="" for="chechkbox-1">
                                        Empresa micro (ingresos por ventas de hasta 2.400 UF anual)
                                    </label>
                                </div>
                                <div class="check-box">
                                    <input name="ckb" class="cb" type="checkbox" value="2" id="chechkbox-2" onclick='chkcontrol(1)'>
                                    <label class="" for="chechkbox-2">
                                        Empresa pequeña (ingresos por ventas sobre 2.401 UF hasta 25.000 UF anual)
                                    </label>
                                </div>
                                <div class="check-box">
                                    <input name="ckb" class="cb" type="checkbox" value="3" id="chechkbox-3" onclick='chkcontrol(2)'>
                                    <label class="" for="chechkbox-3">
                                        Empresa mediana (ingresos por ventas sobre 25.001 UF hasta 100.000 UF anual)
                                    </label>
                                </div>
                                <div class="check-box">
                                    <input name="ckb" class="cb" type="checkbox" value="4" id="chechkbox-4" onclick='chkcontrol(3)'>
                                    <label class="" for="chechkbox-4">
                                        Empresa grande (ingresos por ventas por sobre 100.000 UF anual)
                                    </label>
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
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 4.76%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>PAG 02/42</p>
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
        var nro_preg = 2;
        var valid = false;

        <?php
        if (isset($preguntas)) {
        ?>
            if ('<?php echo $preguntas["tamano"] ?>' == 'Empresa micro o (ingresos por ventas de hasta 2.400 UF anual)') {
                $("#chechkbox-1").prop('checked', true);
            } else if ('<?php echo $preguntas["tamano"] ?>' == 'Empresa pequeña (ingresos por ventas sobre 2.401 UF hasta 25.000 anual)') {
                $("#chechkbox-2").prop('checked', true);
            } else if ('<?php echo $preguntas["tamano"] ?>' == 'Empresa mediana (ingresos por ventas sobre 25.001 UF hasta 100.000 UF anual)') {
                $("#chechkbox-3").prop('checked', true);
            } else if ('<?php echo $preguntas["tamano"] ?>' == 'Empresa grande (ingresos por ventas por sobre 100.000 UF anual)') {
                $("#chechkbox-4").prop('checked', true);
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


        $('#chechkbox-1').change(function() {
            var val;
            if (this.checked) {
                val = "Empresa micro o (ingresos por ventas de hasta 2.400 UF anual)";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'tamano',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-2').change(function() {
            var val;
            if (this.checked) {
                val = "Empresa pequeña (ingresos por ventas sobre 2.401 UF hasta 25.000 anual)";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'tamano',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-3').change(function() {
            var val;
            if (this.checked) {
                val = "Empresa mediana (ingresos por ventas sobre 25.001 UF hasta 100.000 UF anual)";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'tamano',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-4').change(function() {
            var val;
            if (this.checked) {
                val = "Empresa grande (ingresos por ventas por sobre 100.000 UF anual)";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'tamano',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#continuar').click(function() {
            var selectemployed = $('#selectemployed').val();
            var chechkbox_1 = $('#chechkbox-1').is(":checked");
            var chechkbox_2 = $('#chechkbox-2').is(":checked");
            var chechkbox_3 = $('#chechkbox-3').is(":checked");
            var chechkbox_4 = $('#chechkbox-4').is(":checked");
            if (selectemployed == '' || (!chechkbox_1 && !chechkbox_2 && !chechkbox_3 && !chechkbox_4)) {
                if (selectemployed == '') {
                    alert("Ingrese Número de Trabajadores/as");
                } else if (!chechkbox_1 && !chechkbox_2 && !chechkbox_3 && !chechkbox_4) {
                    alert("Ingrese Tipo de Empresa");
                }
            } else {
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