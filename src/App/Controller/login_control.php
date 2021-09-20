<?php

if(isset($_POST["login"])){

    if(!empty($_POST["username"]) && !empty($_POST["password"])){
       require("../App/Model/check_login.php");
        $username=$_POST["username"];
        $password=$_POST["password"];
        
        $user_checkin = new Check_Login();
        
        $user_checkin -> match_username($username, $password);

        require_once("../App/Model/insert_data.php");
        LastActive($username);

    }
    else{
        echo "<h3 class='message bg-white border border-danger text-danger'>ERRROR</h3>";
    }
}










?>