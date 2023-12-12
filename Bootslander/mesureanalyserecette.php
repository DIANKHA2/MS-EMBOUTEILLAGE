 <?php
   require_once("../functions/main-functions.php");
?>

<?php
    if(isLogged() == 0){
        header("Location:../index.php?page=signin");
    }
	


function get_CodeWincc_G1(){
	global $db;
	$req="SELECT * FROM analyse_recette_encours_G1";
	$ps=$db->prepare($req);
	$ps->execute();
	while($et=$ps->fetch()) { 
		echo $et['CompteurHeuftV'];
	}
}

function get_CodeWinc_G1(){
	global $db;
	$req="SELECT * FROM analyse_recette_encours_G1";
	$ps=$db->prepare($req);
	$ps->execute();
	while($et=$ps->fetch()) { 
		echo $et['CompteurSoutireuse'];
	}
}


function get_CodeWin_G1(){
	global $db;
	$req="SELECT * FROM analyse_recette_encours_G1";
	$ps=$db->prepare($req);
	$ps->execute();
	while($et=$ps->fetch()) { 
		echo $et['CompteurHeuftP'];
	}
}

function get_CodeWi_G1(){
	global $db;
	$req="SELECT * FROM analyse_recette_encours_G1";
	$ps=$db->prepare($req);
	$ps->execute();
	while($et=$ps->fetch()) { 
		echo $et['CompteurEtiqueteuse'];
	}
}

function get_CodeW_G1(){
	global $db;
	$req="SELECT * FROM analyse_recette_encours_G1";
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
			.b{
			
				display: inline-block;
			}
			span.fo{
							
    background-color: skyblue;
    border-radius: 10px;
    box-shadow: 6px 6px 25px rgba(0, 0, 0, 0.5);
    

}

.fos{
	font-size: 25px;
    background-color: skyblue;
    border-radius: 10px;
    box-shadow: 6px 6px 25px rgba(0, 0, 0, 0.5);

}

.u{
	
	padding: 30px;
	padding-bottom: 1px;
	padding-top: 1px;
		
		
	
}
.e{
	padding: 30px;
	padding-bottom: 1px;
	padding-top: 1px;
}
.k{
	padding: 30px;
	padding-bottom: 1px;
	padding-top: 1px;
}
			
.o{
	padding: 30px;
	padding-bottom: 1px;
	padding-top: 1px;
	padding-left: 20px;
	padding-right: 15px;
	
} 

	</style>
	
</head>
<body>
<div class="b">
    <span class="fo" style=" color:black; font-family: cursive; font-weight: bold; font-size: 19px;  ">Bouteille_Sortie_Laveuse</span>
	<span class="fos u" style=" margin-left: 20px; width: 7888555px; color:black; font-family: cursive; font-weight: bold; font-size: 22px; "><?php  get_CodeWincc_G1()?></span>
	<span><img   style="margin-left: -31px"; src="../r_G1.php" . alt="1"/></span>

</div>
<div  class="b">
    <span class="fo" style=" color:black; font-family: cursive; font-weight: bold; font-size: 19px;  ">Bouteille_soutirée</span>
<span class="fos e" style="   color:black; font-family: cursive; font-weight: bold; font-size: 22px; margin-left: 85px;"><?php get_CodeWinc_G1()?></span>
<span><img    style="margin-left: -29px"; src="../r1_G1.php" . alt="1"/></span>
</div>
<div  class="b">
    <span class="fo" style=" color:black; font-family: cursive; font-weight: bold; font-size: 19px;">Bouteille_Sortie_HeutfP_Pleine</span>
<span class="fos k" style="  color:black; font-family: cursive; font-weight: bold; font-size: 22px; margin-left:-37px;"><?php get_CodeWin_G1()?></span>
<span><img  style="margin-left: -30px"; src="../r3_G1.php" . alt="1"/></span>
</div>

<div  class="b">
    <span class="fo"style=" color:black; font-family: cursive; font-weight: bold; font-size: 19px; ">Volume_Produit</span>
<span class="fos o " style=" color:black; font-family: cursive; font-weight: bold; font-size: 22px; margin-left: 111px;"><?php get_CodeW_G1()?></span>
<span><img  style="margin-left: -29px"; src="../r4_G1.php " . alt="1"/></span>
</div>
<div >
</body>
</html>
