<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="POLLING UNIT - User Dashboard">
    <meta name="author" content="CloudPromptAI">
    <title>POLLING UNIT - Polling Unit Management Service</title>

    <!-- CSS Files -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/polling-unit.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl-carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Override CSS -->
    <style>
        ol, ul {
            list-style-type: initial !important; /* Ensure the default list style type is used */
            margin-left: 20px; /* Adjust as needed for indentation */
        }

        ol li, ul li {
            margin-bottom: 5px; /* Adjust spacing between list items if needed */
        }

        ul {
            list-style: disc !important; /* Use default bullet style for unordered lists */
        }

        ol {
            list-style: decimal !important; /* Use default number style for ordered lists */
        }
    </style>

    <!-- JS Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about" style="margin-top: 6rem; margin-bottom:-3rem">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{ asset('images/polling-unit.jpg') }}" class="rounded img-fluid d-block mx-auto"
                        alt="App">
                </div>
                <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                    <div class="left-heading">
                        <h2>Poll <span style="color: red;">Unit </span>Management</h2>
                        <h5 style="padding-top: 1rem; margin-bottom:.2rem; font-weight:350;">Description:</h5>
                    </div>
                    <div class="left-text">
                        <p>Our Poll Unit Management service is designed to ensure the seamless operation of polling units during elections, providing meticulous oversight and administration from start to finish. We understand that the integrity and efficiency of the electoral process are paramount, and our service is tailored to meet the highest standards of transparency and effectiveness.
                        </p>
                        <p style="margin-top:-2rem;">Our team of experts is equipped with extensive knowledge of electoral regulations and best practices, ensuring that every polling unit under our management operates smoothly and fairly. From pre-election preparations to post-election analysis, we handle all aspects of poll unit management, including logistics, staff training, and compliance with legal requirements. Our goal is to create an environment where voters can cast their ballots with confidence, knowing that the process is managed with precision and impartiality.
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
    <section class="section" id="texts">
        <div class="container" style="position: relative; padding-top:5rem;">
            <h3 style="padding-bottom:.5rem; font-weight:350;">Key Services:</h3>
            <ol>
                <li>1. Pre-Election Planning and Setup:
                    <ul>
                        <li>● Comprehensive site assessments for optimal polling unit locations.</li>
                        <li>● Coordination with local electoral bodies to ensure compliance with regulations.</li>
                        <li>● Procurement and setup of necessary equipment and materials, including voting booths, ballot boxes, and signage.</li>
                        <li>● Development of a detailed polling unit layout plan to ensure efficient voter flow and accessibility.</li>
                    </ul>
                </li>
                <li>2. Staff Recruitment and Training:
                    <ul>
                        <li>● Recruitment of qualified polling unit staff, including presiding officers, clerks, and support personnel.</li>
                        <li>● Comprehensive training programs covering electoral procedures, voter verification processes, and conflict resolution.</li>
                        <li>● Distribution of training materials and manuals to ensure staff are well-prepared for their roles.</li>
                    </ul>
                </li>
                <li>3. Logistics and Coordination:
                    <ul>
                        <li>● Detailed logistics planning to ensure timely delivery of electoral materials and equipment to each polling unit.</li>
                        <li>● Coordination with security agencies to ensure the safety and security of polling units.</li>
                        <li>● Development of contingency plans to address potential challenges, such as technical issues or voter disputes.</li>
                    </ul>
                </li>
                <li>4. Election Day Management:
                    <ul>
                        <li>● On-site management and supervision of polling units to ensure adherence to electoral procedures.</li>
                        <li>● Real-time troubleshooting and support to address any issues that arise during voting.</li>
                        <li>● Continuous monitoring and reporting to provide updates on voter turnout and any incidents.</li>
                    </ul>
                </li>
                <li>5. Post-Election Processes:
                    <ul>
                        <li>● Collection and secure transportation of ballot boxes and electoral materials to counting centers.</li>
                        <li>● Compilation and submission of detailed reports on the polling unit activities, including voter turnout and any discrepancies.</li>
                        <li>● Coordination with electoral bodies for the auditing and certification of election results.</li>
                    </ul>
                </li>
                <li>6. Compliance and Reporting:
                    <ul>
                        <li>● Ensuring strict adherence to local and national electoral laws and regulations.</li>
                        <li>● Preparation of comprehensive post-election reports detailing the management and outcomes of the polling units.</li>
                        <li>● Recommendations for future improvements based on the analysis of the electoral process and feedback from polling unit staff and voters.</li>
                    </ul>
                </li>
            </ol>
<br><br>
            <p>
                <b>By entrusting us with the management of your polling units, you can be assured of a smooth, transparent, and efficient electoral process that upholds the principles of democracy and fairness.
                </b>
            </p>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->
<br>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>© <span id="currentYear"></span> <span style="color:rgb(232, 0, 0); font-weight:500;">POLLING
                            UNIT</span> All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Get the current year
        var currentYear = new Date().getFullYear();
        document.getElementById("currentYear").textContent = currentYear;
    </script>

    <script>
        $(document).ready(function() {
            // Ensure the margin is added when navigating with a hash
            var hash = window.location.hash;
            if (hash === '#about') {
                setTimeout(function() {
                    var target = $(hash);
                    target.css('margin-top', '2rem');
                    $('html, body').animate({
                        scrollTop: target.offset().top - $('.header-area').height()
                    }, 1000);
                }, 500); // Delay to ensure element is loaded
            }

            // If navigation happens on the same page
            $('a.scroll-to-section').click(function(e) {
                var target = $(this.hash);
                if (target.length) {
                    e.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top - $('.header-area').height()
                    }, 1000, function() {
                        window.location.hash = target.selector;
                        target.css('margin-top', '2rem');
                    });
                }
            });
        });
    </script>

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
