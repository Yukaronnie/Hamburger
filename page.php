<?php get_header(); ?>
    <!--ヘッダー下-->
            
        <figure class="p-top-img--single">

        <img src="<?php echo get_template_directory_uri();?>/images/page/page_top_img.jpg" class="p-top-img--single--sp" alt="トップのハンバーガーの写真">
        <img src="<?php echo get_template_directory_uri();?>/images/page/page_top_tab_img.jpg" class="p-top-img--single--tab" alt="トップのハンバーガーの写真">
        <img src="<?php echo get_template_directory_uri();?>/images/page/page_top_pc_img.jpg" class="p-top-img--single--pc" alt="トップのハンバーガーの写真">
        <h2><?php the_title();?></h2>

        </figure>



        <article class="p-contents--single">


        <!--シングルページの中央部分-->
        <?php if(have_posts()):?>
            <?php while(have_posts()):the_post();?>
                <section id="post-<?php the_ID();?>" <?php post_class('p-contents--single__section');?>>
                    
                    <?php the_content();?>
                    
                </section>
            <?php endwhile;?>
        <?php endif;?>
    

        
        






        </main>




        <!--サイドバー-->
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>