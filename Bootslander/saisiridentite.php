


  <?php require_once("securite.php");?> 
  
<!DOCTYPE html>
<html>
<head>
  <title>Mise en place dune application de Chat pour la gestion de commerce electronique</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css"/>
    <style >
      #n{
       background-image: url("7.jpg");
      }
      #n:hover
      {
        background-image: url("8.jpg");
      }
    </style>
</head>
<body id="n">
  <?php require_once("entete.php")?>
  <div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
          <div class="panel panel-default">
          <div class="panel-heading">Identification</div>
               <div class="panel-body">
            <form method="post" action="savecommande.php" enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label">CODE:<?php echo $_GET['code'];?></label>
                <input type="hidden" name="code" value="<?php echo $_GET['code'];?>" class="form-control"/>

                
              </div>

              <div class="form-group">
                <label class="control-label">Email: <?php echo $_SESSION['tchat']; ?></label>
                <input required="required" type="hidden" name="np" class="form-control" value="<?= $_SESSION['tchat'] ?>" />

                
              </div>


              <div class="form-group">
                <label class="control-label">Date de commande:</label>
                <input required="required" type="date" name="db" class="form-control"/>

                
              </div>

              <div class="form-group">
                <label class="control-label">Lieu de residence: </label>
                <input required="required" type="text" name="df" class="form-control"/>
              </div>
                 
                 <div class="form-group">
                <label class="control-label">Quantite:</label>
                <input required="required"  type="number" name="qua" class="form-control"/>
              </div>

              <div class="form-group">
                <label class="control-label">Photo d'identite:</label>
                <input required="required"  type="file" name="pho" class="form-control"/>
              </div>

              

              <div>
                <button  type="submit">Commander</button>
              </div>
 
 
              
            </form>
               </div>
          
          </div>
    </div>
    
</body>
</html>