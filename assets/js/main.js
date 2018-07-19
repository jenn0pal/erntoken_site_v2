//Toggle Button onClick Function
function toggleBtn() {
    if ($(".js--navbar__top").css("opacity")=="0") {
        $(".js--navbar__top").css({"visibility":"visible","opacity":"1"});
        $("body").css("overflow","hidden");
        $(".js--navbar__line").addClass("on-toggle");
        
    }
    else {
        $(".js--navbar__top").css("opacity","0");
        $("body").removeAttr("style");
        $(".js--navbar__line").removeClass("on-toggle");
    }
}


//DOM Manipulations on Page Scroll
$(window).on("scroll", function(){

    if ( $(window).scrollTop() ) {
        $(".js--navbar__container").css("height", "5rem").addClass("min-nav");
        $(".js--dropdown-menu").addClass("min-links");
        $(".js--navbar__separator").css("margin-top", "50px");
        $(".js--navbar__btn").css("top", ".3rem");
    }
    else {
        $(".js--navbar__container").css("height", "7rem").removeClass("min-nav");
        $(".js--dropdown-menu").removeClass("min-links");
        $(".js--navbar__separator").css("margin-top", "7rem");
        $(".js--navbar__btn").css("top", "1.5rem");

    }
});

//Reset toggle on window resize
$(window).on("resize", function(event){
    $(".js--navbar__top").removeAttr("style");
    $(".js--navbar__line").removeClass("on-toggle");
    if ( $("body").css("overflow")=="hidden" ) {
        $("body").removeAttr("style");
    };
});

//Page scroll JQuery Snippet
$('a[href*="#"]')
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { 
            return false;
          } else {
            $target.attr('tabindex','-1'); 
            $target.focus();
          };
        });
      }
    }
  });
    

    






