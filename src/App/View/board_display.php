<?php 

require("../Model/board_fetch.php");

$fetchedData = fetchBoard();

foreach($fetchedData as $board){
    print_r($board);
?>

          
<div class="card m-5 p-3">
              <div class="container">
                <div class="row">
                  <div class='col-3 p-0'><img class="rounded-circle z-depth-2" alt="20x20" src="" data-holder-rendered="true" style="width: 4rem;"></div>
                  <div class='col-9 p-0'>
                    <div class="card-body p-0">
                      <h5 class="card-title"><?php $board['Name']; ?></h5>
                      <p class="card-text">This forum is also locked, but at least there aren't any unread posts</p>
                    </div>
                  </div>
                </div>
                <ul class="list-group list-group-horizontal col-12 p-0">
                  <li class="list-group-item col-4 border-0"><span class='topic'>NB</span><br>
                  Topics</li>
                  <li class="list-group-item col-4 border-0"><span class='posts'>NB</span><br>
                  Posts</li>
                  <li class="list-group-item col-4 border-0"><span class='date'>date</span><br>
                  Last post</li>
                </ul>
              </div>
            </div>
<?php
}


?>