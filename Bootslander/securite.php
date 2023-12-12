<?php
session_start();
if (!(isset($_SESSION["tchat"])))
 {
           header("location:../index.php?page=signin");
}
?>