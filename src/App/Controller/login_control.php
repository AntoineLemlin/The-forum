<?php

if(isset($_POST["login"])){

    if(isset($_POST["username"]) && isset($_POST["password"])){
        echo "Bravo";
        $username=$_POST["username"];
        $password=$_POST["password"];
    }else{
        echo "ERRROR";
    }
}










?>