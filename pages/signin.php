

<?php
    if(isLogged() == 1){
        header("Location:index.php?page=membres");
    }
?>

<h2 class="header">Se connecter</h2>

<?php
     
    if(isset($_POST['submit']))
    {
                  $email = htmlspecialchars(trim($_POST['email']));
                  $password = sha1(htmlspecialchars(trim($_POST['password'])));
         
              if(user_exist($email,$password) == 1){
                  $_SESSION['tchat'] = $email;
                      try {
                           $strConnection = 'mysql:host=localhost;dbname=mes_soboas';
                          $pdo =new PDO ($strConnection, 'root','');
                          }
                       catch (PDOException $e)
                       {
                            $msg ='ERREUR PDO dans '. $e->getMessage();
                            die($msg);
                       }
                         $kal="Connecter";
                         $email=$_SESSION['tchat'];
                        

               }
               else{
                     $error_user_not_found = "L'adresse email ou le mot de passe est incorrect";
                   }
    }
?>

<?php
     
    if(isset($_POST['submit']))
    {
    $mail=$_POST['email'];
    global $db;
	$req="SELECT * FROM users WHERE email like '%$mail%' ";
	$ps=$db->prepare($req);
	$ps->execute();
	while($et=$ps->fetch()) { 
		$s= $et['kala']; 
    }
    $_SESSION['za']= $s;
    header("Location:./Bootslander/Affichage.php");}
?>
<div class="alert alert-success"><?php if(isset($_SESSION['tchat'])){echo  "Inscription de ".$_SESSION['tchat']."réussi" ;}else{echo "Remplissez tous les champs du formulaire ";} ?></div>
<form method="post" id="logForm">
    

    <div class="field">
        <label class="field-label" for="email">Votre adresse email</label>
        <input class="field-input" type="email" name="email" id="email"/>
    </div>

    <div class="field">
        <label class="field-label" for="password">Votre mot de passe</label>
        <input class="field-input" type="password" name="password" id="password"/>
    </div>
   
    <button type="submit" name="submit">Se connecter</button><br>

    <a href="index.php?page=editmotdepasse" > <span  style="background-color:#34495e; border:2px solid #34495e; display:block; width:10%;  height:36px; color:#fff; border-radius:2px; cursor:pointer; font-size:16px; margin:5px 0; outline:none;" >Mot de pass oublier </span> </a>
</form>
<p class="error"><?php echo (isset($error_user_not_found)) ? $error_user_not_found : ''; ?></p>

<img style="margin-top:100px; margin-left:800px; " src="./Bootslander/assets/img/soboa-icones.png" alt="Imperial" width=500; height=500;>

