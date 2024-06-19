<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{config('app.name')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link href="{{asset('images/logo.png')}}" rel="icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script nonce="991464ec-edd5-44f2-b742-13c23523bc94">
        // Rest of the code...
    </script>
    <style>
        /* login modal  */

        .login-card {
            display: none;
            position: fixed; /* or 'fixed' */
            top: 50%; /* center the card vertically */
            left: 50%; /* center the card horizontally */
            transform: translate(
                -50%,
                -50%
            ); /* adjust the card's position to its center */
            z-index: 10000;
            height: 400px;
            width: 300px;
            padding: 10px;
            border-radius: 5px;
            background: #17468a;
            color: #fff;
        }

        .login-card h3 {
            color: #fff;
        }

        .login-card span {
            font-size: 8;
            font-style: italic;
        }

        .login-card button {
            width: 90%;
            margin: 10px;
            background: #fff;
            color: #61a0d5;
            font-weight: bold;
        }

        .login-card button:hover {
            color: #61a0d5;
            background: #fff;
        }

        .login-card .close {
            z-index: 100001;

            position: absolute;
            top: 0;
            right: 0;
            color: #fff;
            /* font-size: 40px; */
            /* height: 100px; */
            padding: 5px;
            cursor: pointer;
            border: #fff 1px solid;
            border-radius: 100%;
        }

        .login-card .register-btn {
            cursor: pointer;
        }

        /* comments */
        .comment {
            margin-top: 20px;
            margin-bottom: 20px;
            padding: 10px;
            /* border: 1px solid #ddd; */
            border-radius: 5px;
            background: #f5f4f4;
        }

        .comments {
            margin-top: 20px;
        }

        .comment-added {
            font-size: 5;
            font-style: italic;
        }

        .comments button {
            color: #fff;
            background-color: #11579c;
            margin-top: 20px;
        }

        .comments button:hover {
            color: #fff;
        }
    </style>
</head>

<body>
    @include('includes.topbar')
    @include('includes.navbar')

    @yield('content')
    <!-- Back to top button -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    @include('partials.footer')
    @include('includes.modal')


    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>

    {{-- extra libraries --}}
    {{-- text area formatting: CKEditor --}}
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        window.onload = function() {
            CKEDITOR.replace('content');
        }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset('js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&amp;sensor=false"></script>
    <script src="{{asset('js/google-map.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vef91dfe02fce4ee0ad053f6de4f175db1715022073587" integrity="sha512-sDIX0kl85v1Cl5tu4WGLZCpH/dV9OHbA4YlKCuCiMmOQIk4buzoYDZSFj+TvC71mOBLh8CDC/REgE0GX0xcbjA==" data-cf-beacon='{"rayId":"88e12d83fc06669d","b":1,"version":"2024.4.1","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/wilcon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2024 16:50:07 GMT -->

</html>
