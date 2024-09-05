<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="POLLING UNIT is a cutting-edge web application designed to transform the way voting is monitored at POLLING UNITs across Africa. With a mission to promote transparency, accountability, and efficiency in the electoral process, POLLING UNIT provides a comprehensive platform for real-time monitoring and reporting.">
    <meta name="author" content="CloudPromptAI">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>POLLING UNIT</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/polling-unit.css') }}">
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('partials.nav')
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">
        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1 style="color: #f8b409;"><strong>POLLING UNIT</strong></h1>
                        <h3 style="margin-top: -1.5rem;">Harnessing the power of technology</h3>
                        <p style="padding-top: .7rem;"><b>Revolutionizing poll monitoring across Africa and paving the way for free, fair, and transparent elections. Commited to integrity and accountability, POLLING UNIT is poised to become the go-to platform for electoral stakeholders dedicated to upholding democratic principles and ensuring the voice of the people is heard.</b></p>
                        <a href="#about" class="main-button-slider">Learn More</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="{{ asset('images/slider-icon.png') }}" class="rounded img-fluid d-block mx-auto"
                            alt="First Vector Graphic">
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about" style="margin-top: 4rem;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{ asset('images/left-image.jpg') }}" class="rounded img-fluid d-block mx-auto"
                        alt="App">
                </div>
                <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                    <div class="left-heading">
                        <h2>About <span style="color: red;">POLLING UNIT</span></h2>
                        <h5 style="padding-top: 1rem; margin-bottom:.2rem; font-weight:350;">Revolutionizing Poll Monitoring in African Countries</h5>
                    </div>
                    <div class="left-text">
                        <p>POLLING UNIT is a cutting-edge web application designed to transform the way voting is
                            monitored at POLLING UNITs across Africa. With a mission to promote transparency,
                            accountability, and efficiency in the electoral process, POLLING UNIT provides a
                            comprehensive platform for real-time monitoring and reporting.</p>

                        <p style="margin-top:-2rem;">At the heart of POLLING UNIT's functionality is its innovative approach to assigning three
                            dedicated workers to each POLLING UNIT. These workers, equipped with the POLLING UNIT app,
                            serve as vigilant guardians of the democratic process, ensuring that every vote is counted
                            accurately and every voice is heard.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about2" style="margin-top: 4rem; margin-bottom:3rem">
        <div class="container">
            <div class="row">
                <div class="left-text col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix">
                    <div class="left-heading">
                        <h5>Key features of <span style="color: red;">POLLING UNIT</span></h5>
                    </div>
                    <ul>
                        <li>
                            <img src="{{ asset('images/about-icon-01.png') }}" alt="">
                            <div class="text">
                                <h6>Real-Time Monitoring:</h6>
                                <p>Users can track voting activities in real-time through intuitive dashboards and maps,
                                    keeping them updated on voter turnout and election progress.</p>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('images/about-icon-02.png') }}" alt="">
                            <div class="text">
                                <h6>Assigned Poll Workers:</h6>
                                <p>Each POLLING UNIT has three dedicated workers overseeing the
                                    voting process, ensuring smooth operations and addressing any issues that arise.</p>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('images/about-icon-03.png') }}" alt="">
                            <div class="text">
                                <h6>Secure Image Upload:</h6>
                                <p>Poll workers can easily upload images of voting counts, ensuring
                                    transparency and creating a reliable record of election results.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="right-image col-lg-7 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="{{ asset('images/right-image.jpg') }}" class="rounded img-fluid d-block mx-auto"
                        alt="App">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <section class="section" id="services">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme">
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="{{ asset('images/red-campaign-coordination.ico') }}" alt=""></i>
                        </div>
                        <h5 class="service-title">Election Campaign Coordination</h5>
                        <p>Our Election Campaign Coordination service offers comprehensive planning and execution strategies for political campaigns, ensuring optimal voter engagement. From grassroots mobilization to media management, we handle every aspect to maximize your campaign's impact.</p>
                        <a href="{{ url('/election-coordination') }}" class="main-button">Learn More</a>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="{{ asset('images/red-polling-unit-management.ico') }}" alt=""></i>
                        </div>
                        <h5 class="service-title">Poll Unit Management</h5>
                        <p>Our Poll Unit Management service provides meticulous oversight and administration of polling units, ensuring smooth and efficient electoral processes. We manage logistics, staff training, and compliance with regulations to guarantee a fair and transparent voting experience.</p>
                        <a href="{{ url('/polling-unit-management') }}" class="main-button">Learn More</a>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="{{ asset('images/red-fundraising.ico') }}" alt=""></i>
                        </div>
                        <h5 class="service-title">Fundraiser Campaign</h5>
                        <p>Our Fundraiser Campaign service specializes in designing and managing diverse fundraising events and initiatives to support your organization's financial goals. We create tailored strategies to engage donors, maximize contributions, and ensure successful fundraising efforts.</p>
                        <a href="{{ url('/fundraising') }}" class="main-button">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Title for the carousel -->
            <h2 style="position: absolute; top: 40px; left: 50%; transform: translateX(-50%); z-index: 999; color: white;">POLLING UNIT Services</h2>
        </div>
    </section>


<!-- ***** Contact Us Start ***** -->
<section class="section" id="contact-us">
    <div class="container" style="position: relative; padding-top:5rem;">
        <h2 style="position: absolute; top: 40px; left: 50%; transform: translateX(-50%); z-index: 999; color: rgb(232, 0, 0); font-weight:600"><strong>CONTACT US</strong></h2>
        <div class="row" style="padding-top: 2rem;">
            <div class="col-lg-12">
                <div class="contact-us">
                    <div class="contact-form" style="padding-top: 3rem;">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form id="contact" action="{{ route('form.submit') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Email Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Send Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Contact Us End ***** -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>© <span id="currentYear"></span> <span style="color:rgb(232, 0, 0); font-weight:500;">POLLING UNIT</span> All Rights Reserved.</p>
    </footer>

    <script>
        // Get the current year
        var currentYear = new Date().getFullYear();

        // Update the content of the element with id "currentYear"
        document.getElementById("currentYear").textContent = currentYear;
    </script>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl-carousel.js') }}"></script>
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/imgfix.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
