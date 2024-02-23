<!DOCTYPE html>
<html lang="en" class="h-100">


<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:title" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>BBSUL Alumni Portal</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href={{url("assets/images/logo-full.png")}}>
	<link href={{url("assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css")}} rel="stylesheet">
   <link href={{url("assets/css/style.css")}} rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
         <div class="container-fluid h-100">
             <div class="row h-100">
                 <div class="col-lg-6 col-md-7 col-sm-12 mx-auto align-self-center">
                     <div class="login-form">
                         <div class="text-center">
                             <h3 class="title">Welcome to BBSUL Alumni Portal</h3>
                         </div>
       

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')"  autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="form-control" type="password" name="password"  autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>

            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <a class="btn-link text-primary"  href="{{ route('register') }}">
                    {{ __('Register Yourself') }}
                </a>
                <x-button class="btn btn-primary btn-block mt-4 ">
                    
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>



    </div>
</div>
<div class="col-xl-6 col-lg-6">
    <div class="pages-left h-100">
        <div class="login-media text-center">
            <img src={{url("assets/images/login.png")}} alt="">
        </div>
        <div class="login-content">
          
            {{-- <a href="/"><img src={{url("assets/images/logo-full.png")}} class="mb-3 logo-dark" alt=""></a>
            <a href="/"><img src={{url("assets/images/logi-white.png")}} class="mb-3 logo-light" alt=""></a> --}}
 
            <p>An alumni portal of BBSUl connects former students of university. It can help you build a strong network, engage your alumni, and showcase your achievements.</p>
        </div>
       
    </div>
</div>
</div>
</div>
</div>

<!--**********************************
Scripts
***********************************-->
<!-- Required vendors -->
<script src={{url("assets/vendor/global/global.min.js")}}></script>
<script src={{url("assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js")}}></script>
<script src={{url("assets/js/custom.js")}}></script>
<script src={{url("assets/js/deznav-init.js")}}></script>
<script src={{url("assets/js/demo.js")}}></script>

<script src={{url("assets/js/styleSwitcher.js")}}></script>
</body>

<!-- Mirrored from w3crm.dexignzone.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Feb 2024 14:30:52 GMT -->
</html>
