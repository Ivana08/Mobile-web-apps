AOS.init();

$(".open-course-btn")
    .mouseover(function() {
        $(this).parent().siblings().children().addClass("img-card-hover");
    })
    .mouseleave(function() {
        $(this).parent().siblings().children().removeClass("img-card-hover");
    });

$(".test-title").click(function(){
    $(".course-description").hide();
    $(".test-section").show();
});

$(".about-course-title").click(function(){
    $(".test-section").hide();
    $(".course-description").show();
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

$(".success-message").fadeOut(6000);
