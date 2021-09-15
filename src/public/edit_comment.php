<?Php
session_start();
require ("../App/Model/comment_editor.php");

$topic_number=$_GET["topic_num"];

$final_input=prefilled($topic_number);

$resultat=check_authorID($topic_number);

if (empty($_SESSION['id'])) 
{

    header("Location: messages.php?topic_number=".$topic_number);

   

}
else {


 if ($_SESSION["id"]===$resultat){
    if (isset($_POST['submit-modifier']))
    {
        
        $new_content=$_POST['first-comment'];
    
        modify_first_comment($topic_number,$new_content);
    
        header("Location: messages.php?topic_number=".$topic_number);
    }
    
}
else{
    header("Location: messages.php?topic_number=".$topic_number);
}   
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit comment</title>
</head>

<body>
    <form method="POST" action="">
        <input type="text" name="first-comment" value="<?php echo $final_input['Content'] ?>" >
        <button id="submit" type="submit" name="submit-modifier" class="btn btn-primary mt-5 w-25 h2">Modify</button>

    </form>
</body>
</html>