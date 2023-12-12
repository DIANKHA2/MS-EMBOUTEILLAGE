<?php
   require_once("../functions/main-functions.php");
?>

<?php
    if(isLogged() == 0){
        header("Location:../index.php?page=signin");
    }
?>

<?php
   global $db;
   $req="SELECT * FROM users ";
   $ps=$db->prepare($req);
   $ps->execute();
  ?>


  /*parti html*/

  <!DOCTYPE html>
  <html>
  <head>
  	<title>MS EMBOUTEILLAGE</title>
  	<meta charset="utf-8">
  	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css"/>
    <style >
    	h1{
    		margin: 0 0 10px;
    		padding: 0;
    		color: #fff;
    		font-size: 24px;


    	}

    	.box
    	{
    		position: absolute;
    		top: 50%;
    		left: 50%;
    		transform: translate(-50%,-50%);
    		width: 500px;
    		margin-top: -250px;
    	}
    	.paco
    	{
    		position: relative;
    		display: inline-block;
    		font-size: 20px;
    		box-sizing: border-box;
    		transition: .5s;
    	}
    	#pa{
    		background: #fff;
    		width: 340px;
    		height: 50px;
    		border:none;
    		outline: none;
    		padding: 0 25px;
    		border-radius: 25px 0 0 25px;
    	}
    	#la
    	{
    		position: relative;
    		left: -5px;
    		border-radius: 0 25px 25px 0;
    		height: 50px;
    		width: 150px;
    		border: none;
    		outline:  none;
    		cursor: pointer;
    		background: #ffc107;
    		color: #fff;
    	}
    	#la:hover
    	{
    		background: #ff5722;
    	}

    	#po{
       background-image: url("assets/img/hro-img.jpg");
      }
      #po:hover
      {
        background-image: url("assets/img/soboa-icones.png");
      }


    </style>
  </head>
  <body id="po">

  	<?php require_once("entete.php");?>
  	     

    <div class="col-md-12 col-xs-12 spacer">
    	  <div class="panel panel-info spacer ">
    	  	<div class="panel-heading">Liste des produits</div>
    	  	<div class="panel-body">
    	  		<table class="table table-striped">
  		  <thead>
  		  	<tr>
  		  		<th>Id</th><th>Name</th><th>Role</th>
  		  		
  		  	</tr>
  		  	
  		  </thead>
  		  <tbody>
  		  	<?php while($et=$ps->fetch()) { ?>
  		  		<tr>
  		  			 <td><?php echo ($et['id']); ?></td>
  		  			 <td><?php echo ($et['name']); ?></td>
  		  			 <td><?php
						  global $db;
						  $kalaid = $et['kala'];
						  $querys = "SELECT * FROM statut WHERE Id = $kalaid";
						  $pss=$db->prepare($querys);
                          $pss->execute();
						  while($ets=$pss->fetch()) {
							echo ($ets['kala']); }?></td>
						 <?php $papa=$_SESSION['za'];
						       if($papa == 2){?> 
							   <td><a href="Editer_user.php?id=<?php echo ($et['id']); ?>" >editer</a></td>
	                           <td><a href="deleteusers.php?id=<?php echo ($et['id']); ?>" >Supprimmer</a></td>
						<?php }?>
            </tr>                  
  		  	<?php } ?>
  		  	
  		  </tbody>
  	</table>
    	  		
    	  	</div> 
    	  </div>
  	
  </div>
  </body>
  </html>
