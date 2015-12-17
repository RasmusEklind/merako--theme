// Instagram feed
jQuery(document).ready(function() {
    var feed = new Instafeed({
        get: 'user',
        // UserId and accessToken has to come from account that you want images from
        userId: 194334726,
        accessToken: '194334726.467ede5.aa3ac1742232496f8a7d3ffa96649db1',
        limit: '6',
        resolution: 'standard_resolution',
        clientId: '80887f4af9ef438da9f817b3839434ec',
        template: '<div class="instagram--post">' +
        '<a class="instagram--link" target="_blank" href="{{link}}"><img alt="instagram image" class="instagram--image" src="{{image}}"></a>' +
        '<div class="instagram--caption"><p>{{caption}}</p></div></div>'
    });
    feed.run();

// Menu toggler
$('.menu__toggle').on('click', function(e) {
    $('.nav').toggleClass("nav__show");
    $('.menu__toggle').toggleClass("button__down");
    e.preventDefault();
});

//Menu Hightlight
var url = window.location.href;
jQuery('.nav__list a').filter(function() {
    return this.href == url;
}).addClass('nav__active');
$('a').click(function(){

  $('html, body').animate({
    scrollTop: $( $.attr(this, 'href') ).offset().top
  }, 500);

return false;
    });

//fade in on scroll
    $(document).ready(function() {
        $(window).scroll( function(){
            $('.fadein').each( function(i){
                var bottom_of_object = $(this).offset().top + $(this).outerHeight();
                var bottom_of_window = $(window).scrollTop() + $(window).height();
                if( bottom_of_window > bottom_of_object ){
                    $(this).animate({'opacity':'1'},800);
                }
            });
        });
    });
});
