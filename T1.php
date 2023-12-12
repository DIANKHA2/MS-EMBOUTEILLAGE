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

if(isset($_POST['kla']))
{ $kLa=$_POST['kla'];
   $_SESSION['klatn'] = $kLa;
   
}
 $stmt  = $db->prepare("CALL getArretByNature(:d,:f,:n)");
 $d = $_SESSION['datedebut'];
 $f = $_SESSION['dateFin'];
 $n = $_SESSION['klatn'];


 $stmt->bindValue(':d',$d);
 $stmt->bindValue(':f',$f);
 $stmt->bindValue(':n',$n);
 $stmt->execute();
 $vales1=[];
 $vales2=[];
 $vales3=[];
 while($et=$stmt->fetch()) { 
                           
  array_push($vales1, $et['Frequence']); 
  array_push($vales2, $et['Somme']); 
  array_push($vales3, $et['debut']);
  }

		
 $graph = new Graph(1380,600,"auto");
 $graph->SetScale('textint');
 $graph->SetShadow();
 $b1plot = new BarPlot($vales2);
 $b2plot = new BarPlot($vales1);

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

 $graph ->legend->Pos( 00.1,00.1, "right" ,"center");

 $months = array_merge($vales3);
 $graph->SetBox(false);
 $graph->xaxis->SetTickLabels($months);

 $graph->legend->SetFrameWeight(1);
 $graph->legend->SetColumns(6);
 $graph->legend->SetColor('#4E4E4E','#00A78A');
 
 
 $graph->Stroke();


 ?>