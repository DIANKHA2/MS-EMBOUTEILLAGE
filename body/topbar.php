
<div class="topbar">
    <a class="app-name" href="index.php">Mes EMBOUTEILLAGES</a>
    <span class="menu">
    <a class="app-name" href="home.php">Accueil</a>

        <?php
            if(isLogged() == 1){
                ?>
                    <a href="index.php?page=membres" class="<?php echo ($page=='membres') ? 'active' : '' ?>">home-ebouteillage</a>
                    <a id="moto" href="index.php?page=logout">Déconnexion</a>
                <?php
            }else{
                ?>
                    <a href="index.php?page=register" class="<?php echo ($page=='register') ? 'active' : '' ?>">S'inscrire</a>
                    <a href="index.php?page=signin" class="<?php echo ($page=='signin') ? 'active' : '' ?>">Se connecter</a>
                <?php
            }
        ?>
    </span>
</div>