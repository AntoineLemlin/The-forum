<?php 

require "../App/Model/fetch_messages.php";
require "../App/Model/add_view.php";

$topic_ide=$_GET['topic_number'] ; 

$first_commente=first_comment($topic_ide);
$list_messages=display_comments($topic_ide);


//echo $first_commente["TITLE"];

view($first_commente["TITLE"]);


?>