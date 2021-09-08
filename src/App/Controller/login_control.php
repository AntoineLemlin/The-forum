<?php

if(isset($_POST["login"])){

    if(isset($_POST["username"]) && isset($_POST["password"])){
       include_once ("/var/www/html/App/Model/check_login.php");
        $username=$_POST["username"];
        $password=$_POST["password"];
        
        $user_checkin = new Check_Login();
        
        if ($user_checkin -> match_username($username) != false ) {
              echo "check";
        } 
        else {
            echo "recommence";
        }
        


    }

    
    
    else{
        echo "ERRROR";
    }
}










?>