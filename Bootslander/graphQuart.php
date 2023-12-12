<div id="instnatane">
<!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <title>MES EMBOUTEILLAGE VERRE</title>
  <link href="assets/img/soboa-icones.png" rel="icon">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css"/>
  <style>
        #pu{
            background-color: lightblue;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  </head>
  <body id="pu">
<?php $Object = new DateTime();  
        $Object->setTimezone(new DateTimeZone('Africa/Dakar'));
        $DateAndTime = $Object->format("H"); ?>
		
<?php  if($DateAndTime=="07" || $DateAndTime=="08" || $DateAndTime=="09" || $DateAndTime=="10" || $DateAndTime=="11" || $DateAndTime=="12" || $DateAndTime=="13"|| $DateAndTime=="14"){?>
	    <img style="width:1000px;"  src="../Quard1.php" alt="hello"><?php }

		 elseif($DateAndTime=="15" || $DateAndTime=="16" || $DateAndTime=="17" || $DateAndTime=="18" || $DateAndTime=="19" || $DateAndTime=="20" || $DateAndTime=="21"|| $DateAndTime=="22"){?>
			<img style="width:1000px;"  src="../Quard2.php" alt="hello"><?php }
			else{?>
			<img style="width:1000px;"  src="../Quard3.php" alt="hello"><?php }?>

			</div>

<!-- script rafarichissement automatique-->
<script>
setInterval('load_quard1()', 500);
function load_quard1(){
$('#instnatane').load('graphQuart.php');
}
</script>

</body>
</html>
