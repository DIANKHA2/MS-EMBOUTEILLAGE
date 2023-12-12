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
    </style>
</head>
<body id="z">
	<?php require_once("entete.php")?> 
	<div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
          <div class="panel panel-default">
   	    	<div class="panel-heading">Modifier Produit</div>
   	    	     <div class="panel-body">
   	    		<form method="post" action="Updateusers.php" enctype="multipart/form-data">

               <div class="form-group">
                <label class="control-label">Id:<?php echo($voiture['id'])?></label>
                <input type="hidden" name="id" value="<?php echo($voiture['id'])?>" class="form-control"/>
              </div>


   	    			<div class="form-group">
   	    				<label class="control-label">role:</label>
                        <select class="form-control" name="kala">
                        <optgroup label="Select role">
                                <?php
                                  $voitureid = $voiture['kala'];
                                  global $db;
                                  $ps=$db->prepare("SELECT * FROM statut"); 
                                  $ps->execute();  
                                  while($et=$ps->fetch()) { ?>
                                  <option value="<?php  echo $et['Id'];?>"
                                  <?php
                                   if($et['Id']==$voitureid){
                                    echo "selected";
                                  }   
                                  ?>
                                  
                                  ><?php  echo $et['kala'];?> </option> 
                               <?php }?>
                                  </optgroup>
                         </select>
                    </div>


   	    			<div>
   	    				<button type="submit">Sauvegarder</button>
   	    			</div>
 
 
   	    			
   	    		</form>
   	    	     </div>
   	    	
          </div>
    </div>
   	
</body>
</html>