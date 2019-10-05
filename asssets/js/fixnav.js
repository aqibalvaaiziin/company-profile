$(document).ready(function(){
    $(window).scroll(function(){
        if(scrollY > 200){
            $(".navbar").addClass("navDown");
        }
        else{
            $(".navbar").removeClass("navDown");
        }
    });
});