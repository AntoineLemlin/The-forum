<?php 

$topic_id=$_GET['topic_number'] ; 

$first_comment=first_comment($topic_id);
$list_messages=display_comments($topic_id);




if($first_comment["Edition_date"] != NULL ){





?>

Last modification :<?php echo $first_comment["Edition_date"] ?> 

<?php 

}

?>

<?php

elseif ($list_messages["Edition_date"] != NULL ){





?>

Last modification :<?php echo $list_messages["Edition_date"] ?> 

<?php 

}

?>
