$(".page-header").backstretch([
    "/assets/images/landing1.jpeg",
    "/assets/images/landing2.jpeg",
    "/assets/images/landing3.jpeg",
    "/assets/images/landing4.jpeg",
    "/assets/images/landing5.jpeg",
    "/assets/images/landing6.jpeg",
    "/assets/images/landing7.jpeg",
], { duration: 4000, transition: 'fade', fade: 750, fadeFirst: true});

$('#hide-search').click(function (e) { 
    $('#sm-search').toggle();
});