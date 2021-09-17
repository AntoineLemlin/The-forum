<?php 

function deleted_content($id_messages) {
    require "db_connect.php";

    $sql = "UDAPTE SET content ='content deleted' Deleted = TRUE WHERE ID_Message =:ID_Message";
    $stmt = $conn -> prepare($sql);
    $stmt -> BindParam("ID_Message",$id_messages);
    $stmt -> execute();
    
    
}


?>