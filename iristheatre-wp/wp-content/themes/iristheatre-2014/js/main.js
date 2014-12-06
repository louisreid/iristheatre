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

    $(".tooltip").each(function(){
      $(this).qtip({
        style: { classes: 'qtip-dark qtip-tipsy'},
        position: {
          my: 'center bottom',
          at: 'top center',
          // target: $(".tooltip"),
          adjust: {
            y: -12
          }
        },
        content: {
          text: $(this).next('div')
        }
      });
    });

});
