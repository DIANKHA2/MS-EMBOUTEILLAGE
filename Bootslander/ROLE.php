 <?php 
$paco=$_SESSION['za'];

 if (!($paco==2)) 
 {

        header("location:$_SERVER[HTTP_REFERER]");  
 } 

?>