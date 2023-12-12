<?php
   require_once("../functions/main-functions.php");
?>

<?php
    if(isLogged() == 0){
        header("Location:../index.php?page=signin");
    }
	
	function get_CodeWinccs_G1(){
		global $db;
		$req="SELECT * FROM analyse_recette_encours_g1";
		$ps=$db->prepare($req);
		$ps->execute();
		while($et=$ps->fetch()) { 
			echo $et['Designation'];
		}
	}

  function get_CodeWinccs_G6(){
		global $db;
		$req="SELECT * FROM analyse_recette_encours_g6";
		$ps=$db->prepare($req);
		$ps->execute();
		while($et=$ps->fetch()) { 
			echo $et['Designation'];
		}
	}

  function get_CodeWinccs_G7(){
		global $db;
		$req="SELECT * FROM analyse_recette_encours_g7";
		$ps=$db->prepare($req);
		$ps->execute();
		while($et=$ps->fetch()) { 
			echo $et['Designation'];
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

<img style="margin-top:-330px; margin-left:2120px; " src="assets/img/soboa-icones.png" alt="Imperial" width=80; height=60;>
<img style="margin-top:-330px; margin-rightt:2170px; " src="assets/img/soboa-icones.png" alt="Imperial" width=80; height=60;>
<div class="no">

<div class="col-md-2 col-xs-3 spacer "style=" margin-top:-166px; padding:px; margin-left:-5px;">
    	  <div class="panel panel-info spacer ">
    	  	<div a style= "text-align: center ; "class="panel-heading">Mes_statistiques</div>
    	  	<div class="panel-body">
			  <a class="btn btn-success" style="font-family: cursive; font-weight: bold; font-size: 23px;" href="statistiquedesarrets.php" role="button">Statistique des arrêts</a>
	          <p></p>
			  <a class="btn btn-success" style="font-family: cursive; font-weight: bold; font-size: 20px;" href="statistiquedesarrets.php" role="button">Statistique des productions</a>
    	  	</div> 
    	  </div>  	
  </div> 


<div class="col-md-4 col-xs-4 spacer "style="margin-top:-285px; margin-left:-70px; ">
    	  <div class="panel panel-info spacer ">
    	  	<div a style= "text-align: center ; "class="panel-heading">Resumé des recettes</div>
    	  	<div class="panel-body">

		 <div class="col-md-12 col-xs-12 spacer d-block">
    	  <div class="panel panel-info spacer " style="margin-top:-21px; ">
    	  	<div a style= "text-align: center ;  font-size: 22px;"class="panel-heading">Recette_En_Cours_Pour_G1: <strong style="colors: green; "><?php get_CodeWinccs_G1()?></strong></div>
    	  	<div class="panel-body"  >
				<?php include("mesureanalyserecette.php")?>
			</div> 
    	  </div> </div>

		  <div class="col-md-12 col-xs-12 spacer d-block">
    	  <div class="panel panel-info spacer " style="margin-top:-21px; ">
    	  	<div a style= "text-align: center ;  font-size: 22px;"class="panel-heading">Recette_En_Cours_Pour_G6: <strong style="colors: green; "><?php get_CodeWinccs_G6()?></strong></div>
    	  	<div class="panel-body"  >
				<?php include("mesureanalyserecettes.php")?>
			</div> 
    	  </div> </div>
    	  	</div> 
    	  </div>  	
		  <div class="col-md-12 col-xs-12 spacer d-block">
    	  <div class="panel panel-info spacer " style="margin-top:-21px; ">
    	  	<div a style= "text-align: center ;  font-size: 22px;"class="panel-heading">Recette_En_Cours_Pour_G7: <strong style="colors: green; "><?php get_CodeWinccs_G7()?></strong></div>
    	  	<div class="panel-body"  >
				<?php include("mesureanalyserecettess.php")?>
			</div> 
    	  </div> </div>
    	  	</div> 
    	  </div>  	
  </div>
  </div>

  
    	  	</div> 
    	  </div>  	
  </div>

  


  
<div class="col-md-3 col-xs-3 spacer "style="margin-top:-1000px; margin-left:1740px; padding:90px;">
    	  <div class="panel panel-info spacer ">
    	  	<div a style= "text-align: center ; "class="panel-heading">Mes_Quards_G7</div>
    	  	<div class="panel-body">
			  <?php include("mesureQuard.php")?>
    	  	</div> 
    	  </div>  	
  </div>

  <div class="col-md-3 col-xs-3 spacer "style=" margin-top:-1090px; padding:90px; margin-left:955px;">
    	  <div class="panel panel-info spacer ">
    	  	<div a style= "text-align: center ; "class="panel-heading">Mes_Quards_G1</div>
    	  	<div class="panel-body">
			  <?php include("mesureQuard1.php")?>
    	  	</div> 
    	  </div>  	
  </div>

  <div class="col-md-4 col-xs-3 spacer "style=" margin-top:-1180px; margin-left:1254px; padding:180px;">
    	  <div class="panel panel-info spacer ">
    	  	<div a style= "text-align: center ; "class="panel-heading">Mes_Quards_G6</div>
    	  	<div class="panel-body">
			  <?php include("mesureQuard3.php")?>
    	  	</div>  
    	  </div>  	
		  
		 
  </div>




  