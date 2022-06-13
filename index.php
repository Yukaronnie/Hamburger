<?php get_header(); ?>
                    <!--アーカイブヘッダー下-->
            <figure class="p-top-img--archive">
                <img src="<?php echo get_template_directory_uri();?>/images/archive/archive_top_img.png">
                <h2>Menu : </h2>
            </figure>
            <article class="p-contents--archive">
            
                <h2>小見出しが入ります</h2>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                
                <!--メニュー部分-->   
                <?php get_template_part('loop','main'); ?>

            </article>

            <!--下のページボタン-->
            <?php get_template_part('pagenation'); ?>
            

            


        </main>
                    
                        
                    
                    
                
                
                
        <!--サイドバー-->
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>
    