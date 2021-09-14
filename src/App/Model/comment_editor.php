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

function modify_first_comment($topic_id,$Content){

    require "db_connect.php";

    $sql="Update Topics 
     set Content=:Content       
     where Topic_Number=:Topic_number";
    $stmt=$conn->prepare($sql);
    $stmt->BindParam(":Topic_number",$topic_id);
    $stmt->BindParam(":Content",$Content);
    $stmt->execute();

    $topic_array=$stmt->fetch(PDO::FETCH_ASSOC);

    return $topic_array;

}

if (isset($_POST['submit-modifier']))
{
  $new_content=$_POST['first_comment'];
  $topic_number=$_GET['topic_num'];
  modify_first_comment($topic_number,$new_content);
}






?>