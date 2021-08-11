<?php
    session_id('c3d24u7r8ibp4jgnl9rjjlmhmi');
    session_start();
    include_once 'config/init.php';

?>


<?php
  
    $page = isset($_GET['page'])? $_GET['page']:'Post';
 
    $user_id = $_SESSION['user_id'];
 


     
       
        if($page === 'Feed'){
      
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
            $template->posts = $post->getAllUserPosts($user_id);

            echo $template;
        }

    

    
?>