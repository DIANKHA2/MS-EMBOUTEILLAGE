<?php try {
    $strConnection = 'mysql:host=localhost;dbname=tchat';
    $pdo =new PDO ($strConnection, 'root','');

}
catch (PDOException $e){
    $msg ='ERREUR PDO dans '. $e->getMessage();
    die($msg);
}
     $kala="Connecter";
     $email=$_SESSION['tchat'];
     $ps=$pdo->prepare("UPDATE users SET kala=? WHERE email=? ");
     $params=array($kala,$email);
     $ps->execute($params);
     header("Location:../index.php?page=membres");
?>