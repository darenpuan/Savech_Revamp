$(document).ready(function () {
    $('.nav li').click(function () {
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
    });
});
