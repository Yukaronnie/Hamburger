
<!--下のページボタン-->
<?php wp_pagenavi()?>

<?php
    if (function_exists("pagination")) {
        pagination($wp_query->max_num_pages);
    }
    ?>  
            

            


        
    