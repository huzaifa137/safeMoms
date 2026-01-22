<!DOCTYPE HTML>
<html class="no-js" lang="de">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index,follow">

    <title>{{ config('app.name', 'SafeMoms') }}</title>

    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/animate.css" rel="stylesheet">
    <link href="/assets/css/bootsnav.css" rel="stylesheet">
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/swipebox.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
    <div style="background: linear-gradient(90deg, #363558 0%, #2d2a4a 100%); padding: 12px 0; color: white;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <div
                style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">

                <div style="display: flex; gap: 15px; align-items: center; flex-wrap: wrap; justify-content: center;">

                    <div
                        style="display: flex; align-items: center; gap: 10px; background: rgba(255, 255, 255, 0.1); padding: 8px 15px; border-radius: 20px; backdrop-filter: blur(10px); min-width: fit-content;">
                        <div
                            style="width: 32px; height: 32px; background: linear-gradient(135deg, #46DE48, #6bff8f); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px;">
                            📞
                        </div>
                        <div>
                            <div style="font-size: 11px; opacity: 0.8; margin-bottom: 2px;">Call Us:</div>
                            <div style="font-size: 14px; font-weight: 800;">+91 9904518814</div>
                        </div>
                    </div>

                    <div
                        style="display: flex; align-items: center; gap: 10px; background: rgba(255, 255, 255, 0.1); padding: 8px 15px; border-radius: 20px; backdrop-filter: blur(10px); min-width: fit-content;">
                        <div
                            style="width: 32px; height: 32px; background: linear-gradient(135deg, #DD3134, #ff6b6b); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px;">
                            ✉️
                        </div>
                        <div>
                            <div style="font-size: 11px; opacity: 0.8; margin-bottom: 2px;">Mail Us:</div>
                            <div style="font-size: 14px; font-weight: 800;">info@SafeMoms.org</div>
                        </div>
                    </div>
                </div>

                <div style="display: flex; gap: 12px; margin: 0 auto; margin-right: 0;">
                    <a href="https://www.facebook.com/..."
                        style="width: 36px; height: 36px; background: linear-gradient(135deg, #4267B2, #3b5998); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white; font-size: 16px; text-decoration: none; transition: all 0.3s ease;"
                        onmouseover="this.style.transform='translateY(-3px) scale(1.1)';"
                        onmouseout="this.style.transform='translateY(0) scale(1)';" target="_blank" rel="nofollow">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="https://twitter.com/..."
                        style="width: 36px; height: 36px; background: linear-gradient(135deg, #1DA1F2, #1a91da); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white; font-size: 16px; text-decoration: none; transition: all 0.3s ease;"
                        onmouseover="this.style.transform='translateY(-3px) scale(1.1)';"
                        onmouseout="this.style.transform='translateY(0) scale(1)';" target="_blank" rel="nofollow">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="http://www.linkedin.com/..."
                        style="width: 36px; height: 36px; background: linear-gradient(135deg, #0077B5, #006699); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white; font-size: 16px; text-decoration: none; transition: all 0.3s ease;"
                        onmouseover="this.style.transform='translateY(-3px) scale(1.1)';"
                        onmouseout="this.style.transform='translateY(0) scale(1)';" target="_blank" rel="nofollow">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="#"
                        style="width: 36px; height: 36px; background: linear-gradient(135deg, #FF0000, #cc0000); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white; font-size: 16px; text-decoration: none; transition: all 0.3s ease;"
                        onmouseover="this.style.transform='translateY(-3px) scale(1.1)';"
                        onmouseout="this.style.transform='translateY(0) scale(1)';" target="_blank" rel="nofollow">
                        <i class="fa fa-youtube-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <nav class="navbar navbar-default navbar-sticky bootsnav">
        <div class="container">
            <div class="row">

                <!-- Flex Container for Logo and Navbar Links -->
                <div class="navbar-header d-flex justify-content-between align-items-center w-100">

                    <!-- Mobile Toggle Button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Logo -->
                    <a class="navbar-brand logo" href="/">
                        <img src="/assets/images/logo.png" class="img-responsive" style="width: 150px; height: auto;" />
                    </a>

                    <!-- Navbar Menu (Links) -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            <!-- Home -->
                            <li><a href="/">Home</a></li>

                            <!-- About Dropdown -->
                            <!-- About Dropdown -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    About
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('aboutus') }}">Our Story</a></li>
                                    <li><a href="javascript:void();">Mission & Vision</a></li>
                                    <li><a href="{{ url('our-team') }}">Our Team</a></li>
                                    <li><a href="{{ url('location') }}">Where We Work</a></li>
                                </ul>
                            </li>

                            <!-- Programs Dropdown -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Programs
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('SafePregnancy') }}">Safe Pregnancy</a></li>
                                    <li><a href="{{ url('SafeDelivery') }}">Safe Delivery</a></li>
                                    <li><a href="{{ url('SafePostpartum') }}">Safe Postpartum</a></li>
                                </ul>
                            </li>

                            <!-- Other Links -->
                            <li><a href="{{ url('Innovation') }}">Our Projects</a></li>
                            <li><a href="{{ url('Impact') }}">Impact</a></li>
                            <li><a href="{{url('Resources')}}">Resources</a></li>
                            <li><a href="{{ url('News') }}">News</a></li>
                            <li><a href="/contact">Contact Us</a></li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </nav>

    <style>
        .navbar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .navbar-brand.logo img {
            max-height: 50px;
        }

        .navbar-nav {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .navbar-collapse {
            margin-left: 15px;
        }

        .navbar-nav .dropdown-toggle::after {
            content: '\f0d7';
            font-family: 'FontAwesome';
            padding-left: 10px;
        }

        .navbar-nav .dropdown {
            position: relative;
        }

        .navbar-nav .dropdown-toggle {
            display: inline-flex;
            align-items: center;
        }

        .navbar-nav li a {
            line-height: 50px;
            padding-top: 0;
            padding-bottom: 0;
        }

        .navbar-nav li a:hover {
            background-color: #f8f8f8;
        }
    </style>

    @yield('content')


    <footer class="footer">
        <div class="footer-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-section">
                            <h4 class="footer-section-title">About SafeMoms</h4>
                            <!-- /.footer-section-title -->

                            <div class="footer-section-body">
                                <p style="color: white">Bringing a smile on the face of every child and human in the
                                    world is our passion, we have done this through providing educational services to
                                    the orphans, we aim at providing healthcare services to the children, elderly and un
                                    abled people such as pregnant mothers. We also provide basic needs like clothes,
                                    books, water, food etc. to the poor, this has brought a smile to people in the
                                    community.</p>
                            </div><!-- /.footer-section-body -->
                        </div><!-- /.footer-section -->
                    </div><!-- /.columns large-3 medium-12 -->

                    <div class="col-md-4">
                        <div class="footer-section">
                            <h4 class="footer-section-title">Quick Links</h4><!-- /.footer-section-title -->

                            <div class="footer-section-body">
                                <ul class="list-links">
                                    <li>
                                        <a class="link-color" href="/">Home</a>
                                    </li>

                                    <li>
                                        <a class="link-color" href="aboutus">About Us</a>
                                    </li>

                                    <li>
                                        <a class="link-color" href="activities">Activities</a>
                                    </li>
                                    <li>
                                        <a class="link-color" href="projects">Projects</a>
                                    </li>

                                    <li>
                                        <a class="link-color" href="gallery">Gallery</a>
                                    </li>

                                    <li>
                                        <a class="link-color" href="contact">Contact Us</a>
                                    </li>
                                </ul><!-- /.list-links -->

                            </div><!-- /.footer-section-body -->
                        </div><!-- /.footer-section -->
                    </div><!-- /.columns large-3 medium-12 -->



                    <div class="col-md-3">
                        <div class="footer-section">
                            <h4 class="footer-section-title">Contact Us</h4><!-- /.footer-section-title -->

                            <div class="footer-section-body" style="color:whitesmoke;">
                                <p><b>Address:</b> buwenda village,Jinja city, Uganda</p>

                                <div class="footer-contacts" style="color:whitesmoke;>
								<p>
									<b>
										<i class=" fa fa-phone"></i> Phone:
                                    </b>

                                    +25703691417/+919904518814/+82 10-6443-8212
                                    </p>

                                    <p>
                                        <b>
                                            <i class="fa fa-envelope-o"></i> Email:
                                        </b>

                                        info@SafeMoms.org
                                    </p>
                                </div><!-- /.footer-contacts -->
                            </div><!-- /.footer-section-body -->
                        </div><!-- /.footer-section -->
                    </div><!-- /.columns large-3 medium-12 -->
                </div><!-- /.row -->
            </div>
        </div><!-- /.footer-body -->
        </div>
        </div>
        </div>
    </footer>

    <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/bootsnav.js"></script>
    <script src="/assets/js/banner.js"></script>
    <script src="/assets/js/jquery.swipebox.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            /* Basic Gallery */
            $('.swipebox').swipebox();

            /* Video */
            $('.swipebox-video').swipebox();

            /* Dynamic Gallery */
            $('#gallery').click(function (e) {
                e.preventDefault();
                $.swipebox([{
                    href: 'http://swipebox.csag.co/mages/image-1.jpg',
                    title: 'My Caption'
                },
                {
                    href: 'http://swipebox.csag.co/images/image-2.jpg',
                    title: 'My Second Caption'
                }
                ]);
            });

        });
    </script>
    <script src="/assets/js/script.js"></script>
</body>

</html>