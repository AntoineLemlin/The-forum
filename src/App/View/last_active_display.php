<?php 

require("../App/Model/fetch_lastActive.php");

$fetchedData = fetchLastActive();

date_default_timezone_set('Europe/Brussels');
$time1=new DateTime();
for($i=0;$i<3;$i++){
    $time2 = new DateTime($fetchedData[$i]['Last_Active']);
    $difference=$time2->diff($time1);

     $difference = $difference-> format("%H:%i:%s");
     
    ?>
    <td id="last-active-card" class="card my-3 mx-1">
        <div id="last-pic" class="card-body d-flex flex-column<?php 
        if(strtotime($difference) < strtotime("00:05:00")){
            echo " connected";
        }
        if(strtotime($difference) > strtotime("00:05:00") && strtotime($difference) < strtotime("00:15:00")){
            echo " absent";
        }
        if(strtotime($difference) > strtotime("00:15:00")){
            echo " disconnected";
        }
        ?>">
            <img src="https://secure.gravatar.com/avatar/<?php echo md5($fetchedData[$i]['Email']) ?> ?d=mp&size=80" class="rounded-circle mb-1" alt="147140">
            <h5 class="card-title text-center"><?php echo $fetchedData[$i]['Nickname']; ?></h5>
            <p class="card-text text-center h6"><?php echo $fetchedData[$i]['Signature']; ?></p>
        </div>
    </td>
        
        <?php
}
?>