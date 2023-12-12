<?php
   require_once("../functions/main-functions.php");
?>

<?php
    if(isLogged() == 0){
        header("Location:../index.php?page=signin");
    }
	


function get_CodeWincc(){
	global $db;
	$req="SELECT * FROM analyse_recette_encours";
	$ps=$db->prepare($req);
	$ps->execute();
	while($et=$ps->fetch()) { 
		echo $et['CompteurHeuftV'];
	}
}

function get_CodeWinc(){
	global $db;
	$req="SELECT * FROM analyse_recette_encours";
	$ps=$db->prepare($req);
	$ps->execute();
	while($et=$ps->fetch()) { 
		echo $et['CompteurSoutireuse'];
	}
}


function get_CodeWin(){
	global $db;
	$req="SELECT * FROM analyse_recette_encours";
	$ps=$db->prepare($req);
	$ps->execute();
	while($et=$ps->fetch()) { 
		echo $et['CompteurHeuftP'];
	}
}

function get_CodeWi(){
	global $db;
	$req="SELECT * FROM analyse_recette_encours";
	$ps=$db->prepare($req);
	$ps->execute();
	while($et=$ps->fetch()) { 
		echo $et['CompteurEtiqueteuse'];
	}
}

function get_CodeW(){
	global $db;
	$req="SELECT * FROM analyse_recette_encours";
	$ps=$db->prepare($req);
	$ps->execute();
	while($et=$ps->fetch()) { 
		echo $et['Volume'];
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
			.bi{
				margin-bottom:45px;
				
			}
			.fo{
				
                font-size: 25px;
    background-color: skyblue;
    border-radius: 10px;
    padding: 100px;
}
.hi{
	margin-top:-520px;

}

			

	</style>
	
</head>
<body>
<div class="hi">	
<div class="bi">
<span class="fo" style=" ; color:black; font-family: cursive; font-weight: bold; font-size: 50px;"><?php  get_CodeWincc()?></span>
</div>
<div  class="bi">
<span class="fo" style=" color:black; font-family: cursive; font-weight: bold; font-size: 50px;"><?php get_CodeWinc()?></span>
</div>
<div  class="bi">
<span class="fo" style=" color:black; font-family: cursive; font-weight: bold; font-size: 50px;"><?php get_CodeWin()?></span>
</div>

<div  class="bi">
<span class="fo" style=" color:black; font-family: cursive; font-weight: bold; font-size: 50px;"><?php get_CodeW()?></span>
</div>

</div>
</body>
</html>
