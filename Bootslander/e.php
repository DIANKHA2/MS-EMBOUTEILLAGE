<?php try {
    $strConnection = 'mysql:host=localhost;dbname=tchat';
    $pdo =new PDO ($strConnection, 'root','');

}
catch (PDOException $e){
    $msg ='ERREUR PDO dans '. $e->getMessage();
    die($msg);
}
$id=$_GET['id'];
$ps=$pdo->prepare("SELECT * FROM users where id=?");
$params=array($id);
$ps->execute($params);
$Compte=$ps->fetch();
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
       background-image: url("Chat1.jpg");
      }
      #z:hover
      {
        background-image: url("Chat2.jpg");
      }
    </style>
</head>
<body id="z">
	<?php require_once("myentete.php")?>
	<div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
          <div class="panel panel-default">
   	    	<div class="panel-heading">Modification mon Compte</div>
   	    	     <div class="panel-body">
   	    		<form method="post" action="UpdateCompte.php" enctype="multipart/form-data">

               <div class="form-group">
               
                <input type="hidden" name="id" value="<?php echo($Compte['id'])?>" class="form-control"/>
              </div>

   	    			<div class="form-group">
   	    				<label class="control-label">Nom: </label>
   	    				<input type="text" name="name" value="<?php echo($Compte['name'])?>" class="form-control"/>
   	    			</div>


   	    			<div class="form-group">
   	    				<label class="control-label">Email: </label>
   	    				<input type="email" name="email" value="<?php echo($Compte['email'])?>"    class="form-control"/>	
   	    			</div>

   	    			<div class="form-group">
   	    				<label class="control-label">Mot de passe:</label>
   	    				<input type="text" name="password"  value="<?php echo($Compte['password'])?>" class="form-control"/>
   	    			</div>

              <div class="form-group">
               
                <input type="hidden" name="kala"  value="<?php echo($Compte['kala'])?>" class="form-control"/>
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