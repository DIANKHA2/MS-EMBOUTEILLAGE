<?php require_once("conn.php");
$kala="Hor Ligne...";
        $f=$_GET['id'];
       $ps=$pdo->prepare("UPDATE users SET kala=? WHERE id=? ");
$params=array($login,$pass);
$ps->execute($params);
if ($users=$ps->fetch()) {
	session_start();
	 $_SESSION["PROFILE"]=$users;
  header("location:voiture.php");
}
else {
  header("location:logout.php");
}
?>
