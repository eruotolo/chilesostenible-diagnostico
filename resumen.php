<?php
include('include/dbselect.php');
$sql = "SELECT * FROM encuesta WHERE ID = '{$_GET['eid']}'";

$query = mysqli_query($db, $sql) or die(mysqli_error($db));
$preguntas = array();

while ($row = mysqli_fetch_assoc($query)) {
    $preguntas = $row;
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- DETECTA MOBILE -->
    <script type="text/javascript">
        var dispositivo = navigator.userAgent.toLowerCase();
        if (dispositivo.search(/iphone|ipod|ipad|android/) > -1) {
            document.location = "nophone.php";
        }
    </script>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>RedImpacta | Diagnóstico</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/image/favicon.png">
    <!-- Fonts -->
    <link rel="stylesheet" href="assets/fonts/font.css">
    <link rel="preload" href="assets/fonts/NeutraDisp-Medium.woff2" as="font" type="font/woff2" crossorigin>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custome CSS -->
    <link href="assets/css/stylesheet.css" rel="stylesheet">

    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

    <style>
        tspan {
            font-size: 10px;
            line-height: 16px;
            font-weight: 600;
            text-transform: uppercase;
        }
    </style>
</head>

<body style="background-color: #fff;">
    <div id='capture2'>
        <section id="contenido-generla">
            <div class="container">

                <div class="row titulos-resumen">
                    <div class="col-4 icono-resumen">
                        <img src="assets/image/icono-01-2.png" alt="icono-01" width="120px">
                    </div>
                    <div class="col-8 titulo-resumen">
                        <h3>Diagnóstico Inicial de Sostenibilidad.</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <ul class="list-group list-group-flush ficha-general">
                            <li class="list-group-item"><b>NOMBRE ORGANIZACIÓN:</b> <?php echo $preguntas['empresa'] ?></li>
                            <li class="list-group-item"><b>RUT:</b> <?php echo $preguntas['rut'] ?></li>
                            <li class="list-group-item"><b>NOMBRE Y APELLIDO:</b> <?php echo $preguntas['nombre'] ?></li>
                            <li class="list-group-item"><b>PAIS:</b> <?php echo $preguntas['pais'] ?></li>
                            <li class="list-group-item"><b>REGIÓN:</b> <?php echo $preguntas['region'] ?></li>
                            <li class="list-group-item"><b>TAMAÑO:</b> <?php echo $preguntas['tamano'] ?></li>
                            <li class="list-group-item"><b>Nº DE TRABAJADORES:</b> <?php echo $preguntas['nroempleado'] ?></li>
                            <li class="list-group-item rubro"><b>RUBRO:</b> <?php echo $preguntas['rubro'] ?></li>
                        </ul>
                    </div>
                    <div class="col-6">

                        <div class="grafico-totales" id="chartdiv4">
                            <!--AQUI LLAMADO AL GRAFICO-->
                        </div>

                        <!-- GRAFICO PARA PDF-->
                        <div class="grafico-totales chart" style='padding:20px'>
                            <div class='chart'>
                                <div>
                                    GOBERNANZA Y ÉTICA
                                    <div style='width:100%; height:20px;background-color:#dddddd'>

                                        <div id='gtransp' style='width:0%; height:20px;background-color:#cc1d4c'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='chart'>
                                <div>
                                    SOCIAL PERSONAS
                                    <div style='width:100%; height:20px;background-color:#dddddd'>
                                        <div id='socialper' style='width:0%; height:20px;background-color:#000000'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='chart'>
                                <div>
                                    MEDIO AMBIENTE
                                    <div style='width:100%; height:20px;background-color:#dddddd'>
                                        <div id='mambiente' style='width:0%; height:20px;background-color:#f4b613'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="contenido-secundario">
            <div class="container">
                <div class="row grafico-categorias">
                    <div class="col-12 gober-trans">
                        <div class="row">
                            <div class="col-3 titulo-gob-trans">
                                <h4>GOBERNANZA Y ÉTICA</h4>
                                <img src="assets/image/icono_02.svg" alt="icono_2">
                                <h6>FORTALEZAS</h6>
                                <div class="fortalezas" id='fortalezas-1'>
                                </div>
                            </div>
                            <div class="col-3 titulo-gob-trans-1">
                                <img src="assets/image/icono_03.svg" alt="icono_2">
                                <h6>BRECHAS</h6>
                                <div class="brechas" id='brechas-1'>
                                </div>
                            </div>
                            <div class="col-6">
                                <!--AQUI LLAMADO AL GRAFICO-->
                                <div id="chartdiv"></div>
                                <?php include('categoria1.php') ?>

                                <!-- GRAFICO PARA PDF-->

                                <div class='chart'>
                                    <div>
                                        Propósito o misión
                                        <div style='width:100%; height:20px;background-color:#dddddd'>

                                            <div style='width:<?php echo $totcat1[0] ?>%; height:20px;background-color:#cc1d4c'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='chart'>
                                    <div>
                                        Políticas y prácticas éticas
                                        <div style='width:100%; height:20px;background-color:#dddddd'>
                                            <div style='width:<?php echo $totcat1[1] ?>%; height:20px;background-color:#cc1d4c'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='chart'>
                                    <div>
                                        Sostenibilidad incorporada en el modelo de negocios
                                        <div style='width:100%; height:20px;background-color:#dddddd'>
                                            <div style='width:<?php echo $totcat1[2] ?>%; height:20px;background-color:#cc1d4c'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='chart'>
                                    <div>
                                        Directorio
                                        <div style='width:100%; height:20px;background-color:#dddddd'>
                                            <div style='width:<?php echo $totcat1[3] ?>%; height:20px;background-color:#cc1d4c'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='chart'>
                                    <div>
                                        Reporte financiero público transparencia de la empresa
                                        <div style='width:100%; height:20px;background-color:#dddddd'>
                                            <div style='width:<?php echo $totcat1[4] ?>%; height:20px;background-color:#cc1d4c'>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 soc-per">
                        <div class="row">
                            <div class="col-3 titulo-soc-per">
                                <h4>SOCIAL - PERSONAS</h4>
                                <img src="assets/image/icono_02.svg" alt="icono_2">
                                <h6>FORTALEZAS</h6>
                                <div class="fortalezas" id='fortalezas-2'>
                                    <!-- AQUI EL CONTENIDO FORTALEZAS -->
                                </div>
                            </div>
                            <div class="col-3 titulo-soc-per-1">
                                <img src="assets/image/icono_03.svg" alt="icono_2">
                                <h6>BRECHAS</h6>
                                <div class="brechas" id='brechas-2'>
                                    <!-- AQUI EL CONTENIDO BRECHAS -->
                                </div>
                            </div>
                            <div class="col-6">
                                <!--AQUI LLAMADO AL GRAFICO-->
                                <div id="chartdiv2"></div>
                                <?php include('categoria2.php') ?>

                                <!-- GRAFICO PARA PDF-->

                                <div class='chart'>
                                    <div>
                                        Política de trabajadores
                                        <div style='width:100%; height:20px;background-color:#dddddd'>

                                            <div style='width:<?php echo $totcat2[0] ?>%; height:20px;background-color:#000000'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='chart'>
                                    <div>
                                        Equidad de sueldos
                                        <div style='width:100%; height:20px;background-color:#dddddd'>
                                            <div style='width:<?php echo $totcat2[1] ?>%; height:20px;background-color:#000000'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='chart'>
                                    <div>
                                        Desarrollo organizacional
                                        <div style='width:100%; height:20px;background-color:#dddddd'>
                                            <div style='width:<?php echo $totcat2[2] ?>%; height:20px;background-color:#000000'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='chart'>
                                    <div>
                                        Política de proveedores
                                        <div style='width:100%; height:20px;background-color:#dddddd'>
                                            <div style='width:<?php echo $totcat2[3] ?>%; height:20px;background-color:#000000'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='chart'>
                                    <div>
                                        Comunidades
                                        <div style='width:100%; height:20px;background-color:#dddddd'>
                                            <div style='width:<?php echo $totcat2[4] ?>%; height:20px;background-color:#000000'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='chart'>
                                    <div>
                                        Equidad de género
                                        <div style='width:100%; height:20px;background-color:#dddddd'>
                                            <div style='width:<?php echo $totcat2[5] ?>%; height:20px;background-color:#000000'>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 medio-amb">
                        <div class="row">
                            <div class="col-3 titulo-med-amb">
                                <h4>MEDIO AMBIENTE</h4>
                                <img src="assets/image/icono_02.svg" alt="icono_2">
                                <h6>FORTALEZAS</h6>
                                <div class="fortalezas" id='fortalezas-3'>
                                    <!-- AQUI EL CONTENIDO FORTALEZAS -->
                                </div>
                            </div>
                            <div class="col-3 titulo-med-amb-1">
                                <img src="assets/image/icono_03.svg" alt="icono_2">
                                <h6>BRECHAS</h6>
                                <div class="brechas" id='brechas-3'>
                                    <!-- AQUI EL CONTENIDO BRECHAS -->
                                </div>
                            </div>
                            <div class="col-6">
                                <!--AQUI LLAMADO AL GRAFICO-->
                                <div id="chartdiv3"></div>
                                <?php include('categoria3.php') ?>
                                <!-- GRAFICO PARA PDF-->

                                <div class='chart'>
                                    <div>
                                        Recursos naturales
                                        <div style='width:100%; height:20px;background-color:#dddddd'>

                                            <div style='width:<?php echo $totcat3[0] ?>%; height:20px;background-color:#f4b613'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='chart'>
                                    <div>
                                        Economía circular
                                        <div style='width:100%; height:20px;background-color:#dddddd'>
                                            <div style='width:<?php echo $totcat3[1] ?>%; height:20px;background-color:#f4b613'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='chart'>
                                    <div>
                                        Gestión ambiental
                                        <div style='width:100%; height:20px;background-color:#dddddd'>
                                            <div style='width:<?php echo $totcat3[2] ?>%; height:20px;background-color:#f4b613'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='chart'>
                                    <div>
                                        Consumo energético
                                        <div style='width:100%; height:20px;background-color:#dddddd'>
                                            <div style='width:<?php echo $totcat3[3] ?>%; height:20px;background-color:#f4b613'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='chart'>
                                    <div>
                                        Cambio climático
                                        <div style='width:100%; height:20px;background-color:#dddddd'>
                                            <div style='width:<?php echo $totcat3[4] ?>%; height:20px;background-color:#f4b613'>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="box-mensaje">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-2 logo-mensaje">
                        <img src="assets/image/icono-01-2.png" alt="icono-01" width="120px">
                    </div>
                    <div class="col-10 texto-mensaje">
                        <h5>"El presente diagnóstico fue elaborado en base a las respuestas unilaterales y no verificadas de la empresa participante. Constituye sólo un diagnóstico inicial que pretende ser una contribución a la gestión interna en sostenibilidad de la empresa participante, por tanto no podrá ser utilizado para otros fines que los anteriormente señalados".</h5>
                    </div>
                </div>
            </div>
        </section>

        <section id="pie-resumen">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-8 pie-link">
                        <img src="assets/image/logo-auspician-04.png" alt="icono">

                    </div>
                    <div class="col-4 pie-descarga">
                        <a href="#" id='download' class="btn-rojo align-derecha"><img src="assets/image/icon-download.svg" alt=""> DESCARGA</a>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <section id="footer" class="">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-6 footer">
                        <h6>Desarrollado por <a href="https://indaga.me/" class="logo-indaga">Indaga</a></h6>
                    </div>
                    <div class="col-6 footer-01">
                        <a href="mailto:contacto@diagnosticochilesostenible.cl">contacto@diagnosticochilesostenible.cl</a>
                    </div>
                </div>
            </div>
        </footer>
    </section>


    <script src="assets/js/html2canvas.js"></script>
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <!-- Optional JavaScript; choose one -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Option 3: Other JS -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.chart').hide();

            if (<?php echo $totcat1[0] ?> >= 50) {
                $('#fortalezas-1').append("<li>Propósito \no misión</li>");
            }
            if (<?php echo $totcat1[1] ?> >= 50) {
                $('#fortalezas-1').append("<li>Políticas y \nprácticas éticas</li>");
            }
            if (<?php echo $totcat1[2] ?> >= 50) {
                $('#fortalezas-1').append("<li>Sostenibilidad \nincorporada en el \nmodelo de negocios</li>");
            }
            if (<?php echo $totcat1[3] ?> >= 50) {
                $('#fortalezas-1').append("<li>Directorio</li>");
            }
            if (<?php echo $totcat1[4] ?> >= 50) {
                $('#fortalezas-1').append("<li>Reporte financiero \npúblico / \ntransparencia de \nla empresa</li>");
            }


            if (<?php echo $totcat1[0] ?> < 50) {
                $('#brechas-1').append("<li>Propósito \no misión</li>");
            }
            if (<?php echo $totcat1[1] ?> < 50) {
                $('#brechas-1').append("<li>Políticas y \nprácticas éticas</li>");
            }
            if (<?php echo $totcat1[2] ?> < 50) {
                $('#brechas-1').append("<li>Sostenibilidad \nincorporada en el \nmodelo de negocios</li>");
            }
            if (<?php echo $totcat1[3] ?> < 50) {
                $('#brechas-1').append("<li>Directorio</li>");
            }
            if (<?php echo $totcat1[4] ?> < 50) {
                $('#brechas-1').append("<li>Reporte financiero \npúblico / \ntransparencia de \nla empresa</li>");
            }



            if (<?php echo $totcat2[0] ?> >= 50) {
                $('#fortalezas-2').append("<li>Política de \ntrabajadores</li>");
            }
            if (<?php echo $totcat2[1] ?> >= 50) {
                $('#fortalezas-2').append("<li>Equidad de\n sueldos</li>");
            }
            if (<?php echo $totcat2[2] ?> >= 50) {
                $('#fortalezas-2').append("<li>Desarrollo \norganizacional</li>");
            }
            if (<?php echo $totcat2[3] ?> >= 50) {
                $('#fortalezas-2').append("<li>Política de\n proveedores</li>");
            }
            if (<?php echo $totcat2[4] ?> >= 50) {
                $('#fortalezas-2').append("<li>Comunidades</li>");
            }
            if (<?php echo $totcat2[5] ?> >= 50) {
                $('#fortalezas-2').append("<li>Equidad de\n género</li>");
            }


            if (<?php echo $totcat2[0] ?> < 50) {
                $('#brechas-2').append("<li>Política de \ntrabajadores</li>");
            }
            if (<?php echo $totcat2[1] ?> < 50) {
                $('#brechas-2').append("<li>Equidad de\n sueldos</li>");
            }
            if (<?php echo $totcat2[2] ?> < 50) {
                $('#brechas-2').append("<li>Desarrollo \norganizacional</li>");
            }
            if (<?php echo $totcat2[3] ?> < 50) {
                $('#brechas-2').append("<li>Política de\n proveedores</li>");
            }
            if (<?php echo $totcat2[4] ?> < 50) {
                $('#brechas-2').append("<li>Comunidades</li>");
            }
            if (<?php echo $totcat2[5] ?> < 50) {
                $('#brechas-2').append("<li>Equidad de\n género</li>");
            }




            if (<?php echo $totcat3[0] ?> >= 50) {
                $('#fortalezas-3').append("<li>Recursos \nnaturales</li>");
            }
            if (<?php echo $totcat3[1] ?> >= 50) {
                $('#fortalezas-3').append("<li>Economía \ncircular</li>");
            }
            if (<?php echo $totcat3[2] ?> >= 50) {
                $('#fortalezas-3').append("<li>Gestión \nambiental</li>");
            }
            if (<?php echo $totcat3[3] ?> >= 50) {
                $('#fortalezas-3').append("<li>Consumo \nenergético</li>");
            }
            if (<?php echo $totcat3[4] ?> >= 50) {
                $('#fortalezas-3').append("<li>Cambio \nclimático</li>");
            }


            if (<?php echo $totcat3[0] ?> < 50) {
                $('#brechas-3').append("<li>Recursos \nnaturales</li>");
            }
            if (<?php echo $totcat3[1] ?> < 50) {
                $('#brechas-3').append("<li>Economía \ncircular</li>");
            }
            if (<?php echo $totcat3[2] ?> < 50) {
                $('#brechas-3').append("<li>Gestión \nambiental</li>");
            }
            if (<?php echo $totcat3[3] ?> < 50) {
                $('#brechas-3').append("<li>Consumo \nenergético</li>");
            }
            if (<?php echo $totcat3[4] ?> < 50) {
                $('#brechas-3').append("<li>Cambio \nclimático</li>");
            }



            $('#capture').show();


            /*
            html2canvas(document.querySelector("#capture")).then(canvas => {
            	$('#chartdiv4').show();
            	$('#chartdiv').show();
            	$('#chartdiv2').show();
            	$('#chartdiv3').show();
            	$('#chartdiv4').show();				
            	document.body.appendChild(canvas);
            	
            });	*/

        });
    </script>

</body>

</html>

<?php include('assets/check-eid.php') ?>
<!-- Styles -->
<style>
    #chartdiv4 {
        width: 100%;
        height: 260px;
        padding-bottom: 20px;
    }
</style>
<?php
/***************** Categoria 1  - Gobernanza y Etica ********************/
//include('categoria1.php');
/***************** Categoria 2  - Social y Personas ********************/
//include('categoria2.php');
/***************** Categoria 3  - Medio Ambiente ***********************/
//include('categoria3.php');
/***********************************************************************/
include('resumen-grafica.php');
?>

<script type="text/javascript">
    $(document).ready(function() {



        function saveAs(uri, filename) {
            var link = document.createElement('a');
            if (typeof link.download === 'string') {
                link.href = uri;
                link.download = filename;
                //Firefox requires the link to be in the body
                document.body.appendChild(link);
                //simulate click
                link.click();
                //remove the link when done
                document.body.removeChild(link);
            } else {
                window.open(uri);
            }
        }


        $('#download').click(function() {
            $('#chartdiv').hide();
            $('#chartdiv2').hide();
            $('#chartdiv3').hide();
            $('#chartdiv4').hide();
            $('.chart').show();
            $('#mambiente').css('width', '0<?php echo $promediocat1 ?>%');
            $('#gtransp').css('width', '0<?php echo $promediocat2 ?>%');
            $('#socialper').css('width', '0<?php echo $promediocat3 ?>%');
            $('#download').hide();
            /*
			html2canvas(document.querySelector('#capture')).then(function(canvas) {
                saveAs(canvas.toDataURL(), 'file-name.png');
            });
			*/
            html2canvas(document.querySelector('#capture2')).then(function(canvas) {
                var myImage = canvas.toDataURL("image/jpeg,1.0");
                // Adjust width and height
                var imgWidth = 215;
                var imgHeight = 300;
                // jspdf changes
                var pdf = new jsPDF('p', 'mm', 'a4');
                pdf.addImage(myImage, 'png', 0, 0, imgWidth, imgHeight); // 2: 19
                pdf.save(`Diagnóstico Inicial de Sostenibilidad.pdf`);
            });

        })
    });
</script>