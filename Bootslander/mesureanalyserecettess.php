<?php
   require_once("../functions/main-functions.php");
?>

<?php
    if(isLogged() == 0){
        header("Location:../index.php?page=signin");
    }


	function get_CodeWincss_G7(){
		global $db;
		$req="SELECT * FROM analyse_recette_encours_g7";
		$ps=$db->prepare($req);
		$ps->execute();
		while($et=$ps->fetch()) { 
			echo $et['CompteurSoutireuse'];
		}
	}
	
	
	function get_CodeWinss_G7(){
		global $db;
		$req="SELECT * FROM analyse_recette_encours_g7";
		$ps=$db->prepare($req);
		$ps->execute();
		while($et=$ps->fetch()) { 
			echo $et['CompteurHeuftP'];
		}
	}
	
	function get_CodeWiss_G7(){
		global $db;
		$req="SELECT * FROM analyse_recette_encours_g7";
		$ps=$db->prepare($req);
		$ps->execute();
		while($et=$ps->fetch()) { 
			echo $et['CompteurEtiqueteuse'];
		}
	}
	
	function get_CodeWss_G7(){
		global $db;
		$req="SELECT * FROM analyse_recette_encours_g7";
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

	</style>
	
</head>
<body> 


<div  class="b">
    <span class="fo" style=" color:black; font-family: cursive; font-weight: bold; font-size: 19px;  ">Bouteille_soutirée</span>
<span class="fos e" style="   color:black; font-family: cursive; font-weight: bold; font-size: 22px; margin-left: 85px;"><?php get_CodeWincss_G7()?></span>
<span><img    style="margin-left: -37px"; src="../r1_G7.php" . alt="1"/></span>
</div>
<div  class="b">
    <span class="fo" style=" color:black; font-family: cursive; font-weight: bold; font-size: 19px;">Bouteille_Sortie_HeutfP_Pleine</span>
<span class="fos k" style="  color:black; font-family: cursive; font-weight: bold; font-size: 22px; margin-left: -35px;"><?php get_CodeWinss_G7()?></span>
<span><img  style="margin-left: -40px"; src="../r3_G7.php" . alt="1"/></span>
</div>

<div  class="b">
    <span class="fo"style=" color:black; font-family: cursive; font-weight: bold; font-size: 19px; ">Volume_Produit</span>
<span class="fos o " style=" color:black; font-family: cursive; font-weight: bold; font-size: 22px; margin-left: 112px;"><?php get_CodeWss_G7()?></span>
<span><img style="margin-left: -38px"; src="../r4_G7.php " . alt="1"/></span>
</div>
<div >
</body>
</html>
