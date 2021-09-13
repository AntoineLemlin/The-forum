<?php 

require "../App/Model/display_topic.php";
$boardname = $_GET['board'] ; 


$topic = print_topic($boardname);
//print_r($topic);


foreach ($topic as $top ) {
    ?>
 
              <tr class="">
                  <td class="d-flex h2 align-items-center">
                    <i class="fas fa-folder mr-5 p-3 border rounded-circle"></i>
                    <div class="text flex-column">
                        <h4><?php echo $top['Title'] ?></h3>
                        <h5><?php echo 'By '. $top['Nickname'] ?></h4>
                    </div>

                  </td>

                  <td class=" h4">
                    <i class="fas fa-folder"></i>  
                  </td>

                  <td class="m-3">
                    <h4 class="text-muted">203</h4>
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