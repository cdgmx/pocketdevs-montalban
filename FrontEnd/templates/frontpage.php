<?php

    include 'inc/header.php';
    include 'inc/blogswitch.php';
    include 'inc/content.php';
    include 'inc/post.php';
    if(isset($_SESSION['firstname'])){
        include 'inc/postbutton.php';
    }
    include 'inc/footer.php';

?>