<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="POLLING UNIT is a cutting-edge web application designed to transform the way voting is monitored at POLLING UNITs across Africa. With a mission to promote transparency, accountability, and efficiency in the electoral process, POLLING UNIT provides a comprehensive platform for real-time monitoring and reporting.">
    <meta name="author" content="CloudPromptAI">
    <title>POLLING UNIT</title>

    <!-- CSS Files -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/polling-unit.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- JS Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
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

    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
	    <!-- Logo -->
            <h1 style="text-align:center;color:#ffffff">POLLING UNIT</h1>
            <img src="{{ asset('images/small-icon.ico') }}" alt="Logo" class="formbold-img">
            <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group row">
                    <div class="col-lg-12">
                        <fieldset>
                            <p style="color: white;">Email Address</p>
                            <input type="email" name="email" id="email" placeholder="example@email.com" class="formbold-form-input" value="{{ old('email') }}" required />
                        </fieldset>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-12">
                        <fieldset>
                            <p style="color: white;">Password</p>
                            <input type="password" name="password" id="password" placeholder="Password" class="formbold-form-input" required />
                        </fieldset>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-12">
                        <fieldset>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-12">
                        <fieldset>
                            <button type="submit" class="main-button">
                                {{ __('Login') }}
                            </button>
                        </fieldset>
                    </div>
                    <div class="col-lg-12">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>© <span id="currentYear"></span> <span style="color:rgb(255, 255, 255); font-weight:500;">POLLING UNIT</span> All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        var currentYear = new Date().getFullYear();
        document.getElementById("currentYear").textContent = currentYear;

        document.addEventListener('DOMContentLoaded', function () {
            const sections = document.querySelectorAll('section, .welcome-area');
            const navLi = document.querySelectorAll('.nav li a');

            window.addEventListener('scroll', () => {
                let current = '';

                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (pageYOffset >= sectionTop - sectionHeight / 3) {
                        current = section.getAttribute('id');
                    }
                });

                navLi.forEach(a => {
                    a.classList.remove('active');
                    if (a.getAttribute('href').includes(current)) {
                        a.classList.add('active');
                    }
                });
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

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: red;
        }

        .formbold-main-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px;
            width: 100%; /* Ensure full width */
        }

        .formbold-form-wrapper {
            margin: 0 auto;
            width: 100%; /* Ensure full width */
            max-width: 600px; /* Maximum width to ensure it doesn't stretch too much */
            background: red;
            padding: 40px;
        }

        .formbold-img {
            display: block;
            margin: 0 auto 45px;
        }

        .formbold-form-input {
            width: 100%;
            padding: 13px 22px;
            border-radius: 5px;
            border: 1px solid #dde3ec;
            background: #ffffff;
            font-weight: 500;
            font-size: 16px;
            color: #536387;
            outline: none;
            resize: none;
        }

        .formbold-form-input::placeholder,
        select.formbold-form-input,
        .formbold-form-input[type='date']::-webkit-datetime-edit-text,
        .formbold-form-input[type='date']::-webkit-datetime-edit-month-field,
        .formbold-form-input[type='date']::-webkit-datetime-edit-day-field,
        .formbold-form-input[type='date']::-webkit-datetime-edit-year-field {
            color: rgba(83, 99, 135, 0.5);
        }

        .formbold-form-input:focus {
            border-color: #000000;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .main-button {
            font-size: 16px;
            border-radius: 5px;
            padding: 14px 25px;
            border: none;
            font-weight: 500;
            background-color: #000000;
            color: white;
            cursor: pointer;
            margin-top: 25px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        .main-button:hover {
            box-shadow: 0px 3px 8px rgba(103, 103, 103, 0.05);
        }

        p {
            color: white;
        }

        .form-check-label {
            color: white;
        }

        /* Footer text color */
        footer p {
            color: black; /* Set the footer text color to black */
        }
    </style>
</body>

</html>
