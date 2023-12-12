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
    margin-left: 100px;
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
.z{
      width: -10000000000000000000000000 ;
     }
     body {
  font-family: "Open Sans", sans-serif;
  color: #444444;
}
.la{
  width: 800px;
  margin-top: 80px;
  position: center; 
  margin-left: 80px;
}
.tr{
    display : flex;
}

    </style>
</head>
<body>
<?php
        foreach(get_membres() as $membre){
              if($membre->email != $_SESSION['tchat']){
            }
          else{?>
            <span  class="header" ><marquee>Utilisateur connecté :  <span></span><span></span><?= $membre->name ?></marquee></span><br/>
             
           
           <?php } }?>
<h2 class="header">MES EMBOUTEILLAGES</h2>   
<div class="tr">
<span class="hero-logo"><img class="la" src="Bootslander/assets/img/logo.png" alt="Imperial"></span>
<span class="atoss"><a class="ri" href="./Bootslander/mesembouteillageverre.php">MES EMBOUTEILLAGE VERRE</a></span>
<span class="atoss"><a class="ri" href="./Bootslander/Affichage.php">Affichage</a></span>
<span class="atoss"><a class="ri" href="./Bootslander/Liste_des_utilisateurs.php">Affichage_user</a></span>
</div>
</body>
</html> 



