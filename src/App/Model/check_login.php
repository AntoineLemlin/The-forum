<?php

class Check_Login{



    public function match_username($username){
        require_once ("db_connect.php");

        
        $sql="SELECT * from Users where Nickname=:nickname";
        $statement = $conn->prepare($sql);
        $statement->BindParam(':nickname',$username); 
        $statement->execute();
        $username_result = $statement->fetch(PDO::FETCH_ASSOC);
        
        
        
        if ($username_result["Password"] != null ) {
            print_r($username_result);
            return $username_result["Password"];
            
        }
        else {
            return false  ;
        }

    


    }
}



















?>