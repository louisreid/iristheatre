/**
 * jQuery
 */
$(function () {
    $('.fluidbox-thumbnail, .aimg').fluidbox();
});


$(document).ready(function(){

  /* Moblie Menu */
  $(function() {
  var pull    = $('#pull');
    menu    = $('.nav-main--menu');
    menuHeight  = menu.height();

    $(pull).on('click', function(e) {
      e.preventDefault();
      menu.slideToggle();
    });
  });

  $(window).resize(function(){
      var w = $(window).width();
      if(w > 767 && menu.is(':hidden')) {
          menu.removeAttr('style');
      }
  });
    
  /* Check if touch */
  var windowWidth = $(window).width();
  if (windowWidth > 900) {

    $(".tile")
    .mouseenter(function(){
        $(this).find(".tile__hidden").slideToggle(300);
    })
    .mouseleave(function(){
        $(this).find(".tile__hidden").slideToggle(300);
    });

    $(".whats-on-single")
    .mouseenter(function(){
        $(this).find(".whats-on-hidden").slideToggle(300);
    })
    .mouseleave(function(){
        $(this).find(".whats-on-hidden").slideToggle(300);
    });
    
  }
  else {
    $(".tile").find(".tile__hidden").show();
    $(".whats-on-single").find(".whats-on-hidden").show();
  }

    // $(".tooltip").each(function(){
    //   $(this).qtip({
    //     style: { classes: 'qtip-dark qtip-tipsy'},
    //     position: {
    //       my: 'center bottom',
    //       at: 'top center',
    //       // target: $(".tooltip"),
    //       adjust: {
    //         y: -12
    //       }
    //     },
    //     content: {
    //       text: $(this).next('div')
    //     }
    //   });
    // });



    /* Find first tab and make it active */
    // $(".tabs").children.addClass("is-active").next().addClass("is-open").show();
    $(".tabs").each(function() {
        $(this).children("li").first().children("a").addClass("is-active").next().addClass("is-open").show()
    });
    $(".tabs").on("click", "li > a", function(a) {
        if ($(this).hasClass("is-active")) a.preventDefault();
        else {
            a.preventDefault();
            var b = $(this).closest(".tabs");
            b.find(".is-open").removeClass("is-open").hide(), $(this).next().toggleClass("is-open").toggle(), b.find(".is-active").removeClass("is-active"), $(this).addClass("is-active")
        }
    });


});

$(function() {
  $('.scroll').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top -50
        }, 600);
        return false;
      }
    }
  });
});

