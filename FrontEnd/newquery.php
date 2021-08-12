<?php 
    include_once 'config/init.php';
    session_id('c3d24u7r8ibp4jgnl9rjjlmhmi');
    session_start();
    $user_id = $_SESSION['user_id'];

    if(isset($_GET['modifypost'])){

        $post_id = $_GET['post_id'];
        $post = new Post;
        $post->deleteUserPost($post_id,$user_id);
    }

    if(isset($_GET['submitpost'])){

        $title = $_GET['title'];
        $imglink = $_GET['img-link'];
        $txtarea = $_GET['txt-area'];
     
        $data = array($title,$imglink,$txtarea,$user_id);
        $post = new Post;
        $post->addUserPost($data);
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);



?>