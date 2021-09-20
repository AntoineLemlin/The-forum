<?php 

// ----------------user nickname checking -------------------------


function nickname_unique($nickname){
    require "../App/Model/db_connect.php";
    $sql = "SELECT * FROM Users WHERE Nickname =upper(:nickname) " ;

    $statement = $conn -> prepare($sql);
    $statement -> BindParam (':nickname', $nickname);
    $statement -> execute () ;
  

    if($statement->rowCount() > 0){
        echo "identifiant déjà pris";
        return false;
    }



}

function nickname_unique_edit($nickname, $id){
    require "../App/Model/db_connect.php";
    $sql = "SELECT * FROM Users WHERE Nickname =upper(:nickname) AND Id !=:id" ;

    $statement = $conn -> prepare($sql);
    $statement -> BindParam (':nickname', $nickname);
    $statement -> BindParam (':id', $id);
    $statement -> execute () ;
   

    if($statement->rowCount() > 0){
        echo "identifiant déjà pris";
        return false;
    }



}








?>