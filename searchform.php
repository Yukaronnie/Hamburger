
<!--ヘッダーの検索フォーム-->
<form action="<?php echo home_url('/');?>" method="get" class="p-search-form" action="" method="post">
    <label for="screen-reader-text" class="screen-reader-text"></label>
    <div class="p-search-form__box">
        <input class="p-search-form__box__keyword" type="search" name="s" value="<?php the_search_query();?>" placeholder="検索ワード"></input>
    </div>
    <input class="p-search-form__submit" type="submit" value="検索"></input>

</form>
                    
        
                        
                  