


<?php
try {
    $strConnection = 'mysql:host=localhost;dbname=tchat';
    $pdo =new PDO ($strConnection, 'root','');

}
catch (PDOException $e){
    $msg ='ERREUR PDO dans '. $e->getMessage();
    die($msg);
}
     $login = htmlspecialchars(trim($_POST['username']));
     $password = sha1(htmlspecialchars(trim($_POST['password'])));
  $ps=$pdo->prepare("SELECT * FROM users WHERE email=? AND password=?");
$params=array($login,$pass);
$ps->execute($params);
if ($users=$ps->fetch()) {
	session_start();
	 $_SESSION["tchat"]=$users;
  header("location:mesembouteillageverre.php");
}
else {
  header("location:../indexe.php?page=signincommerce");
}    
?>

  