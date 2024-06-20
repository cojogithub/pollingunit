<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="POLLING UNIT - User Dashboard">
    <meta name="author" content="CloudPromptAI">
    <title>POLLING UNIT - Fundraiser Campaign Service</title>

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
                    <img src="{{ asset('images/fundraiser.jpg') }}" class="rounded img-fluid d-block mx-auto"
                        alt="App">
                </div>
                <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                    <div class="left-heading">
                        <h2>Fundraiser <span style="color: red;">Campaign </span>Service</h2>
                        <h5 style="padding-top: 1rem; margin-bottom:.2rem; font-weight:350;">Description:</h5>
                    </div>
                    <div class="left-text">
                        <p>Our Fundraiser Campaign service is dedicated to empowering political campaigns through strategic and effective fundraising initiatives. We understand the critical role that financial resources play in driving successful campaigns, and our team of experienced professionals is committed to helping you reach your fundraising goals. By leveraging a mix of traditional and innovative fundraising techniques, we ensure that your campaign has the necessary funds to sustain its operations, engage voters, and achieve electoral success.
                        </p>
                        <p style="margin-top:-2rem;">Our service includes a comprehensive approach to fundraising, from initial planning and goal setting to execution and post-campaign analysis. We work closely with your team to understand your unique needs and tailor our strategies to align with your campaign's vision and objectives. Whether you are a first-time candidate or a seasoned politician, our Fundraiser Campaign service provides the expertise and support you need to run a financially robust campaign.
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
        <div class="container" style="position: relative;">
            <h3 style="padding-bottom:.5rem; font-weight:350;">Key Services:</h3>
            <ol>
                <li>1. Fundraising Strategy Development:
                    <ul>
                        <li>● Comprehensive fundraising plan tailored to your campaign's goals and target audience.</li>
                        <li>● Identification of key funding sources, including individual donors, corporate sponsors, and political action committees (PACs).</li>
                        <li>● Customized approach for different fundraising channels such as events, online campaigns, direct mail, and peer-to-peer fundraising.</li>
                    </ul>
                </li>
                <li>2. Donor Research and Outreach:
                    <ul>
                        <li>● Detailed research and profiling of potential donors to build a targeted donor list.</li>
                        <li>● Development of personalized outreach strategies to engage high-potential donors.</li>
                        <li>● Management of donor communications, including emails, calls, and follow-ups to build and maintain strong relationships.</li>
                    </ul>
                </li>
                <li>3. Event Planning and Execution:
                    <ul>
                        <li>● Organization and management of fundraising events, including galas, dinners, auctions, and meet-and-greet sessions.</li>
                        <li>● Coordination of event logistics, from venue selection and vendor management to guest invitations and on-site support.</li>
                        <li>● Creation of engaging event programs to maximize donor participation and contributions.</li>
                    </ul>
                </li>
                <li>4. Online Fundraising Campaigns:
                    <ul>
                        <li>● Design and launch of compelling online fundraising campaigns using social media, email marketing, and crowdfunding platforms.</li>
                        <li>● Development of engaging content and visuals to drive online donations.</li>
                        <li>● Monitoring and analysis of online campaign performance to optimize results.</li>
                    </ul>
                </li>
                <li>5. Donor Engagement and Retention:
                    <ul>
                        <li>● Implementation of donor stewardship programs to recognize and appreciate contributions.</li>
                        <li>● Development of loyalty programs and exclusive events for major donors to encourage repeat contributions.</li>
                        <li>● Regular updates and reports to donors on campaign progress and impact.</li>
                    </ul>
                </li>
                <li>6. Compliance and Reporting:
                    <ul>
                        <li>● Ensuring all fundraising activities comply with legal and regulatory requirements.</li>
                        <li>● Detailed tracking and reporting of funds raised and expenses incurred.</li>
                        <li>● Preparation of comprehensive reports on fundraising performance, donor demographics, and campaign impact.</li>
                    </ul>
                </li>
                <li>6. Post-Campaign Analysis:
                    <ul>
                        <li>● Evaluation of the overall effectiveness of the fundraising campaign.</li>
                        <li>● Identification of strengths and areas for improvement.</li>
                        <li>● Recommendations for future fundraising strategies and activities.</li>
                    </ul>
                </li>
            </ol>
<br><br>
            <p>
                <b>By entrusting us with the management of your polling units, you can be assured of a smooth, transparent, and efficient electoral process that upholds the principles of democracy and fairness.</b>
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
