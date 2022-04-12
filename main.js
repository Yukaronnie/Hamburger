$(function(){

    $("#p-main-header__btn").click(function(){
        var wid = $(window).width();
        if (wid <=1024) {
            $(".l-sidebar").addClass('active');
            $(".p-main").addClass('active');
            $(".l-container-cover").addClass('active');
            
        }   
    });
    
    
    $("#p-sidebar__close-btn").click(function(){
        var wid = $(window).width();
        if (wid <=1024) {
            $(".l-sidebar").removeClass('active', 3000);
            $(".p-main").removeClass('active');
            $(".l-container-cover").removeClass('active', 3000);
        }
    });
    

    $(window).on('load resize',function(){
    var wid = $(window).width();
        if(wid >=1025)  {
        $(".l-sidebar").removeClass('active');
        $(".p-main").removeClass('active');
        $(".l-container-cover").removeClass('active');
        }
    });

});
       
         