$(document).ready(function(){
    //Animations
    $(".js--hero__image").waypoint(function(direction){
        $(".js--hero__image").addClass("animated bounceInUp");
    }, {
        offset: "100%"
    });
    
    $(".js--hero__text").waypoint(function(direction){
        $(".js--hero__text").addClass("animated fadeIn");
    }, {
        offset: "100%"
    });

    $(".js--stages").waypoint(function(direction){
        $(".js--stages").addClass("animated fadeIn");
    }, {
        offset: "90%"
    });
    
    $(".js--card-1, .js--card-3").waypoint(function(direction){
        $(".js--card-1, .js--card-3").addClass("animated fadeInLeft");
    }, {
        offset: "80%"
    });
    
    $(".js--card-2, .js--card-4").waypoint(function(direction){
        $(".js--card-2, .js--card-4").addClass("animated fadeInRight");
    }, {
        offset: "80%"
    });

    $(".js--card-3").waypoint(function(direction){
        $(".js--card-3").addClass("animated fadeInLeft");
    }, {
        offset: "80%"
    });
    
    $(".js--card-4").waypoint(function(direction){
        $(".js--card-4").addClass("animated fadeInRight");
    }, {
        offset: "80%"
    });

    $(".js--rewards__content-left").waypoint(function(direction){
        $(".js--rewards__content-left").addClass("animated fadeInUp");
    }, {
        offset: "80%"
    });
    
    $(".js--rewards__content-right").waypoint(function(direction){
        $(".js--rewards__content-right").addClass("animated fadeInUp");
    }, {
        offset: "80%"
    });
    
    $(".js--featured__body").waypoint(function(direction){
        $(".js--featured__body").addClass("animated zoomIn");
    }, {
        offset: "80%"
    });
    
    $(".js--product__body").waypoint(function(direction){
        $(".js--product__body").addClass("animated zoomIn");
    }, {
        offset: "80%"
    });

    $(".js--allocation__content-left").waypoint(function(direction){
        $(".js--allocation__content-left").addClass("animated fadeInLeft");
    }, {
        offset: "80%"
    });
    
    $(".js--allocation__content-right").waypoint(function(direction){
        $(".js--allocation__content-right").addClass("animated fadeInRight");
    }, {
        offset: "80%"
    });
    
    $(".js--form").waypoint(function(direction){
        $(".js--form").addClass("animated bounceInRight");
    }, {
        offset: "80%"
    });
});