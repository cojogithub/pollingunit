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
        <div class="formbold-form-wrapper" style="background-color: red;">
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
                            <input type="text" name="firstname" id="firstname" placeholder="First Name" class="formbold-form-input" value="{{ old('firstname') }}" required />
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Last Name</p>
                            <input type="text" name="lastname" id="lastname" placeholder="Last Name" class="formbold-form-input" value="{{ old('lastname') }}" required />
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
                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Email Address</p>
                            <input type="email" name="email" id="email" placeholder="example@email.com" class="formbold-form-input" value="{{ old('email') }}" required />
                        </fieldset>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Password</p>
                            <input type="password" name="password" id="password" placeholder="Password" class="formbold-form-input" required />
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Confirm Password</p>
                            <input type="password" name="password_confirmation" id="password-confirm" placeholder="Confirm Password" class="formbold-form-input" required />
                        </fieldset>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Voter ID Number</p>
                            <input type="text" name="voter_id" id="voter_id" placeholder="Voter ID Number" class="formbold-form-input" value="{{ old('voter_id') }}" />
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">NIN or BVN</p>
                            <input type="text" name="idnumber" id="idnumber" placeholder="NIN or BVN" class="formbold-form-input" value="{{ old('idnumber') }}" />
                        </fieldset>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Phone Number</p>
                            <input type="tel" name="phone" id="phone" placeholder="Phone Number" class="formbold-form-input" value="{{ old('phone') }}" />
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Date of Birth</p>
                            <input type="date" name="dob" id="dob" class="formbold-form-input" value="{{ old('dob') }}" />
                        </fieldset>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-12">
                        <fieldset>
                            <p style="color: white;">Street Address</p>
                            <input type="text" name="address" id="address" placeholder="Street Address" class="formbold-form-input formbold-mb-3" value="{{ old('address') }}" />
                        </fieldset>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">State</p>
                            <select name="state" id="state" class="formbold-form-input">
                                <option value="" disabled selected>Select State</option>
                                @foreach ($states as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Senatorial District</p>
                            <select name="senatorial_district" id="senatorial_district" class="formbold-form-input">
                                <option value="" disabled selected>Select Senatorial District</option>
                            </select>
                        </fieldset>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Federal Constituency</p>
                            <select name="federal_constituency" id="federal_constituency" class="formbold-form-input">
                                <option value="" disabled selected>Select Federal Constituency</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Local Goverment</p>
                            <select name="lga" id="lga" class="formbold-form-input">
                                <option value="" disabled selected>Select LGA</option>
                            </select>
                        </fieldset>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Ward</p>
                            <select name="ward" id="ward" class="formbold-form-input">
                                <option value="" disabled selected>Select Ward</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                            <p style="color: white;">Polling Unit</p>
                            <select name="polling_unit" id="polling_unit" class="formbold-form-input">
                                <option value="" disabled selected>Select Polling Unit</option>
                            </select>
                        </fieldset>
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <div class="col-lg-4">
                        <fieldset>
                            <p style="color: white;">Upload Photo of ID</p>
                            <input type="file" name="photo" id="photo" class="formbold-form-input" style="width: 100%;" />
                        </fieldset>
                    </div>
                </div>

                <br>

                <div class="form-group row">
                    <div class="col-lg-12 confirmation-container">
                        <fieldset>
                            <p style="color: white;"></p>
                            <label for="confirmation" class="confirmation-label">
                                <input type="radio" name="confirmation" id="confirmation" value="confirmed" {{ old('confirmation') == 'confirmed' ? 'checked' : '' }} />
                                I confirm that the information provided is accurate and truthful.
                            </label>
                        </fieldset>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-12">
                        <fieldset>
                            <p style="color: white;"></p>
                            <button class="formbold-btn">Submit</button>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            function fetchOptions(url, target) {
                $.ajax({
                    url: url,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $(target).empty();
                        $(target).append('<option value="" disabled selected>Select</option>');
                        $.each(data, function(key, value) {
                            $(target).append('<option value="' + key + '">' + value + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.log("Error: " + status + " " + error);
                    }
                });
            }

            $('#state').change(function() {
                let stateId = $(this).val();
                fetchOptions('/get-senatorial-districts/' + stateId, '#senatorial_district');
                $('#federal_constituency, #lga, #ward, #polling_unit').empty().append('<option value="" disabled selected>Select</option>');
            });

            $('#senatorial_district').change(function() {
                let districtId = $(this).val();
                fetchOptions('/get-federal-constituencies/' + districtId, '#federal_constituency');
                $('#lga, #ward, #polling_unit').empty().append('<option value="" disabled selected>Select</option>');
            });

            $('#federal_constituency').change(function() {
                let constituencyId = $(this).val();
                fetchOptions('/get-lgas/' + constituencyId, '#lga');
                $('#ward, #polling_unit').empty().append('<option value="" disabled selected>Select</option>');
            });

            $('#lga').change(function() {
                let lgaId = $(this).val();
                fetchOptions('/get-wards/' + lgaId, '#ward');
                $('#polling_unit').empty().append('<option value="" disabled selected>Select</option>');
            });

            $('#ward').change(function() {
                let wardId = $(this).val();
                fetchOptions('/get-polling-units/' + wardId, '#polling_unit');
            });

            // Add margin to about section when selected from the nav
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
        });
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        .formbold-mb-3 {
            margin-bottom: 15px;
        }

        .formbold-main-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px;
        }

        .formbold-form-wrapper {
            margin: 0 auto;
            width: 60%;
            max-width: 100%;
            background: white;
            padding: 40px;
        }

        .formbold-img {
            display: block;
            margin: 0 auto 45px;
        }

        .formbold-input-wrapp>div {
            display: flex;
            gap: 20px;
        }

        .formbold-input-flex {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
        }

        .formbold-input-flex>div {
            width: 50%;
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

        .formbold-form-label {
            color: #07074D;
            font-weight: 500;
            font-size: 14px;
            line-height: 24px;
            display: block;
            margin-bottom: 10px;
        }

        .formbold-form-file-flex {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .formbold-form-file-flex .formbold-form-label {
            margin-bottom: 0;
        }

        .formbold-form-file {
            font-size: 14px;
            line-height: 24px;
            color: #536387;
        }

        .formbold-form-file::-webkit-file-upload-button {
            display: none;
        }

        .formbold-form-file:before {
            content: 'Upload file';
            display: inline-block;
            background: #EEEEEE;
            border: 0.5px solid #FBFBFB;
            box-shadow: inset 0px 0px 2px rgba(0, 0, 0, 0.25);
            border-radius: 3px;
            padding: 3px 12px;
            outline: none;
            white-space: nowrap;
            -webkit-user-select: none;
            cursor: pointer;
            color: #637381;
            font-weight: 500;
            font-size: 12px;
            line-height: 16px;
            margin-right: 10px;
        }

        .confirmation-container {
            text-align: center;
        }

        .confirmation-label {
            color: #07074D;
            font-weight: 500;
            font-size: 14px;
            line-height: 24px;
            display: inline-block;
            margin-bottom: 10px;
        }

        .formbold-btn {
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

        .formbold-btn:hover {
            box-shadow: 0px 3px 8px rgba(103, 103, 103, 0.05);
        }

        .formbold-w-50 {
            width: 50%;
        }
    </style>
</body>

</html>
