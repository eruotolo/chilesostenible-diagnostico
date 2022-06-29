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
                            <h5>Economía circular</h5>
                        </div>
                        <div class="auspician">
                            <img src="assets/image/logo-auspician.svg" alt="sponsors">
                        </div>
                    </div>
                    <div class="col-6 preguntas">
                        <h6>¿Su empresa ha rediseñado procesos o materiales para incluir elementos de circularidad en el ciclo de vida de ciertos productos, o bien ha aplicado principios de ecodiseño? <a class="btn_ayuda_01" href="#" data-placement="top" data-toggle="tooltip" title="La economía circular es un modelo de producción y consumo que implica compartir, alquilar, reutilizar, reparar, renovar y reciclar materiales y productos existentes todas las veces que sea posible para crear un valor añadido. En la práctica, implica reducir los residuos al mínimo. Cuando un producto llega al final de su vida, sus materiales se mantienen dentro de la economía siempre que sea posible."><img class="btn_ayuda" src="assets/image/btn_ayuda.svg" alt="ayuda"></a></h6>
                        <div class="cont-checkbox scroll-10">
                            <form action="" method="post" name="form1">
                                <div class="check-box">
                                    <input name="" class="" type="checkbox" value="1" id="chechkbox-1" onclick='chkcontrol(0)'>
                                    <label class="" for="chechkbox-1">Ha realizado análisis de ciclo de vida a productos</label>
                                </div>
                                <div class="check-box">
                                    <input name="" class="" type="checkbox" value="2" id="chechkbox-2" onclick='chkcontrol(0)'>
                                    <label class="" for="chechkbox-2">Ha incorporado principios de ecodiseño</label>
                                </div>
                                <div class="check-box">
                                    <input name="" class="" type="checkbox" value="3" id="chechkbox-3" onclick='chkcontrol(0)'>
                                    <label class="" for="chechkbox-3">Ha rediseñado productos con fin de disminuir la huella de carbono generada <a class="btn_ayuda_01" href="#" data-placement="top" data-toggle="tooltip" title="Es un indicador del impacto que una actividad o proceso tiene sobre el cambio climático, es el conjunto de emisiones de gases de efecto invernadero producidas, directa o indirectamente, por personas, organizaciones, productos, eventos o regiones geográficas, en términos de CO2 equivalentes. Se divide en alcance 1, 2 y 3."><img class="btn_ayuda" src="assets/image/btn_ayuda.svg" alt="ayuda"></a></label>
                                </div>
                                <div class="check-box">
                                    <input name="" class="" type="checkbox" value="4" id="chechkbox-4" onclick='chkcontrol(0)'>
                                    <label class="" for="chechkbox-4">Ha cambiado material virgen por material reciclado en sus productos</label>
                                </div>
                                <div class="check-box">
                                    <input name="" class="" type="checkbox" value="5" id="chechkbox-5" onclick='chkcontrol(0)'>
                                    <label class="" for="chechkbox-5">Ha hecho plan para la disposición correcta de los residuos de su producto</label>
                                </div>
                                <div class="check-box">
                                    <input name="" class="" type="checkbox" value="5" id="chechkbox-6" onclick='chkcontrol(0)'>
                                    <label class="" for="chechkbox-6">Ninguna de las anteriores</label>
                                </div>
                                <div class="check-box">
                                    <input name="" class="" type="checkbox" value="5" id="chechkbox-7" onclick='chkcontrol(0)'>
                                    <label class="" for="chechkbox-7">No aplica para nuestro rubro (servicios)</label>
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
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 69.05%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>PAG 29/42</p>
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
        var nro_preg = 29;
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
            $preg = 26;
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
                    field: 'p26-1',
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
                    field: 'p26-2',
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
                    field: 'p26-3',
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
                    field: 'p26-4',
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
                    field: 'p26-5',
                    value: val,
                    id: '<?php echo $_GET["eid"] ?>'
                }
            });
        });

        $('#chechkbox-7').change(function() {
            var val;
            if (this.checked) {
                val = "Si";
                $('#chechkbox-1').prop("checked", false);
                $('#chechkbox-2').prop("checked", false);
                $('#chechkbox-3').prop("checked", false);
                $('#chechkbox-4').prop("checked", false);
                $('#chechkbox-5').prop("checked", false);
                $('#chechkbox-6').prop("checked", false);
            } else {
                val = "No";
            }
            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p26-7',
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
                $('#chechkbox-1').trigger("change");
                $('#chechkbox-2').trigger("change");
                $('#chechkbox-3').trigger("change");
                $('#chechkbox-4').trigger("change");
                $('#chechkbox-5').trigger("change");
                $('#chechkbox-7').trigger("change");
                $(this).prop("checked", true);
            } else {
                val = "No";
                $('#chechkbox-6').prop("checked", false);
            }



            $.ajax({
                url: 'api/updateField.php',
                type: 'POST',
                data: {
                    field: 'p26-6',
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
                    !chechkbox_5 && !chechkbox_6 && !chechkbox_7)) {
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