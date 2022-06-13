<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <?php
        /*wp_enqueue_script('jquery');
        wp_enqueue_script('yukaronnie-hamburger-main',get_template_directory_uri().'/js/main.js');
        wp_head(); 
        jQueryの読み込み → header.php 内に記述があるので不要 */ 
        ?>
        <meta name="description" content="説明が入ります">    
        
        <?php wp_head();?>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <!--フロントページ全体-->
        <div class="l-container">
        
            <div class="l-container-cover"></div>
            <div class="l-main">
                <!--フロントページの左部分-->
                <main class="p-main">
                
                    <!--フロントページのヘッダー部分-->
                    <header class="p-main-header">
                        <!--スマホ,iPadのメニューボタン-->
                        <div id="p-main-header__btn" class="p-main-header__btn">
                            <a href="#">Menu</a>
                        </div>
                        <div class="p-main-header__title">
                            <h1><a href="<?php echo home_url();?>"><?php bloginfo('name'); ?></a></h1>

                        </div>
                        <!--ヘッダーの検索フォーム-->
                        <?php get_search_form();?>
                    
        
                        
                    </header>