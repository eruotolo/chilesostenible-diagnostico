<?php
$totcat3 = array();

// Pregunta 24 y 25	
$totcat3[0] = 0;
$noaplica00001 = $preguntas['p23-5'];
if ($preguntas['p21-7'] == 'Si') {
	$condition00001 = "Si";
} else {
	$condition00001 = "No";
}


if ($noaplica00001 == 'Si') {
	if ($preguntas['p22-1'] == 'Si') {
		$totcat3[0] = $totcat3[0] + 25;
	}
	if ($preguntas['p22-2'] == 'Si') {
		$totcat3[0] = $totcat3[0] + 100;
	}
	if ($preguntas['p22-3'] == 'Si') {
		$totcat3[0] = $totcat3[0] + 50;
	}
	if ($preguntas['p22-4'] == 'Si') {
		$totcat3[0] = $totcat3[0] + 50;
	}
} else {
	if ($preguntas['p22-1'] == 'Si') {
		$totcat3[0] = $totcat3[0] + 5;
	}
	if ($preguntas['p22-2'] == 'Si') {
		$totcat3[0] = $totcat3[0] + 25;
	}
	if ($preguntas['p22-3'] == 'Si') {
		$totcat3[0] = $totcat3[0] + 10;
	}
	if ($preguntas['p22-4'] == 'Si') {
		$totcat3[0] = $totcat3[0] + 10;
	}	
}


// Pregunta 26	
if ($condition00001 == "Si") {
	if ($preguntas['p23-1'] == 'Si') {
		$totcat3[0] = $totcat3[0] + 33.3333;
	}
	if ($preguntas['p23-2'] == 'Si') {
		$totcat3[0] = $totcat3[0] + 33.3333;
	}
	if ($preguntas['p23-3'] == 'Si') {
		$totcat3[0] = $totcat3[0] + 33.3333;
	}
} else {
	if ($preguntas['p23-1'] == 'Si') {
		$totcat3[0] = $totcat3[0] + 16.666666667;
	}
	if ($preguntas['p23-2'] == 'Si') {
		$totcat3[0] = $totcat3[0] + 16.666666667;
	}
	if ($preguntas['p23-3'] == 'Si') {
		$totcat3[0] = $totcat3[0] + 16.666666667;
	}	
}


//echo "Total Cat. ".$totcat3[0];

if ($preguntas['p26-7'] == 'Si') {
	$condition00002 = "Si";
} else {
	$condition00002 = "No";
}

$totcat3[1] = 0;

if ($condition00002 == "Si") {
	if ($preguntas['p24-1'] == 'Si') {
		$totcat3[1] = $totcat3[1] + 0;
	}
	if ($preguntas['p24-2'] == 'Si') {
		$totcat3[1] = $totcat3[1] + 12.5;
	}
	if ($preguntas['p24-3'] == 'Si') {
		$totcat3[1] = $totcat3[1] + 37.5;
	}
	if ($preguntas['p24-4'] == 'Si') {
		$totcat3[1] = $totcat3[1] + 50;
	}
} else {
	if ($preguntas['p24-1'] == 'Si') {
		$totcat3[1] = $totcat3[1] + 0;
	}
	if ($preguntas['p24-2'] == 'Si') {
		$totcat3[1] = $totcat3[1] + 8.3333333333336;
	}
	if ($preguntas['p24-3'] == 'Si') {
		$totcat3[1] = $totcat3[1] + 25;
	}
	if ($preguntas['p24-4'] == 'Si') {
		$totcat3[1] = $totcat3[1] + 33.3333333336;
	}	
}

if ($condition00002 == "Si") {
	if ($preguntas['p25-1'] == 'Si') {
		$totcat3[1] = $totcat3[1] + 12.5;
	}
	if ($preguntas['p25-2'] == 'Si') {
		$totcat3[1] = $totcat3[1] + 12.5;
	}
	if ($preguntas['p25-3'] == 'Si') {
		$totcat3[1] = $totcat3[1] + 12.5;
	}
	if ($preguntas['p25-4'] == 'Si') {
		$totcat3[1] = $totcat3[1] + 12.5;
	}
} else {
	if ($preguntas['p25-1'] == 'Si') {
		$totcat3[1] = $totcat3[1] + 8.33;
	}
	if ($preguntas['p25-2'] == 'Si') {
		$totcat3[1] = $totcat3[1] + 8.33;
	}
	if ($preguntas['p25-3'] == 'Si') {
		$totcat3[1] = $totcat3[1] + 8.33;
	}
	if ($preguntas['p25-4'] == 'Si') {
		$totcat3[1] = $totcat3[1] + 8.33;
	}	
}

if ($preguntas['p26-1'] == 'Si') {
    $totcat3[1] = $totcat3[1] + 6.66666667;
}
if ($preguntas['p26-2'] == 'Si') {
    $totcat3[1] = $totcat3[1] + 6.66666667;
}
if ($preguntas['p26-3'] == 'Si') {
    $totcat3[1] = $totcat3[1] + 6.66666667;
}
if ($preguntas['p26-4'] == 'Si') {
    $totcat3[1] = $totcat3[1] + 6.66666667;
}
if ($preguntas['p26-5'] == 'Si') {
    $totcat3[1] = $totcat3[1] + 6.66666667;
}

//echo "TOTAL CAT. {$totcat3[1]}";

$totcat3[2] = 0;
if ($preguntas['p27-1'] == 'Si') {
    $totcat3[2] = $totcat3[2] + 14.29;
}

if ($preguntas['p27-2'] == 'Si') {
    $totcat3[2] = $totcat3[2] + 9.52;
}

if ($preguntas['p27-3'] == 'Si') {
    $totcat3[2] = $totcat3[2] + 4.76;
}

if ($preguntas['p27-4'] == 'Si') {
    $totcat3[2] = $totcat3[2] + 0;
}

if ($preguntas['p28-1'] == 'Si') {
    $totcat3[2] = $totcat3[2] + 14.29;
}

if ($preguntas['p28-2'] == 'Si') {
    $totcat3[2] = $totcat3[2] + 9.52;
}

if ($preguntas['p28-3'] == 'Si') {
    $totcat3[2] = $totcat3[2] + 4.76;
}

if ($preguntas['p28-4'] == 'Si') {
    $totcat3[2] = $totcat3[2] + 0;
}

if ($preguntas['p29-1'] == 'Si') {
    $totcat3[2] = $totcat3[2] + 14.29;
}

if ($preguntas['p29-2'] == 'Si') {
    $totcat3[2] = $totcat3[2] + 9.52;
}

if ($preguntas['p29-3'] == 'Si') {
    $totcat3[2] = $totcat3[2] + 4.76;
}

if ($preguntas['p29-4'] == 'Si') {
    $totcat3[2] = $totcat3[2] + 0;
}


if ($preguntas['p30-1'] <> 'Si') {
    $totcat3[2] = $totcat3[2] + 14.2857142857143;
}

if ($preguntas['p31-1'] <> 'Si') {
    $totcat3[2] = $totcat3[2] + 14.2857142857143;
}

if ($preguntas['p32-1'] == 'Si') {
    $totcat3[2] = $totcat3[2] + 14.29;
}

if ($preguntas['p32-2'] == 'Si') {
    $totcat3[2] = $totcat3[2] + 7.14;
}

if ($preguntas['p33-1'] <> 'Si') {
    $totcat3[2] = $totcat3[2] + 14.2857142857143;
}


$totcat3[3] = 0;

if ($preguntas['p34-1'] == 'Si') {
    $totcat3[3] = $totcat3[3] + 11.11;
}

if ($preguntas['p34-2'] == 'Si') {
    $totcat3[3] = $totcat3[3] + 11.11;
}

if ($preguntas['p34-3'] == 'Si') {
    $totcat3[3] = $totcat3[3] + 11.11;
}

if ($preguntas['p35-1'] == 'Si') {
    $totcat3[3] = $totcat3[3] + 11.11;
}

if ($preguntas['p35-2'] == 'Si') {
    $totcat3[3] = $totcat3[3] + 11.11;
}

if ($preguntas['p35-3'] == 'Si') {
    $totcat3[3] = $totcat3[3] + 11.11;
}

if ($preguntas['p36-1'] == 'Si') {
    $totcat3[3] = $totcat3[3] + 11.11;
}

if ($preguntas['p36-2'] == 'Si') {
    $totcat3[3] = $totcat3[3] + 11.11;
}

if ($preguntas['p36-3'] == 'Si') {
    $totcat3[3] = $totcat3[3] + 11.11;
}

if ($preguntas['p37-1'] == 'Si') {
    $totcat3[4] = $totcat3[4] + 8.33333333333333;
}

if ($preguntas['p37-2'] == 'Si') {
    $totcat3[4] = $totcat3[4] + 8.33333333333333;
}

if ($preguntas['p37-3'] == 'Si') {
    $totcat3[4] = $totcat3[4] + 8.33333333333333;
}

if ($preguntas['p37-4'] == 'Si') {
    $totcat3[4] = $totcat3[4] + 8.33333333333333;
}


if ($preguntas['p38-1'] == 'Si') {
    $totcat3[4] = $totcat3[4] + 11.11;
}

if ($preguntas['p38-2'] == 'Si') {
    $totcat3[4] = $totcat3[4] + 11.11;
}

if ($preguntas['p38-3'] == 'Si') {
    $totcat3[4] = $totcat3[4] + 11.11;
}

if ($preguntas['p39-1'] == 'Si') {
    $totcat3[4] = $totcat3[4] + 6.66666666666667;
}

if ($preguntas['p39-2'] == 'Si') {
    $totcat3[4] = $totcat3[4] + 6.66666666666667;
}

if ($preguntas['p39-3'] == 'Si') {
    $totcat3[4] = $totcat3[4] + 6.66666666666667;
}

if ($preguntas['p39-4'] == 'Si') {
    $totcat3[4] = $totcat3[4] + 6.66666666666667;
}

if ($preguntas['p39-5'] == 'Si') {
    $totcat3[4] = $totcat3[4] + 6.66666666666667;
}


$totcat3[0] = round($totcat3[0], 2);
$totcat3[1] = round($totcat3[1], 2);
$totcat3[2] = round($totcat3[2], 2);
$totcat3[3] = round($totcat3[3], 2);
$totcat3[4] = round($totcat3[4], 2);
//$totcat3[5] = round($totcat3[5], 2);

$promediocat3 = round(($totcat3[0] + $totcat3[1] + $totcat3[2] + $totcat3[3] + $totcat3[4]) / 5, 2);
?>

<!-- HTML -->

<!-- Styles -->
<style>
    #chartdiv3 {
        width: 100%;
        height: auto;
    }
</style>


<script>
    am4internal_webpackJsonp(["8ce2"], {
        ik00: function(e, c, t) {
            "use strict";
            Object.defineProperty(c, "__esModule", {
                value: !0
            });
            var b = t("aCit"),
                a = t("8ZqG"),
                i = function(e) {
                    Object(b.b)(e, "ColorSet") && (e.list = [Object(a.c)("#fcb711"), Object(a.c)("#fcb711"), Object(a.c)("#fcb711"), Object(a.c)("#fcb711"), Object(a.c)("#fcb711"), Object(a.c)("#fcb711"), Object(a.c)("#fcb711"), Object(a.c)("#fcb711"), Object(a.c)("#fcb711"), Object(a.c)("#fcb711")], e.minLightness = .2, e.maxLightness = .7, e.reuse = !0)
                };
            window.am4themes_frozen = i
        }
    }, ["ik00"]);
    //# sourceMappingURL=frozen.js.map
</script>
<!-- Chart code -->
<script>
    am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_frozen);
        am4core.useTheme(am4themes_animated);
        // Themes end


        var chart = am4core.create("chartdiv3", am4charts.RadarChart);
        chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

        chart.data = [{
                category: "Recursos \nNaturales",
                value1: <?php echo $totcat3[0] ?>,
                //value2: <?php echo $totcat1[0] / 4 ?>,
                //value3: <?php echo $totcat1[0] / 4 ?>,
                //value4: <?php echo $totcat1[0] / 4 ?>,	
            },
            {
                category: "Economía circular",
                value2: <?php echo $totcat3[1] ?>,
                //value2: <?php echo $totcat1[1] / 4 ?>,
                //value3: <?php echo $totcat1[1] / 4 ?>,
                //value4: <?php echo $totcat1[1] / 4 ?>,
            },
            {
                category: "Gestión ambiental",
                value3: <?php echo $totcat3[2] ?>,
                //value2: <?php echo $totcat1[2] / 4 ?>,
                //value3: <?php echo $totcat1[2] / 4 ?>,
                //value4: <?php echo $totcat1[2] / 4 ?>,
            },
            {
                category: "Consumo energético",
                value1: <?php echo $totcat3[3] ?>,
                //value2: <?php echo $totcat1[3] / 4 ?>,
                //value3: <?php echo $totcat1[3] / 4 ?>,
                //value4: <?php echo $totcat1[3] / 4 ?>,
            },
            {
                category: "Cambio climático",
                value4: <?php echo $totcat3[4] ?>,
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