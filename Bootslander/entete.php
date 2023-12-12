
<?php
   require_once("../functions/main-functions.php");
?>
<div class="navbar navbar-inverse navbar-fixed-top">
	 <ul class="nav navbar-nav">
	 	<!--<li> <a href="produit.php">MES EMBOUTEILLAGE VERRE</a></li>-->
	 	<!--<li><a href="saisirproduit.php">Ajouter un Produit</a></li>>-->
	 	  <li style="text-align-center"><a style= "margin-left: 850px;" href="../index.php?page=logout" >DECONNEXION [<?php echo ((isset($_SESSION['tchat'])) ?($_SESSION['tchat']): "")?>]</a></li>
	 	 <!-- <li><a href="chercherpr.oduit.php">Chercher un Produit</a></li>-->
	 	  <li><a href="../home.php">home</a></li>
		   <li><a href="Liste_des_utilisateurs.php">Affichage_user</a></li>
		   <!-- <li><a href="mesembouteillageverre.php">MES EMBOUTEILLAGE VERRE</a></li>-->
		   <li><a href="Affichage.php">Accueil</a></li>
           

	</ul>
</div>
