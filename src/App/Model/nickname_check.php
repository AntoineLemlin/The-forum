<?php 



function nickname_unique($nickname){
    require ("db_connect.php");
    $sql = "SELECT nickname FROM Users WHERE Nickname =upper(:nickname) " ;

    $statement = $conn -> prepare($sql);
    $statement -> BindParam (':nickname', $nickname);
    $statement -> execute () ;
    $nickname_result = $statement -> fetch() ;

    if ($nickname_result) {
        echo 'ntm nickname deja pris' ;
    }
    


}




?>