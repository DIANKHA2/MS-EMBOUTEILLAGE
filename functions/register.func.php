<?php

    function email_taken($email){
        global $db;
        $e = array('email' => $email);
        $sql = 'SELECT * FROM users WHERE email = ?';
        $req = $db->prepare($sql);
        $req->execute(array($email));
        $free = $req->rowCount();

        return $free;
    }

    function register($name, $email, $password, $kala){
        global $db;
        $r = array(
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
             'kala'=>$kala
        );
        $sql = "INSERT INTO users(name,email,password,kala) VALUES(:name,:email,:password,:kala)";
        $req = $db->prepare($sql);
        $req->execute($r);
    }

    