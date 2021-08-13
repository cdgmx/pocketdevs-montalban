<?php 
    include_once 'config/init.php';
    // session_id('5eo5ms4gcg7kmqftj2u634t14t');
    session_start();
    $user_id = $_SESSION['user_id'];

    if(isset($_GET['modifypost'])){

        $post = new Post;
     
        $title = $_GET['title'];
        $imglink = ($_GET['img-link'] !== '')?$_GET['img-link']: 'http://picsum.photos/200';
        $txtarea = $_GET['txt-area'];
        $post_id = $_GET['post_id'];

        

        $data = array($title,$imglink,$txtarea,$user_id,$post_id); //might only send the changed data instead of sending all

        if($_GET['modifypost'] === 'Edit'){
            $post->updateUserPost($data);

        }

        if($_GET['modifypost'] === 'Delete'){
            $post->deleteUserPost($post_id,$user_id);
        }
      
    }

    if(isset($_GET['submitpost'])){

        $title = $_GET['title'];
        $imglink =($_GET['img-link'] !== '')?$_GET['img-link']: 'http://picsum.photos/200';
        $txtarea = $_GET['txt-area'];
        $data = array($title,$imglink,$txtarea,$user_id);
        $post = new Post;

        if($_GET['submitpost'] === 'Submit'){
            $post->addUserPost($data);
        }

        // if($_GET['submitpost'] === 'Edit'){
        //     $post->updateUserPost($data);
        // }

       
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);



?>