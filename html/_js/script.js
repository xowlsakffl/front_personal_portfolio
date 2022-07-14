$(function(){
    
    $('.container .menu_btn button').click(function(){
        if($(this).attr('data-click-state') == 1){
            $(this).attr('data-click-state', 0);
            $(".splash").addClass("active")
            $(".menu_btn").addClass("active")
            $(".menu_btn button").text("CLOSE")
            $(".menu_logo").fadeIn()
            $(".menu").addClass("active")
            
        }else{
            $(this).attr('data-click-state', 1);
            $(".splash").removeClass("active")
            $(".menu_btn").removeClass("active")
            $(".menu_btn button").text("MENU")
            $(".menu_logo").fadeOut()
            $(".menu").removeClass("active")
            
        }
    })

    $('.about .menu_btn button').click(function(){
        if($(this).attr('data-click-state') == 1){
            $(this).attr('data-click-state', 0);
            $(".splash").addClass("active")
            $(".menu_btn button").addClass("active")
            $(".menu_logo").fadeIn()
            $(".menu").addClass("active")
            
        }else{
            $(this).attr('data-click-state', 1);
            $(".splash").removeClass("active")
            $(".menu_btn button").removeClass("active")
            $(".menu_logo").fadeOut()
            $(".menu").removeClass("active")
            
        }
    })

    $('.container .splash').click(function(){
        $('.menu_btn button').attr('data-click-state', 1);
        $(".splash").removeClass("active")
        $(".menu_btn").removeClass("active")
        $(".menu_btn button").text("MENU")
        $(".menu_logo").fadeOut()
        $(".menu").removeClass("active")
        $("body").css("overflow","visible")
    })

    $('.about .splash').click(function(){
        $('.menu_btn button').attr('data-click-state', 1);
        $(".splash").removeClass("active")
        $(".menu_btn").removeClass("active")
        $(".menu_logo").fadeOut()
        $(".menu").removeClass("active")
        $("body").css("overflow","visible")
    })

    $('.work .menu_btn button').click(function(){
        if($(this).attr('data-click-state') == 1){
            $(this).attr('data-click-state', 0);
            $(".splash").addClass("active")
            $(".menu_btn button").addClass("active")
            $(".menu_logo").fadeIn()
            $(".menu").addClass("active")
            
        }else{
            $(this).attr('data-click-state', 1);
            $(".splash").removeClass("active")
            $(".menu_btn button").removeClass("active")
            $(".menu_logo").fadeOut()
            $(".menu").removeClass("active")
            
        }
    })

    $('.work .splash').click(function(){
        $('.menu_btn button').attr('data-click-state', 1);
        $(".splash").removeClass("active")
        $(".menu_btn").removeClass("active")
        $(".menu_logo").fadeOut()
        $(".menu").removeClass("active")
        $(".menu_btn button").removeClass("active")
        $("body").css("overflow","visible")
    })
})