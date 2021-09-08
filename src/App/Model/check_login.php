<?php

class Check_Login{



    public function match_username($username){
        require_once ("db_connect.php");

        $statement = $conn->prepare("SELECT * from Users where Nickname=" . $username);

        $statement->execute(); 
        $username_result = $statement->fetch();
       
        
        if ($username_result != NULL ) {
            echo $username_result;
            
            

        }
        else {
            return false  ;
        }

    


    }
/*
    public function match_password($password){
        require_once ("db_connect.php");
       
       
       $hash = $this -> match_username($username);
       
        if (password_verify($password, $hash)) {
            echo 'Le mot de passe est valide !';
        } else {
            echo 'Le mot de passe est invalide.';
        }


    }*/










}









?>