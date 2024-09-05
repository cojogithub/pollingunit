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
            <img src="{{ asset('storage/small-icon.ico') }}" alt="Logo" class="formbold-img">

            <h1 style="text-align:center;color:#ffffff">POLLING UNIT</h1>

            <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
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
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">First Name</p>
                            <input type="text" name="firstname" id="firstname" placeholder="First Name"
                                class="formbold-form-input" value="{{ old('firstname') }}" required />
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Last Name</p>
                            <input type="text" name="lastname" id="lastname" placeholder="Last Name"
                                class="formbold-form-input" value="{{ old('lastname') }}" required />
                        </fieldset>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Gender</p>
                            <select class="formbold-form-input" name="gender" id="gender">
                                <option value="" disabled selected>Gender</option>
                                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female
                                </option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Email Address</p>
                            <input type="email" name="email" id="email" placeholder="example@email.com"
                                class="formbold-form-input" value="{{ old('email') }}" required />
                        </fieldset>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Password</p>
                            <input type="password" name="password" id="password" placeholder="Password"
                                class="formbold-form-input" required />
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Confirm Password</p>
                            <input type="password" name="password_confirmation" id="password-confirm"
                                placeholder="Confirm Password" class="formbold-form-input" required />
                        </fieldset>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Voter ID Number</p>
                            <input type="text" name="voter_id" id="voter_id" placeholder="Voter ID Number"
                                class="formbold-form-input" value="{{ old('voter_id') }}" />
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">NIN or BVN</p>
                            <input type="text" name="nin_bvn" id="nin_bvn" placeholder="NIN or BVN"
                                class="formbold-form-input" value="{{ old('nin_bvn') }}" />
                        </fieldset>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Phone Number</p>
                            <input type="tel" name="phone" id="phone" placeholder="Phone Number"
                                class="formbold-form-input" value="{{ old('phone') }}" />
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Date of Birth</p>
                            <input type="date" name="dob" id="dob" class="formbold-form-input"
                                value="{{ old('dob') }}" />
                        </fieldset>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-12">
                        <fieldset>
                            <p style="color: white;">Street Address</p>
                            <input type="text" name="address" id="address" placeholder="Street Address"
                                class="formbold-form-input formbold-mb-3" value="{{ old('address') }}" required />
                        </fieldset>
                    </div>
                </div>

<div class="form-group row">
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">State of Origin</p>
                            <select class="formbold-form-input" name="state_id" id="state" onchange="fetchSenatorialDistricts()">
                                <option value="" disabled selected>Select State</option>
                                @foreach ($states as $id => $name)
                                    <option value="{{ $id }}" {{ old('state_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
                                @endforeach
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Senatorial District</p>
                            <select class="formbold-form-input" name="senatorial_district_id" id="senatorial_district" onchange="fetchFederalConstituencies()">
                                <option value="" disabled selected>Select Senatorial District</option>
                            </select>
                        </fieldset>
                    </div>
                </div>

                <!-- Federal Constituency and Lga fields -->
                <div class="form-group row">
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Federal Constituency</p>
                            <select class="formbold-form-input" name="federal_constituency_id" id="federal_constituency" onchange="fetchLgas()">
                                <option value="" disabled selected>Select Federal Constituency</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Local Government Area (Lga)</p>
                            <select class="formbold-form-input" name="lga_id" id="lga" onchange="fetchWards()">
                                <option value="" disabled selected>Select LGA</option>
                            </select>
                        </fieldset>
                    </div>
                </div>

                <!-- Ward and Polling Unit fields -->
                <div class="form-group row">
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Ward</p>
                            <select class="formbold-form-input" name="ward_id" id="ward" onchange="fetchPollingUnits()">
                                <option value="" disabled selected>Select Ward</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Polling Unit</p>
                            <select class="formbold-form-input" name="polling_unit_id" id="polling_unit">
                                <option value="" disabled selected>Select Polling Unit</option>
                            </select>
                        </fieldset>
                    </div>
                </div>

                <div class="form-group">
                    <label for="profile_image" style="color: white;">Profile Image (optional)</label>
                    <input type="file" class="form-control" name="profile_image" id="profile_image">
                </div>

                <button type="submit" class="main-button">Register</button>
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

        function fetchSenatorialDistricts() {
            var stateId = document.getElementById("state").value;
            if (stateId) {
                $.ajax({
                    url: '/get-senatorial-districts/' + stateId,
                    type: 'GET',
                    success: function (data) {
                        $('#senatorial_district').empty().append('<option value="" disabled selected>Select Senatorial District</option>');
                        $.each(data, function (key, value) {
                            $('#senatorial_district').append('<option value="' + key + '">' + value + '</option>');
                        });
                    },
                    error: function () {
                        alert('Error fetching senatoral districts.');
                    }
                });
            }
        }

        function fetchFederalConstituencies() {
            var districtId = document.getElementById("senatorial_district").value;
            if (districtId) {
                $.ajax({
                    url: '/get-federal-constituencies/' + districtId,
                    type: 'GET',
                    success: function (data) {
                        $('#federal_constituency').empty().append('<option value="" disabled selected>Select Federal Constituency</option>');
                        $.each(data, function (key, value) {
                            $('#federal_constituency').append('<option value="' + key + '">' + value + '</option>');
                        });
                    },
                    error: function () {
                        alert('Error fetching federal constituencies.');
                    }
                });
            }
        }

        function fetchLgas() {
            var constituencyId = document.getElementById("federal_constituency").value;
            if (constituencyId) {
                $.ajax({
                    url: '/get-lgas/' + constituencyId,
                    type: 'GET',
                    success: function (data) {
                        $('#lga').empty().append('<option value="" disabled selected>Select LGA</option>');
                        $.each(data, function (key, value) {
                            $('#lga').append('<option value="' + key + '">' + value + '</option>');
                        });
                    },
                    error: function () {
                        alert('Error fetching LGAs.');
                    }
                });
            }
        }

        function fetchWards() {
            var lgaId = document.getElementById("lga").value;
            if (lgaId) {
                $.ajax({
                    url: '/get-wards/' + lgaId,
                    type: 'GET',
                    success: function (data) {
                        $('#ward').empty().append('<option value="" disabled selected>Select Ward</option>');
                        $.each(data, function (key, value) {
                            $('#ward').append('<option value="' + key + '">' + value + '</option>');
                        });
                    },
                    error: function () {
                        alert('Error fetching wards.');
                    }
                });
            }
        }

        function fetchPollingUnits() {
            var wardId = document.getElementById("ward").value;
            if (wardId) {
                $.ajax({
                    url: '/get-polling-units/' + wardId,
                    type: 'GET',
                    success: function (data) {
                        $('#polling_unit').empty().append('<option value="" disabled selected>Select Polling Unit</option>');
                        $.each(data, function (key, value) {
                            $('#polling_unit').append('<option value="' + key + '">' + value + '</option>');
                        });
                    },
                    error: function () {
                        alert('Error fetching polling units.');
                    }
                });
            }
        }
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

        html, body {
            height: 100%;
            background: red;
        }

        body {
            font-family: 'Inter', sans-serif;
            display: flex;
            flex-direction: column;
        }

        header {
            background: black; /* Change navbar background to black */
        }

        .formbold-main-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px;
            width: 100%;
            flex: 1 0 auto;
        }

        .formbold-form-wrapper {
            margin: 0 auto;
            width: 100%;
            max-width: 600px;
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

        /* Footer background and text color */
        footer {
            background: red;
            padding: 20px 0;
            flex-shrink: 0;
        }

        footer p {
            color: white; /* Set the footer text color to white */
            text-align: center;
        }
    </style>
</body>

</html>


