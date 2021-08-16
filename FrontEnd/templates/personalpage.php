<?php 
  
    include 'inc/header.php';
    include 'inc/blogswitch.php';
    include 'inc/personal-content.php';

    if(isset($_SESSION['firstname'])){
        include 'inc/postbutton.php';
    }
    include 'inc/post.php';

    include 'inc/footer.php';

?>