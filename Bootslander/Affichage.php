<div id="instnatane">
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
<div class="no">

<div class="col-md-3 col-xs-3 spacer "style="margin-top:-440px; margin-left:1650px; padding:90px;">
    	  <div class="panel panel-info spacer ">
    	  	<div a style= "text-align: center ; "class="panel-heading">Mes_Quards_G7</div>
    	  	<div class="panel-body">
			  <?php include("mesureQuard.php")?>
    	  	</div> 
    	  </div>  	
  </div>

  <div class="col-md-3 col-xs-6 spacer "style=" margin-top:-880px; padding:90px; margin-left:50px;">
    	  <div class="panel panel-info spacer ">
    	  	<div a style= "text-align: center ; "class="panel-heading">Mes_Quards_G1</div>
    	  	<div class="panel-body">
			  <?php include("mesureQuard1.php")?>
    	  	</div> 
    	  </div>  	
  </div>

  <div class="col-md-4 col-xs-3 spacer "style=" margin-top:-977px; margin-left:150px; padding:190px;">
    	  <div class="panel panel-info spacer ">
    	  	<div a style= "text-align: center ; "class="panel-heading">Mes_Quards_G6</div>
    	  	<div class="panel-body">
			  <?php include("mesureQuard3.php")?>
    	  	</div> 
    	  </div>  	
  </div>


<div class="col-md-4 col-xs-3 spacer d-block" style="margin-top:-150px; margin-left:-1530px; ">
    	  <div class="panel panel-info spacer ">
    	  	<div a style= "text-align: center ;  font-size: 22px;"class="panel-heading">Recette_En_Cours_Pour_G1: <strong style="colors: green; "><?php get_CodeWinccs_G1()?></strong></div>
    	  	<div class="panel-body"  >
				<?php include("mesureanalyserecette.php")?>
				
				
			  </div> 
    	  </div>  	
  </div>

  <div class="col-md-12 col-xs-3 spacer d-block" style="margin-top:-290px; margin-left:820px;">
    	  <div class="panel panel-info spacer ">
    	  	<div a style= "text-align: center ;  font-size: 22px;"class="panel-heading">Recette_En_Cours_Pour_G6: <strong style="colors: green; "><?php get_CodeWinccs_G6()?></strong></div>
    	  	<div class="panel-body"  >
				<?php include("mesureanalyserecettes.php")?>
				
				
			  </div> 
    	  </div>  	
  </div>



  <div class="col-md-12 col-xs-3 spacer d-block" style="margin-top:-260px;  margin-left:720px;">.
    	  <div class="panel panel-info spacer ">
    	  	<div a style= "text-align: center ;  font-size: 22px;"class="panel-heading">Recette_En_Cours_Pour_G7: <strong style="colors: green; "><?php get_CodeWinccs_G7()?></strong></div>
    	  	<div class="panel-body"  >
				<?php include("mesureanalyserecettess.php")?>
				
				
			  </div> 
    	  </div>  	
  </div>

  

 

 
  <div>
  </div>
 


  			<!-- script rafarichissement automatique-->
			  <script>
	setInterval('load_affichage()', 500);
	function load_affichage(){
		$('#instnatane').load('load_affichage.php');
	}
	setInterval('load_affichage()', 500);
	function load_affichage(){
		$('#instnatane').load('load_affichage.php');
	}
  </script>
  </script>
  


</body>
</html>
