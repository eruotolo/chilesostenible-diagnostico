<?php
$totcat2 = array();
$cat2[0] = array(9, 10); // POLÍTICA DE TRABAJADORES
$cat2[1] = array(11, 12); // EQUIDAD DE SUELDOS
$cat2[2] = array(13, 14, 15, 16); // DESARROLLO ORGANIZACIONAL
$cat2[3] = array(17, 18, 19, 20); // POLÍTICA DE PROVEEDORES
$cat2[4] = array(21, 22); // COMUNIDADES	
$cat2[5] = array(23); // EQUIDAD DE GÉNERO	

// Pregunta 9 y 10	
$totcat2[0] = 0;
if ($preguntas['p6-1'] == 'Si') {
    $totcat2[0] = $totcat2[0] + 25;
}
if ($preguntas['p6-2'] == 'Si') {
    $totcat2[0] = $totcat2[0] + 25;
}

if ($preguntas['p7-1'] == 'Si') {
    $totcat2[0] = $totcat2[0] + 7.142857143;
}
if ($preguntas['p7-2'] == 'Si') {
    $totcat2[0] = $totcat2[0] + 7.142857143;
}
if ($preguntas['p7-3'] == 'Si') {
    $totcat2[0] = $totcat2[0] + 7.142857143;
}
if ($preguntas['p7-4'] == 'Si') {
    $totcat2[0] = $totcat2[0] + 7.142857143;
}
if ($preguntas['p7-5'] == 'Si') {
    $totcat2[0] = $totcat2[0] + 7.142857143;
}
if ($preguntas['p7-6'] == 'Si') {
    $totcat2[0] = $totcat2[0] + 7.142857143;
}
if ($preguntas['p7-7'] == 'Si') {
    $totcat2[0] = $totcat2[0] + 7.142857143;
}


// Pregunta 11 y 12	
$totcat2[1] = 0;
if ($preguntas['p8-1'] == 'Si') {
    $totcat2[1] = $totcat2[1] + 50;
}

if ($preguntas['p9-1'] == 'Si') {
    $totcat2[1] = $totcat2[1] + 16.66666667;
}
if ($preguntas['p9-2'] == 'Si') {
    $totcat2[1] = $totcat2[1] + 16.66666667;
}
if ($preguntas['p9-3'] == 'Si') {
    $totcat2[1] = $totcat2[1] + 16.66666667;
}


//echo $totcat2[1];	

// Pregunta 13, 14, 15 y 16	
$totcat2[2] = 0;
if ($preguntas['p10-1'] == 'Si') {
    $totcat2[2] = $totcat2[2] + 16.66666667;
}

if ($preguntas['p11-1'] == 'Si') {
    $totcat2[2] = $totcat2[2] + 16.66666667;
}

if ($preguntas['p12-1'] == 'Si') {
    $totcat2[2] = $totcat2[2] + 16.66666667;
}

if ($preguntas['p12-2'] == 'Si') {
    $totcat2[2] = $totcat2[2] + 8.333333;
}

if ($preguntas['p12-3'] == 'Si') {
    $totcat2[2] = $totcat2[2] + 8.333333;
}

if ($preguntas['p13-1'] == 'Si') {
    $totcat2[2] = $totcat2[2] + 16.66666667;
}
if ($preguntas['p13-2'] == 'Si') {
    $totcat2[2] = $totcat2[2] + 16.66666667;
}


// Pregunta 17, 18, 19, 20	 POLÍTICA DE PROVEEDORES
$totcat2[3] = 0;

if ($preguntas['p17-5'] == 'Si') {
	$noaplica = 1;
} else {
	$noaplica = 0;
}

if ($noaplica == 0) {
	if ($preguntas['p14-1'] == 'Si') {
		$totcat2[3] = $totcat2[3] + 5;
	}
	if ($preguntas['p14-2'] == 'Si') {
		$totcat2[3] = $totcat2[3] + 5;
	}
	if ($preguntas['p14-3'] == 'Si') {
		$totcat2[3] = $totcat2[3] + 5;
	}
	if ($preguntas['p14-4'] == 'Si') {
		$totcat2[3] = $totcat2[3] + 5;
	}
	if ($preguntas['p14-5'] == 'Si') {
		$totcat2[3] = $totcat2[3] + 5;
	}


	if ($preguntas['p15-1'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 6.33333333;
	}
	if ($preguntas['p15-2'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 6.33333333;
	}
	if ($preguntas['p15-3'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 6.33333333;
	}
	if ($preguntas['p15-4'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 6.33333333;
	}


	if ($preguntas['p16-1'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 4;
	}
	if ($preguntas['p16-2'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 11;
	}
	if ($preguntas['p16-3'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 18;
	}
	if ($preguntas['p16-4'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 25;
	}

	if ($preguntas['p17-1'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 6.25;
		}
	if ($preguntas['p17-2'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 6.25;
		}
	if ($preguntas['p17-3'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 6.25;
		}
	if ($preguntas['p17-4'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 6.25;
		}
} else {
	if ($preguntas['p14-1'] == 'Si') {
		$totcat2[3] = $totcat2[3] + 6.6666667;
	}
	if ($preguntas['p14-2'] == 'Si') {
		$totcat2[3] = $totcat2[3] + 6.6666667;
	}
	if ($preguntas['p14-3'] == 'Si') {
		$totcat2[3] = $totcat2[3] + 6.6666667;
	}
	if ($preguntas['p14-4'] == 'Si') {
		$totcat2[3] = $totcat2[3] + 6.6666667;
	}
	if ($preguntas['p14-5'] == 'Si') {
		$totcat2[3] = $totcat2[3] + 6.6666667;
	}


	if ($preguntas['p15-1'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 8.25;
	}
	if ($preguntas['p15-2'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 8.25;
	}
	if ($preguntas['p15-3'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 8.25;
	}
	if ($preguntas['p15-4'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 8.25;
	}


	if ($preguntas['p16-1'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 12;
	}
	if ($preguntas['p16-2'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 19;
	}
	if ($preguntas['p16-3'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 26;
	}
	if ($preguntas['p16-4'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 33;
	}

	if ($preguntas['p17-1'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 6.25;
		}
	if ($preguntas['p17-2'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 6.25;
		}
	if ($preguntas['p17-3'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 6.25;
		}
	if ($preguntas['p17-4'] == 'Si') {
			$totcat2[3] = $totcat2[3] + 6.25;
		}	
}

// Pregunta 21, 22	 POLÍTICA DE PROVEEDORES
$totcat2[4] = 0;
if ($preguntas['p18-1'] == 'Si') {
    $totcat2[4] = $totcat2[4] + 7.14;
}
if ($preguntas['p18-2'] == 'Si') {
    $totcat2[4] = $totcat2[4] + 7.14;
}
if ($preguntas['p18-3'] == 'Si') {
    $totcat2[4] = $totcat2[4] + 7.14;
}
if ($preguntas['p18-4'] == 'Si') {
    $totcat2[4] = $totcat2[4] + 7.14;
}
if ($preguntas['p18-5'] == 'Si') {
    $totcat2[4] = $totcat2[4] + 7.14;
}
if ($preguntas['p18-6'] == 'Si') {
    $totcat2[4] = $totcat2[4] + 7.14;
}
if ($preguntas['p18-7'] == 'Si') {
    $totcat2[4] = $totcat2[4] + 7.14;
}



if ($preguntas['p19-1'] == 'Si') {
    $totcat2[4] = $totcat2[4] + 10;
}
if ($preguntas['p19-2'] == 'Si') {
    $totcat2[4] = $totcat2[4] + 10;
}
if ($preguntas['p19-3'] == 'Si') {
    $totcat2[4] = $totcat2[4] + 10;
}
if ($preguntas['p19-4'] == 'Si') {
    $totcat2[4] = $totcat2[4] + 10;
}
if ($preguntas['p19-5'] == 'Si') {
    $totcat2[4] = $totcat2[4] + 10;
}

// echo $totcat2[4];

// Pregunta 23	 EQUIDAD DE GÉNERO
if ($preguntas['p20-1'] == 'Si') {
    $totcat2[5] = $totcat2[5] + 20;
}
if ($preguntas['p20-2'] == 'Si') {
    $totcat2[5] = $totcat2[5] + 20;
}
if ($preguntas['p20-3'] == 'Si') {
    $totcat2[5] = $totcat2[5] + 20;
}
if ($preguntas['p20-4'] == 'Si') {
    $totcat2[5] = $totcat2[5] + 20;
}
if ($preguntas['p20-5'] == 'Si') {
    $totcat2[5] = $totcat2[5] + 20;
}


$totcat2[0] = round($totcat2[0], 2);
$totcat2[1] = round($totcat2[1], 2);
$totcat2[2] = round($totcat2[2], 2);
$totcat2[3] = round($totcat2[3], 2);
$totcat2[4] = round($totcat2[4], 2);
$totcat2[5] = round($totcat2[5], 2);

$promediocat2 = round(($totcat2[0] + $totcat2[1] + $totcat2[2] + $totcat2[3] + $totcat2[4] + $totcat2[5]) / 6, 2);

//echo $promediocat2;
//echo $totcat2[5];

?>
<!-- HTML -->

<!-- Styles -->
<style>
    #chartdiv2 {
        width: 100%;
        height: auto;
    }
</style>


<script>
    am4internal_webpackJsonp(["fa15"], {
        "Z+ar": function(c, e, t) {
            "use strict";
            Object.defineProperty(e, "__esModule", {
                value: !0
            });
            var b = t("aCit"),
                j = t("8ZqG"),
                O = function(c) {
                    Object(b.b)(c, "ColorSet") && (c.list = [Object(j.c)("#403E3F"), Object(j.c)("#403E3F"), Object(j.c)("#403E3F"), Object(j.c)("#403E3F"), Object(j.c)("#403E3F"), Object(j.c)("#403E3F"), Object(j.c)("#403E3F"), Object(j.c)("#403E3F"), Object(j.c)("#403E3F"), Object(j.c)("#403E3F"), Object(j.c)("#403E3F"), Object(j.c)("#403E3F"), Object(j.c)("#403E3F"), Object(j.c)("#403E3F"), Object(j.c)("#403E3F"), Object(j.c)("#403E3F"), Object(j.c)("#403E3F"), Object(j.c)("#403E3F"), Object(j.c)("#403E3F"), Object(j.c)("#403E3F"), Object(j.c)("#403E3F"), Object(j.c)("#403E3F")], c.minLightness = .2, c.maxLightness = .7, c.reuse = !0)
                };
            window.am4themes_kelly = O
        }
    }, ["Z+ar"]);
    //# sourceMappingURL=kelly.js.map
</script>

<!-- Chart code -->
<script>
    am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_kelly);
        am4core.useTheme(am4themes_animated);
        // Themes end

        var chart = am4core.create("chartdiv2", am4charts.RadarChart);
        chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

        chart.data = [{
                category: "Política de \nTrabajadores",
                value1: <?php echo $totcat2[0] ?>,
                //value2: <?php echo $totcat1[0] / 4 ?>,
                //value3: <?php echo $totcat1[0] / 4 ?>,
                //value4: <?php echo $totcat1[0] / 4 ?>,	
            },
            {
                category: "Equidad de\n sueldos",
                value2: <?php echo $totcat2[1] ?>,
                //value2: <?php echo $totcat1[1] / 4 ?>,
                //value3: <?php echo $totcat1[1] / 4 ?>,
                //value4: <?php echo $totcat1[1] / 4 ?>,
            },
            {
                category: "Desarrollo \nOrganizacional",
                value3: <?php echo $totcat2[2] ?>,
                //value2: <?php echo $totcat1[2] / 4 ?>,
                //value3: <?php echo $totcat1[2] / 4 ?>,
                //value4: <?php echo $totcat1[2] / 4 ?>,
            },
            {
                category: "Política de\n Proveedores",
                value1: <?php echo $totcat2[3] ?>,
                //value2: <?php echo $totcat1[3] / 4 ?>,
                //value3: <?php echo $totcat1[3] / 4 ?>,
                //value4: <?php echo $totcat1[3] / 4 ?>,
            },
            {
                category: "Comunidades",
                value4: <?php echo $totcat2[4] ?>,
                //value2: <?php echo $totcat1[4] / 4 ?>,
                //value3: <?php echo $totcat1[4] / 4 ?>,
                //value4: <?php echo $totcat1[4] / 4 ?>,
            },
            {
                category: "Equidad de\n Género",
                value4: <?php echo $totcat2[5] ?>,
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