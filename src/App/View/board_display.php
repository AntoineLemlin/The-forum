<?php 

require("../App/Model/board_fetch.php");

$fetchedData = fetchBoard();

foreach($fetchedData as $board){
   
?>

          
<div class="card m-5 p-3 h-auto">
              <div class="container">
                <div class="row">
                  <div class='col-3 p-0'><img class="rounded-circle z-depth-2" alt="20x20" src="data:image/jpeg;base64,<?php echo base64_encode( $board['Image'])?>" data-holder-rendered="true" style="width: 4rem; height:4rem;"></div>
                  <div class='col-9 p-0'>
                    <div class="card-body p-0">
<<<<<<< HEAD
                      <h5 class="card-title"><?php echo $board['Name']; ?></h5>
                      <p class="card-text"> <?php echo $board['Description'] ?> </p>
=======
                      <h4 class="card-title"><?php echo $board['Name']; ?></h4>
                      <p class="card-text description" style="font-size: 1.2rem;"><?php echo $board['Description']; ?></p>
>>>>>>> 9921b061f987ff43ab913472b821f7d472df61da
                    </div>
                  </div>
                </div>
                <ul class="list-group list-group-horizontal col-12 p-0">
                    <li class="list-group-item col-4 border-0" style="font-size: 1rem;"><span class='topic'>NB</span><br>
                    Topics</li>
                  <li class="list-group-item col-4 border-0" style="font-size: 1rem;"><span class='posts'>NB</span><br>
                  Posts</li>
                  <li class="list-group-item col-4 border-0" style="font-size: 1rem;"><span class='date'>date</span><br>
                  Last post</li>
                </ul>
              </div>
            </div>
<?php
}


?>