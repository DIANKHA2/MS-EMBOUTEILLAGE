<?php // content="text/plain; charset=utf-8"
require_once ('src/jpgraph.php');
require_once ('src/jpgraph_bar.php');


$a= mysqli_connect("localhost","root","","mes_soboas") or die("error connecting to the server");

$query="SELECT * FROM analyse_recette_encours_g6";
$res=mysqli_query($a,$query);
$vales=[];
while($et=mysqli_fetch_assoc($res)) { 
	array_push($vales, $et["CompteurHeuftP"]);
}

// Create the graph. These two calls are always required
$graph = new Graph(137,30,'auto');
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);

// set major and minor tick positions manually
$graph->yaxis->SetTickPositions(array(0,1000,2000,3000,4000,5000,6000,7000,8000,9000,10000), array(15,45,75,105,135));
$graph->SetBox(false);

$graph->Set90AndMargin(50,10);
$graph->img->SetAngle(90); 

// set major and minor tick positions manually
$graph->SetBox(false);

//$graph->ygrid->SetColor('gray');
$graph->ygrid->Show(false);
$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels(array('.','B','C','D','E','F'));
$graph->yaxis->SetTickLabels(array('.','B','C','D','E','F'));
$graph->yaxis->HideLine(true);
$graph->yaxis->HideTicks(false,false);

// For background to be gradient, setfill is needed first.


// Create the bar plots
$b1plot = new BarPlot($vales);

// ...and add it to the graPH
$graph->Add($b1plot);

$b1plot->SetWeight(0);
$b1plot->SetFillGradient("#228B22","#228B22",GRAD_HOR);
$b1plot->SetWidth(50);

// Display the graph
$graph->Stroke();
?>