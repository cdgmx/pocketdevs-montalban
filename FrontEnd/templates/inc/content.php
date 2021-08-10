<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/blog.css">
    </head>
    <body>

        <div class="feed-switch">
           <div><a>Feed</a></div>
           <div><a>Post</a></div>
        </div>

        <div class="feed-content">
        <?php foreach($posts as $count=>$post): ?>
            <div class="feed-post">

          
                <!-- check if even or odd -->
                <?php if($count %2 === 0): ?>
                <div class="feed-img">
                    <img src='https://via.placeholder.com/300/09f.png/fff'>
                </div>
                

                <div class="entry-article">
                    <h1> <?php echo $post->title; ?></h1> 
                    <h3> <?php echo $post->post_date; ?></h3> 
                    <p>
                        <?php echo $post->content; ?>
                    </p>
                </div>

                <?php else: ?>

                    <div class="entry-article">
                        <h1> <?php echo $post->title; ?></h1> 
                        <h3> <?php echo $post->post_date; ?></h3> 
                        <p>
                            <?php echo $post->content; ?>
                        </p>
                    </div>
                    <div class="feed-img">
                        <img src='https://via.placeholder.com/300/09f.png/fff'>
                    </div>

                    

                    
                <?php endif; ?>

              
           


                
            </div>
        <?php endforeach; ?>          
            <div class="add-entry">
                    <a href="javascript:void(0);" class="nav-close-btn">
                        <i class="fas fa-times-circle"></i>
                    </a>
            </div>
        </div>


        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
</html>