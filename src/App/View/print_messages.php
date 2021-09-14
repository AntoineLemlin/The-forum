<?php

require "../App/Model/fetch_messages.php";

$topic_id=$_GET['topic_number'] ; 
echo $topic_id;
$first_comment=first_comment($topic_id);
print_r($first_comment);

?>

<div class="row mt-5">
                <div class="col-3">
                  <div class ="img-modifier mb-2">
                    <img src="https://images.unsplash.com/photo-1515121061221-7d6ce2dcd1fe?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="" >
                  </div>
                  <h6><?php $first_comment['Nickname'] ?></h6>
                  <p class="user-id"><strong>Posts: </strong>45</p>
                </div>
                <div class="col-9">
                  <p class="user-id"> <i class="far fa-clock mr-2"></i><?php $first_comment["Creation_Date"] ?></p>
                  <p class="user-id mb-5"><?php $first_comment["Content"] ?> </p>
                  <hr>
                  <p class="user-id"> <?php $first_comment["Signature"] ?> </p>
                </div>
              </div>

