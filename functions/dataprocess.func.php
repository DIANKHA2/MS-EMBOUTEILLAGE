<?php

    function la(){
        global $db;
        $req = $db->query("SELECT * FROM dataprocess");
        $results = array();
        while($rows = $req->fetchObject()){
            $results[] = $rows;
        }
        return $results;
    }?>

   