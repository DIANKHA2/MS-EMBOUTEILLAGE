
<?php
    if(isset($_POST['submite'])){
        $o_password = sha1(htmlspecialchars(trim($_POST['o_password'])));
        $n_password = sha1(htmlspecialchars(trim($_POST['n_password'])));
        $r_password = sha1(htmlspecialchars(trim($_POST['r_password'])));
        $r_pseudo = htmlspecialchars(trim($_POST['pseudo']));
        
        if(empty ($o_password)){
            echo "Veuillez saisir votre ancien mot de passe";
        }else if($n_password != $r_password)
        {
            echo "Vos nouveaux mots de passe sont différentes";
        }
        else if(user_existes($r_pseudo,$o_password) == 0)
        {
            echo "L'ancien  mot de passe est incorrecte";
        }
        else{
            global $db;   
            $updatess=$db->prepare('UPDATE users SET  password = ? where email=?');
            $updatess->execute(array($r_password,$r_pseudo));
            session_start();
            $_SESSION['t'] = "Mot de pass modifié avec succés";
            header("Location:index.php?page=signin");
        }
    }

?>


<form method="post" id="logForm">
 
    <div class="field">
        <label class="field-label" for="pseudo">Votre adresse email</label>
        <input class="field-input" type="text" name="pseudo" id="pseudo"/>
    </div>

    <div class="field">
        <label class="field-label" for="o_password">Votre ancien mot de passe</label>
        <input class="field-input" type="password" name="o_password" id="o_password"/>
    </div>

    <div class="field">
        <label class="field-label" for="n_password">Votre nouveau mot de passe</label>
        <input class="field-input" type="password" name="n_password" id="n_password"/>
    </div>
    <div class="field">
        <label class="field-label" for="r_password">Répéter nouveau mot de passe</label>
        <input class="field-input" type="password" name="r_password" id="r_password"/>
    </div>
    <button type="submit" name="submite">changer de mot de passe </button>

</form>
