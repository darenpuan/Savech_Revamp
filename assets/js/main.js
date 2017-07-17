$(document).ready(function () {
    $('.navbar-nav li').click(function () {
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
    });
});

function validateForm() {
    var name = document.forms["contactForm"]["name"].value;
    var email = document.forms["contactForm"]["email"].value;
    var subject = document.forms["contactForm"]["subject"].value;
    var msg = document.forms["contactForm"]["message"].value;
    if (name == "") {
        alert("Please fill in your name.");
        return false;
    }
    if (email == "") {
        alert("Please fill in your email address.");
        return false;
    }
    if (subject == "") {
        alert("Please fill in a subject.");
        return false;
    }
    if (msg == "") {
        alert("Please leave a short message for us.");
        return false;
    }
}
