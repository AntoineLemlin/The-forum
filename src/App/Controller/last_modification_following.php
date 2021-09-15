<?php 

$topic_id=$_GET['topic_number'] ; 

$first_comment=first_comment($topic_id);
$list_messages=display_comments($topic_id);

print_r ($list_messages["Edition_date"]);



if($list_messages["Edition_date"] != NULL ){





?>

Last modification :<?php echo $list_messages["Edition_date"] ?> 

<?php 

}

?>
