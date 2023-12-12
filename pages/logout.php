<?php try {
    $strConnection = 'mysql:host=localhost;dbname=mes_soboa';
    $pdo =new PDO ($strConnection, 'root','');

}
catch (PDOException $e){
    $msg ='ERREUR PDO dans '. $e->getMessage();
    die($msg);
}
     session_destroy();
     header("Location:index.php?page=signin");
?>