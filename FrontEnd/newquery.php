<?php 
    include_once 'config/init.php';
    session_id('c3d24u7r8ibp4jgnl9rjjlmhmi');
    session_start();
    $user_id = $_SESSION['user_id'];
    $post_id = $_GET['post_id'];
    $post = new Post;
    $post->deleteUserPost($post_id,$user_id);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    // $post->deleteUserPost( 1, 67);
?>