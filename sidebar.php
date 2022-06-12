<sidebar class="l-sidebar">      
    <div class="p-sidebar">
        <div id="p-sidebar__close-btn" class="p-sidebar__close-btn">
            <span></span><span></span>
        </div>
        <h2 class="p-sidebar__title">Menu</h2>
        <div class="p-sidebar__menu">
            <ul class="p-sidebar__menu--hamburger">
                <?php
                $args = array(
                    'menu' => 'categorymenu',//管理画面で作成したメニューの名前
                    'menu_class' =>'',//メニューを構成するulタグのクラス名
                    'container' => false,//ulタグを囲んでいる<div>タグ削除
                
                );
                wp_nav_menu($args);
                ?>
            </ul>


        </div>

    </div> 
</sidebar>