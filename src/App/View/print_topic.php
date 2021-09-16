<?php 

require "../App/Model/display_topic.php";
require "../App/Model/post_on_topics.php" ;
$boardname = $_GET['board'];
$search = $_GET['search'];
$search = htmlspecialchars($search);

if(empty($_GET['board'])){
  $boardname = NULL;
}

if(empty($_GET['search'])){
  $search = NULL;
}



$topic = print_topic($boardname, $search);
//print_r($topic);


foreach ($topic as $top ) {
    ?>
 
              <tr class="">
                  <td class="d-flex h2 align-items-center">
                    <i class="fas fa-folder mr-5 p-3 border rounded-circle"></i>
                    <div class="text flex-column">
                       <a href="messages.php?topic_number=<?php echo $top['Topic_Number']; ?>"><h3><?php echo $top['Title'] ?></h3></a> 
                        <h4><?php echo 'By '. $top['Nickname'] ?></h4>
                    </div>

                  </td>

                  <td class=" h4">
                    <i class="fas fa-folder"></i>  
                  </td>

                  <td class="m-3">
                    <h4 class="text-muted"><?php print_r(Get_Post_Count ($top['Topic_Number'])) ;   ?> </h4>
                  </td>

                  <td class="m-3">
                    <h4 class="text-muted">5078</h4>
                  </td>

                  <td class="d-flex h4 flex-column">
                        <h4><?php echo 'By '. $top['Nickname'] ?> <i class="fas fa-external-link-square-alt ml-3"></i></h4>
                        <h5><?php echo  $top['Creation_Date'] ?></h4>

                  </td>
              </tr>
          


<?php

}




?> 