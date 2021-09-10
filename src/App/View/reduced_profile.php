<?php 
    if(isset($_SESSION['email']) && isset($_SESSION['username'])){
?>

    <div class="container d-flex justify-content-start align-items-center bg-light p-5 my-3 border border-dark rounded flex-wrap">
        <div class="photo mr-5">
            <img class="rounded-circle border border-dark mb-3" src="https://secure.gravatar.com/avatar/<?php echo md5($_SESSION['email']) ?> ?d=mp&size=80" alt="">
        </div>
        <div class="username">
            <h3 class="text-dark h3"><?php echo $_SESSION['username'] ?></h3>
        </div>
    </div>


<?php
    }
?>


