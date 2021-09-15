<?php 

$topic_id=$_GET['topic_number'] ; 

$first_comment=first_comment($topic_id);





if($first_comment["Edition_date"] !== "0000-00-00 00:00:00" ){





?>

Last modification :<?php echo $first_comment["Edition_date"] ?> 

<?php 

}

?>



