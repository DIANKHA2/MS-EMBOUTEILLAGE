<?php
   require_once("../functions/main-functions.php");
?>

<?php
    if(isLogged() == 0){
        header("Location:../index.php?page=signin");
    }


  if(isset($_POST['submit'])){
    $datedebut = htmlspecialchars(trim($_POST['datedebut']));
    $datefin = htmlspecialchars(trim($_POST['datefin']));
    $_SESSION['datedebut'] = $datedebut;
    $_SESSION['datefin'] = $datefin;
    if($_SESSION['datedebut'] == '2023-01-27'){
      header("Location:./Historique_des_Arréts.php");
  }else{
    header("Location:./Historique_des_Arréts.php");
  }
}

   global $db;
   $stmt  = $db->prepare('CALL getArretByDistinctMachine(?,?)');
   $stmt->bindParam(1, $_SESSION['datedebut'], PDO::PARAM_STR, 32);
   $stmt->bindParam(2, $_SESSION['datefin'], PDO::PARAM_STR, 10);
   $stmt->execute();

   
?>




<!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <title>MES EMBOUTEILLAGE VERRE</title>
  <link href="assets/img/soboa-icones.png" rel="icon">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="assets/css/stiles.css"/>
  <style>
       #dates{
		margin-left:45px;
		margin-top: 10px;
	  }
    .bn {
    display: block;
}
.bi {
    display: inline;
}
select{
  width:-1115px;
}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  </head>
  <body>
  <?php require_once('II.php')?>
  <?php require_once('II.php')?>
  <?php require_once("entete.php");?>
<?php $Object = new DateTime();  
$Object->setTimezone(new DateTimeZone('Africa/Dakar'));
$DateAndTime = $Object->format("d-m-Y  ");
$DateAndTimes = $Object->format("H"); ?> 
<h2 style="font-size:30px ; text-align:center; height:300px; font-family: Arial Black; margin-top:60px;";><?php  echo " $DateAndTime";?><h2>

<img style="margin-top:-600px; margin-right:2170px;" src="assets/img/soboa-icones.png" alt="Imperial" width=80; height=80;>
<img style="margin-top:-650px; margin-left:2100px;" src="assets/img/soboa-icones.png" alt="Imperial" width=80; height=80;>


<div class="col-md-3 col-xs-3 spacer  "style="margin-top:-300px; margin-left:px; ">
    	  .<div class="panel panel-info spacer ">
    	  	<div a style= "text-align: center ; "class="panel-heading">Spécifient_les_dates</div>
   
    	  	  <div class="panel-body">
             <form method="post" id="regForm">
                 <div class="field">
                  <label class="field-label" for="date">Date_début</label>
                  <input  class="field-input" type="date" name="datedebut" id="date" value="<?php print(date( $_SESSION['datedebut'])); ?>"/>
                 </div>

                 <div class="field">
                  <label class="field-label" for="dates">Date_fin</label>
                     <input class="field-input" type="date" name="datefin" id="dates" value="<?php print(date( $_SESSION['datefin'])); ?>"/>
                 </div>
              <button type="submit" name="submit">Enregistrer_ces_dates</button>
             </form>
    	      </div>  	
          </div>
         </div>
</div>  	 
<div class="bi" >  
     <div class="col-md-3 col-xs-3 spacer bn "style="margin-top:; margin-left:px; ">
    	  .<div class="panel panel-info spacer ">
    	  	<div a style= "text-align: center ; "class="panel-heading">Selectionner_une_machine</div>
    	  	  <div class="panel-body">
             <form method="post" action="../T.php">
                 <div class="field">
                  <input style="margin-left:170px "; class="field-input" type="hidden" name="datedebut" id="date" value="<?php print(date( $_SESSION['datedebut'])); ?>"/>
                 </div>
                 <div class="field">
                     <input style="margin-left:170px "; class="field-input" type="hidden" name="datefin" id="dates" value="<?php print(date( $_SESSION['datefin'])); ?>"/>
                 </div>
                    <div class="field">
                     <label class="control-label">machine:</label>
                        <select class="form-control bi" name="kla" style="width:300px; margin-left:68px;">
                                <optgroup label="Select role" >
                                      <?php
                               
                                       while($et=$stmt->fetch()) { ?>
                                          <option 
                                          <?php
                                          if (!isset($_SESSION['klat'] ))
                                          {?>
                                            value="<?php  echo $et['machine'];?>"
                                         <?php  }
                                         else{
                                          if($et['machine']==$_SESSION['klat']){
                                            echo "selected";
                                          }  } 
                                          ?>
                                        
                                          ><?php  echo $et['machine'];?> </option> 
                                      <?php }?>
                                </optgroup>
                        </select>
                    </div>
              <button style="margin-top:10px ";type="submit" name="submit">Spécifie_une_machine</button>
             </form>
    	      </div>  	
          </div>
         </div>
     </div>  
</div>
<div class="bi" >
   <div class="col-md-8 col-xs-3 spacer   "style="margin-top:-200px; margin-left:100px; ">
    	  <div class="panel panel-info spacer ">
    	  	  <div a style= "text-align: center ;  "class="panel-heading">Visualisation</div>
            <div class="panel-body" style= "margin-left: px;">
            <?php
            echo "<img  src='../T.php'/>";?>
            </div>
        </div>
   </div>
</div>
   


</body>
</html>

