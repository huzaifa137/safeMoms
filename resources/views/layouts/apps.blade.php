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

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-color: #363558;
            --secondary-color: #2d2a4a;
            --accent-green: #46DE48;
            --accent-red: #DD3134;
        }

        /* Top Bar */
        .top-bar {
            background: linear-gradient(90deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 10px 0;
            font-size: 0.9rem;
        }

        .contact-badge {
            background: rgba(255, 255, 255, 0.1);
            padding: 8px 15px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-right: 15px;
        }

        .contact-icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }

        .icon-green {
            background: linear-gradient(135deg, var(--accent-green), #6bff8f);
        }

        .icon-red {
            background: linear-gradient(135deg, var(--accent-red), #ff6b6b);
        }

        .social-icon {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Navbar */
        .navbar {
            background: white;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            padding: 0.5rem 0;
        }

        .navbar-brand img {
            height: 50px;
            width: auto;
        }

        .navbar-nav .nav-link {
            color: #333;
            font-weight: 500;
            padding: 0.8rem 1rem;
            margin: 0 2px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
        }

        .dropdown-menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 10px 0;
            margin-top: 5px;
        }

        .dropdown-item {
            padding: 8px 20px;
            transition: all 0.2s ease;
        }

        .dropdown-item:hover {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
        }

        .donate-btn {
            background: linear-gradient(135deg, var(--accent-red), #ff6b6b);
            color: white;
            border-radius: 5px;
            padding: 0.5rem 1.5rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .donate-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(221, 49, 52, 0.3);
            color: white;
        }

        /* Footer */
        .footer {
            background: linear-gradient(90deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 50px 0 20px;
            margin-top: 50px;
        }

        .footer h4 {
            color: white;
            margin-bottom: 20px;
            font-size: 1.2rem;
        }

        .footer a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: white;
        }

        .list-links {
            list-style: none;
            padding-left: 0;
        }

        .list-links li {
            margin-bottom: 10px;
        }

        @media (max-width: 992px) {
            .navbar-nav .nav-link {
                padding: 0.5rem 1rem;
            }

            .contact-info {
                justify-content: center !important;
                margin-bottom: 10px;
            }

            .social-icons {
                justify-content: center !important;
            }
        }

        @media (max-width: 768px) {
            .contact-badge {
                margin-bottom: 10px;
                width: 100%;
                justify-content: center;
            }

            .navbar-brand img {
                height: 40px;
            }
        }
    </style>
</head>

<body>
    <!-- Top Contact Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="d-flex flex-column flex-md-row align-items-center contact-info">
                    <div class="contact-badge mb-2 mb-md-0">
                        <div class="contact-icon icon-green">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <div style="font-size: 11px; opacity: 0.8;">Call Us:</div>
                            <div style="font-size: 14px; font-weight: 600;">+91 9904518814</div>
                        </div>
                    </div>

                    <div class="contact-badge">
                        <div class="contact-icon icon-red">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <div style="font-size: 11px; opacity: 0.8;">Mail Us:</div>
                            <div style="font-size: 14px; font-weight: 600;">info@SafeMoms.org</div>
                        </div>
                    </div>
                </div>

                <div class="d-flex social-icons">
                    <a href="https://www.facebook.com/..." class="social-icon me-2"
                        style="background: linear-gradient(135deg, #4267B2, #3b5998);">
                        <i class="fab fa-facebook-f"></i>

                    </a>
                    <a href="https://twitter.com/..." class="social-icon me-2"
                        style="background: linear-gradient(135deg, #1DA1F2, #1a91da);">
                        <i class="fab fa-twitter"></i>

                    </a>
                    <a href="http://www.linkedin.com/..." class="social-icon me-2"
                        style="background: linear-gradient(135deg, #0077B5, #006699);">
                        <i class="fab fa-linkedin-in"></i>

                    </a>
                    <a href="#" class="social-icon" style="background: linear-gradient(135deg, #FF0000, #cc0000);">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/assets/images/logo.png" alt="SafeMoms Logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('aboutus') }}">Our Story</a></li>
                            <li><a class="dropdown-item" href="{{ url('our-team') }}">Our Team</a></li>
                            <li><a class="dropdown-item" href="{{ url('location') }}">Where We Work</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Our Programmes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('SafeDelivery') }}">Safe Delivery</a></li>
                            <li><a class="dropdown-item" href="{{ url('SafePregnancy') }}">Safe Pregnancy</a></li>
                            <li><a class="dropdown-item" href="{{ url('SafePostpartum') }}">Safe Postpartum</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Get Involved
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('become-a-navigator') }}">Become a Navigator</a></li>
                            <li><a class="dropdown-item" href="{{ url('become-a-volunteer') }}">Volunteer with us</a></li>
                            <li><a class="dropdown-item" href="{{ url('partner-with-smn') }}">Partner with SMN</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Impact
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('Impact') }}">Impact</a></li>
                            <li><a class="dropdown-item" href="{{ url('Research-and-Publications') }}">Research & Publications</a></li>
                            <li><a class="dropdown-item" href="{{ url('Resources') }}">Resources</a></li>
                            <li><a class="dropdown-item" href="{{ url('News') }}">News</a></li>
                            <li><a class="dropdown-item" href="{{ url('reports') }}">Reports</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact Us</a>
                    </li>

                    <li class="nav-item ms-2">
                        <a class="nav-link donate-btn" href="{{url('donate')}}">
                            Donate Now
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h4>About SafeMoms</h4>
                    <p>SafeMoms Navigator is a youth-led maternal health initiative currently operating in
<span><strong>Jinja District, Uganda,</strong></span> with plans to expand to additional districts.
We support mothers, children, and vulnerable families through healthcare,
education, and essential community services.
</p>
                </div>



                <div class="col-lg-3 col-md-6 mb-4">
                    <h4>Quick Links</h4>
                    <ul class="list-links">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('aboutus')}}">About Us</a></li>
                        <li><a href="{{ url('SafeDelivery') }}">Programs</a></li>
                        <li><a href="{{url('Impact')}}">Impact</a></li>
                        <li><a href="{{ url('contact') }}">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <h4>Contact Us</h4>
                    <div class="footer-contacts">
                        <p><strong>Address:</strong> Buwenda village, Jinja city, Uganda</p>
                        <p><strong><i class="fas fa-phone me-2"></i>Phone:</strong>
                            +1(236)862-7683/+256 775 130396</p>
                        <p><strong><i class="fas fa-envelope me-2"></i>Email:</strong>
                            info@SafeMoms.org</p>
                    </div>
                </div>
            </div>

            <!-- Scroll to top button -->
            <div class="scroll-to-top" onclick="scrollToTop()">
                <i>&#8593;</i> <!-- Unicode for upward arrow -->
            </div>

            <style>
                /* Floating Button Style */
                .scroll-to-top {
                    position: fixed;
                    bottom: 20px;
                    right: 20px;
                    width: 60px;
                    height: 60px;
                    background-color: red;
                    border-radius: 50%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    cursor: pointer;
                    box-shadow: 0 4px 12px rgba(218, 24, 24, 0.1);
                    transition: background-color 0.3s;
                }

                .scroll-to-top:hover {
                    background-color: #46416D;
                }

                .scroll-to-top i {
                    color:   #2F2C4D;
                    /* Arrow color */
                    font-size: 30px;
                }

                /* Smooth scroll behavior */
                html {
                    scroll-behavior: smooth;
                }
            </style>

            <script>
                // Function to scroll the page to the top
                function scrollToTop() {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'  // Smooth scrolling effect
                    });
                }

                // Hide the button when at the top of the page, show it when scrolled down
                window.onscroll = function () {
                    var button = document.querySelector('.scroll-to-top');

                    if (document.body.scrollTop === 0 && document.documentElement.scrollTop === 0) {
                        button.style.opacity = '0';  // Hide the button
                    } else {
                        button.style.opacity = '1';  // Show the button
                    }
                };
            </script>
            <div class="text-center pt-4 mt-4 border-top" style="border-color: rgba(255,255,255,0.1) !important;">
                <p>&copy; <span id="year"></span> SafeMoms. All rights reserved.</p>

                <script>
                    const currentYear = new Date().getFullYear();
                    document.getElementById('year').textContent = currentYear;
                </script>

            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Your existing scripts -->
    <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/bootsnav.js"></script>
    <script src="/assets/js/banner.js"></script>
    <script src="/assets/js/jquery.swipebox.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.swipebox').swipebox();
            $('.swipebox-video').swipebox();
        });
    </script>
    <script src="/assets/js/script.js"></script>
</body>

</html>