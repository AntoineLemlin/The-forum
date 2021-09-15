<?Php
session_start();
require ("../App/Model/comment_editor.php");

$id_message=$_GET["id_message"];

$final_input=prefilled_messages($id_message);

$resultat=check_MessageID($id_message);
$topic_number = $resultat["Topic_Number"];

if ($_SESSION["id"]===$resultat["Author_ID"]){
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