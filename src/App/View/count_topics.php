<?php

$board_name=$_GET['board'];;
$count_topics=CountTopics($board_name);

?>

<li class="list-unstyled"><?php echo $count_topics["nb_topics"] ?> Topic(s)</li> 