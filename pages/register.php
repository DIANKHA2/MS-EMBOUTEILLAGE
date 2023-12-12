<h2 class="header header-form">S'inscrire</h2>
<?php
    if(isset($_POST['submit'])){
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $password = sha1(htmlspecialchars(trim($_POST['password'])));
        $kala= htmlspecialchars(trim($_POST['kala']));

        if(email_taken($email) == 1){
            $error_email = "L'adresse email est déjà utilisée...";
        }else{
            register($name, $email, $password, $kala);
            $_SESSION['tchat'] = $email;
            $_SESSION['za'] = $kala;
            header("Location:./Bootslander/Affichage.php");;
        }
    }

?>

<form method="post" id="regForm">

    <div class="field">
        <label class="field-label" for="name">Votre nom</label>
        <input class="field-input" type="text" name="name" id="name"/>
    </div>

    <div class="field">
        <label class="field-label" for="email">Votre adresse email</label>
        <input class="field-input" type="email" name="email" id="email"/>
    </div>

    <div class="field">
        <label class="field-label" for="password">Votre mot de passe</label>
        <input class="field-input" type="password" name="password" id="password"/>
    </div>
    
    <input type="hidden" name="kala" value="<?php echo 1;?>" />
    
    <p class="error"><?php echo (isset($error_email)) ? $error_email : ''; ?></p>
    <button type="submit" name="submit">S'inscrire</button>


</form>



<img style="margin-top:100px; margin-left:800px; " src="./Bootslander/assets/img/soboa-icones.png" alt="Imperial" width=500; height=500;>
