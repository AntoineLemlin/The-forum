<?php

class Check_Login{



    public function match_username($username, $password){
        require_once ("db_connect.php");

        
        $sql="SELECT Nickname, Password from Users where Nickname=:nickname AND Password=:password ";
        $statement = $conn->prepare($sql);
        $statement->BindParam(':nickname',$username,); 
        $statement->BindParam(':password',$password,); 

        $statement->execute();
        $username_result = $statement->fetch(PDO::FETCH_ASSOC);
        
        
        if($statement->rowCount() > 0){
            $_SESSION['username'] = $username;
            echo "Successfully Login";
        }
        else{
            echo "Try again";
        }

    


    }
}



















?>