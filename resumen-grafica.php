<!-- <script src="https://cdn.amcharts.com/lib/4/themes/material.js"></script> -->
<!-- Chart code -->
<script>
    am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_material);
        am4core.useTheme(am4themes_animated);
        // Themes end

        var chart = am4core.create("chartdiv4", am4charts.RadarChart);
        chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

        chart.data = [{
                category: "GOBERNANZA \nY ÉTICA",
                value1: <?php echo $promediocat1 ?>,
                //value2: <?php echo $totcat1[0] / 4 ?>,
                //value3: <?php echo $totcat1[0] / 4 ?>,
                //value4: <?php echo $totcat1[0] / 4 ?>,	
            },
            {
                category: "SOCIAL \nPERSONAS",
                value2: <?php echo $promediocat2 ?>,
                //value2: <?php echo $totcat1[1] / 4 ?>,
                //value3: <?php echo $totcat1[1] / 4 ?>,
                //value4: <?php echo $totcat1[1] / 4 ?>,
            },
            {
                category: "MEDIO \nAMBIENTE",
                value3: <?php echo $promediocat3 ?>,
                //value2: <?php echo $totcat1[2] / 4 ?>,
                //value3: <?php echo $totcat1[2] / 4 ?>,
                //value4: <?php echo $totcat1[2] / 4 ?>,
            }
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

<script>
    am4internal_webpackJsonp(["8593"], {
        d66p: function(c, t, e) {
            "use strict";
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var b = e("aCit"),
                o = e("8ZqG"),
                n = function(c) {
                    Object(b.b)(c, "ColorSet") && (c.list = [Object(o.c)("#cc004c"), Object(o.c)("#403E3F"), Object(o.c)("#fcb711"), Object(o.c)("#673AB7"), Object(o.c)("#3F51B5"), Object(o.c)("#2196F3"), Object(o.c)("#03A9F4"), Object(o.c)("#00BCD4"), Object(o.c)("#009688"), Object(o.c)("#4CAF50"), Object(o.c)("#8BC34A"), Object(o.c)("#CDDC39"), Object(o.c)("#FFEB3B"), Object(o.c)("#FFC107"), Object(o.c)("#FF9800"), Object(o.c)("#FF5722"), Object(o.c)("#795548"), Object(o.c)("#9E9E9E"), Object(o.c)("#607D8B")], c.minLightness = .2, c.maxLightness = .7, c.reuse = !0), Object(b.b)(c, "ResizeButton") && (c.background.cornerRadiusTopLeft = 20, c.background.cornerRadiusTopRight = 20, c.background.cornerRadiusBottomLeft = 20, c.background.cornerRadiusBottomRight = 20), Object(b.b)(c, "Tooltip") && (c.animationDuration = 800)
                };
            window.am4themes_material = n
        }
    }, ["d66p"]);
</script>