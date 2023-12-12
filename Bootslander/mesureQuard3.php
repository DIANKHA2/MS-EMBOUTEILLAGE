<?php
   require_once("../functions/main-functions.php");
?>

<?php
    if(isLogged() == 0){
        header("Location:../index.php?page=signin");
    }
	
    function quard1_g6cnarret(){
        global $db;
        $req="SELECT * FROM quard1_g6cnarret";
        $ps=$db->prepare($req);
        $ps->execute();
        while($et=$ps->fetch()) { 
            echo $et['quard1'];
        }
    }
    
    function quard1_g6cqprod(){
        global $db;
        $req="SELECT * FROM quard1_g6cqprod";
        $ps=$db->prepare($req);
        $ps->execute();
        while($et=$ps->fetch()) { 
            echo $et['quard1'];
        }
    }
    
    
    function quard1_g6ctarret(){
        global $db;
        $req="SELECT * FROM quard1_g6ctarret";
        $ps=$db->prepare($req);
        $ps->execute();
        while($et=$ps->fetch()) { 
            echo $et['quard1'];
        }
    }
    
    function quard1_g6ctmarret(){
        global $db;
        $req="SELECT * FROM quard1_g6ctmarret";
        $ps=$db->prepare($req);
        $ps->execute();
        while($et=$ps->fetch()) { 
            echo $et['quard1'];
        }
    }
    
    function quard1_g6ctprod(){
        global $db;
        $req="SELECT * FROM quard1_g6ctprod";
        $ps=$db->prepare($req);
        $ps->execute();
        while($et=$ps->fetch()) { 
            echo $et['quard1'];
        }
    }
    
    function quard1_g6ctrg(){
        global $db;
        $req="SELECT * FROM quard1_g6ctrg";
        $ps=$db->prepare($req);
        $ps->execute();
        while($et=$ps->fetch()) { 
            echo $et['quard1'];
        }
    }
    
    
    
    
    
    function quard2_g6cnarret(){
        global $db;
        $req="SELECT * FROM quard2_g6cnarret";
        $ps=$db->prepare($req);
        $ps->execute();
        while($et=$ps->fetch()) { 
            echo $et['quard2'];
        }
    }
    
    function quard2_g6cqprod(){
        global $db;
        $req="SELECT * FROM quard2_g6cqprod";
        $ps=$db->prepare($req);
        $ps->execute();
        while($et=$ps->fetch()) { 
            echo $et['quard2'];
        }
    }
    
    
    function quard2_g6ctarret(){
        global $db;
        $req="SELECT * FROM quard2_g6ctarret";
        $ps=$db->prepare($req);
        $ps->execute();
        while($et=$ps->fetch()) { 
            echo $et['quard2'];
        }
    }
    
    function quard2_g6ctmarret(){
        global $db;
        $req="SELECT * FROM quard2_g6ctmarret";
        $ps=$db->prepare($req);
        $ps->execute();
        while($et=$ps->fetch()) { 
            echo $et['quard2'];
        }
    }
    
    function quard2_g6ctprod(){
        global $db;
        $req="SELECT * FROM quard2_g6ctprod";
        $ps=$db->prepare($req);
        $ps->execute();
        while($et=$ps->fetch()) { 
            echo $et['quard2'];
        }
    }
    
    function quard2_g6ctrg(){
        global $db;
        $req="SELECT * FROM quard2_g6ctrg";
        $ps=$db->prepare($req);
        $ps->execute();
        while($et=$ps->fetch()) { 
            echo $et['quard2'];
        }
    }
    
    function quard3_g6cnarret(){
        global $db;
        $req="SELECT * FROM quard3_g6cnarret";
        $ps=$db->prepare($req);
        $ps->execute();
        while($et=$ps->fetch()) { 
            echo $et['quard3'];
        }
    }
    
    function quard3_g6cqprod(){
        global $db;
        $req="SELECT * FROM quard3_g6cqprod";
        $ps=$db->prepare($req);
        $ps->execute();
        while($et=$ps->fetch()) { 
            echo $et['quard3'];
        }
    }
    
    
    function quard3_g6ctarret(){
        global $db;
        $req="SELECT * FROM quard3_g6ctarret";
        $ps=$db->prepare($req);
        $ps->execute();
        while($et=$ps->fetch()) { 
            echo $et['quard3'];
        }
    }
    
    function quard3_g6ctmarret(){
        global $db;
        $req="SELECT * FROM quard3_g6ctmarret";
        $ps=$db->prepare($req);
        $ps->execute();
        while($et=$ps->fetch()) { 
            echo $et['quard3'];
        }
    }
    
    function quard3_g6ctprod(){
        global $db;
        $req="SELECT * FROM quard3_g6ctprod";
        $ps=$db->prepare($req);
        $ps->execute();
        while($et=$ps->fetch()) { 
            echo $et['quard3'];
        }
    }
    
    function quard3_g6ctrg(){
        global $db;
        $req="SELECT * FROM quard3_g6ctrg";
        $ps=$db->prepare($req);
        $ps->execute();
        while($et=$ps->fetch()) { 
            echo $et['quard3'];
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
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css"/>
    <style >
    	h1{
    		margin: 0 0 10px;
    		padding: 0;
    		color: #fff;
    		font-size: 19px;
            text-align: center;


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
       span{
       ;
        font-size: 3rem;
		margin-right:30px;
		color: #fff;
	
      }

      .flexbo{
        height: auto;
        background : turquoise;
        margin-right:10px;
        border: 2px solid skyblue;
        border-radius: 10px;
        width:350px;
        padding: auto;
		box-shadow: 6px 6px 25px rgba(0, 0, 0, 0.5);
      }

      .dis{
        display: block;
        justify-content: space-around; 
      }
	  span.displayed {
    display: block;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    font-family: cursive; font-weight: bold; font-size: 76px; }
	.f{
		font-family: cursive; font-weight: bold; font-size: 40px;


    	}


    </style>
  </head>
  <body id="pu">
  <?php $Object = new DateTime();  
        $Object->setTimezone(new DateTimeZone('Africa/Dakar'));
        $DateAndTime = $Object->format("H"); ?>
		

		<?php if($DateAndTime=="07" || $DateAndTime=="08" || $DateAndTime=="09" || $DateAndTime=="10" || $DateAndTime=="11" || $DateAndTime=="12" || $DateAndTime=="13"|| $DateAndTime=="14"){?>
			
  <div class="dis">
  <div class="flexbo" style="background : #DC143C;">
    <h1  class="f">Quantité Produits</h1>
  <div class="flexbox">
<span class="displayed"><?php quard1_g6cqprod()?></span>
</div>
</div>
<div class="flexbo" style="background : #808000;">
<h1 class="f">Micro Arret</h1>
<div class="flexbox">
<span class="displayed"><?php quard1_g6ctmarret()?></span>
</div>
</div>
<div class="flexbo" style="background : #FFDEAD;">
<h1 class="f">ARRET</h1>
<div class="flexbox">
<span class="displayed"><?php quard1_g6ctarret()?></span>
</div>
</div>
<div class="flexbo" style="background : #7B68EE;">
<h1 class="f">Nombre d'Arret</h1>
<div class="flexbox">
<span class="displayed"><?php quard1_g6cnarret()?></span>
</div>
</div>
<div class="flexbo" style="background : #DAA520;">
<h1 class="f">Temps fonctionnements</h1>
<div class="flexbox">
<span class="displayed" style="margin-left 20px;"><?php quard1_g6ctprod()?></span>
</div>
</div>

</div>
<?php }
elseif($DateAndTime=="15" || $DateAndTime=="16" || $DateAndTime=="17" || $DateAndTime=="18" || $DateAndTime=="19" || $DateAndTime=="20" || $DateAndTime=="21"|| $DateAndTime=="22"){?>
 <div class="dis">
<div class="flexbo" style="background : #DC143C;">
    <h1 class="f">Quantité Produits</h1>
  <div class="flexbox">
<span class="displayed"><?php quard2_g6cqprod()?></span>
</div>
</div>
<div class="flexbo" style="background : #808000;">
<h1 class="f">Micro Arret</h1>
<div class="flexbox">
<span class="displayed"><?php quard2_g6ctmarret()?></span>
</div>
</div>
<div class="flexbo" style="background : #FFDEAD;">
<h1 class="f">ARRET</h1>
<div class="flexbox">
<span class="displayed"><?php quard2_g6ctarret()?></span>
</div>
</div>
<div class="flexbo" style="background : #7B68EE;">
<h1 class="f">Nombre d'Arret</h1> 
<div class="flexbox">
<span class="displayed"><?php quard2_g6cnarret()?></span>
</div>
</div>
<div class="flexbo" style="background : #DAA520;">
<h1 class="f">Temps de fonctionnements</h1>
<div class="flexbox">
<span class="displayed"><?php quard2_g6ctprod()?></span>
</div>
</div>

</div>
<?php }

else{?>
<div class="dis">
<div class="flexbo" style="background : #DC143C;">
    <h1 class="f">Quantité Produits</h1>
  <div class="flexbox">
<span class="displayed"><?php quard3_g1cqprod()?></span>
</div>
</div>
<div class="flexbo" style="background : #808000;">
<h1 class="f">Micro Arret</h1>
<div class="flexbox">
<span class="displayed"><?php quard3_g1ctmarret()?></span>
</div>
</div>
<div class="flexbo" style="background : #FFDEAD;">
<h1 class="f">ARRET</h1>
<div class="flexbox">
<span class="displayed"><?php quard3_g1ctarret()?></span>
</div>
</div>
<div class="flexbo" style="background : #7B68EE;">
<h1 class="f">Nombre d'Arret</h1>
<div class="flexbox">
<span class="displayed"><?php quard3_g1cnarret()?></span>
</div>
</div>
<div class="flexbo" style="background : #DAA520;">
<h1 class="f">Temps de fonctionnements</h1>
<div class="flexbox">
<span class="displayed"><?php quard3_g1ctprod()?></span>
</div>
</div>

</div>
<?php }?>
</body>
  </html> 