<?php 
    
    if (isset ($_SESSION['username'])) {
    if(isset($_POST['post-reply'])){
      $topic = $_GET['topic_number'];
?>

<div class="col-12">
        <h2 class="text-center mt-5 bg-primary rounded border border-dark p-3 text-white">New comment</h2>
      <form method="POST"    id="add-comment">
          <a class="d-flex justify-content-end text-decoration-none" href="<?php echo $_SERVER['REQUEST_URI'] ?>"><i class="fas fa-times-circle h2"></i></a>
        <div class="form-group">
          <textarea type="text" name="comment" class="form-control" rows="5" id="content" placeholder="Content" required></textarea>
        </div>
        <div class="d-flex justify-content-center">
          <button id="submit" type="submit" name="add-comment" class="btn btn-primary mt-5 w-25 h2">Submit</button>

        </div>
      </form>
      </div>

<?php
    }}

    require "../App/Model/add_comment.php";

    if(isset($_POST['add-comment'])) {

      date_default_timezone_set("Europe/Paris");
      $topic = $_GET['topic_number'];
      $author = $_SESSION['id'];
      $content = $_POST['comment'];
      $date = date("Y-m-d h:i:s"); 

     add_comment($topic,$date,$author,$content) ;  
     

    }


?>