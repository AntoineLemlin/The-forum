<?php 

// ----------------user nickname checking -------------------------


function nickname_unique($nickname){
    require ("db_connect.php");
    $sql = "SELECT * FROM Users WHERE Nickname =upper(:nickname) " ;

    $statement = $conn -> prepare($sql);
    $statement -> BindParam (':nickname', $nickname);
    $statement -> execute () ;
    $nickname_result = $statement -> fetchAll(PDO::FETCH_ASSOC);

    if($statement->rowCount() > 0){
        echo "identifiant déjà pris";
        return false;
    }



}








?>