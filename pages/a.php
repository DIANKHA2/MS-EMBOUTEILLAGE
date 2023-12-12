<?php try {
    $strConnection = 'mysql:host=localhost;dbname=tchat';
    $pdo =new PDO ($strConnection, 'root','');

}
catch (PDOException $e){
    $msg ='ERREUR PDO dans '. $e->getMessage();
    die($msg);
}
        $kala="Connecter...";
        $f=$_GET['id'];
       $ps=$pdo->prepare("UPDATE users SET kala=? WHERE id=? ");
     $params=array($kala,$f);
     $ps->execute($params);
     header("Location:index.php?page=membres");
?>