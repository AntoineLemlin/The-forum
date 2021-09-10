<?php 


function print_topic($board) {

require "db_connect.php";

$sql = "SELECT *  FROM topics WHERE board_name = :board_name";

$stmt = $conn->prepare($sql);

$stmt->execute([":board_name" => $board]);               
$topic_array = $stmt -> fetchAll();

return $topic_array ; 



}





?>