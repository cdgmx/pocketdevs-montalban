<?php
    include_once 'config/init.php';
  
?>


<?php
    $page = isset($_GET['page'])? $_GET['page']:null;

    // $post = new Post;
    //         $template = new Template('templates/frontpage.php');
            
    //         $template->title = 'latest posts';
    //         $template->posts = $post->getAllPosts();

    //         echo $template;
    if($page){

        $pageVal = $_GET['page'];
       
        if($pageVal === 'Feed'){
      
            $post = new Post;
            $template = new Template('templates/frontpage.php');
            
            $template->title = 'latest posts';
            $template->posts = $post->getAllPosts();

            echo $template;
        }

        else{
        
            $post = new Post;
            $template = new Template('templates/personalpage.php');
            
            $template->title = 'latest posts';
            $template->posts = $post->getAllPosts();

            echo $template;
        }

    }
    else{
            $post = new Post;
            $template = new Template('templates/frontpage.php');
            
            $template->title = 'latest posts';
            $template->posts = $post->getAllPosts();

            echo $template;

    }
    
?>