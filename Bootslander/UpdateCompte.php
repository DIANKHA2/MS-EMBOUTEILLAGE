<?php       try 
            {
            $strConnection = 'mysql:host=localhost;dbname=tchat';
            $pdo =new PDO ($strConnection, 'root','');
            }
            catch (PDOException $e){
            $msg ='ERREUR PDO dans '. $e->getMessage();
            die($msg);
            }
    
            $id=$_POST["id"];
            $name = htmlspecialchars(trim($_POST['name']));
            $email = htmlspecialchars(trim($_POST['email']));
            $password = sha1(htmlspecialchars(trim($_POST['password'])));
            $kala= htmlspecialchars(trim($_POST['kala']));
            $ps=$pdo->prepare("UPDATE users SET name=?,email=?,password=?,kala=? WHERE id=?");
            $params=array($name,$email,$password,$kala,$id);
            $ps->execute($params);
        header("Location:../index.php?page=membres");
     
?>




     