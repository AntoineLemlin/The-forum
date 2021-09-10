<?php

class Check_Login{



    public function match_username($username, $password){
        require("db_connect.php");

        
        $sql="SELECT * from Users where Nickname=:nickname ";
        $statement = $conn->prepare($sql);

        $statement->execute([':nickname' => $username]);
        
        
        if($statement->rowCount() > 0){
            $username_result = $statement->fetch(PDO::FETCH_ASSOC);
            if(password_verify($password, $username_result['Password'])){
                $_SESSION['username'] = $username_result['Nickname'];
                $_SESSION['email'] = $username_result['Email'];
                echo "Successfully Login";
            }
        }
        else{
            echo "Try again";
        }
    }


    
}



















?>