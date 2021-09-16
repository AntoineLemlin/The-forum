<?php



$countboard= BoardCount($board['Name']);
$countmessage= MessageCount($board['Name']);

$lastPost = new DateTime($countmessage['last_date']);
$lastPost = $lastPost->format("y-m-d h:s");


?>


<li class="list-group-item col-4 border-0" style="font-size: 1rem;"><span class='topic'>Topics</span><br>
                    <?php  echo $countboard["nb_topics"]   ?></li>
                  <li class="list-group-item col-4 border-0" style="font-size: 1rem;"><span class='posts'>Comments</span><br>
                  <?php  echo $countmessage["nb_messages"]   ?></li>
                  <li class="list-group-item col-4 border-0" style="font-size: 1rem;"><span class='date'>Last post</span><br>
                  <?php echo $lastPost ?></li>


