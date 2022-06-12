<?php get_header();?>
                    <!--アーカイブヘッダー下-->
                    <figure class="p-top-img--archive">
                        <img src="<?php echo get_template_directory_uri();?>/images/archive/archive_top_img.png">
                        <h2>Search : <?php the_search_query();?></h2>
                    </figure>
                    <article class="p-contents--archive">
                    
                        <h2>「<?php the_search_query();?>」の検索結果</h2>
                        <?php if(have_posts()):?>
                            <?php while(have_posts()):the_post();?>
                            <?php endwhile;?>
                        <?php else:?>
                            <div class="">
                                <h2>検索結果はありませんでした。</h2>
                            </div>
                        <?php endif;?>   
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <?php get_template_part('loop','main'); ?>
            
        
                    </article>

                    <!--下のページボタン-->
                    <?php get_template_part('pagenation'); ?>
        
                </main>
                    
                        
                    
                    
                
                
                
                <!--サイドバー-->
            <?php get_sidebar(); ?>    
            </div>

       
        

<?php get_footer();?>