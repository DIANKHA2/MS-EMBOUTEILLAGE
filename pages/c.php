<?php try {
    $strConnection = 'mysql:host=localhost;dbname=tchat';
    $pdo =new PDO ($strConnection, 'root','');

}
catch (PDOException $e){
    $msg ='ERREUR PDO dans '. $e->getMessage();
    die($msg);
}
         $id=$_GET['id'];
       $ps=$pdo->prepare("DELETE FROM  users  WHERE id=?");
     $params=array($id);
     $ps->execute($params);
      session_destroy();
     header("Location:index.php?page=signin");
?>