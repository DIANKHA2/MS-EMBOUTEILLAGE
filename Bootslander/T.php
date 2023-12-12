<?php
require_once ('src/jpgraph.php');
require_once ('src/jpgraph_bar.php');
require_once ('src/jpgraph_line.php');
require_once ('Historique_des_Arréts.php');

 $datay1 = array (12,15,18,19,7,11);
 $datay2 = array (8,10,14,15,3,7);
 


 $graph = new Graph(800,500,"auto");
 $graph->SetScale('textint');
 $graph->SetShadow();
 $b1plot = new BarPlot($datay1);
 $b2plot = new BarPlot($datay2);

 $gbplot = new GroupBarPlot(array($b1plot,$b2plot,));
 $graph->Add($gbplot);


$b1plot->SetColor("blue");
$b1plot->SetFillColor("blue");
$b1plot->SetLegend("SOMMES");
$b1plot->SetShadow();
 $b1plot->value->SetFormat('%d');
 $b1plot->value->Show();

$b2plot->SetColor("#B0C4DE");
$b2plot->SetFillColor("#B0C4DE");
$b2plot->SetLegend("FREQUENCE");
$b2plot->SetShadow();
 $b2plot->value->SetFormat('%d');
 $b2plot->value->Show();



 $months = array_merge(array('EJECTEUR 2 INSPECTRICE VIDE G1','2023-01-26','2023-01-26'));
 $graph->SetBox(false);
 $graph->xaxis->SetTickLabels($months);

 $graph->legend->SetFrameWeight(1);
 $graph->legend->SetColumns(6);
 $graph->legend->SetColor('#4E4E4E','#00A78A');
 
 
 $graph->Stroke();
 ?>