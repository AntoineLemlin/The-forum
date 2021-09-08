<?php

class Check_Login{

    public function match_username($username){
        require_once "../Controller/login_check.php";

        $statement = $conn->prepare("SELECT * from TheForum.Users where nickname=:nickname");
        $statement->execute(['nickname' => $username]); 
        $id_array = $statement->fetch();
        $id=$id_array['id'];


    }










}









?>