<ul>
    <?php if(have_posts()):?>
        <?php while(have_posts()):the_post();?>                            
            <li id="post-<?php the_ID();?>" <?php post_class('c-card');?>>
                
                <figure class="c-card--pic p-contents--archive__card--cheeseburger">
                    <?php if(has_post_thumbnail()):?>    
                        <?php the_post_thumbnail();?>
                    <?php else:?>
                        <img src="<?php echo get_template_directory_uri();?>/images/no_image.png" alt="no_imageの写真">
                    <?php endif;?>    

                </figure>
                
                <div class="c-card--intro">
                    <h3><?php the_title();?></h3>
                    <h4>小見出しが入ります</h4>
                    <?php the_excerpt();?>
                    <button class="c-btn--archive"><a href="<?php the_permalink();?>">詳しく見る</a></button>

                </div>
                

            </li>
        <?php endwhile;?>
    <?php endif;?>
    

                                
</ul>