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
        header("Location:./best_arret_machine.php");
    }else{
      header("Location:./best_arret_machine.php");
    }
  }

  


   
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
.flotte {
float:right;
margin-right: 2em;
}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  </head>
  <body>

  <?php require_once("entete.php");?>
<?php $Object = new DateTime();  
$Object->setTimezone(new DateTimeZone('Africa/Dakar'));
$DateAndTime = $Object->format("d-m-Y  ");
$DateAndTimes = $Object->format("H"); ?> 
<h2 style="font-size:30px ; text-align:center; height:300px; font-family: Arial Black; margin-top:60px;";><?php  echo " $DateAndTime";?><h2>

<img style="margin-top:-600px; margin-right:2170px;" src="assets/img/soboa-icones.png" alt="Imperial" width=80; height=80;>
<img style="margin-top:-650px; margin-left:2100px;" src="assets/img/soboa-icones.png" alt="Imperial" width=80; height=80;>





   <div class="col-md-12 col-xs-12 spacer   "style="margin-top:-300px; margin-left:; ">
    	  <div class="panel panel-info spacer ">
    	  	  <div a style= "text-align: center ;  "class="panel-heading" style=" font-family: cursive; font-weight: bold;">Visualization</div>
            <div class="panel-body" style= "margin-left: px;">

              <div class="col-md-3 col-xs-3 spacer  "style="margin-top:px; margin-left:px; ">
    	  .       <div class="panel panel-info spacer ">
    	  	        <div a style= "text-align: center ; "class="panel-heading" style=" font-family: cursive; font-weight: bold;">Description</div>
   
    	  	          <div class="panel-body">
                      <form method="post" id="regForm">
                              <div class="field">
                                 <label class="field-label" for="date" style=" font-family: cursive; font-weight: bold;">DateDébut</label>
                                 <input  class="field-input" type="date" name="datedebut" id="date" value="<?php print(date( $_SESSION['datedebut'])); ?>"/>
                              </div>
                              </br>
                              <div class="field">
                                 <label class="field-label" for="dates" style=" font-family: cursive; font-weight: bold;">DateFin</label>
                                 <input class="field-input" type="date" name="datefin" id="dates" value="<?php print(date( $_SESSION['datefin'])); ?>"/>
                              </div>
                              </br>
                           <button type="submit" name="submit" class="btn btn-success" style="font-size:30px; font-family: cursive; font-weight: bold;">ValiderDates</button>
                        </form>
                              </br>
                        <form method="post" action="../T_best_nature_arret.php">
                              <div class="field">
                                 <input  class="field-input" type="hidden" name="datedebut" id="date" value="<?php print(date( $_SESSION['datedebut'])); ?>"/>
                              </div>

                              <div class="field">
                                 <input class="field-input" type="hidden" name="datefin" id="dates" value="<?php print(date( $_SESSION['datefin'])); ?>"/>
                              </div>
                           <button type="submit" name="bestarretnature" class="btn btn-success" style="font-size:30px; font-family: cursive; font-weight: bold;">SommeArrêtByNature</button>
                        </form>
                        </br>
                        <form method="post" action="../T_best_nature_freq_arret.php">
                              <div class="field">
                              <input  class="field-input" type="hidden" name="datedebut" id="date" value="<?php print(date( $_SESSION['datedebut'])); ?>"/>
                              </div>

                              <div class="field">
                              <input class="field-input" type="hidden" name="datefin" id="dates" value="<?php print(date( $_SESSION['datefin'])); ?>"/>
                              </div>
                            <button type="submit" name="bestarretnature" class="btn btn-success"style="font-size:30px; font-family: cursive; font-weight: bold;">FréquenceArrêtByNature</button>
                        </form>
                        </br>
                        <a class="btn btn-success" style="font-family: cursive; font-weight: bold; font-size: 23px;" href="statistiquedesarrets.php" role="button">Accueil Statistique des arrêts</a>
                    </div>
                </div>
              </div> 
              <div class="field bn  ">
                <?php
                   echo "<img  src='../T_best_nature_arret.php'/>";?>
              </div>
              </br>
              <div class="field bn flotte" >
                <?php
                   echo "<img src='../T_best_nature_freq_arret.php' />";?>
              </div>

          	</div> 
        </div>
   
        
  </div>
</body>
</html>

