<?php // content="text/plain; charset=utf-8"
require_once ('src/jpgraph.php');
require_once ('src/jpgraph_bar.php');


$a= mysqli_connect("localhost","root","","mes_soboas") or die("error connecting to the server");

$query="SELECT * FROM quard3_g1cqprod";
$res=mysqli_query($a,$query);
$vales=[];
while($et=mysqli_fetch_assoc($res)) { 
	array_push($vales, $et["quard3"]);
}

$query1="SELECT * FROM quard3_g1ctmarret";
$res1=mysqli_query($a,$query1);
$vales1=[];
while($et1=mysqli_fetch_assoc($res1)) { 
	array_push($vales1, $et1["quard3"]);
}

$query2="SELECT * FROM quard3_g1ctarret";
$res2=mysqli_query($a,$query2);
$vales2=[];
while($et2=mysqli_fetch_assoc($res2)) { 
	array_push($vales2, $et2["quard3"]);
}

$query3="SELECT * FROM quard3_g1cnarret";
$res3=mysqli_query($a,$query3);
$vales3=[];
while($et3=mysqli_fetch_assoc($res3)) { 
	array_push($vales3, $et3["quard3"]);
}

$query4="SELECT * FROM quard3_g1ctprod";
$res4=mysqli_query($a,$query4);
$vales4=[];
while($et4=mysqli_fetch_assoc($res4)) { 
	array_push($vales4, $et4["quard3"]);
}

$query5="SELECT * FROM quard3_g1ctrg";
$res5=mysqli_query($a,$query5);
$vales5=[];
while($et5=mysqli_fetch_assoc($res5)) { 
	array_push($vales5, $et5["quard3"]);
}



// Create the graph. These two calls are always required
$graph = new Graph(1000,250,'auto');
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);

// set major and minor tick positions manually
$graph->yaxis->SetTickPositions(array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15), array(15,45,75,105,135) );
$graph->SetBox(false);

//$graph->ygrid->SetColor('gray');
$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels(array('Diagramme de visualisation du quard en cours'));
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);


// Create the bar plots
$b1plot = new BarPlot($vales);
$b2plot = new BarPlot($vales1);
$b3plot = new BarPlot($vales2);
$b4plot = new BarPlot($vales3);
$b5plot = new BarPlot($vales4);
$b6plot = new BarPlot($vales5);

$gbplot = new GroupBarPlot(array($b1plot,$b2plot,$b3plot,$b4plot,$b5plot,$b6plot));

// ...and add it to the graPH
$graph->Add($gbplot);


$b1plot->SetColor("white");
$b1plot->SetFillColor("#DC143C");
$b1plot->SetWidth(45);

$b2plot->SetColor("white");
$b2plot->SetFillColor("#808000");
$b2plot->SetWidth(45);

$b3plot->SetColor("white");
$b3plot->SetFillColor("#FFDEAD");
$b3plot->SetWidth(45);

$b4plot->SetColor("white");
$b4plot->SetFillColor("#7B68EE");
$b4plot->SetWidth(45);

$b5plot->SetColor("white");
$b5plot->SetFillColor("#DAA520");
$b5plot->SetWidth(45);

$b6plot->SetColor("white");
$b6plot->SetFillColor("#696969");
$b6plot->SetWidth(45);
$graph->title->Set("Analyse des données du Quard 3 : ");

// Display the graph
$graph->Stroke();
?> 