<?php 

require('../App/Model/fetch_lastPosts.php');

$fetched_data = getLastPosts();

for($i=0;$i<3;$i++){
?>

<td class="card m-4" style="width: 100%;">
                    <div>
                      <div class="card-body">
                        <div class="title d-flex align-items-center">
                          <h5 class="card-title"><?php echo $fetched_data[$i]['TITLE']; ?> - <?php echo $fetched_data[$i]['Board_Name']; ?></h5>
                          <h6 class="card-subtitle ml-auto text-muted">2 hours ago</h6>
                        </div>
                        <p class="card-text h6"><?php echo $fetched_data[$i]['Content']; ?></p>
                        <p class="card-text">Tags: test, work, eat, repeat</p>
                      </div>
                    </div>
                  </td>

<?php
}

?>