<?php
add_action('wp_body_open',function(){

}); ?>
<?php
function custom_theme_support(){
    add_theme_support('html5',array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

}
add_action('after_setup_theme','custom_theme_support');

//ファイル読み込み
function add_files(){
    //CSSファイル
    wp_enqueue_style('main-style',get_stylesheet_uri());
    //リセットCSS
    wp_enqueue_style('reset-style','https://unpkg.com/ress/dist/ress.min.css');
    //Google Fonts
    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=M+PLUS+1p&family=Roboto&display=swap');
    //jQuery
    wp_enqueue_script('main-script',get_theme_file_uri().'/js/main.js',array(),'',true);
    //JS
    wp_enqueue_script('main2-script',get_theme_file_uri().'/js/main2.js',array(),'',true);
}
add_action('wp_enqueue_scripts','add_files');
function theme_setup(){
    //title タグ
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'main-menu' => 'メインメニュー')
        );
}
add_action('after_setup_theme','theme_setup');

function custom_main_query($query){
    if(is_admin() || ! $query -> is_main_query()){  //管理画面メインクエリに影響を与えないように
        return;
    }
    if($query -> is_category()){
        $query -> set('posts_per_page',4);
    }
    if($query -> is_search()){
        $query -> set('posts_per_page',4);
    }
    
}
add_action('pre_get_posts','custom_main_query');


//ページネーション
function pagination($pages = '', $range = 2)
{
     global $paged;//現在のページ値
     if(empty($paged)) $paged = 1;//デフォルトのページ

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;//全ページ数を取得
         if(!$pages)//全ページ数が空の場合は1とする
         {
             $pages = 1;
         }
     }

     if(1 != $pages)//全ページが1でない場合はページネーションを表示する
     {
		 
		 echo "<ul class=\"p-page-btn\">\n";
		 //Prev：現在のページ値が1より大きい場合は表示
         if($paged > 1) echo "<li class=\"p-page-btn--prev\"><a href='".get_pagenum_link($paged - 1)."'><span>＜＜ 前へ</span></a></li>\n";

         
		//Next：総ページ数より現在のページ値が小さい場合は表示
		if ($paged < $pages) echo "<li class=\"p-page-btn--next\"><a href=\"".get_pagenum_link($paged + 1)."\"><span>次へ ＞＞</span></a></li>\n";
		
     }
}
// カスタムフィールド

