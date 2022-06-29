<?php
include('assets/header.php');
include('include/dbselect.php');
?>
<section>
    <div class="container">
        <div class="row botonera">
            <div class="col-12 volver">
                <a href="listing-business.php">Volver</a>
            </div>
        </div>
    </div>
</section>
<?php
$sql = "SELECT * FROM encuesta WHERE ID = '{$_GET['eid']}'";
$result = mysqli_query($db, $sql);
$preguntas = mysqli_fetch_assoc($result);

?>
<section id="contenidos">
    <div class="container cont-checkbox" style="overflow: scroll; height: 68vh">
        <div class="row info-org">
            <!-- TITULO -->
            <div class="col-4 datos-empresa">
                <h5>Nombre de Empresa</h5>
            </div>
            <div class="col-4 datos-empresa">
                <h5>Nombre y Apellido</h5>
            </div>
            <div class="col-4 datos-empresa">
                <h5>Correo Electrónico</h5>
            </div>

            <!-- DATOS -->
            <div class="col-4 datos-empresa">
                <h4><?php echo $preguntas['empresa'] ?></h4>
            </div>
            <div class="col-4 datos-empresa">
                <h4><?php echo $preguntas['nombre'] ?></h4>
            </div>
            <div class="col-4 datos-empresa">
                <h4><?php echo $preguntas['email'] ?></h4>
            </div>

            <!-- TITULO -->
            <div class="col-4 datos-empresa">
                <h5>RUT</h5>
            </div>
            <div class="col-4 datos-empresa">
                <h5>Pais</h5>
            </div>
            <div class="col-4 datos-empresa">
                <h5>Region</h5>
            </div>

            <!-- DATOS -->
            <div class="col-4 datos-empresa">
                <h4><?php echo $preguntas['rut'] ?></h4>
            </div>
            <div class="col-4 datos-empresa">
                <h4><?php echo $preguntas['pais'] ?></h4>
            </div>

            <div class="col-4 datos-empresa">
                <h4><?php echo $preguntas['region'] ?></h4>
            </div>
        </div>

        <!-- CONTENIDO DE RESPUESTA REALIZADAS -->

        <!-- PREGUNTA 01 -->
        <div class="row preguntas-view">
            <div class="col-6 titulo-pregunta">
                <h4>Número de Trabajadores/as</h4>
            </div>
            <div class="col-6 respuesta">
                <select name="trabajadores" id="selectemployed2" disabled>
                    <option value="De 0 a 9" <?php echo getSelected($preguntas, "De 0 a 9", "nroempleado") ?>>De 0 a 9</option>
                    <option value="De 10 a 49" <?php echo getSelected($preguntas, "De 10 a 49", "nroempleado") ?>>De 10 a 49</option>
                    <option value="De 50 a 199" <?php echo getSelected($preguntas, "De 50 a 199", "nroempleado") ?>>De 50 a 199</option>
                    <option value="De 200 a 300" <?php echo getSelected($preguntas, "De 200 a 300", "nroempleado") ?>>De 200 a 300</option>
                    <option value="De 301 a más" <?php echo getSelected($preguntas, "De 301 a más", "nroempleado") ?>>De 301 a más</option>
                </select>
            </div>
            <?php
            function getCheckedLike($row, $value, $field)
            {

                if (strpos($row[$field], $value) > 0) {
                    return "checked";
                } else {
                    return "";
                }
            }

            function getChecked($row, $value, $field)
            {
                if ($row[$field] == $value) {
                    return "checked";
                } else {
                    return "";
                }
            }

            function getCheckedOther($row, $value, $field)
            {
                if ($row[$field] <> '' && $row[$field] <> 'No') {
                    return "checked";
                } else {
                    return "";
                }
            }

            function getCheckedOtherText($row, $field)
            {
                if ($row[$field] <> '' && $row[$field] <> 'No') {
                    return $row[$field];
                } else {
                    return "";
                }
            }

            function getSelected($row, $value, $field)
            {
                if ($row[$field] == $value) {
                    return "selected";
                } else {
                    return "";
                }
            }
            ?>

            <div class="col-12 titulo-pregunta">
                <h4>Según sus ingresos anuales, indique a que tipo de empresa pertenece:</h4>
            </div>
            <br>
            <div class="col-12 ">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="ckb" class="cb" type="checkbox" value="1" id="chechkbox2-1" onclick='chkcontrol(0)' <?php echo getCheckedLike($preguntas, "2.400", "tamano") ?> disabled>
                        <label class="" for="chechkbox-1">
                            Empresa micro o (ingresos por ventas de hasta 2.400 UF anual)
                        </label>
                    </div>
                    <div class="check-box-view">
                        <input name="ckb" class="cb" type="checkbox" value="2" id="chechkbox2-2" onclick='chkcontrol(1)' <?php echo getCheckedLike($preguntas, "2.401", "tamano") ?> disabled>
                        <label class="" for="chechkbox-2">
                            Empresa pequeña ( ingresos por ventas sobre 2.401 UF hasta 25.000 UF anual)
                        </label>
                    </div>
                    <div class="check-box-view">
                        <input name="ckb" class="cb" type="checkbox" value="3" id="chechkbox2-3" onclick='chkcontrol(2)' <?php echo getCheckedLike($preguntas, "mediana", "tamano") ?> disabled>
                        <label class="" for="chechkbox-3">
                            Empresa mediana (ingresos por ventas sobre 25.001 UF hasta 100.000 UF anual)
                        </label>
                    </div>
                    <div class="check-box-view">
                        <input name="ckb" class="cb" type="checkbox" value="4" id="chechkbox2-4" onclick='chkcontrol(3)' <?php echo getCheckedLike($preguntas, "grande", "tamano") ?> disabled>
                        <label class="" for="chechkbox-4">
                            Empresa grande (ingresos por ventas por sobre 100.000 UF anual)
                        </label>
                    </div>
                </form>
            </div>
        </div>
        <!-- PREGUNTA 02 -->
        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>Indique su rubro:</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="ckb" class="" type="checkbox" value="1" id="chechkbox-1" onclick='chkcontrol(0)' <?php echo getChecked($preguntas, "Actividades de extracción de Recursos Naturales", "rubro") ?> disabled>
                        <label class="" for="chechkbox-1">Actividades de extracción de Recursos Naturales</label>
                    </div>
                    <div class="check-box-view">
                        <input name="ckb" class="" type="checkbox" value="2" id="chechkbox-2" onclick='chkcontrol(1)' <?php echo getChecked($preguntas, "Energías Renovables (ERNC)", "rubro") ?> disabled>
                        <label class="" for="chechkbox-2">Energías Renovables (ERNC)</label>
                    </div>
                    <div class="check-box-view">
                        <input name="ckb" class="" type="checkbox" value="3" id="chechkbox-3" onclick='chkcontrol(2)' <?php echo getChecked($preguntas, "Gastronomía", "rubro") ?> disabled>
                        <label class="" for="chechkbox-3">Gastronomía</label>
                    </div>
                    <div class="check-box-view">
                        <input name="ckb" class="" type="checkbox" value="4" id="chechkbox-4" onclick='chkcontrol(3)' <?php echo getChecked($preguntas, "Gestión de residuos", "rubro") ?> disabled>
                        <label class="" for="chechkbox-4">Gestión de residuos</label>
                    </div>
                    <div class="check-box-view">
                        <input name="ckb" class="" type="checkbox" value="5" id="chechkbox-5" onclick='chkcontrol(4)' <?php echo getChecked($preguntas, "Medios de comunicación", "rubro") ?> disabled>
                        <label class="" for="chechkbox-5">Medios de comunicación</label>
                    </div>
                    <div class="check-box-view">
                        <input name="ckb" class="" type="checkbox" value="6" id="chechkbox-6" onclick='chkcontrol(5)' <?php echo getChecked($preguntas, "Petróleo y gas", "rubro") ?> disabled>
                        <label class="" for="chechkbox-6">Petróleo y gas</label>
                    </div>
                    <div class="check-box-view">
                        <input name="ckb" class="" type="checkbox" value="7" id="chechkbox-7" onclick='chkcontrol(6)' <?php echo getChecked($preguntas, "Productos agrícolas", "rubro") ?> disabled>
                        <label class="" for="chechkbox-7">Productos agrícolas</label>
                    </div>
                    <div class="check-box-view">
                        <input name="ckb" class="" type="checkbox" value="8" id="chechkbox-8" onclick='chkcontrol(7)' <?php echo getChecked($preguntas, "Productos físicos que incluyen envases", "rubro") ?> disabled>
                        <label class="" for="chechkbox-8">Productos físicos que incluyen envases</label>
                    </div>
                    <div class="check-box-view">
                        <input name="ckb" class="" type="checkbox" value="9" id="chechkbox-9" onclick='chkcontrol(8)' <?php echo getChecked($preguntas, "Reconversión de residuos industriales", "rubro") ?> disabled>
                        <label class="" for="chechkbox-9">Reconversión de residuos industriales</label>
                    </div>
                    <div class="check-box-view">
                        <input name="ckb" class="" type="checkbox" value="10" id="chechkbox-10" onclick='chkcontrol(9)' <?php echo getChecked($preguntas, "Sector farmacéutico", "rubro") ?> disabled>
                        <label class="" for="chechkbox-10">Sector farmacéutico</label>
                    </div>
                    <div class="check-box-view">
                        <input name="ckb" class="" type="checkbox" value="11" id="chechkbox-11" onclick='chkcontrol(10)' <?php echo getChecked($preguntas, "Servicios", "rubro") ?> disabled>
                        <label class="" for="chechkbox-11">Servicios</label>
                    </div>
                    <div class="check-box-view">
                        <input name="ckb" class="" type="checkbox" value="12" id="chechkbox-12" onclick='chkcontrol(11)' <?php echo getChecked($preguntas, "Servicios bancarios y financieros", "rubro") ?> disabled>
                        <label class="" for="chechkbox-12">Servicios bancarios y financieros</label>
                    </div>
                    <div class="check-box-view">
                        <input name="ckb" class="" type="checkbox" value="13" id="chechkbox-13" onclick='chkcontrol(12)' <?php echo getChecked($preguntas, "Tecnologías de la información y la comunicación", "rubro") ?> disabled>
                        <label class="" for="chechkbox-13">Tecnologías de la información y la comunicación</label>
                    </div>
                    <div class="check-box-view">
                        <input name="ckb" class="" type="checkbox" value="14" id="chechkbox-14" onclick='chkcontrol(13)' <?php echo getChecked($preguntas, "Turismo", "rubro") ?> disabled>
                        <label class="" for="chechkbox-14">Turismo</label>
                    </div>

                    <div class="input-group mb-3 check-text">
                        <div class="check-box-view">
                            <input name="ckb" class="form-check-input mt-3" type="checkbox" value="15" aria-label="Checkbox for following text input" id="chechkbox-15" onclick='chkcontrol(14)' disabled>
                            <label class="" for="chechkbox-15">Otro: </label>
                        </div>
                        <input id='other' type="text" class="form-control" aria-label="Text input with checkbox">
                    </div>

                </form>
            </div>
        </div>

        <!-- PREGUNTA 03 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Su empresa cuenta con una misión o propósito formal?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="">
                    <div class="check-box-view" id="seeAnotherField">
                        <input class="" name="check" type="checkbox" value="1" id="chechkbox4-1" onclick="onlyOne(this)" <?php echo getChecked($preguntas, "Si", "p1-1") ?> disabled>
                        <label class="" for="chechkbox-1">Si</label>
                    </div>
                    <div class="check-box-view" id="seeAnotherField-1">
                        <input class="" name="check" type="checkbox" value="2" id="chechkbox4-2" onclick="onlyOne(this)" <?php echo getChecked($preguntas, "No", "p1-1") ?> disabled>
                        <label class="" for="chechkbox-2">No</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 04 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>La misión o propósito cuenta con objetivo(s) sociales y/o ambiental(es) específico(s)</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="">
                    <div class="check-box-view" id="seeAnotherField">
                        <input class="" name="check" type="checkbox" value="1" id="chechkbox4-1" onclick="onlyOne(this)" <?php echo getChecked($preguntas, "Si", "p1-2") ?> disabled>
                        <label class="" for="chechkbox-1">Si</label>
                    </div>
                    <div class="check-box-view" id="seeAnotherField-1">
                        <input class="" name="check" type="checkbox" value="2" id="chechkbox4-2" onclick="onlyOne(this)" <?php echo getChecked($preguntas, "No", "p1-2") ?> disabled>
                        <label class="" for="chechkbox-2">No</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 05 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Cuáles de las siguientes prácticas aplica su empresa para promover la ética en la toma de decisiones y prevenir la corrupción?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="group1" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p2-1") ?> disabled>
                        <label class="" for="chechkbox-1">La empresa tiene un código de ética formalizado por escrito</label>
                    </div>

                    <div class="check-box-view">
                        <input name="" class="group1" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p2-2") ?> disabled>
                        <label class="" for="chechkbox-2">La empresa cuenta con un código anticorrupción</label>
                    </div>

                    <div class="check-box-view">
                        <input name="" class="group1" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p2-3") ?> disabled>
                        <label class="" for="chechkbox-3">La empresa tiene una política de denuncias formalizada por escrito</label>
                    </div>

                    <div class="check-box-view">
                        <input name="" class="group1" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p2-4") ?> disabled>
                        <label class="" for="chechkbox-4">La empresa implementa controles financieros internos</label>
                    </div>

                    <div class="check-box-view">
                        <input name="" class="group1" type="checkbox" value="5" id="chechkbox-5" <?php echo getChecked($preguntas, "Si", "p2-5") ?> disabled>
                        <label class="" for="chechkbox-5">La empresa realizó una evaluación de riesgos relacionados con cuestiones éticas en los últimos dos años</label>
                    </div>

                    <div class="input-group mb-3 check-text">
                        <div class="check-box-view">
                            <input name="ckb" class="form-check-input mt-3" type="checkbox" value="6" <?php echo getCheckedOther($preguntas, "Si", "p2-6") ?> disabled aria-label="Checkbox for following text input" id="chechkbox-6">
                            <label class="" for="chechkbox-6">Otra: <?php echo getCheckedOtherText($preguntas, "p2-6") ?></label>
                        </div>
                        <input id='other' type="text" class="form-control" aria-label="Text input with checkbox">
                    </div>

                    <div class="check-box-view">
                        <input name="" class="enable" type="checkbox" value="7" id="chechkbox-7" <?php echo getChecked($preguntas, "Si", "p2-7") ?> disabled>
                        <label class="" for="chechkbox-7">Ninguna de las anteriores</label>
                    </div>

                </form>
            </div>
        </div>

        <!-- PREGUNTA 06 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿De qué manera la empresa identifica, mide y gestiona las problemáticas sociales y ambientales más significativas relacionados con sus operaciones y su modelo de negocio?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" onclick='chkcontrol(0)' <?php echo getChecked($preguntas, "Si", "p3-1") ?> disabled>
                        <label class="" for="chechkbox-1">Hemos realizado una evaluación de <strong>materialidad</strong> utilizando mecanismos de involucramiento de los grupos de interesados.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" onclick='chkcontrol(0)' <?php echo getChecked($preguntas, "Si", "p3-2") ?> disabled>
                        <label class="" for="chechkbox-2">La empresa ha identificado y medido las métricas en función de los resultados de la evaluación de materialidad.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" onclick='chkcontrol(0)' <?php echo getChecked($preguntas, "Si", "p3-3") ?> disabled>
                        <label class="" for="chechkbox-3">Realizamos un seguimiento de los indicadores de impacto que hemos elegido en función de la misión de la empresa o de la decisión de los directivos.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" onclick='chkcontrol(0)' <?php echo getChecked($preguntas, "Si", "p3-4") ?> disabled>
                        <label class="" for="chechkbox-4">Hemos establecido objetivos de desempeño para todos los temas y las mediciones identificados como significativos.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="5" id="chechkbox-5" onclick='chkcontrol(0)' <?php echo getChecked($preguntas, "Si", "p3-5") ?> disabled>
                        <label class="" for="chechkbox-5">Hemos desarrollado una Estrategia de Sostenibilidad.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="6" id="chechkbox-6" onclick='chkcontrol(0)' <?php echo getChecked($preguntas, "Si", "p3-6") ?> disabled>
                        <label class="" for="chechkbox-6">Implementamos Reportes de Sostenibilidad.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="7" id="chechkbox-7" onclick='chkcontrol(0)' <?php echo getChecked($preguntas, "Si", "p3-7") ?> disabled>
                        <label class="" for="chechkbox-7">Ninguna de las anteriores</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 07 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Su empresa cuenta con un directorio formal?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="">
                    <div class="check-box-view" id="seeAnotherField">
                        <input class="" name="check" type="checkbox" value="1" id="chechkbox-1" onclick="onlyOne(this)" <?php echo getChecked($preguntas, "Si", "p4-1") ?> disabled>
                        <label class="" for="chechkbox-1">Si</label>
                    </div>
                    <div class="check-box-view" id="seeAnotherField-1">
                        <input class="" name="check" type="checkbox" value="2" id="chechkbox-2" onclick="onlyOne(this)" <?php echo getChecked($preguntas, "No", "p4-1") ?> disabled>
                        <label class="" for="chechkbox-2">No</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 08 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>Incluye al menos una persona</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method=" post">
                    <div class="check-box-view">
                        <input class="" name="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p4-2") ?> disabled>
                        <label class="" for="chechkbox-3"><strong>Independiente</strong></label>
                    </div>
                    <div class="check-box-view">
                        <input class="" name="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p4-3") ?> disabled>
                        <label class="" for="chechkbox-4">Migrante</label>
                    </div>
                    <div class="check-box-view">
                        <input class="" name="" type="checkbox" value="5" id="chechkbox-5" <?php echo getChecked($preguntas, "Si", "p4-4") ?> disabled>
                        <label class="" for="chechkbox-5">Mujer</label>
                    </div>
                    <div class="check-box-view">
                        <input class="" name="" type="checkbox" value="6" id="chechkbox-6" <?php echo getChecked($preguntas, "Si", "p4-5") ?> disabled>
                        <label class="" for="chechkbox-6">Persona parte de la comunidad LGTBQ+</label>
                    </div>
                    <div class="check-box-view">
                        <input class="" name="" type="checkbox" value="7" id="chechkbox-7" <?php echo getChecked($preguntas, "Si", "p4-6") ?> disabled>
                        <label class="" for="chechkbox-7">Ninguna de las anteriores</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 09 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Qué información es comunicada de manera pública y transparente por la empresa?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" onclick='chkcontrol(0)' <?php echo getChecked($preguntas, "Si", "p5-1") ?> disabled>
                        <label class="" for="chechkbox-1"><strong>Titularidad Real</strong></label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" onclick='chkcontrol(0)' <?php echo getChecked($preguntas, "Si", "p5-2") ?> disabled>
                        <label class="" for="chechkbox-2">Desempeño financiero</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" onclick='chkcontrol(0)' <?php echo getChecked($preguntas, "Si", "p5-3") ?> disabled>
                        <label class="" for="chechkbox-3">Desempeño social y ambiental (Reporte de Impacto)</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" onclick='chkcontrol(0)' <?php echo getChecked($preguntas, "Si", "p5-4") ?> disabled>
                        <label class="" for="chechkbox-4">Miembros del directorio (Junta Directiva)</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="6" id="chechkbox-6" onclick='chkcontrol(0)' <?php echo getChecked($preguntas, "Si", "p5-6") ?> disabled>
                        <label class="" for="chechkbox-6">Ninguna de las anteriores</label>
                    </div>
                    <div class="input-group mb-3 check-text">
                        <div class="check-box-view">
                            <input name="ckb" class="form-check-input mt-3" type="checkbox" value="5" <?php echo getCheckedOther($preguntas, "Si", "p5-5") ?> disabled aria-label="Checkbox for following text input" id="chechkbox-5">
                            <label class="" for="chechkbox-5">Otra: <?php echo getCheckedOtherText($preguntas, "p5-5") ?></label>
                        </div>
                        <input id='other' type="text" class="form-control" aria-label="Text input with checkbox">
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 10 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Cuenta con un manual de trabajadores que contenga toda la información que implique alguna incidencia en la experiencia de los/as trabajadores/as: beneficios, reglas, mecanismos, derechos y deberes?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="">
                    <div class="check-box-view" id="seeAnotherField">
                        <input class="" name="check" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p6-1") ?> disabled>
                        <label class="" for="chechkbox-1">Si</label>
                    </div>
                    <div class="check-box-view" id="seeAnotherField-1">
                        <input class="" name="check" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "No", "p6-1") ?> disabled>
                        <label class="" for="chechkbox-2">No</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 11 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Realiza instancias de socialización del manual o políticas de trabajadores/as?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="">
                    <div class="check-box-view" id="seeAnotherField">
                        <input class="" name="check" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p6-2") ?> disabled>
                        <label class="" for="chechkbox-1">Si</label>
                    </div>
                    <div class="check-box-view" id="seeAnotherField-1">
                        <input class="" name="check" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "No", "p6-2") ?> disabled>
                        <label class="" for="chechkbox-2">No</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 12 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Cómo asegura la no discriminación en su empresa?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p7-1") ?> disabled>
                        <label class="" for="chechkbox-1">Cuenta con una declaración formal o política de No Discriminación (por ejemplo en el Manual de Trabajadores).</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p7-2") ?> disabled>
                        <label class="" for="chechkbox-2">Tiene una declaración sobre compromiso con inclusión y equidad.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p7-3") ?> disabled>
                        <label class="" for="chechkbox-3">Cuenta con una Política contra el acoso que contenga mecanismos de denuncia interna.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p7-4") ?> disabled>
                        <label class="" for="chechkbox-4">Las descripciones de las tareas internas en la empresa tienen un lenguaje inclusivo y equitativo.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="5" id="chechkbox-5" <?php echo getChecked($preguntas, "Si", "p7-5") ?> disabled>
                        <label class="" for="chechkbox-5">Los procesos de búsquedas para nuevas contrataciones tienen un mensaje de compromiso con la diversidad, equidad e inclusión.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="6" id="chechkbox-6" <?php echo getChecked($preguntas, "Si", "p7-6") ?> disabled>
                        <label class="" for="chechkbox-6">Se evalúan las instalaciones de la empresa en sus distintas áreas, identificando posibles brechas de accesibilidad y potenciales mejoras.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="7" id="chechkbox-7" <?php echo getChecked($preguntas, "Si", "p7-7") ?> disabled>
                        <label class="" for="chechkbox-7">Cuenta con al menos 1 baño neutro en cada instalación.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="8" id="chechkbox-8" <?php echo getChecked($preguntas, "Si", "p7-8") ?> disabled>
                        <label class="" for="chechkbox-8">Ninguna de las anteriores.</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 13 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Cuenta con bandas claras de sueldos, que les permita reconocer posiciones en concordancia con rentas dignas y acorde a la realidad interna y del mercado?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="ckb" class="cb" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p8-1") ?> disabled>
                        <label class="" for="chechkbox-1">
                            Si
                        </label>
                    </div>
                    <div class="check-box-view">
                        <input name="ckb" class="cb" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "No", "p8-1") ?> disabled>
                        <label class="" for="chechkbox-2">
                            No
                        </label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 14 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Monitorea de forma periódica la brecha de salario de sus trabajadores según...?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p9-1") ?> disabled>
                        <label class="" for="chechkbox-1">Cargo</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p9-2") ?> disabled>
                        <label class="" for="chechkbox-2">Género</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p9-3") ?> disabled>
                        <label class="" for="chechkbox-3">Edad</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p9-4") ?> disabled>
                        <label class="" for="chechkbox-4">Ninguna de las anteriores</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 15 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Cuenta con un Protocolo que establezca el mecanismo y los criterios para definir cómo se toman las decisiones respeto a las capacitaciones; quienes se capacitan, cómo se solicita apoyo, en qué tipos de capacitaciones la empresa apoya, etc.?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="ckb" class="cb" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p10-1") ?> disabled>
                        <label class="" for="chechkbox-1">
                            Si
                        </label>
                    </div>
                    <div class="check-box-view">
                        <input name="ckb" class="cb" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "No", "p10-1") ?> disabled>
                        <label class="" for="chechkbox-2">
                            No
                        </label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 16 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Cuenta con un Presupuesto Anual para capacitaciones?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="ckb" class="cb" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p11-1") ?> disabled>
                        <label class="" for="chechkbox-1">
                            Si
                        </label>
                    </div>
                    <div class="check-box-view">
                        <input name="ckb" class="cb" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "No", "p11-1") ?> disabled>
                        <label class="" for="chechkbox-2">
                            No
                        </label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 17 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Mide el clima laboral de forma anual en su empresa?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="">
                    <div class="check-box-view" id="seeAnotherField">
                        <input class="" name="check" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p12-1") ?> disabled>
                        <label class="" for="chechkbox-1">Si</label>
                    </div>
                    <div class="check-box-view" id="seeAnotherField-1">
                        <input class="" name="check" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "No", "p12-1") ?> disabled>
                        <label class="" for="chechkbox-2">No</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 18 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Gestiona de alguna manera políticas o programas según los resultados de la Encuesta de Clima?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="">
                    <div class="check-box-view" id="seeAnotherField">
                        <input class="" name="check" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p12-2") ?> disabled>
                        <label class="" for="chechkbox-1">Si</label>
                    </div>
                    <div class="check-box-view" id="seeAnotherField-1">
                        <input class="" name="check" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "No", "p12-2") ?> disabled>
                        <label class="" for="chechkbox-2">No</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 19 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Comparte los resultados de la encuesta de clima con sus trabajadores?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="">
                    <div class="check-box-view" id="seeAnotherField">
                        <input class="" name="check" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p12-3") ?> disabled>
                        <label class="" for="chechkbox-1">Si</label>
                    </div>
                    <div class="check-box-view" id="seeAnotherField-1">
                        <input class="" name="check" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "No", "p12-3") ?> disabled>
                        <label class="" for="chechkbox-2">No</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 20 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Cuenta con un modelo de gestión del desempeño que permita establecer un plan de acompañamiento y desarrollo de carrera?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="">
                    <div class="check-box-view" id="seeAnotherField">
                        <input class="" name="check" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p13-1") ?> disabled>
                        <label class="" for="chechkbox-1">Si</label>
                    </div>
                    <div class="check-box-view" id="seeAnotherField-1">
                        <input class="" name="check" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "No", "p13-1") ?> disabled>
                        <label class="" for="chechkbox-2">No</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 21 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Capacita y promueve formalmente el uso de las evaluaciones de desempeño y la retroalimentación por parte de la Jefaturas y Gerentes con sus equipos?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="">
                    <div class="check-box-view" id="seeAnotherField">
                        <input class="" name="check" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p13-2") ?> disabled>
                        <label class="" for="chechkbox-1">Si</label>
                    </div>
                    <div class="check-box-view" id="seeAnotherField-1">
                        <input class="" name="check" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "No", "p13-2") ?> disabled>
                        <label class="" for="chechkbox-2">No</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 22 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Qué métodos utiliza la empresa para evaluar el impacto social o ambiental de sus proveedores?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p14-1") ?> disabled>
                        <label class="" for="chechkbox-1">La empresa comparte políticas o reglas con sus proveedores, pero no cuenta con un proceso de verificación.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p14-2") ?> disabled>
                        <label class="" for="chechkbox-2">La empresa exige que los proveedores completen una evaluación diseñada internamente.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p14-3") ?> disabled>
                        <label class="" for="chechkbox-3">Una entidad externa realiza auditorías o evaluaciones de rutina de los proveedores de la empresa al menos una vez cada dos años.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p14-4") ?> disabled>
                        <label class="" for="chechkbox-4">La empresa realiza auditorías o evaluaciones de rutina de sus proveedores al menos cada dos años.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="5" id="chechkbox-5" <?php echo getChecked($preguntas, "Si", "p14-5") ?> disabled>
                        <label class="" for="chechkbox-5">La empresa utiliza herramientas de evaluación de riesgos o de impacto creadas por entidades independientes (como Sedex o la Evaluación de Impacto B)</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="6" id="chechkbox-6" <?php echo getChecked($preguntas, "Si", "p14-6") ?> disabled>
                        <label class="" for="chechkbox-6">Ninguna de las anteriores</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 23 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Cuáles de los siguientes criterios relacionados con las prácticas y el desempeño social o ambiental de sus proveedores se evalúan formalmente?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p15-1") ?> disabled>
                        <label class="" for="chechkbox-1">Cumplimiento de las leyes y regulaciones locales, incluidas aquellas relacionadas con el desempeño social y ambiental.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p15-2") ?> disabled>
                        <label class="" for="chechkbox-2">Buenas prácticas de gobernanza, incluidas políticas relacionadas con la ética y la corrupción.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p15-3") ?> disabled>
                        <label class="" for="chechkbox-3">Prácticas positivas que excedan los requisitos normativos (p. ej., procesos de fabricación que no dañen el medioambiente, excelentes prácticas laborales, etc.).</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p15-4") ?> disabled>
                        <label class="" for="chechkbox-4">Certificaciones otorgadas por organismos independientes que acreditan un buen desempeño social y/o ambiental.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="5" id="chechkbox-5" <?php echo getChecked($preguntas, "Si", "p15-5") ?> disabled>
                        <label class="" for="chechkbox-5">Ninguna de las anteriores.</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 24 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Qué porcentaje de los gastos de la empresa (excluyendo gastos laborales) fue incurrido con proveedores locales independientes, es decir, en la misma zona geográfica que la casa central o los centros estratégicos de la empresa durante el último año fiscal?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="ckb" class="cb" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p16-1") ?> disabled>
                        <label class="" for="chechkbox-1">
                            0- 20%
                        </label>
                    </div>
                    <div class="check-box-view">
                        <input name="ckb" class="cb" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p16-2") ?> disabled>
                        <label class="" for="chechkbox-2">
                            20-39%
                        </label>
                    </div>
                    <div class="check-box-view">
                        <input name="ckb" class="cb" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p16-3") ?> disabled>
                        <label class="" for="chechkbox-3">
                            40-59%
                        </label>
                    </div>
                    <div class="check-box-view">
                        <input name="ckb" class="cb" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p16-4") ?> disabled>
                        <label class="" for="chechkbox-4">
                            Más del 60%
                        </label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 25 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Cuáles de los siguientes programas o políticas son implementados por la empresa para promover la diversidad en la cadena de suministro?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p17-1") ?> disabled>
                        <label class="" for="chechkbox-1">La empresa monitorea la diversidad en la participación societaria de sus proveedores</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p17-2") ?> disabled>
                        <label class="" for="chechkbox-2">La empresa tiene una política que documenta la preferencia por aquellos proveedores cuyos propietarios pertenecen a grupos subrepresentados</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p17-3") ?> disabled>
                        <label class="" for="chechkbox-3">La empresa tiene metas formales en cuanto al porcentaje específico de compras a proveedores con mayor diversidad entre sus propietarios</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p17-4") ?> disabled>
                        <label class="" for="chechkbox-4">La empresa tiene un programa formal para comprar y dar asistencia a proveedores con mayor diversidad entre sus propietarios</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="5" id="chechkbox-5" <?php echo getChecked($preguntas, "Si", "p17-5") ?> disabled>
                        <label class="" for="chechkbox-5">NO APLICA: Recopilar datos de los proveedores o tener políticas que den tratamiento preferencial a ciertos proveedores es ilegal en el país donde opera la empresa </label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="6" id="chechkbox-6" <?php echo getChecked($preguntas, "Si", "p17-6") ?> disabled>
                        <label class="" for="chechkbox-6">Ninguna de las anteriores</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 26 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Cuáles de las siguientes prácticas de participación cívica implementa la empresa?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p18-1") ?> disabled>
                        <label class="" for="chechkbox-1">Donaciones financieras o en especie (sin incluir causas políticas).</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p18-2") ?> disabled>
                        <label class="" for="chechkbox-2">Inversiones destinadas a la comunidad</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p18-3") ?> disabled>
                        <label class="" for="chechkbox-3">Servicio comunitario o pro bono</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p18-4") ?> disabled>
                        <label class="" for="chechkbox-4">Adopción de políticas o prácticas para promover un mejor desempeño social o ambiental</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="5" id="chechkbox-5" <?php echo getChecked($preguntas, "Si", "p18-5") ?> disabled>
                        <label class="" for="chechkbox-5">Asociaciones con organizaciones benéficas o participación en organizaciones comunitarias</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="6" id="chechkbox-6" <?php echo getChecked($preguntas, "Si", "p18-6") ?> disabled>
                        <label class="" for="chechkbox-6">Descuentos en productos o servicios para grupos desfavorecidos específicos</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="7" id="chechkbox-7" <?php echo getChecked($preguntas, "Si", "p18-7") ?> disabled>
                        <label class="" for="chechkbox-7">La empresa otorga participación societaria o accionaria a una organización sin fines de lucro</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="8" id="chechkbox-8" <?php echo getChecked($preguntas, "Si", "p18-8") ?> disabled>
                        <label class="" for="chechkbox-8">Ninguna de las anteriores</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 27 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Cuál de las acciones ha desarrollado respecto a sus comunidades aledañas?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p19-1") ?> disabled>
                        <label class="" for="chechkbox-1">Mapeo de grupos de interés</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p19-2") ?> disabled>
                        <label class="" for="chechkbox-2">Análisis de materialidad</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p19-3") ?> disabled>
                        <label class="" for="chechkbox-3">Diagnóstico comunitario </label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p19-4") ?> disabled>
                        <label class="" for="chechkbox-4">Apoyo o financiamiento ocasional en el desarrollo de proyectos comunitarios</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="5" id="chechkbox-5" <?php echo getChecked($preguntas, "Si", "p19-5") ?> disabled>
                        <label class="" for="chechkbox-5">Política/Programa de relacionamiento comunitario</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="6" id="chechkbox-6" <?php echo getChecked($preguntas, "Si", "p19-6") ?> disabled>
                        <label class="" for="chechkbox-6">Ninguna de las anteriores</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 28 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿De qué forma su organización aborda las brechas de género?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p20-1") ?> disabled>
                        <label class="" for="chechkbox-1">La organización cuenta con un comité de equidad. </label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p20-2") ?> disabled>
                        <label class="" for="chechkbox-2">La organización cuenta con una política de proveedores/as que facilite la participación de empresas lideradas por mujeres o que sean propiedad de mujeres.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p20-3") ?> disabled>
                        <label class="" for="chechkbox-3">Promueven formalmente una cultura pro-equidad, trabajando los sesgos inconscientes, la conciliación de la vida laboral, familiar y personal y, prácticas específicas que aseguren la equidad dentro de la organización.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p20-4") ?> disabled>
                        <label class="" for="chechkbox-4">Contempla programas de formación en liderazgo para mujeres.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="5" id="chechkbox-5" <?php echo getChecked($preguntas, "Si", "p20-5") ?> disabled>
                        <label class="" for="chechkbox-5">Asegura cuotas para presencia de Mujeres en cargos de alta dirección: gerencias, subgerencias y directorios.</label>
                    </div>
                    <div class="input-group mb-3 check-text">
                        <div class="check-box-view">
                            <input name="ckb" class="form-check-input mt-3" type="checkbox" value="6" <?php echo getCheckedOther($preguntas, "Si", "p20-6") ?> disabled aria-label="Checkbox for following text input" id="chechkbox-6">
                            <label class="" for="chechkbox-6">Otra: </label>
                        </div>
                        <input id='other' value='<?php echo getCheckedOtherText($preguntas, "p20-6") ?>' type="text" class="form-control" aria-label="Text input with checkbox">
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="7" id="chechkbox-7" <?php echo getChecked($preguntas, "Si", "p20-7") ?>>
                        <label class="" for="chechkbox-7">Ninguna de las anteriores</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 29 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Alguno de los siguientes recursos naturales es un insumo clave o se ve impactado en su proceso productivo?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p21-1") ?> disabled>
                        <label class="" for="chechkbox-1">Agua</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p21-2") ?> disabled>
                        <label class="" for="chechkbox-2">Aire</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p21-3") ?> disabled>
                        <label class="" for="chechkbox-3">Suelo</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p21-4") ?> disabled>
                        <label class="" for="chechkbox-4">Flora o vegetación</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="5" id="chechkbox-5" <?php echo getChecked($preguntas, "Si", "p21-5") ?> disabled>
                        <label class="" for="chechkbox-5">Fauna o animales</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="6" id="chechkbox-6" <?php echo getChecked($preguntas, "Si", "p21-6") ?> disabled>
                        <label class="" for="chechkbox-6">No sabe</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="7" id="chechkbox-7" <?php echo getChecked($preguntas, "Si", "p21-7") ?> disabled>
                        <label class="" for="chechkbox-7">Ninguna de las anteriores</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 30 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Cuál de las siguientes alternativas utiliza su empresa para gestionar el uso o impacto de recursos naturales?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p22-1") ?> disabled>
                        <label class="" for="chechkbox-1">Medición</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p22-2") ?> disabled>
                        <label class="" for="chechkbox-2">Mitigación </label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p22-3") ?> disabled>
                        <label class="" for="chechkbox-3">Reparación </label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p22-4") ?> disabled>
                        <label class="" for="chechkbox-4">Compensación </label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="5" id="chechkbox-5" <?php echo getChecked($preguntas, "Si", "p22-5") ?> disabled>
                        <label class="" for="chechkbox-5">Ninguna de las anteriores</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 31 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Su empresa ha creado planes de manejo de recursos naturales o se ha alineado con la Estrategia Nacional de Biodiversidad 2017-2030?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p23-1") ?> disabled>
                        <label class="" for="chechkbox-1">Hemos creado un plan de manejo de recursos naturales</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p23-2") ?> disabled>
                        <label class="" for="chechkbox-2">Seguimos la Estrategia Nacional de Biodiversidad 2017-2030 </label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p23-3") ?> disabled>
                        <label class="" for="chechkbox-3">Estamos en proceso de creación de un plan de manejo de recursos naturales </label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p23-4") ?> disabled>
                        <label class="" for="chechkbox-4">Ninguna de las anteriores </label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="5" id="chechkbox-5" <?php echo getChecked($preguntas, "Si", "p23-5") ?> disabled>
                        <label class="" for="chechkbox-5">No aplica </label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 32 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Su empresa está comprometida con alcanzar la cero generación de residuos en al menos una de sus instalaciones?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p24-1") ?> disabled>
                        <label class="" for="chechkbox-1">No estamos comprometidos aún</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p24-2") ?> disabled>
                        <label class="" for="chechkbox-2">Compromiso de disminuir generación de residuos entre 1% a 33%</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p24-3") ?> disabled>
                        <label class="" for="chechkbox-3">Compromiso de disminuir generación de residuos entre 34% a 66%</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p24-4") ?> disabled>
                        <label class="" for="chechkbox-4">Compromiso de disminuir generación de residuos entre 67% a 100%</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 33 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Su empresa ha propuesto estrategias para disminuir la generación de residuos sólidos y/o reducir la cantidad enviada a relleno sanitario, vertedero o relleno de seguridad, tales como las siguientes?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p25-1") ?> disabled>
                        <label class="" for="chechkbox-1">Reducción</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p25-2") ?> disabled>
                        <label class="" for="chechkbox-2">Reutilización</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p25-3") ?> disabled>
                        <label class="" for="chechkbox-3">Reciclaje</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p25-4") ?> disabled>
                        <label class="" for="chechkbox-4">Compostaje</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="5" id="chechkbox-5" <?php echo getChecked($preguntas, "Si", "p25-5") ?> disabled>
                        <label class="" for="chechkbox-5">Ninguna de las anteriores</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 34 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Su empresa ha rediseñado procesos o materiales para incluir elementos de circularidad en el ciclo de vida de ciertos productos, o bien ha aplicado principios de ecodiseño? </h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p26-1") ?> disabled>
                        <label class="" for="chechkbox-1">Ha realizado análisis de ciclo de vida a productos.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p26-2") ?> disabled>
                        <label class="" for="chechkbox-2">Ha incorporado principios de ecodiseño.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p26-3") ?> disabled>
                        <label class="" for="chechkbox-3">Ha rediseñado productos con fin de disminuir la huella de carbono generada. </label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p26-4") ?> disabled>
                        <label class="" for="chechkbox-4">Ha cambiado material virgen por material reciclado en sus productos.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="5" id="chechkbox-5" <?php echo getChecked($preguntas, "Si", "p26-5") ?> disabled>
                        <label class="" for="chechkbox-5">Ha hecho plan para la disposición correcta de los residuos de su producto.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="5" id="chechkbox-6" <?php echo getChecked($preguntas, "Si", "p26-6") ?> disabled>
                        <label class="" for="chechkbox-6">Ninguna de las anteriores.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="5" id="chechkbox-7" <?php echo getChecked($preguntas, "Si", "p26-7") ?> disabled>
                        <label class="" for="chechkbox-7">No aplica para nuestro rubro (servicios).</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 35 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Su empresa tiene identificados los impactos ambientales que generan las operaciones?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p27-1") ?> disabled>
                        <label class="" for="chechkbox-1">Sí y tiene planes de gestión sobre estos.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p27-2") ?> disabled>
                        <label class="" for="chechkbox-2">Si.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p27-3") ?> disabled>
                        <label class="" for="chechkbox-3">No, pero se está trabajando en ello.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p27-4") ?> disabled>
                        <label class="" for="chechkbox-4">No.</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 36 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Su empresa tiene algún tipo de política o declaración de medioambiente?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p28-1") ?> disabled>
                        <label class="" for="chechkbox-1">Sí y está disponible públicamente. </label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p28-2") ?> disabled>
                        <label class="" for="chechkbox-2">Si. </label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p28-3") ?> disabled>
                        <label class="" for="chechkbox-3">No, pero se está trabajando en ella. </label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p28-4") ?> disabled>
                        <label class="" for="chechkbox-4">No. </label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 37 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Su empresa considera criterios ambientales para el desarrollo de nuevos proyectos?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p29-1") ?> disabled>
                        <label class="" for="chechkbox-1">Sí y están disponible públicamente.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p29-2") ?> disabled>
                        <label class="" for="chechkbox-2">Si.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p29-3") ?> disabled>
                        <label class="" for="chechkbox-3">No, pero se está trabajando en ello.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p29-4") ?> disabled>
                        <label class="" for="chechkbox-4">No.</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 38 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Su empresa está comprometida con algún ODS relacionado al medio ambiente en particular?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="">
                    <div class="check-box-view" id="seeAnotherField">
                        <input class="" name="check" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p30-1") ?> disabled>
                        <label class="" for="chechkbox-1">No</label>
                    </div>
                    <div class="check-box-view" id="seeAnotherField-1">
                        <input class="" name="check" type="checkbox" value="2" id="chechkbox-2" <?php echo getCheckedOther($preguntas, "Si", "p30-2") ?>>
                        <label class="" for="chechkbox-2">Sí, ¿cuáles? <?php echo getCheckedOtherText($preguntas, "p30-2") ?></label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 39 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Su empresa se ha sometido a auditorías ambientales obligatorias o voluntarias?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="group1" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p31-1") ?> disabled>
                        <label class="" for="chechkbox-1">No </label>
                    </div>

                    <div class="input-group mb-3 check-text">
                        <div class="check-box-view">
                            <input name="ckb" class="form-check-input mt-3" type="checkbox" value="6" <?php echo getCheckedOther($preguntas, "Si", "p31-2") ?> aria-label="Checkbox for following text input" id="chechkbox-2">
                            <label class="" for="chechkbox-2">Sí, ¿cuáles?</label>
                        </div>
                        <input id='other' disabled value='<?php echo getCheckedOtherText($preguntas, "p31-2") ?>' type="text" class="form-control" aria-label="Text input with checkbox">
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 40 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Su empresa ha generado reportes de sostenibilidad?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p32-1") ?> disabled>
                        <label class="" for="chechkbox-1">Sí, bajo los estándares GRI.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p32-2") ?> disabled>
                        <label class="" for="chechkbox-2">Si.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p32-3") ?> disabled>
                        <label class="" for="chechkbox-3">No.</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 41 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Su empresa ha obtenido certificaciones ambientales o de sostenibilidad previas?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="group1" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p33-1") ?> disabled>
                        <label class="" for="chechkbox-1">No.</label>
                    </div>

                    <div class="input-group mb-3 check-text">
                        <div class="check-box-view">
                            <input name="ckb" class="form-check-input mt-3" type="checkbox" value="6" <?php echo getCheckedOther($preguntas, "Si", "p33-2") ?> aria-label="Checkbox for following text input" id="chechkbox-2">
                            <label class="" for="chechkbox-2">Sí, ¿cuáles?. </label>
                        </div>
                        <input id='other' type="text" value='<?php echo getCheckedOtherText($preguntas, "p33-2") ?>' class="form-control" aria-label="Text input with checkbox">
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 42 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Su empresa mide el consumo de energía en las operaciones o ha tomado en consideración generar planes para un consumo más eficiente de energía?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p34-1") ?> disabled>
                        <label class="" for="chechkbox-1">Ha medido el consumo energético.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p34-2") ?> disabled>
                        <label class="" for="chechkbox-2">Ha implementado planes de eficiencia energética.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p34-3") ?> disabled>
                        <label class="" for="chechkbox-3">Ha invertido en equipos más eficientes energéticamente.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p34-4") ?> disabled>
                        <label class="" for="chechkbox-4">Ninguna de las anteriores</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 43 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Su empresa ha tomado en consideración generar planes de diversificación de su matriz energética?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p35-1") ?> disabled>
                        <label class="" for="chechkbox-1">Ha diversificado su matriz energética.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p35-2") ?> disabled>
                        <label class="" for="chechkbox-2">Ha invertido en equipos generadores de energía eléctrica renovable.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p35-3") ?> disabled>
                        <label class="" for="chechkbox-3">Ha medido los porcentajes de generación de energía eléctrica renovable en su matriz energética.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p35-4") ?> disabled>
                        <label class="" for="chechkbox-4">Ninguna de las anteriores.</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 44 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Su empresa tiene estrategias y/o metas para alcanzar la carbono neutralidad?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p36-1") ?> disabled>
                        <label class="" for="chechkbox-1">Ha generado planes para integrar la electromovilidad. </label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p36-2") ?> disabled>
                        <label class="" for="chechkbox-2">Ha generado planes para mejorar la eficiencia energética.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p36-3") ?> disabled>
                        <label class="" for="chechkbox-3">Otros planes para alcanzar la carbono neutralidad. </label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p36-4") ?> disabled>
                        <label class="" for="chechkbox-4">Ninguna de las anteriores.</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 45 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Su empresa mide las emisiones de gases de efecto invernadero o su huella de carbono?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p37-1") ?> disabled>
                        <label class="" for="chechkbox-1">Mide el Alcance 1. </label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p37-2") ?> disabled>
                        <label class="" for="chechkbox-2">Mide el Alcance 2. </label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p37-3") ?> disabled>
                        <label class="" for="chechkbox-3">Mide el Alcance 3. </label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p37-4") ?> disabled>
                        <label class="" for="chechkbox-4">Tiene los resultados públicamente disponibles</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="5" id="chechkbox-5" <?php echo getChecked($preguntas, "Si", "p37-5") ?> disabled>
                        <label class="" for="chechkbox-5">Ninguna de las anteriores</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 46 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Su empresa ha establecido metas de disminución de emisiones de gases de efecto invernadero, independientemente del crecimiento para las siguientes emisiones?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p38-1") ?> disabled>
                        <label class="" for="chechkbox-1">Estableció metas para el alcance 1</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p38-2") ?> disabled>
                        <label class="" for="chechkbox-2">Estableció metas para el alcance 2</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p38-3") ?> disabled>
                        <label class="" for="chechkbox-3">Estableció metas para el alcance 3</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p38-4") ?> disabled>
                        <label class="" for="chechkbox-4">Ninguna de las anteriores</label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 47 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Su empresa cuantifica el consumo de agua en sus operaciones o mide alguna de las siguientes huellas hídricas?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p39-1") ?> disabled>
                        <label class="" for="chechkbox-1">Huella hídrica verde. </label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p39-2") ?> disabled>
                        <label class="" for="chechkbox-2">Huella hídrica azul.</label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p39-3") ?> disabled>
                        <label class="" for="chechkbox-3">Huella hídrica gris. </label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p39-4") ?> disabled>
                        <label class="" for="chechkbox-4">Tiene los resultados públicamente disponibles. </label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="5" id="chechkbox-5" <?php echo getChecked($preguntas, "Si", "p39-5") ?> disabled>
                        <label class="" for="chechkbox-5">Cuenta con una estrategia de gestión hídrica. </label>
                    </div>
                    <div class="check-box-view">
                        <input name="" class="" type="checkbox" value="5" id="chechkbox-6" <?php echo getChecked($preguntas, "Si", "p39-6") ?> disabled>
                        <label class="" for="chechkbox-6">Ninguna de las anteriores. </label>
                    </div>
                </form>
            </div>
        </div>

        <!-- PREGUNTA 48 -->

        <div class="row preguntas-view">
            <div class="col-12 titulo-pregunta">
                <h4>¿Por medio de qué organización te enteraste de esta iniciativa?</h4>
            </div>
            <br>
            <div class="col-12 respuesta">
                <form action="" method="post" name="form1">
                    <div class="check-box-view">
                        <input name="" class="group1" type="checkbox" value="1" id="chechkbox-1" <?php echo getChecked($preguntas, "Si", "p40-1") ?> disabled>
                        <label class="" for="chechkbox-1">BCI</label>
                    </div>

                    <div class="check-box-view">
                        <input name="" class="group1" type="checkbox" value="2" id="chechkbox-2" <?php echo getChecked($preguntas, "Si", "p40-2") ?> disabled>
                        <label class="" for="chechkbox-2">EBCO</label>
                    </div>

                    <div class="check-box-view">
                        <input name="" class="group1" type="checkbox" value="3" id="chechkbox-3" <?php echo getChecked($preguntas, "Si", "p40-3") ?> disabled>
                        <label class="" for="chechkbox-3">Endeavor</label>
                    </div>

                    <div class="check-box-view">
                        <input name="" class="group1" type="checkbox" value="4" id="chechkbox-4" <?php echo getChecked($preguntas, "Si", "p40-4") ?> disabled>
                        <label class="" for="chechkbox-4">Explora</label>
                    </div>

                    <div class="check-box-view">
                        <input name="" class="group1" type="checkbox" value="5" id="chechkbox-5" <?php echo getChecked($preguntas, "Si", "p40-5") ?> disabled>
                        <label class="" for="chechkbox-5">Fundación Imagen de Chile</label>
                    </div>

                    <div class="check-box-view">
                        <input name="" class="enable" type="checkbox" value="6" id="chechkbox-6" <?php echo getChecked($preguntas, "Si", "p40-6") ?> disabled>
                        <label class="" for="chechkbox-6">Sistema B Chile</label>
                    </div>

                    <div class="check-box-view">
                        <input name="" class="enable" type="checkbox" value="7" id="chechkbox-7" <?php echo getChecked($preguntas, "Si", "p40-7") ?> disabled>
                        <label class="" for="chechkbox-7">Universidad Adolfo Ibáñez</label>
                    </div>

                    <div class="input-group mb-3 check-text">
                        <div class="check-box-view">
                            <input name="ckb" class="form-check-input mt-3" type="checkbox" value="8" <?php echo getCheckedOther($preguntas, "Si", "p40-8") ?> disabled aria-label="Checkbox for following text input" id="chechkbox-8">
                            <label class="" for="chechkbox-8">Otra (detallar):</label>
                        </div>
                        <input id='other' value='<?php echo getCheckedOtherText($preguntas, "p40-8"); ?>' type="text" class="form-control" aria-label="Text input with checkbox">
                    </div>
                </form>
            </div>
        </div>




    </div>
</section>

<?php include('assets/footer.php') ?>