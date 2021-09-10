<?php 

require("../App/Model/fetch_lastActive.php");

$fetchedData = fetchLastActive();

for($i=0;$i<3;$i++){
    ?>
    <td id="last-active-card" class="card my-3 mx-1">
        <div class="card-body d-flex flex-column">
            <img src="https://secure.gravatar.com/avatar/<?php echo md5($fetchedData[$i]['Email']) ?> ?d=mp&size=80" class="rounded-circle mb-1" alt="147140">
            <h5 class="card-title text-center"><?php echo $fetchedData[$i]['Nickname']; ?></h5>
            <p class="card-text text-center h6"><?php echo $fetchedData[$i]['Signature']; ?></p>
        </div>
    </td>        
        <?php
}
?>