
  <?php require_once("securite.php");?> 




<?php
   $code=$_GET['code'];
   require_once("conn.php");
   $ps=$pdo->prepare("DELETE FROM produit WHERE CODE=?");
   $params=array($code);
   $ps->execute($params);
   header("location:produit.php");
