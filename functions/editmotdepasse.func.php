<?php

    function user_existes($email,$password){
        global $db;
        $u = array(
            'email'=>$email,
            'password'=>$password
        );
        $sql = "SELECT * FROM users WHERE email= ? AND password= ?";
        $req = $db->prepare($sql);
        $req->execute(array($email,$password));
        $exist = $req->rowCount();
        return $exist;

    }

    

    