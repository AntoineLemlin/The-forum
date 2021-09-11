<?php 

require "../App/Model/display_topic.php";
$boardname = $_GET['board'] ; 


$topic = print_topic($boardname);
print_r($topic);


foreach ($topic as $top ) {
    ?>

<p><?php echo $top["Nickname"]?></p>


<?php

}




?> 