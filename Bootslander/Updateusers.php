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
    $id = $_POST["id"];
    $kala=$_POST['kala'];
    global $db;   
    $updates=$db->prepare('UPDATE users SET  kala = ? where id=?');
    $updates->execute(array($kala,$id));
    header("Location:Liste_des_utilisateurs.php");
  }

     ?>





     