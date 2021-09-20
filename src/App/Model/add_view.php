<?php  

function view ($titlename) {

require "../App/Model/db_connect.php";

$sql="UPDATE Topics SET `views` = `views` + 1 WHERE TITLE=:TITLE";
$stmt=$conn->prepare($sql);
$stmt->BindParam(":TITLE",$titlename);
$stmt->execute();


//$topic_array=$stmt->fetch(PDO::FETCH_ASSOC);





}

function display_view($title){

    require "../App/Model/db_connect.php";
    $sql = "SELECT views FROM Topics WHERE TITLE =:TITLE ";
    $stmt = $conn -> prepare($sql);
    $stmt-> BindParam(":TITLE", $title);
    $stmt->execute();
    $topic_array= $stmt->fetch(PDO::FETCH_ASSOC);

    return $topic_array['views']; 


}



?> 