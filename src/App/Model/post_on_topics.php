<?php 

function Get_Post_Count ($topic_id) {

require "../App/Model/db_connect.php";
    
$sql = "SELECT count(Messages.Content)  
FROM Messages inner join Topics 
on Messages.Topic_Number=Topics.Topic_Number
Where Topics.Topic_Number=:Topic_Num ";

$stmt = $conn->prepare($sql);

$stmt->BindParam(":Topic_Num",$topic_id);
$stmt->execute();               
$topic_array = $stmt -> fetch(PDO::FETCH_ASSOC);



return $topic_array['count(Messages.Content)'] +1  ; 



}
/*
function Get_Title_topics($Title) {
    
    
    require "db_connect.php";

    $sql="Select Topic_Number from Topics where TITLE=:TITLE";
    $stmt=$conn->prepare($sql);
    $stmt->BindParam(":TITLE",$Title);
    $stmt->execute();

    $topic_array=$stmt->fetch(PDO::FETCH_ASSOC);

    return $topic_array['Topic_Number'];
}

*/





 


?>