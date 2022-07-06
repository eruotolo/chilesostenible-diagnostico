<?php
session_start();
include('assets/header-resumen.php');
include('include/dbselect.php');
if($_SESSION['login'] <> 1){
	//unset($_GET['userid']);
	header("location:ingresar.php?".http_build_query ($_GET));
}
?>


<section id="contenido" class="cont-checkbox" style="overflow: scroll; height: 80vh; width: 100%; padding-right: 10px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <section id="cabezal-titulos">
                    <div class="container">
                        <div class="row cab-titulos">
                            <div class="col-1"></div>
                            <div class="col-3 titulos">
                                <h5>Nombre Organización</h5>
                            </div>
                            <div class="col-3 titulos">
                                <h5>Rubro</h5>
                            </div>
                            <div class="col-2 titulos">
                                <h5>Fecha</h5>
                            </div>
                            <div class="col-1 titulos">
                                <h5>Ver</h5>
                            </div>
                            <div class="col-1 titulos">
                                <h5>Reporte</h5>
                            </div>
                            <div class="col-1 titulos">
                                <h5>Eliminar</h5>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="containter">
                        <?php
                        $sql = "SELECT * FROM encuesta";
                        $result = mysqli_query($db, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<div class='row empresa'>
					<div class='col-1'>
						<div class='icono-empresa text-center align-middle'>
							<img src='assets/image/business.svg' alt=''>
						</div>
					</div>
					<div class='col-3 datos-empresa'>
						<h4>{$row['empresa']}</h4>
					</div>
					<div class='col-3 datos-empresa'>
						<h4>{$row['rubro']}</h4>
					</div>
					<div class='col-2 datos-empresa'>
						<h4>{$row['fecha']}</h4>
					</div>
					<div class='col-1 datos-empresa text-center'>
						<a href='listing-view.php?eid={$row['ID']}'><img src='assets/image/view.svg' alt=''></a>
					</div>
					<div class='col-1 datos-empresa text-center'>
						<a href='resumen.php?eid={$row['ID']}'><img src='assets/image/poll-2.svg' alt=''></a>
					</div>
					<div class='col-1 datos-empresa text-center'>
						<a class='table__item__link delete' href='#' rowid='{$row['ID']}'><img src='assets/image/trash-alt.svg' alt='eliminar'></a>
					</div>
				</div>";
                        }
                        ?>

                    </div>
                </section>
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 btn-excel">
                                <button id='export-excel'><img src="assets/image/excel-regular.svg" alt=""> Exportar Excel</button>
                            </div>
                        </div>
                    </div>
                </section>
                <table id='excel' style='display:none'>
                    <?php
                    $sql = "SET NAMES 'utf8'";
                    $result = mysqli_query($db, $sql);

                    $sql = "SELECT * FROM `pregunta-titulo`";
                    $result = mysqli_query($db, $sql);
                    $preguntas = array();
                    while ($row = mysqli_fetch_array($result)) {
                        $codigo = $row['Codigo'];
                        $preguntas[$codigo] = $row['Pregunta'];
                    }

                    $sql = "SHOW COLUMNS FROM encuesta";
                    $result = mysqli_query($db, $sql);
                    $columns_array = array();
                    echo "<tr>";
                    while ($row = mysqli_fetch_array($result)) {
                        $columns_array[] = $row['Field'];
                        $col = $row['Field'];
                        echo "<td><b>{$preguntas[$col]}</b></td>";
                    }
					echo "<td><b>Estado</b></td>";
                    echo "</tr>";
                    //print_r($columns_array);

                    $sql = "SELECT * FROM encuesta";
                    $result = mysqli_query($db, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        foreach ($columns_array as $i) {
                            echo "<td>{$row[$i]}</td>";
                        }
						if ($row['p40-1'] == '') {
							echo "<td>Borrador</td>";
						} else {
							echo "<td>Terminada</td>";
						}
						
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</section>

<?php include('assets/footer.php') ?>
<script src="assets/js/exportexcel/excelexportjs.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.delete').click(function() {
            var rowid = $(this).attr('rowid');
            var del = confirm("Estas seguro que deseas eliminar la encuesta?");
            if (del) {
                $.ajax({
                    url: 'api/delete-encuesta.php',
                    type: 'POST',
                    data: {
                        rowid: rowid
                    },
                    success: function(output) {
                        window.location.reload();
                    }
                });

            }
        });

        $('#export-excel').on('click', function() {
            $("#excel").excelexportjs({
                containerid: "excel",
                datatype: 'table'
            });
        });
    })
</script>