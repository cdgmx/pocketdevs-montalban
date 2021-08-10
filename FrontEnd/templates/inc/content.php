
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
        </div>     
         