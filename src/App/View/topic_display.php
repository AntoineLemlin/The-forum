<?php 

require "../Model/display_topic.php";
$boardname = $_GET['board'] ; 

$topic = print_topic($boardname);

foreach ($topic as $top ) {
    ?>


<?php

}




?> 