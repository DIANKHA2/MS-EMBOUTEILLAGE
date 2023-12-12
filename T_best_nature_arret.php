<?php
require_once ('src/jpgraph.php');
require_once ('src/jpgraph_bar.php');
require_once ('src/jpgraph_line.php');

    session_start();
    $dbhost = 'localhost';
    $dbname = 'mes_soboas';
    $dbuser = 'root';
    $dbpswd = '';

    try{
        $db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpswd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }catch(PDOexception $e){
        die("Une erreur est survenue lors de la connexion a la base de donnees");
    }


if(isset($_POST['datedebut']))
{ $dateDebut=$_POST['datedebut'];
    $_SESSION['datedebut'] = $dateDebut;
    
}

if(isset($_POST['datefin']))
{ $dateFin=$_POST['datefin'];
    $_SESSION['dateFin'] = $dateFin;
    
}

 $stmt  = $db->prepare("CALL getbestArretByNature(:d,:f)");
 $d = $_SESSION['datedebut'];
 $f = $_SESSION['dateFin'];

 $stmt->bindValue(':d',$d);
 $stmt->bindValue(':f',$f);
 $stmt->execute();
 $vales2=[];
 $vales3=[];
 while($et=$stmt->fetch()) { 
                           
  array_push($vales2, $et['Somme']); 
  array_push($vales3, $et['nature']);
  }

		
 $graph = new Graph(1600,380,"auto");
 $graph->SetScale('textint');
 $graph->SetShadow();
 $b1plot = new BarPlot($vales2);
 $graph->Add($b1plot);


$b1plot->SetColor("blue");
$b1plot->SetFillColor("blue");
$b1plot->SetLegend("SOMME");
$b1plot->SetShadow();
 $b1plot->value->SetFormat('%d');
 $b1plot->value->Show();
 $b1plot->value->SetFont(FF_TREBUCHE,FS_BOLD,25);

 $graph ->legend->Pos( 00.1,00.1, "right" ,"center");

 $months = array_merge($vales3);
 $graph->SetBox(false);
 $graph->xaxis->SetTickLabels($months);
 $graph->xaxis->SetFont(FF_TREBUCHE,FS_BOLD,9);

 $graph->legend->SetFrameWeight(1);
 $graph->legend->SetColumns(6);
 $graph->legend->SetFont(FF_TREBUCHE,FS_BOLD,15);
 $graph->title->Set("La somme de la durée des arrêts par nature");
 $graph->title->SetFont(FF_GEORGIA,FS_BOLD, 20);

 $graph->xaxis->title->Set("Top 6 des natures qui posent probléme");
 $graph->xaxis->title->SetFont(FF_TREBUCHE,FS_BOLD,25);

 
 
 $graph->Stroke();


 ?>