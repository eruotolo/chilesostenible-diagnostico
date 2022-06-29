<?php
include('include/dbselect.php');
$sql = "SELECT * FROM encuesta WHERE ID = '{$_GET['eid']}'";

$query = mysqli_query($db,$sql) or die(mysqli_error($db));
$preguntas = array();

while ($row = mysqli_fetch_assoc($query)) {
    $preguntas = $row;
}

$totcat1 = array();
$cat1[0] = array(4); // Proposito o mision
$cat1[1] = array(5); // POLÍTICAS Y PRÁCTICAS ÉTICAS
$cat1[2] = array(6); // SOSTENIBILIDAD INCORPORADA EN EL MODELO DE NEGOCIOS
$cat1[3] = array(7); // DIRECTORIO
$cat1[4] = array(8); // REPORTE FINANCIERO PÚBLICO / TRANSPARENCIA DE LA EMPRESA	

// Pregunta 4 	
$totcat1[0] = 0;
if ($preguntas['p1-1'] == 'Si') {
	$totcat1[0] = $totcat1[0] + 50;
}
if ($preguntas['p1-2'] == 'Si') {
	$totcat1[0] = $totcat1[0] + 50;
}

// Pregunta 5	
$totcat1[1] = 0;
if ($preguntas['p2-1'] == 'Si') {
	$totcat1[1] = $totcat1[1] + 20;
}
if ($preguntas['p2-2'] == 'Si') {
	$totcat1[1] = $totcat1[1] + 20;
}
if ($preguntas['p2-3'] == 'Si') {
	$totcat1[1] = $totcat1[1] + 20;
}
if ($preguntas['p2-4'] == 'Si') {
	$totcat1[1] = $totcat1[1] + 20;
}
if ($preguntas['p2-5'] == 'Si') {
	$totcat1[1] = $totcat1[1] + 20;
}

// Pregunta 6	
$totcat1[2] = 0;
if ($preguntas['p3-1'] == 'Si') {
	$totcat1[2] = $totcat1[2] + 16.666666667;
}
if ($preguntas['p3-2'] == 'Si') {
	$totcat1[2] = $totcat1[2] + 16.666666667;
}
if ($preguntas['p3-3'] == 'Si') {
	$totcat1[2] = $totcat1[2] + 16.666666667;
}
if ($preguntas['p3-4'] == 'Si') {
	$totcat1[2] = $totcat1[2] + 16.666666667;
}
if ($preguntas['p3-5'] == 'Si') {
	$totcat1[2] = $totcat1[2] + 16.666666667;
}
if ($preguntas['p3-6'] == 'Si') {
	$totcat1[2] = $totcat1[2] + 16.666666667;
}

$totcat1[3] = 0;



//echo $totcat1[2];

// Pregunta 7	
$totcat1[3] = 0;
if ($preguntas['p4-1'] == 'Si') {
    $totcat1[3] = $totcat1[3] + 50;
}
if ($preguntas['p4-2'] == 'Si') {
    $totcat1[3] = $totcat1[3] + 12.5;
}
if ($preguntas['p4-3'] == 'Si') {
    $totcat1[3] = $totcat1[3] + 12.5;
}
if ($preguntas['p4-4'] == 'Si') {
    $totcat1[3] = $totcat1[3] + 12.5;
}
if ($preguntas['p4-5'] == 'Si') {
    $totcat1[3] = $totcat1[3] + 12.5;
}


// Pregunta 8
$totcat1[4] = 0;
if ($preguntas['p5-1'] == 'Si') {
    $totcat1[4] = $totcat1[4] + 25;
}
if ($preguntas['p5-2'] == 'Si') {
    $totcat1[4] = $totcat1[4] + 25;
}
if ($preguntas['p5-3'] == 'Si') {
    $totcat1[4] = $totcat1[4] + 25;
}
if ($preguntas['p5-4'] == 'Si') {
    $totcat1[4] = $totcat1[4] + 25;
}

$promediocat1 = round(($totcat1[0] + $totcat1[1] + $totcat1[2] + $totcat1[3] + $totcat1[4]) / 5, 2);


//echo $promediocat1;
?>
<!-- HTML -->

<!-- Styles -->
<style>
    #chartdiv {
        width: 100%;
        height: auto;
    }
</style>
<!-- Resources -->


<script>
    am4internal_webpackJsonp(["f6f5"], {
        JjGr: function(e, t, c) {
            "use strict";
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var s = c("aCit"),
                i = c("8ZqG"),
                n = function(e) {
                    Object(s.b)(e, "ColorSet") && (e.list = [Object(i.c)("#cc004c"), Object(i.c)("#cc004c"), Object(i.c)("#cc004c"), Object(i.c)("#cc004c")], e.reuse = !1, e.stepOptions = {
                        lightness: .05,
                        hue: 0
                    }, e.passOptions = {})
                };
            window.am4themes_dataviz = n
        }
    }, ["JjGr"]);
</script>
<!-- Chart code -->
<script>
    am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_dataviz);
        am4core.useTheme(am4themes_animated);
        // Themes end

        var chart = am4core.create("chartdiv", am4charts.RadarChart);
        chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

        chart.data = [{
                category: "Propósito \no misión",
                value1: <?php echo $totcat1[0] ?>,
                //value2: <?php echo $totcat1[0] / 4 ?>,
                //value3: <?php echo $totcat1[0] / 4 ?>,
                //value4: <?php echo $totcat1[0] / 4 ?>,	
            },
            {
                category: "Políticas y \nPrácticas Éticas",
                value2: <?php echo $totcat1[1] ?>,
                //value2: <?php echo $totcat1[1] / 4 ?>,
                //value3: <?php echo $totcat1[1] / 4 ?>,
                //value4: <?php echo $totcat1[1] / 4 ?>,
            },
            {
                category: "Sostenibilidad \nen el \nmodelo de Negocios",
                value3: <?php echo $totcat1[2] ?>,
                //value2: <?php echo $totcat1[2] / 4 ?>,
                //value3: <?php echo $totcat1[2] / 4 ?>,
                //value4: <?php echo $totcat1[2] / 4 ?>,
            },
            {
                category: "Directorio",
                value1: <?php echo $totcat1[3] ?>,
                //value2: <?php echo $totcat1[3] / 4 ?>,
                //value3: <?php echo $totcat1[3] / 4 ?>,
                //value4: <?php echo $totcat1[3] / 4 ?>,
            },
            {
                category: "Reporte financiero \npúblico / \nTransparencia de \nla Empresa",
                value4: <?php echo $totcat1[4] ?>,
                //value2: <?php echo $totcat1[4] / 4 ?>,
                //value3: <?php echo $totcat1[4] / 4 ?>,
                //value4: <?php echo $totcat1[4] / 4 ?>,
            },
        ];

        chart.padding(20, 20, 20, 20);

        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = "category";
        categoryAxis.renderer.labels.template.location = 0.5;
        categoryAxis.renderer.tooltipLocation = 0.5;

        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
        valueAxis.tooltip.disabled = true;
        valueAxis.renderer.labels.template.horizontalCenter = "left";
        valueAxis.min = 0;
        valueAxis.max = 100;

        var series1 = chart.series.push(new am4charts.RadarColumnSeries());
        series1.columns.template.tooltipText = false;
        series1.columns.template.width = am4core.percent(80);
        series1.name = "Puntaje";
        series1.dataFields.categoryX = "category";
        series1.dataFields.valueY = "value1";
        series1.stacked = true;

        var series2 = chart.series.push(new am4charts.RadarColumnSeries());
        series2.columns.template.width = am4core.percent(80);
        series2.columns.template.tooltipText = false;
        series2.name = "Puntaje";
        series2.dataFields.categoryX = "category";
        series2.dataFields.valueY = "value2";
        series2.stacked = true;

        var series3 = chart.series.push(new am4charts.RadarColumnSeries());
        series3.columns.template.width = am4core.percent(80);
        series3.columns.template.tooltipText = false;
        series3.name = "Puntaje";
        series3.dataFields.categoryX = "category";
        series3.dataFields.valueY = "value3";
        series3.stacked = true;

        var series4 = chart.series.push(new am4charts.RadarColumnSeries());
        series4.columns.template.width = am4core.percent(80);
        series4.columns.template.tooltipText = false;
        series4.name = "Puntaje";
        series4.dataFields.categoryX = "category";
        series4.dataFields.valueY = "value4";
        series4.stacked = true;

        chart.seriesContainer.zIndex = -1;

        // chart.scrollbarX = new am4core.Scrollbar();
        // chart.scrollbarX.exportable = false;
        // chart.scrollbarY = new am4core.Scrollbar();
        // chart.scrollbarY.exportable = false;

        chart.cursor = new am4charts.RadarCursor();
        chart.cursor.xAxis = categoryAxis;
        chart.cursor.fullWidthXLine = true;
        chart.cursor.lineX.strokeOpacity = 0;
        chart.cursor.lineX.fillOpacity = 0.1;
        chart.cursor.lineX.fill = am4core.color("#000000");

    }); // end am4core.ready()
</script>