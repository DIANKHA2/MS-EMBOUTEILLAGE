<?php
   require_once("../functions/main-functions.php");
  

    if(isLogged() == 0){
        header("Location:../index.php?page=signin");
    }
    
    $paco=$_SESSION['za'];
    if (!($paco == 2)) 
    {
        header("Location:../index.php?page=membres");
    } 
    else{
    $id = $_GET["id"];
    global $db;   
    $updates=$db->prepare('DELETE FROM users WHERE id=?');
    $updates->execute(array($id));
    header("Location:Liste_des_utilisateurs.php");
  }

     ?>

