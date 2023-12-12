<?php
    include 'functions/main-functions.php';

    $pages = scandir('pages/');

    if(isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php',$pages)){
        $page = $_GET['page'];
    }else{
        $page = 'home';
    }

    $pages_functions = scandir('functions/');

    if(in_array($page.'.func.php',$pages_functions)){
        include 'functions/'.$page.'.func.php';
    }

?>


<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Mise en place d'une application de Chat pour la gestion de commerce electronique</title>
        <link rel="stylesheet" href="css/styles.css"/>
        <link href='http://fonts.googleapis.com/css?family=Roboto:500,700,400' rel='stylesheet' type='text/css'>
    </head>
    <body>
       
        <div class="container">
            <?php
                include 'pages/'.$page.'.php';
            ?>
        </div>
        <script src="js/jquery.js"></script>
        <?php
            $pages_js = scandir('js/');
            if(in_array($page.'.func.js',$pages_js)){
                ?>
                    <script src="js/<?= $page ?>.func.js"></script>
                <?php
            }

        ?>
<script src="Bootslander/assets/vendor/jquery/jquery.min.js"></script>
  <script src="Bootslander/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Bootslander/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="Bootslander/assets/vendor/php-email-form/validate.js"></script>
  <script src="Bootslander/assets/vendor/venobox/venobox.min.js"></script>
  <script src="Bootslander/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="Bootslander/assets/vendor/counterup/counterup.min.js"></script>
  <script src="Bootslander/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="Bootslander/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="Bootslander/assets/js/main.js"></script>
    </body>
</html>