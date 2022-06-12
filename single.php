<?php get_header(); ?>
    
            <!--シングルヘッダー下-->

            <figure class="p-top-img--single">

                <img src="<?php echo get_template_directory_uri();?>/images/single/single_top_img.jpg" class="p-top-img--single--sp" alt="トップのハンバーガーの写真">
                <img src="<?php echo get_template_directory_uri();?>/images/single/single_top_tab_img.jpg" class="p-top-img--single--tab" alt="トップのハンバーガーの写真">
                <img src="<?php echo get_template_directory_uri();?>/images/single/single_top_pc_img.jpg" class="p-top-img--single--pc" alt="トップのハンバーガーの写真">
                <h2><?php the_title();?></h2>
        
            </figure>
            
                
            
            <article class="p-contents--single">
            
                
                <!--シングルページの中央部分-->
                <?php if(have_posts()):?>
                    <?php while(have_posts()):the_post();?>
                        <section id="post-<?php the_ID();?>" <?php post_class('p-contents--single__section');?>>
                            
                            <?php the_content();?>
                            <h3>見出しh3</h3>
                            <h4>見出しh4</h4>
                            <h5>見出しh5</h5>
                            <h6>見出しh6</h6>
                        </section>
                    <?php endwhile;?>
                <?php endif;?>
                <!--シングルページの引用部分-->
                <div class="p-contents--single__quote">
                    <p>引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
                    <div>出典元：<a href="">oooooo</a></div>

                </div>
                

                <!--シングルページのメニュー-->
                
                <figure class="p-contents--single__article-top">
                    <img src="<?php echo get_template_directory_uri();?>/images/single/single_article_top_img.jpg" class="p-contents--single__article-top--sp" alt="ハンバーガーの写真">
                    <img src="<?php echo get_template_directory_uri();?>/images/single/single_article_top_tab_img.jpg"class="p-contents--single__article-top--tab" alt="ハンバーガーの写真">
                    <img src="<?php echo get_template_directory_uri();?>/images/single/single_article_top_pc_img.jpg" class="p-contents--single__article-top--pc" alt="ハンバーガーの写真">
                </figure>

                    
                <!--記事-->
                <ul class="p-contents--single__article">
                    
                    <li>
                        <figure class="p-contents--single__article--pic">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_article_img.jpg" class="p-contents--single__article--pic--sp" alt="ハンバーガーの写真">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_article_tab_img.jpg" class="p-contents--single__article--pic--tab" alt="ハンバーガーの写真">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_article_pc_img.jpg" class="p-contents--single__article--pic--pc" alt="ハンバーガーの写真">
                        </figure>
                    
                        
                        <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                        

                    </li>

            
                    <li>
                        <p>  テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入りますテキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                        <figure class="p-contents--single__article--pic">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_article_img.jpg" class="p-contents--single__article--pic--sp" alt="ハンバーガーの写真">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_article_tab_img.jpg" class="p-contents--single__article--pic--tab" alt="ハンバーガーの写真">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_article_pc_img.jpg" class="p-contents--single__article--pic--pc" alt="ハンバーガーの写真">
                        </figure>
                        

                    </li>

                </ul>
                
                <figure class="p-contents--single__article-bottom">
                    <img src="<?php echo get_template_directory_uri();?>/images/single/single_article_bottom_img.jpg" class="p-contents--single__article-bottom--sp" alt="ハンバーガーの写真">
                    <img src="<?php echo get_template_directory_uri();?>/images/single/single_article_bottom_tab_img.jpg" class="p-contents--single__article-bottom--tab" alt="ハンバーガーの写真">
                    <img src="<?php echo get_template_directory_uri();?>/images/single/single_article_bottom_pc_img.jpg" class="p-contents--single__article-bottom--pc" alt="ハンバーガーの写真">
                </figure>
                
            
                
                <ul class="p-contents--single__pictures">
                    
                    <li>
                        <figure class="p-contents--single__picture">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_img.jpg" class="p-contents--single__picture--sp" alt="ハンバーガーの写真">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_tab_img.jpg" class="p-contents--single__picture--tab" alt="ハンバーガーの写真">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_tab_img.jpg" class="p-contents--single__picture--pc" alt="ハンバーガーの写真">
                        </figure>
                        
                    </li>
                    <li>
                        <figure class="p-contents--single__picture">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_img.jpg" class="p-contents--single__picture--sp" alt="ハンバーガーの写真">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_tab_img.jpg" class="p-contents--single__picture--tab" alt="ハンバーガーの写真">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_tab_img.jpg" class="p-contents--single__picture--pc" alt="ハンバーガーの写真">
                        </figure>
                        
                    </li>
                    <li>
                        <figure class="p-contents--single__picture">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_img.jpg" class="p-contents--single__picture--sp" alt="ハンバーガーの写真">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_tab_img.jpg" class="p-contents--single__picture--tab" alt="ハンバーガーの写真">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_tab_img.jpg" class="p-contents--single__picture--pc" alt="ハンバーガーの写真">
                        </figure>
                        
                    </li>
                    <li>
                        <figure class="p-contents--single__picture">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_img.jpg" class="p-contents--single__picture--sp" alt="ハンバーガーの写真">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_tab_img.jpg" class="p-contents--single__picture--tab" alt="ハンバーガーの写真">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_tab_img.jpg" class="p-contents--single__picture--pc" alt="ハンバーガーの写真">
                        </figure>
                        
                    </li>
                    <li>
                        <figure class="p-contents--single__picture">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_img.jpg" class="p-contents--single__picture--sp" alt="ハンバーガーの写真">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_tab_img.jpg" class="p-contents--single__picture--tab" alt="ハンバーガーの写真">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_tab_img.jpg" class="p-contents--single__picture--pc" alt="ハンバーガーの写真">
                        </figure>
                        
                    </li>
                    <li>
                        <figure class="p-contents--single__picture">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_img.jpg" class="p-contents--single__picture--sp" alt="ハンバーガーの写真">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_tab_img.jpg" class="p-contents--single__picture--tab" alt="ハンバーガーの写真">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_tab_img.jpg" class="p-contents--single__picture--pc" alt="ハンバーガーの写真">
                        </figure>
                        
                    </li>
                    <li>
                        <figure class="p-contents--single__picture">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_img.jpg" class="p-contents--single__picture--sp" alt="ハンバーガーの写真">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_tab_img.jpg" class="p-contents--single__picture--tab" alt="ハンバーガーの写真">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_tab_img.jpg" class="p-contents--single__picture--pc" alt="ハンバーガーの写真">
                        </figure>
                        
                    </li>
                    <li>
                        <figure class="p-contents--single__picture">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_img.jpg" class="p-contents--single__picture--sp" alt="ハンバーガーの写真">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_tab_img.jpg" class="p-contents--single__picture--tab" alt="ハンバーガーの写真">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_tab_img.jpg" class="p-contents--single__picture--pc" alt="ハンバーガーの写真">
                        </figure>
                        
                    </li>
                    <li>
                        <figure class="p-contents--single__picture">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_img.jpg" class="p-contents--single__picture--sp" alt="ハンバーガーの写真">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_tab_img.jpg" class="p-contents--single__picture--tab" alt="ハンバーガーの写真">
                            <img src="<?php echo get_template_directory_uri();?>/images/single/single_picture_tab_img.jpg" class="p-contents--single__picture--pc" alt="ハンバーガーの写真">
                        </figure>
                        
                    </li>
                </ul>

                    
                
                <li class="p-contents--single__lists">
                    
                    <ul>
                        <li class="p-contents--single__list">
                            <ul>
                                <li>1.リストリストリスト</li>
                                <li>2.リストリストリスト</li> 
                            </ul>
                            <ul>
                                <li>1.リスト2リスト2リスト2</li>
                                <li>2.リスト2リスト2リスト2</li> 
                            </ul>
                                
                            <ul>
                                <li>1.リストリストリスト</li>
                                <li>2.リストリストリスト</li> 
                            </ul>
                        </li>
                                
                        <li class="p-contents--single__list">
                            <ul>
                                <li>リストリストリスト</li>
                                <li>リストリストリスト</li> 
                            </ul>
                            <ul>
                                <li>リスト2リスト2リスト2</li>
                                <li>リスト2リスト2リスト2</li> 
                            </ul>
                                
                            <ul>
                                <li>リストリストリスト</li>
                                <li>リストリストリスト</li> 
                            </ul>
                        </li>
                                
                    </ul>
                </li>

                <div class="p-contents--single__space">
                    <pre>
<code>
&lt;html&gt;&lt;html&gt;&lt;html&gt;&lt;html&gt;&lt;html&gt;&lt;html&gt;&lt;html&gt;&lt;html&gt;&lt;html&gt;&lt;html&gt;&lt;html&gt;&lt;html&gt;&lt;html&gt;
&lt;head&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;/body&gt;
&lt;/html&gt;
</code>
                    </pre>
                </div>

                <table class="p-contents--single__table">
                    <tr>
                    <td>テーブル</td>
                    <td>テーブル</td>
                    </tr>
                    <tr>
                    <td>テーブル</td>
                    <td>テーブル</td>
                </tr>
                <tr>
                    <td>テーブル</td>
                    <td>テーブル</td>
                </tr>
                <tr>
                    <td>テーブル</td>
                    <td>テーブル</td>
                </tr>
                </table>

                <button class="p-contents--single__btn">
                    <a href="">ボタン</a>
                </button>

                <div class="p-contents--single__bold">
                    <p>boldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldboldbold</p>
                
                </div>

            </article>
            
        </main>


        
            
        <!--サイドバー-->
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>