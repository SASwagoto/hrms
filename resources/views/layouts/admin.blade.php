<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Page Title Here -->
	<title>@yield('title') || {{ config('app.name', 'Laravel') }}</title>

<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{asset('assets')}}/images/favicon.png" >
	<link href="{{asset('assets')}}/vendor/wow-master/css/libs/animate.css" rel="stylesheet">
    @stack('css')
	<!-- Style css -->
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
    <style>
        ul.action_btn{
            float: right;
        }
        ul.action_btn li{
            float: left;
            margin: 0px 10px;
        }
        .content-body{
            margin-bottom: 40px !important;
        }
        .ov_auto{
            overflow: auto !important;
        }
        .footer{
            position: fixed;
            bottom: 0px;
            width: 100%;
        }
        .dropdown.bootstrap-select.swal2-select{
            display: none;
        }
    </style>
	<link rel="stylesheet" href="{{asset('assets')}}/css/custom.css">
</head>
<body>

    <div id="main-wrapper" class="wallet-open show">
	

        @include('layouts.partials.header')

		@include('layouts.partials.chatbox')

		@include('layouts.partials.topbar')

        @include('layouts.partials.sidebar')

        <div class="content-body">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

		@include('layouts.partials.footer')

	</div>
    @include('layouts.partials.modal')

    @include('sweetalert::alert')
	
    
    <!-- Required vendors -->
    <script src="{{asset('assets')}}/vendor/global/global.min.js"></script>
    @stack('js')
    <script src="{{asset('assets')}}/js/custom.min.js"></script>
	<script src="{{asset('assets')}}/js/dlabnav-init.js"></script>
    

    <script>
        $('.bell-link').on('click', function(){
            $('#main-wrapper').addClass('active');
        });
        $('.chatbox-close').on('click', function(){
            $('#main-wrapper').removeClass('active');
        });
    </script>
</body>
</html>