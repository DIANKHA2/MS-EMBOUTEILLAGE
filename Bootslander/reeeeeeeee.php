<?php
   require_once("../functions/main-functions.php");
?>
<?php function get_CodeWincc($CodeWinccs){
	global $db;
	$CodeWincc=1;
	$CodeWincc= $CodeWinccs;
	$req="SELECT * FROM dataprocess WHERE CodeWincc like '%$CodeWincc%' ";
	$ps=$db->prepare($req);
	$ps->execute();
	while($et=$ps->fetch()) { 
		echo $et['ValeurRT'];
	}
}?>
<?php substr(get_CodeWincc('G1C.NARRET_H1'),0)?>