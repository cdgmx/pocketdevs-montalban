

        <div class="feed-content">
            <?php foreach($posts as $count=>$post): ?>
                <div class="feed-post">
                    <div class="feed-img">
                        <img src='https://via.placeholder.com/200/09f.png/fff'>
                    </div>
                

                    <div class="entry-article">
                        <h1> <?php echo $post->title; ?></h1> 
                        <h3> <?php echo $post->post_date; ?></h3> 
                        <p>
                            <?php echo $post->content; ?>
                        </p>
                        <div class="entry-modify">

                            <form action ="newquery.php" method="get">
                                <input type="submit" id ='test' name ='modifypost' value="Delete">
                                <input type="submit"  name ='modifypost' value="Edit">
                                <input type="hidden" name="post_id" value="<?php echo $post->post_id;?>">
                            </form>
                        </div>
                    </div>
                    
                </div>
            <?php endforeach; ?>  
        </div>        
           