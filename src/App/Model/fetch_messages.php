<?php

function first_comment($topic_number){
    require "db_connect.php";
    
    $sql = "SELECT Email,Nickname,Creation_Date,Signature,Content 
    FROM Topics inner join Users 
    on Topics.Author_ID=Users.Id 
    where :Topic_Number=$topic_number;  ";
    
    $stmt = $conn->prepare($sql);
    
    $stmt->BindParam(":Topic_Number",$topic_number);
    $stmt->execute();               
    $topic_array = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    
    
    
    return $topic_array ; 
}


function display_comments($topic_id) {

    require "db_connect.php";
    
    $sql = "SELECT Email,Nickname,Create_date,Messages.Content,Signature 
    FROM Messages inner join Topics 
    on Messages.Topic_Number=Topics.Topic_Number
    INNER JOIN Users
    on Users.id=Messages.Author_ID
    where :Topics.Topic_Number=$topic_id; ";
    
    $stmt = $conn->prepare($sql);
    
    $stmt->BindParam(":Topics.Topic_Number",$topic_id);
    $stmt->execute();               
    $topic_array = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    
    
    
    return $topic_array ;  
    
    
    
    }












?>