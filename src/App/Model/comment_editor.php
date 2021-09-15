<?php


function prefilled ($topic_id){
    require "db_connect.php";

    $sql="Select Content from Topics where Topic_Number=:Topic_number";
    $stmt=$conn->prepare($sql);
    $stmt->BindParam(":Topic_number",$topic_id);
    $stmt->execute();

    $topic_array=$stmt->fetch(PDO::FETCH_ASSOC);

    return $topic_array;

}

function prefilled_messages ($message_id){
    require "db_connect.php";

    $sql="Select Content from Messages where ID_Message=:ID_Message";
    $stmt=$conn->prepare($sql);
    $stmt->BindParam(":ID_Message",$message_id);
    $stmt->execute();

    $topic_array=$stmt->fetch(PDO::FETCH_ASSOC);

    return $topic_array;

}

function modify_first_comment($topic_id,$Content){

    require "db_connect.php";

    $sql="Update Topics 
     set Content=:Content       
     where Topic_Number=:Topic_number";
    $stmt=$conn->prepare($sql);
    $stmt->BindParam(":Topic_number",$topic_id);
    $stmt->BindParam(":Content",$Content);
    $stmt->execute();


}

function check_authorID ($topic_number){
    require "db_connect.php";

    $sql="Select Author_ID from Topics where Topic_Number=:Topic_Number";
    $stmt=$conn->prepare($sql);
    $stmt->BindParam(":Topic_Number",$topic_number);
    $stmt->execute();

    $topic_array=$stmt->fetch(PDO::FETCH_ASSOC);

    return $topic_array["Author_ID"];
}

function check_MessageID ($message_id){
    require "db_connect.php";

    $sql="Select Topic_Number,Author_ID from Messages where ID_Message=:ID_Message";
    $stmt=$conn->prepare($sql);
    $stmt->BindParam(":ID_Message",$message_id);
    $stmt->execute();

    $topic_array=$stmt->fetch(PDO::FETCH_ASSOC);

    return $topic_array;
}



function insert_modification ($id,$Content ) {

    

    require "db_connect.php";
    
    date_default_timezone_set("Europe/Paris");
    $date = date("Y-m-d h:i:sa") ;
    $sql="UPDATE `Messages` SET Edition_date`=:Edition_date, Content=:Content  WHERE `ID_Message` =: ID_Message" ;  
    $stmt=$conn->prepare($sql);
    $stmt->bindParam(":ID_Message", $id);
    $stmt-> bindParam(":Edition_date",$date);
    $stmt-> bindParam(":Content",$Content);


    $stmt->execute();
    
    



} 




?>