


                <?php
   require_once("../functions/main-functions.php");
   require_once("ROLE.php");
?>

<?php
    if(isLogged() == 0){
        header("Location:../index.php?page=signin");
    }
    $paco=$_SESSION['za'];
    if (!($paco==2)) 
 {
        header("Location:../index.php?page=membres");  
 } 

?>


<?php
$id=$_GET['id'];
global $db;
$ps=$db->prepare("SELECT * FROM users where id=?");
$params=array($id);
$ps->execute($params);
$voiture=$ps->fetch();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css"/>
    <style >
      #z{
       background-image: url("assets/img/hro-img.jpg");
      }
      #z:hover
      {
        background-image: url("assets/img/soboa-icones.png");
      }
      .ag{
        display: inline-block;
                outline: 0;
                border:0;
                cursor: pointer;
                text-decoration: none;
                position: relative;
                color: #000;
                background: #fff;
                line-height: 30px;
                border-radius: 40px;
                padding: 20px;
                font-size: 66px;
                font-weight: 600;
                box-shadow: rgb(255, 198, 0) -8px -10px 0px 2px, rgb(246, 84, 174) 0px 0px 0px 4px, rgba(0, 0, 0, 0.05) 0px 0px 2px 7px;
                transition: all 0.2s;
                margin-top:400px;
                padding:70px;
                margin-left:40px;
                
               
                
}

 a:hover{
                    box-shadow: rgb(246, 84, 174) -2px -2px 0px 2px, rgb(255, 198, 0) 0px 0px 0px 4px, rgba(0, 0, 0, 0.05) 0px 0px 2px 7px;
                    transform: scale(1.01);
                    
                }
    </style>
</head>
<body id="z">
	<?php require_once("entete.php")?> 
	
   	<a class="ag" href="best_arret_machine.php">ArrêtsByMachines</a>
       <a class="ag" href="best_arret_organe.php">ArrêtsByOrganes</a>
       <a class="ag" href="best_arret_nature.php">ArrêtsByNatures</a>
</body>
</html>