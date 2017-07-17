$(document).ready(function () {
    $('.navbar-nav li').click(function () {
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
    });
});
