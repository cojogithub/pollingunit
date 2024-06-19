<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="POLLING UNIT - User Dashboard">
    <meta name="author" content="CloudPromptAI">
    <title>POLLING UNIT - Election Coordination Service</title>

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
                    <img src="{{ asset('images/campaign-coordination.jpg') }}" class="rounded img-fluid d-block mx-auto"
                        alt="App">
                </div>
                <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                    <div class="left-heading">
                        <h2>Election <span style="color: red;">Campaign </span>Coordination</h2>
                        <h3 style="padding-top: 1rem; margin-bottom:.2rem; font-weight:350;">Description:</h3>
                    </div>
                    <div class="left-text">
                        <p>Our Election Campaign Coordination service is designed to provide a comprehensive suite of
                            strategic and tactical support to political candidates and parties. Our goal is to ensure
                            that your campaign runs smoothly, effectively engages with voters, and achieves its desired
                            outcomes. We offer a range of services that cover every aspect of the campaign lifecycle,
                            from initial planning to Election Day execution. Our team of experienced campaign
                            professionals utilizes the latest technologies and proven methodologies to maximize your
                            campaign's reach and impact.</p>

                        <p style="margin-top:-2rem;">At the heart of POLLING UNIT's functionality is its innovative
                            approach to assigning three dedicated workers to each POLLING UNIT. These workers, equipped
                            with the POLLING UNIT app, serve as vigilant guardians of the democratic process, ensuring
                            that every vote is counted accurately and every voice is heard.</p>
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
            <h3 style="font-weight:350;">Key Services:</h3>
            <ol>
                <li><b>1. Campaign Strategy Development:</b>
                    <ul>
                        <li>● Crafting a detailed campaign plan, including timelines, goals, and key performance
                            indicators.</li>
                        <li>● Conducting SWOT analysis and competitive analysis to identify opportunities and threats.
                        </li>
                    </ul>
                </li>
                <li><b>2. Voter Outreach and Engagement:</b>
                    <ul>
                        <li>● Developing and implementing voter outreach programs using data-driven targeting.</li>
                        <li>● Organizing town halls, rallies, and community events to engage with voters.</li>
                        <li>● Utilizing social media and digital marketing to reach a broader audience.</li>
                    </ul>
                </li>
                <li><b>3. Media and Communications Management:</b>
                    <ul>
                        <li>● Creating and distributing press releases, campaign literature, and promotional materials.</li>
                        <li>● Managing media relations, including interviews, press conferences, and media coverage.</li>
                        <li>● Crafting persuasive messages and speeches for the candidate.</li>
                    </ul>
                </li>
                <li><b>4. Grassroots Mobilization:</b>
                    <ul>
                        <li>● Recruiting, training, and managing volunteers for door-to-door canvassing and phone banking.</li>
                        <li>● Coordinating grassroots events to build community support and mobilize voters.</li>
                    </ul>
                </li>
                <li><b>5. Fundraising and Financial Management:</b>
                    <ul>
                        <li>● Developing fundraising strategies, including events, online campaigns, and donor outreach.
                        <li>● Managing campaign finances, including budgeting, reporting, and compliance with regulations.
                    </ul>
                </li>
                <li><b>6. Data Analysis and Voter Targeting:</b>
                    <ul>
                        <li>● Utilizing advanced data analytics to identify and target key voter demographics.</li>
                        <li>● Conducting polling and surveys to gauge voter sentiment and adjust strategies accordingly.</li>
                    </ul>
                </li>
                <li><b>7. Compliance and Legal Support:</b>
                    <ul>
                        <li>● Ensuring all campaign activities comply with local, state, and federal election laws.</li>
                        <li>● Providing legal support and guidance on campaign finance, advertising, and reporting requirements.</li>
                    </ul>
                </li>
                <li><b>8. Election Day Operations:</b>
                    <ul>
                        <li>● Coordinating Election Day activities, including poll monitoring and get-out-the-vote efforts.</li>
                        <li>● Managing rapid response teams to address any issues that arise on Election Day.</li>
                    </ul>
                </li>
            </ol>
<br><br>
            <h3>Deliverables:</h3>
            <br>
            <ol>
                <li><b>1. Comprehensive Campaign Plan:</b> A detailed document outlining the campaign's strategy, timeline, and goals.</li>
                <li><b>2. Voter Outreach Materials:</b> Customized flyers, brochures, social media content, and email templates for voter engagement.</li>
                <li><b>3. Media Kit:</b> Press releases, candidate bios, and key messages for media distribution.</li>
                <li><b>4. Volunteer Training Programs:</b> Training manuals, schedules, and resources for volunteer recruitment and management.</li>
                <li><b>5. Fundraising Reports:</b> Regular reports on fundraising activities, donor engagement, and financial status.</li>
                <li><b>6. Data Analytics Reports:</b> Insights and analysis on voter demographics, polling results, and campaign performance metrics.</li>
                <li><b>7. Legal Compliance Documentation:</b> Documentation and guidance on campaign finance, advertising regulations, and reporting requirements.</li>
                <li><b>8. Election Day Coordination Plan:</b> A detailed plan for Election Day operations, including poll monitoring schedules and get-out-the-vote strategies.</li>
            </ol>
            <br>
            <p>
                <b>By partnering with us for Election Campaign Coordination, you can focus on connecting with voters and
                sharing your message, while we handle the complexities of campaign management. Our expertise and
                dedication ensure that your campaign is positioned for success from start to finish.
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
