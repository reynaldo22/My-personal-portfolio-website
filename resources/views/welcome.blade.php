<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reynaldodev</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    <link href="{{ URL::asset('css/index.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

    <header style="margin-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-brand">
                        <a class="logo" href="#home"><span>Rey</span><span>nal</span><span>do!</span></a>
                    </div>
                </div>
            </div>
        </div>
        </header>

    <nav class="nav">
        <div class="container">
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#progress">Skills</a></li>
                    <li><a href="#work">Portfolio</a></li>
                    <li><a href="#footer">Contact</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>

    <div id="page">
        <div id="about">
            <div class="container">
                <div class="row text-center">
                    <h2 class="bold">About</h2>
                </div>
                <div class="row">
                    <div class="col-md-5 animate-box">
                        <div class="owl-carousel3">
                            <div class="item">
                                <img class="img-responsive about-img" src="images/me.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive about-img" src="images/me2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-push-1 animate-box">
                        <div class="about-desc">
                            <div class="owl-carousel3">
                                <div class="item">
                                    <h2><span>Reynaldo</span><span>Pratama</span></h2>
                                </div>
                                <div class="item">
                                    <h2><span>I'm</span><span>A Web Developer</span></h2>
                                </div>
                            </div>
                            <div class="desc">
                                <div class="rotate">
                                    <h2 class="heading">About</h2>
                                </div>
                                @foreach($data as $d)
                                <p>{{$d->description}}</p>
                                @endforeach
                                <p class="social-icons">
                                    <a href="#"><i class="icon-instagram2"></i></a>
                                    <a href="#"><i class="icon-github"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </p>
                                <p><a href="#footer" class="btn btn-primary btn-outline">Hire Me!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="services">
            <div class="container">
                <div class="row text-center">
                    <h2 class="bold">Services</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="services-flex">
                            <div class="one-third">
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 animate-box intro-heading">
                                        <span>My Services</span>
                                        <h2>Here Are Some of My Skills</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="rotate">
                                            <h2 class="heading">Services</h2>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="services animate-box">
                                            <h3>1 - Front End Development</h3>
                                            <ul>
                                                <li>HTML / CSS</li>
                                                <li>CSS Frameworks</li>
                                                <li>CSS Libraries</li>
                                                <li>Javascript Frameworks</li>
                                                <li>Javascript Libraries</li>
                                            </ul>
                                        </div>
                                        <div class="services animate-box">
                                                <h3>3 - Mobile App Development</h3>
                                                <ul>
                                                    <li>Android (on progress)</li>
                                                    <li>IOS (on progress)</li>
                                                </ul>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="services animate-box">
                                            <h3>2 - Back End Development</h3>
                                            <ul>
                                                <li>PHP</li>
                                                <li>mySql</li>
                                                <li>PostgreSql</li>
                                                <li>Laravel</li>
                                                <li>GIT</li>
                                            </ul>
                                        </div>
                                        <div class="services animate-box">
                                            <h3>4 - Digital Marketing</h3>
                                            <ul>
                                                <li>SEO</li>
                                                <li>Google Ads</li>
                                                <li>Facebook Ads</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="one-forth services-img" style="background-image: url(images/services-img-1.jpg);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="progress">
			<div class="container">
				<div class="row text-center">
					<h2 class="bold">Skills</h2>
				</div>
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
						<span>Skills</span>
						<h2>My Skills</h2>
					</div>
				</div>
				<div class="row">
			      <div class="col-md-3 col-sm-6 text-center">
			      	<h2 class="progress-head">Front-End Development</h2>
		            <div class="progress blue">
		                <span class="progress-left">
		                    <span class="progress-bar"></span>
		                </span>
		                <span class="progress-right">
		                    <span class="progress-bar"></span>
		                </span>
		                <div class="progress-value">90%</div>
		            </div>
		         </div>
			 
		         <div class="col-md-3 col-sm-6 text-center">
		         	<h2 class="progress-head">Back-End Development</h2>
		            <div class="progress green">
		                <span class="progress-left">
		                    <span class="progress-bar"></span>
		                </span>
		                <span class="progress-right">
		                    <span class="progress-bar"></span>
		                </span>
		                <div class="progress-value">80%</div>
		            </div>
		         </div>

		         <div class="col-md-3 col-sm-6 text-center">
		         	<h2 class="progress-head">Digital Marketing</h2>
		            <div class="progress yellow">
		                <span class="progress-left">
		                    <span class="progress-bar"></span>
		                </span>
		                <span class="progress-right">
		                    <span class="progress-bar"></span>
		                </span>
		                <div class="progress-value">75%</div>
		            </div>
		         </div>

		         <div class="col-md-3 col-sm-6 text-center">
		         	<h2 class="progress-head">Mobile App Development</h2>
		            <div class="progress pink">
		                <span class="progress-left">
		                    <span class="progress-bar"></span>
		                </span>
		                <span class="progress-right">
		                    <span class="progress-bar"></span>
		                </span>
		                <div class="progress-value">60%</div>
		            </div>
		         </div>
			   </div>
			</div>
		</div>

        <div id="work">
            <div class="container">
                <div class="row text-center">
                    <h2 class="bold">Works</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
                        <span>Portfolio</span>
                        <h2>Done Projects</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="rotate">
                            <h2 class="heading">Portfolio</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="work-entry animate-box">
                            <a href="work.html" class="work-img" style="background-image: url(images/testi1.png);">
                                <div class="display-t">
                                    <div class="work-name">
                                        <h2>Dearte Cafe</h2>
                                    </div>
                                </div>
                            </a>
                            <div class="col-md-4 col-md-offset-4">
                                <div class="desc">
                                    <p>Creating personal website for Dearte Cafe to improve their marketing and promotion.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="work-entry animate-box">
                            <a href="work.html" class="work-img" style="background-image: url(images/testi2.png);">
                                <div class="display-t">
                                    <div class="work-name">
                                        <h2>Delotuz Kitchen</h2>
                                    </div>
                                </div>
                            </a>
                            <div class="col-md-4 col-md-offset-4">
                                <div class="desc">
                                    <p>Creating personal website for Delotuz Kitchen to improve their marketing and promotion.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="work-entry animate-box">
                            <a href="work.html" class="work-img" style="background-image: url(images/testi3.png);">
                                <div class="display-t">
                                    <div class="work-name">
                                        <h2>Foundyst Inc.</h2>
                                    </div>
                                </div>
                            </a>
                            <div class="col-md-4 col-md-offset-4">
                                <div class="desc">
                                    <p>Develop Front End for Foundyst Inc.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div id="colorlib-blog">
            <div class="container">
                <div class="row text-center">
                    <h2 class="bold">Blog</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
                        <span>Blog</span>
                        <h2>Read Our Case</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="rotate">
                            <h2 class="heading">Our Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="owl-carousel1">
                        <div class="item">
                            <div class="col-md-12">
                                <div class="article">
                                    <a href="blog.html" class="blog-img">
                                        <img class="img-responsive" src="images/img-1.jpg" alt="html5 bootstrap by colorlib.com">
                                        <div class="overlay"></div>
                                        <div class="link">
                                            <span class="read">Read more</h2>
										</div>
									</a>
									<div class="desc">
										<span class="meta">15, Feb 2018</span>
                                            <h2><a href="blog.html">A Japanese Constellation</a></h2>
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-12">
                                <div class="article">
                                    <a href="blog.html" class="blog-img">
                                        <img class="img-responsive" src="images/img-2.jpg" alt="html5 bootstrap by colorlib.com">
                                        <div class="overlay"></div>
                                        <div class="link">
                                            <span class="read">Read more</h2>
										</div>
									</a>
									<div class="desc">
										<span class="meta">15, Feb 2018</span>
                                            <h2><a href="blog.html">A Japanese Constellation</a></h2>
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-12">
                                <div class="article">
                                    <a href="blog.html" class="blog-img">
                                        <img class="img-responsive" src="images/img-3.jpg" alt="html5 bootstrap by colorlib.com">
                                        <div class="overlay"></div>
                                        <div class="link">
                                            <span class="read">Read more</h2>
										</div>
									</a>
									<div class="desc">
										<span class="meta">15, Feb 2018</span>
                                            <h2><a href="blog.html">A Japanese Constellation</a></h2>
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div id="testimony">
            <div class="container">
                <div class="row text-center">
                    <h2 class="bold">Quotes</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
                        <span>Quotes</span>
                        <h2>Quotes of the day</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="rotate">
                            <h2 class="heading">Says</h2>
                        </div>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="owl-carousel">
                        <div class="item">
                            <div class="col-md-12 text-center">
                                <div class="testimony">
                                    <blockquote>
                                        <p>"A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                        <span>" &mdash; George Brooks</span>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-12 text-center">
                                <div class="testimony">
                                    <blockquote>
                                        <p>"Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of
                                            Grammar.</p>
                                        <span>" &mdash; Daniel Foster</span>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-12 text-center">
                                <div class="testimony">
                                    <blockquote>
                                        <p>"When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove</p>
                                        <span>" &mdash; Liam Jenkins</span>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-pb-sm">
                            <div class="row">
                                <div class="col-md-10">
                                    <h2>Let's Talk</h2>
                                    <a href="tel:6282181189178">(+62) 821-8118-9178</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-pb-sm">
                            <h2>Get In Touch</h2>
                            <a href="mailto:reynaldo.pratama@binus.edu?subject=Big%20News&body=Hello-there">Email Me</a>
                        </div>
                        <div class="col-md-4 col-pb-sm">
                            <h2>Social Media</h2>
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="social-icons">
                                        <a href="#"><i class="icon-instagram2"></i></a>
                                        <a href="#"><i class="icon-github"></i></a>
                                        <a href="#"><i class="icon-linkedin"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            {{-- <p>
                                &copy;
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="icon-heart4" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p> --}}
                            <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> made with <i class="icon-heart4" aria-hidden="true"></i> by <a href="reynaldodev.com" target="_blank">Reynaldo</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>

    <script src="js/main.js"></script>
    

    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>

</body>

</html>