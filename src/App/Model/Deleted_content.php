<?php 

function deleted_content($id_message) {
    require "../App/Model/db_connect.php";

    $sql = "UPDATE `Messages` SET `Content` ='content deleted', `Deleted` = TRUE WHERE ID_Message =:ID_Message";
    $stmt = $conn -> prepare($sql);
    $stmt -> BindParam("ID_Message",$id_message);
    $stmt -> execute();
    $topic_array = $stmt -> fetch(PDO::FETCH_ASSOC);

    print_r($topic_array);

    
}

function Deleted_checker($id_messages) {
    require "../App/Model/db_connect.php";

    $sql = "SELECT Deleted FROM Messages  WHERE ID_Message =:ID_Message";
    $stmt = $conn -> prepare($sql);
    $stmt -> BindParam("ID_Message",$id_messages);
    $stmt -> execute();
    $topic_array = $stmt -> fetch(PDO::FETCH_ASSOC);

    return $topic_array['Deleted'];

}








?>