<?php
    include_once 'config/init.php';
  
?>


<?php
    $post = new Post;
    $template = new Template('templates/frontpage.php');
    
    $template->title = 'latest posts';
    $template->posts = $post->getAllPosts();

    echo $template;

?>