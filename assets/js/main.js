$(document).ready(function () {
    $('.navbar-nav li').click(function () {
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
    });
});

$(document).ready(function () {
    // Add smooth scrolling to all links
    $("a").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
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
