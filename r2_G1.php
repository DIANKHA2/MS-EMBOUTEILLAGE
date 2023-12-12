<?php // content="text/plain; charset=utf-8"
require_once ('src/jpgraph.php');
require_once ('src/jpgraph_bar.php');


$a= mysqli_connect("localhost","root","","mes_soboas") or die("error connecting to the server");

$query="SELECT * FROM analyse_recette_encours";
$res=mysqli_query($a,$query);
$vales=[];
while($et=mysqli_fetch_assoc($res)) { 
	array_push($vales, $et["CompteurHeuftV"]);
}

$query1="SELECT * FROM analyse_recette_encours";
$res1=mysqli_query($a,$query1);
$vales1=[];
while($et1=mysqli_fetch_assoc($res1)) { 
	array_push($vales1, $et1["CompteurSoutireuse"]);
}

$query2="SELECT * FROM analyse_recette_encours";
$res2=mysqli_query($a,$query2);
$vales2=[];
while($et2=mysqli_fetch_assoc($res2)) { 
	array_push($vales2, $et2["CompteurHeuftP"]);
}

$query3="SELECT * FROM analyse_recette_encours";
$res3=mysqli_query($a,$query3);
$vales3=[];
while($et3=mysqli_fetch_assoc($res3)) { 
	array_push($vales3, $et3["Volume"]);
}




// Create the graph. These two calls are always required
$graph = new Graph(250,30,'auto');
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);
$graph->Set90AndMargin(50,10);
$graph->img->SetAngle(90);

// set major and minor tick positions manually
$graph->yaxis->SetTickPositions(array(0,100,2000,3000,4000,5000,6000,7000,8000,9000,10000,11000,12000,13000,14000,15000), array(15000,45000,75000,10500,13500) );
$graph->SetBox(false);

//$graph->ygrid->SetColor('gray');
$graph->ygrid->Show(false);
$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels(array('.','B','C','D','E','F'));
$graph->yaxis->SetTickLabels(array('.','B','C','D','E','F'));
$graph->yaxis->HideLine(true);
$graph->yaxis->HideTicks(false,false);


// Create the bar plots
$b1plot = new BarPlot($vales);
$b2plot = new BarPlot($vales1);
$b3plot = new BarPlot($vales2);
$b4plot = new BarPlot($vales3);


$gbplot = new GroupBarPlot(array($b1plot,$b2plot,$b3plot,$b4plot));

// ...and add it to the graPH
$graph->Add($gbplot);


$b1plot->SetColor("white");
$b1plot->SetFillColor("#696969");
$b1plot->SetWidth(45);

$b2plot->SetColor("white");
$b2plot->SetFillColor("#2F4F4F");
$b2plot->SetWidth(45);

$b3plot->SetColor("white");
$b3plot->SetFillColor("#8B008B");
$b3plot->SetWidth(45);

$b4plot->SetColor("white");
$b4plot->SetFillColor("#FF4500");
$b4plot->SetWidth(45);




// Display the graph
$graph->Stroke();
?>