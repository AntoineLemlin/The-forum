<?php

class Check_Login{



    public function match_username($username){
        require_once ("db_connect.php");

        
        $sql="SELECT password from Users where Nickname=:nickname";
        $statement = $conn->prepare($sql);
        $statement->BindParam(':nickname',$username); 
        $statement->execute();
        $username_result = $statement->fetch();
       

       
        
        if ($username_result["password"] != false ) {
            return $username_result["password"];
            
            

        }
        // else {
        //     return false  ;
        // }

    


    }
}



















?>