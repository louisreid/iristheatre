  /**
 * jQuery
 */
$(function () {
    $('.fluidbox-thumbnail, .afgcolorbox').fluidbox();
});

$(document).ready(function(){
    

    $(".tile")
    .mouseenter(function(){
        $(this).find(".tile__hidden").slideToggle(300);
    })
    .mouseleave(function(){
        $(this).find(".tile__hidden").slideToggle(300);
    });
});
