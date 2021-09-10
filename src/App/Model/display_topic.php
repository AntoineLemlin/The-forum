<?php 


function print_topic($board) {

require "db_connect.php";

$sql = "SELECT Nickname, Content, Creation_Date, Title FROM Users inner join Topics on Users.id=Topics.Author_ID where board_name=:board_name ";

$stmt = $conn->prepare($sql);

$stmt->BindParam(":board_name",$board);
$stmt->execute();               
$topic_array = $stmt -> fetchAll(PDO::FETCH_ASSOC);



return $topic_array ;  



}





?>