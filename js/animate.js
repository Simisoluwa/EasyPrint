$(document).ready(function(){



    /*Animation on scroll */
    $('.js--wp-1').waypoint(function(direction){
        $('.js--wp-1').addClass('animated fadeIn');
    }, {
        offset: '50%'
    })

    $('.js--wp-2').waypoint(function(direction){
        $('.js--wp-2').addClass('animated fadeInUp');
    }, {
        offset: '50%'
    })

    $('.js--wp-3').waypoint(function(direction){
        $('.js--wp-3').addClass('animated fadeIn');
    }, {
        offset: '50%'
    })

    $('.js--wp-4').waypoint(function(direction){
        $('.js--wp-4').addClass('animated pulse');
    }, {
        offset: '50%'
    })

  
});


