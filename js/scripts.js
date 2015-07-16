jQuery(document).ready(function() {

    var feed = new Instafeed({
        get: 'tagged',
        tagName: 'krukmakare',
        limit: '6',
        resolution: 'low_resolution',
        clientId: '3fe9e79f1bb34715b17594ef5c54a565',
        template: '<div class="instagram--post"><a class="instagram--link" target="_blank" href="{{link}}"><img alt="instagram image" class="instagram--image" src="{{image}}"></a></div>'
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
});