<?php

function insert ($email,$nickname,$password,$signature)  {
  require "db_connect.php";

   $sql = "INSERT INTO Users (
            email,
            nickname,
            password,
            signature
    )
            VALUES (
            :email,
            :nickname,
            :password,
            :signature
    )";


    $stmt = $conn->prepare($sql);

                

    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":nickname", $nickname);
    $stmt->bindParam(":password", $password);
    $stmt->bindParam(":signature", $signature);

    $stmt->execute();

}



 
 
