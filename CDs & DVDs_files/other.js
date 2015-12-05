$(function() {
    $('.header-nav-mobile').click(function() {
        if (!$(this).hasClass('open')) {
            $('.header-nav-mobile ul').slideDown(500);
            $(this).addClass('open');
        } else {
            $('.header-nav-mobile ul').slideUp(500);
            $(this).removeClass('open');
        }
    });
});