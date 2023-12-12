<?php
   require_once("../functions/main-functions.php");
?>

<?php
    if(isLogged() == 0){
        header("Location:../index.php?page=signin");
    }
	
	function get_CodeWinccs(){
		global $db;
		$req="SELECT * FROM analyse_recette_encours";
		$ps=$db->prepare($req);
		$ps->execute();
		while($et=$ps->fetch()) { 
			echo $et['idRecettes'];
		}
	}
	
	
	function get_Quards1(){
		global $db;
		$req="SELECT * FROM analyse_recette_encours";
		$ps=$db->prepare($req);
		$ps->execute();
		while($et=$ps->fetch()) { 
			echo $et['idRecettes'];
		}
	}

	
	function get_Quards2(){
		global $db;
		$req="SELECT * FROM analyse_recette_encours";
		$ps=$db->prepare($req);
		$ps->execute();
		while($et=$ps->fetch()) { 
			echo $et['idRecettes'];
		}
	}

	function get_Quards3(){
		global $db;
		$req="SELECT * FROM analyse_recette_encours";
		$ps=$db->prepare($req);
		$ps->execute();
		while($et=$ps->fetch()) { 
			echo $et['idRecettes'];
		}
	}
	?>


			
  <!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <title>MES EMBOUTEILLAGE VERRE</title>
  <link href="assets/img/soboa-icones.png" rel="icon">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css"/>
  <style>
        #pu{
            background-color: lightblue;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  </head>
  <body id="pu">

  <?php require_once("entete.php");?>
<?php $Object = new DateTime();  
$Object->setTimezone(new DateTimeZone('Africa/Dakar'));
$DateAndTime = $Object->format("d-m-Y H:i:s ");
$DateAndTimes = $Object->format("H"); ?> 
<h2 style="font-size:30px ; text-align:center; height:300px; background-color:lightblue; font-family: Arial Black; margin-top:60px;";><?php  echo " $DateAndTime.";?><h2>

<div class="col-md-6 col-xs-6 spacer d-block" style="margin-top:-320px;">
    	  <div class="panel panel-info spacer ">
    	  	<div a style= "text-align: center ;"class="panel-heading">Recette_En_Cours: <strong style="colors: green"><?php get_CodeWinccs()?></strong></div>
    	  	<div class="panel-body"  >
			  <?php include("graphanalyserecette.php")?>
				<?php include("mesureanalyserecette.php")?>
			  </div> 
    	  </div>  	
  </div>

 

  <div class="col-md-6 col-xs-6 spacer "style="margin-top:-320px; margin-right:-85px;">
    	  <div class="panel panel-info spacer ">
    	  	<div a style= "text-align: center ; "class="panel-heading">Mes_Quards</div>
    	  	<div class="panel-body">
			  <?php include("graphQuart.php")?>
			  <?php include("mesureQuard.php")?>
    	  	</div> 
    	  </div>
  	
  </div>