<?php
    // session_id('5eo5ms4gcg7kmqftj2u634t14t');
    session_start();
    include_once 'config/init.php';

?>


<?php
   

    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id']:null;

    $page = isset($_GET['page'])? $_GET['page']:'';

    if(true){
        switch ($page){
            case "Feed":

                $post = new Post;
                $template = new Template('templates/frontpage.php');
                $template->title = 'latest posts';
                $template->posts = $post->getAllPosts();
                echo $template;
                break;

            case "Post":

                $post = new Post;
                $template = new Template('templates/personalpage.php');
                $template->posts = ($user_id? $post->getAllUserPosts($user_id): []);
                echo $template;
                break;

         
            default:
                // $home = new Post;
                $template = new Template('templates/homepage.php');
                // $template->title = 'latest posts';
                // $template->posts = $post->getAllPosts();
                echo $template;

        }
    }
        // if($page === 'Feed'){
      
        //     $post = new Post;
        //     $template = new Template('templates/frontpage.php');
            
        //     $template->title = 'latest posts';
        //     $template->posts = $post->getAllPosts();

        //     echo $template;
        // }

        // else{
            
        //     $post = new Post;
        //     $template = new Template('templates/personalpage.php');
            

        //     $template->posts = ($user_id? $post->getAllUserPosts($user_id): []);
            
        //     // $template->posts = $post->getAllUserPosts($user_id);

        //     echo $template;
        // }
    // }
    // else{
    //     $post = new Post;
    //     $template = new Template('templates/frontpage.php');
    //     $template->title = 'latest posts';
    //     $template->posts = $post->getAllPosts();

    //     echo $template;
    // }
    

    
?>