<?php

require "../App/Model/fetch_messages.php";

$topic_id=$_GET['topic_number'] ; 

$first_comment=first_comment($topic_id);
$list_messages=display_comments($topic_id);

?>


<!-- FIRST MESSAGE -->
<div class="row mt-5">
                <div class="col-3">
                  <div class ="img-modifier mb-2">
                    <?php echo isImage($first_comment["Avatar"], "80", $first_comment["Email"]); ?>
                  </div>
                  <h6><?php echo $first_comment["Nickname"] ?></h6>
                  <p class="user-id"><strong>Posts: </strong>45</p>
                </div>
                <div class="col-9">
                  <p class="user-id"> <i class="far fa-clock mr-2"></i><?php echo $first_comment["Creation_Date"] ?> <?php require "../App/Controller/last_modification.php" ?>  </p>
                  <p class="user-id mb-5"><?php echo $first_comment["Content"] ?> </p>
                  <form method="POST" action="edit_comment.php?topic_num=<?Php echo $topic_id ?>"  id="modify-comment">
                  <button id="submit" type="submit" name="edit" class="btn btn-primary mt-5 w-25 h2">Modify</button>
                  </form> 
                  <hr>
                  <p class="user-id"> <?php echo $first_comment["Signature"] ?> </p>
                </div>
              </div>
<!-- FOLLOWING MESSAGES -->

<?php
foreach($list_messages as $list){
    ?>

              <div class="row mt-5">
                <div class="col-3">
                  <div class ="img-modifier mb-2">
                  <?php echo isImage($list["Avatar"], "80", $list["Email"]); ?>
                  </div>
                  <h6><?php echo $list["Nickname"] ?></h6>
                  <p class="user-id"><strong>Posts: </strong>45</p>
                </div>
                <div class="col-9">
                  <p class="user-id"> <i class="far fa-clock mr-2"></i><?php echo $list["Create_date"] ?>   <?php require "../App/Controller/last_modification_following.php" ?>  </p>
                  <p class="user-id mb-5"><?php echo $list["Content"] ?> </p>
                  <form method="POST" action="edit_list.php?id_message=<?Php echo $list['ID_Message']?>"  id="modify-comment">
                  <button id="submit" type="submit" name="edit" class="btn btn-primary mt-5 w-25 h2">Modify</button>
                  </form> 
                  <hr>
                  <p class="user-id"> <?php echo $list["Signature"] ?> </p>
                </div>
              </div>

<?php 
}
?>


