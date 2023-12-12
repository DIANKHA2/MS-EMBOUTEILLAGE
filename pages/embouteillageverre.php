<?php
    if(isLogged() == 0){
        header("Location:index.php?page=signin");
    }
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        .atou{
    background-color:#34495e;
    border:2px solid #34495e;
    display:inline-block;
    width:10%;
    text-decoration: none;
    height:40px;
    color:#fff;
    float: right;
    border-radius:2px;
    cursor:pointer;
    font-size:16px;
    margin:5px 0;
    outline:none;
}
.atoss{
    background-color:#34495e;
    border:2px solid #34495e;
    display:inline-block;
    width:10%;
    text-decoration: none;
    height:40px;
    color:#fff;
    border-radius:2px;
    cursor:pointer;
    font-size:16px;
    margin:5px 0;
    outline:none;
}
.atou,.atoss:hover{
    background:none;
    color:#34495e;
}
    .at{
    background-color:red;
    border:2px solid #34495e;
    display:inline-block;
    width:10%;
    text-decoration: none;
    float: right;
    height:40px;
    color:#fff;
    border-radius:2px;
    cursor:pointer;
    font-size:16px;
    margin:5px 0;
    outline:none;
}

.at:hover{
    background:none;
    color:#34495e;
}

a.ri{
    color: white;
    text-decoration: none;
}
span.header{
    color: inherit;
    font-size: 45px;
}
.kla{
    color: blue;
}

    </style>

<link rel="stylesheet" type="text/css" href="Bootslander/assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="Bootslander/assets/css/styles.css"/>    
</head>
<body id="po">
    
<?php
        foreach(get_membres() as $membre){
              if($membre->email != $_SESSION['tchat']){
            }
          else{?>
            <span  class="header" ><marquee>Utilisateur connecté :  <span></span><span></span><?= $membre->name ?></marquee></span><br/>
           <?php } }?>
<h2 class="header" style="text-align:center;">MES EMBOUTEILLAGE VERRE</h2>   

<div class="col-md-12 col-xs-12 spacer">
    	  <div class="panel panel-info spacer ">
    	  	<div class="panel-heading">data_process</div>
    	  	<div class="panel-body">
    	  		<table class="table table-striped">
  		  <thead>
  		  	<tr>
  		  		<th>idDataProcess</th><th>CodeWincc</th><th>idmachines</th><th>Designation</th><th>ValeurRT</th><th>ArchiveOpt</th>	
  		  	</tr>
  		  </thead>
  		  <tbody>
            <?php foreach(get_embouteillageverre() as $embouteillageverre){
            ?>
            <tr>
                
                <td><strong><?= $embouteillageverre->idDataProcess ?></strong></td>
                <td><strong><?= $embouteillageverre->CodeWincc ?></strong></td>
                <td><strong><?= $embouteillageverre->idmachines ?></strong></td>
                <td><strong><?= $embouteillageverre->Designation?></strong></td>
                <td><strong><?= $embouteillageverre->ValeurRT ?></strong></td>
                <td><strong><?= $embouteillageverre->ArchiveOpt ?></strong></td>
            </tr>

            <?php
        
    }
?>
  		  	
  		  </tbody>
  	</table>
    	  		
    	  	</div> 
    	  </div>
  	
  </div>
</body>
</html>