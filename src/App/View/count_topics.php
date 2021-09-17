<?php

if(!empty($_GET["board"])){


$board_name=$_GET['board'];;
$count_topics=CountTopics($board_name);

?>

<li class="list-unstyled"><?php echo $count_topics["nb_topics"] ?> Topic(s)</li> 

<?php

}

else if(!empty($_GET["search"])){
    $search_name=$_GET["search"];
    $count_topics=CountNamedTopics($search_name);


?>

<li class="list-unstyled"><?php echo $count_topics["nb_topics"] ?> Topic(s)</li> 

<?php
}

else if(empty($_GET["search"])){

    $search_name=$_GET["search"];
    $count_topics=GeneralCountTopics($search_name);


?>

<li class="list-unstyled"><?php echo $count_topics["nb_topics"] ?> Topic(s)</li> 

<?php

}

?>

