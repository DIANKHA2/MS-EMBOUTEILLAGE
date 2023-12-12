
<?php
   require_once("securite.php");

   require_once("ROLE.php");?>?>

<?php
   require_once("conn.php");
   $req="SELECT * FROM client,produit  WHERE client.CODE=produit.CODE";
   $ps=$pdo->prepare($req);
   $ps->execute();
  ?>


  /*parti html*/

  <!DOCTYPE html>
  <html>
  <head>
  	<title>Application de Tchat pour la gestion de commerce electronique</title>
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
       background-image: url("14.jpg");
      }
      #po:hover
      {
        background-image: url("23.jpg");
      }


    </style>
  </head>
  <body id="po">

  	<?php require_once("entete.php");?>
  	     

    <div class="col-md-12 col-xs-12 spacer col-md-12 ">
    	  <div class="panel panel-info spacer ">
    	  	<div class="panel-heading">Liste des commandes</div>
    	  	<div class="panel-body">
    	  		<table class="table table-striped">
  		  <thead>
  		  	<tr>
  		  		<th>id </th><th>Email</th><th>Date de commande</th>
            <th>Adresse</th><th>Photo d'identite</th><th>NOM du produit</th><th>Information</th><th>PHOTO</th>
  		  		
  		  	</tr>
  		  	
  		  </thead>
  		  <tbody>
  		  	<?php while($et=$ps->fetch()) { ?>
  		  		<tr>
               <td><?php echo ($et['id']); ?></td>
  		  			 <td><?php echo ($et['NOMPRENOM']); ?></td>
  		  			 <td><?php echo ($et['DATEDEB']); ?></td>
               <td><?php echo ($et['LIEUDERESIDENCE']); ?></td>
               <td><img src="images/<?php echo ($et['PHOTODIDENTITE']); ?>" width="150" height="150"> </td>
               <td><?php echo ($et['NOM']); ?></td>
               <td><?php echo ($et['CARACTERISTIQUE']); ?></td>
               <td><img src="images/<?php echo ($et['PHOTO']); ?>" width="150" height="150"> </td>

  		  			 <?php
                 $papa=$_SESSION["tchat"];

                 if ($papa=="admin@gmail.com") {?>


               
                <td><a onclick="return confirm('Voulez-vous archiver cette commande..?');"href="archivercommande.php?A=<?php echo ($et['id']); ?>">Archiver</a>
                </td>
                <td><a onclick="return confirm('Etes vous sur de vouloir annuler la commande..?');"href="commandeanuler.php?code=<?php echo ($et['CODE']); ?>">Annuler</a>
                </td>
                      <?php }
                      else{?>
                        <td><a onclick="return confirm('Etes vous sur que vous voulez annuler la commande..?');"href="commandeanuler.php?code=<?php echo ($et['CODE']); ?>">Annuler</a>
                       </td>
                        <td><a onclick="return confirm('Etes vous de voir votr reponse..?');"href="savearchive.php?code=<?php echo ($et['CODE']); ?>">Reponse</a>
                       </td>
            </tr>
                        <?php  }} ?>
              
  		  </tbody>
  	</table>
    	  		
    	  	</div> 
    	  </div>
  	
  </div>
  </body>
  </html>