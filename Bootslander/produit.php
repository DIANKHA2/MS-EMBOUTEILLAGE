

<?php
   require_once("../functions/main-functions.php");
?>

<?php



function get_CodeWincc($CodeWinccs){
	global $db;
	$CodeWincc="NULL";
	$CodeWincc= $CodeWinccs;
	$req="SELECT * FROM dataprocess WHERE CodeWincc like '%$CodeWincc%' ";
	$ps=$db->prepare($req);
	$ps->execute();
	while($et=$ps->fetch()) { 
		echo $et['ValeurRT'];
	}
}?>


<?php get_CodeWincc('G1C.TARRET_H2')?>
			
  <!DOCTYPE html>
  <html>
  <head>
  	<title>MES EMBOUTEILLAGE VERRE</title>
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
    	  	<div a style= "text-align: center ;"class="panel-heading">MES EMBOUTEILLAGE VERRE</div>
    	  	<div class="panel-body">
			  <table class="table table-striped">
  		  <thead>
  		  	<tr>
  		  		<th>heure</th><th>07</th><th>08</th><th>09</th><th>10</th><th>11</th><th>12</th><th>13</th><th>14</th><th>15</th><th>16</th><th>17</th><th>18</th><th>19</th><th>20</th><th>21</th><th>22</th><th>23</th><th>00</th><th>01</th><th>02</th><th>03</th><th>04</th><th>05</th><th>06</th>	
  		  	</tr>
  		  </thead>
  		  <tbody>
			
			<tr>
				<td><strong>Quantité Produits(b)</strong></td>
				<?php  $r = array('G1C.QPROD_H7','G1C.QPROD_H8','G1C.QPROD_H9','G1C.QPROD_H10','G1C.QPROD_H11','G1C.QPROD_H12','G1C.QPROD_H13','G1C.QPROD_H14','G1C.QPROD_H15','G1C.QPROD_H16','G1C.QPROD_H17','G1C.QPROD_H18','G1C.QPROD_H19','G1C.QPROD_H20','G1C.QPROD_H21','G1C.QPROD_H22','G1C.QPROD_H23','G1C.QPROD_H0','G1C.QPROD_H1','G1C.QPROD_H2','G1C.QPROD_H3','G1C.QPROD_H4','G1C.QPROD_H5','G1C.QPROD_H6'); 
	            foreach($r as $membre ){
					if ($membre =='G1C.QPROD_H0') {?>
				        <td style='background: green;'><strong><?php get_CodeWincc($membre)?></strong></td>
				    <?php		          
	                }
				    else{?>
						<td><strong ><?php get_CodeWincc($membre)?></strong></td><?php
					}
				}
                ?>
				
		    </tr>

			<tr>
				<td><strong>Micro Arret(min)</strong></td>
			    <?php  $r = array('G1C.TMARRET_H7','G1C.TMARRET_H8','G1C.TMARRET_H9','G1C.TMARRET_H10','G1C.TMARRET_H11','G1C.TMARRET_H12','G1C.TMARRET_H13','G1C.TMARRET_H14','G1C.TMARRET_H15','G1C.TMARRET_H16','G1C.TMARRET_H17','G1C.TMARRET_H18','G1C.TMARRET_H19','G1C.TMARRET_H20','G1C.TMARRET_H21','G1C.TMARRET_H22','G1C.TMARRET_H23','G1C.TMARRET_H0','G1C.TMARRET_H1','G1C.TMARRET_H2','G1C.TMARRET_H3','G1C.TMARRET_H4','G1C.TMARRET_H5','G1C.TMARRET_H6'); 
	            foreach($r as $membre ){
					if ($membre =='G1C.TMARRET_H0') {?>
				        <td style='background: green;'><strong><?php get_CodeWincc($membre)?></strong></td>
				    <?php		          
	                }
				    else{?>
						<td><strong ><?php get_CodeWincc($membre)?></strong></td><?php
					}
				}
                ?>
		    </tr>

			<tr>
				<td><strong>ARRET(min)</strong></td>
			    <?php  $r = array('G1C.TARRET_H7','G1C.TARRET_H8','G1C.TARRET_H9','G1C.TARRET_H10','G1C.TARRET_H11','G1C.TARRET_H12','G1C.TARRET_H13','G1C.TARRET_H14','G1C.TARRET_H15','G1C.TARRET_H16','G1C.TARRET_H17','G1C.TARRET_H18','G1C.TARRET_H19','G1C.TARRET_H20','G1C.TARRET_H21','G1C.TARRET_H22','G1C.TARRET_H23','G1C.TARRET_H0','G1C.TARRET_H1','G1C.TARRET_H2','G1C.TARRET_H3','G1C.TARRET_H4','G1C.TARRET_H5','G1C.TARRET_H6'); 
	            foreach($r as $membre ){
					if ($membre =='G1C.TARRET_H0') {?>
				        <td style='background: green;'><strong><?php get_CodeWincc($membre)?></strong></td>
				    <?php		          
	                }
				    else{?>
						<td><strong ><?php get_CodeWincc($membre)?></strong></td><?php
					}
				}
                ?>
			</tr>
			<tr>
				<td><strong>Nombre d'Arret</strong></td>
				<?php  $r = array('G1C.NARRET_H7','G1C.NARRET_H8','G1C.NARRET_H9','G1C.NARRET_H10','G1C.NARRET_H11','G1C.NARRET_H12','G1C.NARRET_H13','G1C.NARRET_H14','G1C.NARRET_H15','G1C.NARRET_H16','G1C.NARRET_H17','G1C.NARRET_H18','G1C.NARRET_H19','G1C.NARRET_H20','G1C.NARRET_H21','G1C.NARRET_H22','G1C.NARRET_H23','G1C.NARRET_H0','G1C.NARRET_H1','G1C.NARRET_H2','G1C.NARRET_H3','G1C.NARRET_H4','G1C.NARRET_H5','G1C.NARRET_H6'); 
	            foreach($r as $membre ){
					if ($membre =='G1C.NARRET_H0') {?>
				        <td style='background: green;'><strong><?php get_CodeWincc($membre)?></strong></td>
				    <?php		          
	                }
				    else{?>
						<td><strong ><?php get_CodeWincc($membre)?></strong></td><?php
					}
				}
                ?>
			</tr>

			<tr>
				<td><strong>Temps fonctionnement(min)</strong></td>
				<?php  $r = array('G1C.TPROD_H7','G1C.TPROD_H8','G1C.TPROD_H9','G1C.TPROD_H10','G1C.TPROD_H11','G1C.TPROD_H12','G1C.TPROD_H13','G1C.TPROD_H14','G1C.TPROD_H15','G1C.TPROD_H16','G1C.TPROD_H17','G1C.TPROD_H18','G1C.TPROD_H19','G1C.TPROD_H20','G1C.TPROD_H21','G1C.TPROD_H22','G1C.TPROD_H23','G1C.TPROD_H0','G1C.TPROD_H1','G1C.TPROD_H2','G1C.TPROD_H3','G1C.TPROD_H4','G1C.TPROD_H5','G1C.TPROD_H6'); 
	            foreach($r as $membre ){
					if ($membre =='G1C.TPROD_H0') {?>
				        <td style='background: green;'><strong><?php get_CodeWincc($membre)?></strong></td>
				    <?php		          
	                }
				    else{?>
						<td><strong ><?php get_CodeWincc($membre)?></strong></td><?php
					}
				}
                ?>
		    </tr>
			<tr>
				<td><strong>TRG(%)</strong></td>
				<?php  $r = array('G1C.TRG_H7','G1C.TRG_H8','G1C.TRG_H9','G1C.TRG_H10','G1C.TRG_H11','G1C.TRG_H12','G1C.TRG_H13','G1C.TRG_H14','G1C.TRG_H15','G1C.TRG_H16','G1C.TRG_H17','G1C.TRG_H18','G1C.TRG_H19','G1C.TRG_H20','G1C.TRG_H21','G1C.TRG_H22','G1C.TRG_H23','G1C.TRG_H0','G1C.TRG_H1','G1C.TRG_H2','G1C.TRG_H3','G1C.TRG_H4','G1C.TRG_H5','G1C.TRG_H6'); 
	            foreach($r as $membre ){
					if ($membre =='G1C.TRG_H0') {?>
				        <td style='background: green;'><strong><?php get_CodeWincc($membre)?></strong></td>
				    <?php		          
	                }
				    else{?>
						<td><strong ><?php get_CodeWincc($membre)?></strong></td><?php
					}
				}
                ?>
			
			</tr>


  		  </tbody>
  	</table>   	  		
    	  	</div> 
    	  </div>
  	
  </div>
  </body>
  </html>