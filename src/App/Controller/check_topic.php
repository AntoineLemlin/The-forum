<?php 
if(isset($_POST["add-topic"])){

    $title= $_POST['title']; 
    $content = $_POST['content']; 
    $board = $_POST['board-name'];
    date_default_timezone_set("Europe/Paris");
    $date=date("Y-m-d h:i:s");
    

    if(!empty($title) || !empty($content) || !empty($board)){

        require "../App/Model/insert_topic.php";
        $id=find_authorid($_SESSION["username"]);
        insert_topic($title,$content,$board,$id,$date);


    }else{
        echo "Tous les champs sont obligatoires";
    }
  

     
}
