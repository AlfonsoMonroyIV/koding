<?php

    $muestra =$_REQUEST['lmuestra'];
    $emuestra = explode(",", $muestra);
    foreach ($emuestra as $key => $value) {
            $buscar = (array_keys($emuestra, $value));
            $contador = count($buscar);
            echo "$value se repite $contador veces <br>";
    }
    var_dump($emuestra)
?>

<html>
<head>

<title>JSChart</title>

<script type="text/javascript" src="sources/jscharts.js"></script>

</head>
<body>
                                <div class="col-sm-12">
                                    <!-- #section:elements.tab.position -->
                                    <div class="tabbable tabs-left">
                                        <ul class="nav nav-tabs" id="myTab3">
                                            <li class="active">
                                                <a data-toggle="tab" href="#home3">
                                                    <i class="pink ace-icon fa fa-tachometer bigger-110"></i>
                                                    Grafica de Barras
                                                </a>
                                            </li>

                                            <li>
                                                <a data-toggle="tab" href="#profile3">
                                                    <i class="blue ace-icon fa fa-user bigger-110"></i>
                                                    Grafica Poligonal
                                                </a>
                                            </li>

                                        </ul>

                                        <div class="tab-content">
                                            <div id="home3" class="tab-pane in active">
                                                    <div id="graph">Loading graph...</div>
                                            </div>

                                            <div id="profile3" class="tab-pane">
                                                <div id="graphp">Loading graph...</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /section:elements.tab.position -->
                                </div><!-- /.col -->

<script type="text/javascript">
var array_js = new Array();
</script>
<script type="text/javascript">
    var myData = new Array(['1', 21], ['5', 28], ['15', 12], ['2', 17]);
    var colors = ['#AF0202', '#EC7A00', '#FCD200', '#81C714'];
    var myChart = new JSChart('graph', 'bar');
    myChart.setDataArray(myData);
    myChart.colorizeBars(colors);
    myChart.setTitle('Frecuencia de la muestra.');
    myChart.setTitleColor('#8E8E8E');
    myChart.setAxisNameX('Muestra');
    myChart.setAxisNameY('F');
    myChart.setAxisColor('#C4C4C4');
    myChart.setAxisNameFontSize(12);
    myChart.setAxisNameColor('#999');
    myChart.setAxisValuesColor('#7E7E7E');
    myChart.setBarValuesColor('#7E7E7E');
    myChart.setAxisPaddingTop(60);
    myChart.setAxisPaddingRight(140);
    myChart.setAxisPaddingLeft(150);
    myChart.setAxisPaddingBottom(40);
    myChart.setTextPaddingLeft(105);
    myChart.setTitleFontSize(11);
    myChart.setBarBorderWidth(1);
    myChart.setBarBorderColor('#C4C4C4');
    myChart.setBarSpacingRatio(50);
    myChart.setGrid(false);
    myChart.setSize(616, 321);
    myChart.setBackgroundImage('chart_bg.jpg');
    myChart.draw();
</script>
<!--Grafica Poligonal-->
<script type="text/javascript">
    var myData = new Array(['1', 21], ['5', 28], ['15', 12], ['2', 17]);;
    var myChart = new JSChart('graphp', 'line');
    myChart.setDataArray(myData);
    myChart.setTitle('Frecuencia de la muestra.');
    myChart.setTitleColor('#8E8E8E');
    myChart.setTitleFontSize(11);
    myChart.setAxisNameX('Muestra');
    myChart.setAxisNameY('F');
    myChart.setAxisColor('#C4C4C4');
    myChart.setAxisValuesColor('#343434');
    myChart.setAxisPaddingLeft(100);
    myChart.setAxisPaddingRight(120);
    myChart.setAxisPaddingTop(50);
    myChart.setAxisPaddingBottom(40);
    myChart.setAxisValuesNumberX(6);
    myChart.setGraphExtend(true);
    myChart.setGridColor('#c2c2c2');
    myChart.setLineWidth(6);
    myChart.setLineColor('#9F0505');
    myChart.setSize(616, 321);
    myChart.setBackgroundImage('chart_bg.jpg');
    myChart.draw();
</script><!-- Ends Grafica Poligonal-->
</body>
</html>