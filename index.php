<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subjectform = $_POST['subject'];
        $message = $_POST['message'];
		$from = 'Site 1'; 
		$to = 'enquiries@savech.com.sg';
		$subject = 'New enquiries on Savech.com.sg';
		$body ="<html><body>From: $name<br/> E-Mail: $email<br/> Subject: $subjectform<br/> Message: $message</body></html>";
		// Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <form-helper@savech.com.sg>' . "\r\n";
        $headers .= 'Cc: darenpuan@savech.com.sg, kerwintan@savech.com.sg, gohjh@savech.com.sg' . "\r\n";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
        // Check if subject has been entered
		if (!$_POST['subject']) {
			$errSubject = 'Please enter subject';
		}
        // Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter message';
		}	
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errSubject && !$errMessage) {
	if (mail ($to, $subject, $body, $headers)) {
		$result='<div class="alert alert-success">Thank You</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="stylesheet" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <title>Savech Technologies</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-50350063-4', 'auto');
            ga('send', 'pageview');

        </script>
    </head>

    <body>
        <!--header-->
        <header class="site-header" role="banner">
            <div class="navbar-wrapper">
                <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                            <a class="navbar-brand" href="/index.php"><img src="assets/img/logo.png" alt="Savech Technologies"></a>
                        </div>
                        <div class="collapse navbar-collapse navbar-right" id="menu-center">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#myCarousel">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--End header-->

        <!--carousel-->
        <header id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('assets/img/macCode.jpg');"></div>
                    <div class="carousel-caption">
                        <h1>Customized Website Development</h1>
                        <p class="lead">Bringing your customers closer from the web</p>
                        <a class="btn btn-large btn-white" href="#contact"><span>Request a Quote</span></a>
                    </div>
                </div>
                <div class="item">
                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('assets/img/macbook.jpg');"></div>
                    <div class="carousel-caption">
                        <h1>Customized Solutions</h1>
                        <p class="lead">Designed specially for you</p>
                        <a class="btn btn-large btn-white" href="#contact"><span>Request a Quote</span></a> </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>

        </header>
        <!--End carousel-->
        <!--about us-->
        <section id="about" style="background-image:url('assets/img/penPaper.jpg');">
            <div class="container">
                <div class="section-header">
                    <h2>ABOUT US <br><small>Everything you need to know about our company</small></h2>
                </div>
                <div class="row">
                    <div class="col-md-2 hidden-sm"></div>
                    <div class="col-md-4 col-sm-6 border">
                        <h3>CREATIVITY</h3>
                        <p>Web &amp; Mobile designs are constantly changing. At Savech we constantly strive to improve to create and implement modern design tailored to your specific needs.</p>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <h3>CHARACTER</h3>
                        <p>Regardless of who we work with, colleagues or clients, we value honesty, passion and the desire to explore.</p>
                    </div>
                    <div class="col-md-2 hidden-sm"></div>
                </div>
                <hr>
                <div class="section-header">
                    <h2>WHY US <br><small>Don't know who to choose? Let us be the one</small></h2>
                </div>
                <div class="row">
                    <div class="col-md-4 border">
                        <h3>WE VALUE YOUR TIME</h3>
                        <p>We understand that your time is very valuable, therefore we do everything to fit it.</p>
                    </div>
                    <div class="col-md-4 border">
                        <h3>WE ARE DEDICATED</h3>
                        <p>Our team is constantly on the prowl for new technologies which would make your business better.</p>
                    </div>
                    <div class="col-md-4">
                        <h3>WE PROVIDE SUPPORT</h3>
                        <p>Our team strives to reply all enquiries within 3 working days.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--End about us-->
        <!-- services-->
        <section id="services" style="background-image:url('assets/img/macbookSide.jpg');">
            <div class="container">
                <div class="section-header">
                    <h2>SERVICES <br><small>We design and build quality applications</small></h2>
                </div>
                <div class="row">
                    <div class="">
                        <img src="assets/img/screen.png" alt="Screen">
                        <h3>RESPONSIVE DESIGN</h3>
                        <P>Websites optimized for mobile, tablets and computers</P>
                    </div>
                    <div class="">
                        <img src="assets/img/tool.png" alt="Screen">
                        <h3>CUSTOM SOLUTION</h3>
                        <p>Solutions designed for you, improving business efficiency.</p>
                    </div>
                    <br>
                </div>
            </div>
        </section>
        <!--End services-->
        <!--contact-->
        <section id="contact" style="background-image:url('assets/img/fingerTablet.jpg');">
            <div class="container" style="text-align: left;">
                <div class="section-header">
                    <h2>GET IN TOUCH <br><small>We'd love to hear from you</small></h2>
                </div>
                <div style="padding-left: 5%;">
                    <p>Should you have any enquiries, please do not hesitate to leave a message or contact us directly at: <span><i class="fa fa-envelope"> enquiries@Savech.com.sg</i></span></p>
                </div>
                <div style="padding-left: 5%;">
                    <h4>Operating Hours</h4>
                    <p style="font-size: 14px;">
                        Monday to Friday: 0900 Hrs to 1800 Hrs
                        <br> Saturday and Sunday: Closed
                    </p>
                </div>
                <div style="padding-left: 5%; padding-right: 10%">
                    <form name="contactForm" action="index.php" method="POST">
                        <div class="form-group">
                            <input name="name" class="form-control" id="name-id" type="text" placeholder="Name" required value="<?php echo htmlspecialchars($_POST['name']); ?>">
                            <?php echo "<p class='text-danger'>$errName</p>";?>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="email-id">Email</label>
                            <input name="email" class="form-control" id="email-id" type="email" placeholder="Email" autocomplete="on" required value="<?php echo htmlspecialchars($_POST['email']); ?>">
                            <?php echo "<p class='text-danger'>$errEmail</p>";?>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="subject-id">Subject</label>
                            <input name="subject" class="form-control" id="subject-id" type="text" placeholder="Subject" required value="<?php echo htmlspecialchars($_POST['subject']); ?>">
                            <?php echo "<p class='text-danger'>$errSubject</p>";?>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="message-id">Message</label>
                            <textarea name="message" class="form-control" id="message-id" placeholder="Message" required value="<?php echo htmlspecialchars($_POST['message']); ?>"></textarea>
                            <?php echo "<p class='text-danger'>$errMessage</p>";?>
                        </div>
                        <button name="submit" class="btn btn-submit pull-right" type="submit" value="Submit"><span>Submit</span></button>
                    </form>
                </div>
            </div>
        </section>
        <!--End contact-->
        <!--footer-->
        <footer>
            <div class="container" style="text-align: center;">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-2">
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                    <div class="col-md-2">
                        <a href="#">Privacy Policy</a>
                    </div>
                    <div class="col-md-4">
                        Registration No. (UEN): 201633738R
                    </div>
                </div>
            </div>
        </footer>
        <!--End contact-->
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            })

        </script>
    </body>

    </html>
