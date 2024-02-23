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
	<title>Alumni Registration</title>
	
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

                    <div class="text-center">
                        <a href="/"><img src={{url("assets/images/logo-full.png")}} class="mb-3 logo-dark" alt=""></a>
                    </div>

                     <div class="login-form">


                         <div class="text-center">
                             <h3 class="title">Register your Alumni Account</h3>
                         </div>
                         
                         {{-- <x-validation-errors class="mb-4" /> --}}


        <form method="POST" action="{{ route('register') }}">
            @csrf
        
            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="form-control" type="text" name="name" :value="old('name')"  autofocus />
                <x-input-error  style="color: red" for="name" class="mt-2" />

            </div>
        
            <div class="mt-4">
                <x-label for="father_name" value="{{ __('Father Name') }}" />
                <x-input id="father_name" class="form-control" type="text" name="father_name" :value="old('father_name')"  />
                <x-input-error style="color: red"  for="name" class="mt-2" />

            </div>
        
            <div class="mt-4">
                <x-label for="registration_no" value="{{ __('Registration No') }}" />
                <x-input id="registration_no" class="form-control" type="text" name="registration_no" :value="old('registration_no')"  />
                <x-input-error style="color: red"  for="name" class="mt-2" />

            </div>
        
            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')"  /> 
                               <x-input-error style="color: red"  for="name" class="mt-2" />

            </div>
        
            <div class="mt-4">
                <x-label for="dob" value="{{ __('Date of Birth') }}" />
                <x-input id="dob" class="form-control" type="date" name="dob" :value="old('dob')"  />
                <x-input-error style="color: red"  for="name" class="mt-2" />
            </div>
        
            <div class="mt-4">
                <x-label for="phone_number" value="{{ __('Phone Number') }}" />
                <x-input id="phone_number" class="form-control" type="text" name="phone_number" :value="old('phone_number')"  />
                <x-input-error style="color: red"  for="name" class="mt-2" />
            </div>
        
            <div class="mt-4">
                <x-label for="gender" value="{{ __('Gender') }}" />
                <select id="gender" name="gender" class="form-control" >
                    <option value="" disabled selected>Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <x-input-error style="color: red"  for="name" class="mt-2" />
            </div>
            
        
            <div class="mt-4">
                <x-label for="joining_year" value="{{ __('Joining Year') }}" />
                <x-input id="joining_year" class="form-control" type="number" name="joining_year" :value="old('joining_year')"  />
                <x-input-error style="color: red"  for="name" class="mt-2" />
            </div>
        
            <div class="mt-4">
                <x-label for="passing_year" value="{{ __('Passing Year') }}" />
                <x-input id="passing_year" class="form-control" type="number" name="passing_year" :value="old('passing_year')"  />
                <x-input-error style="color: red"  for="name" class="mt-2" />
            </div>
        
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" id="dz-password" class="form-control" type="password" name="password"  autocomplete="new-password" />
                <x-input-error style="color: red"  for="name" class="mt-2" />
                {{-- <span class="show-pass eye">
								
                    <i class="fa fa-eye-slash"></i>
                    <i class="fa fa-eye"></i>
                
                </span> --}}
            </div>
        
            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="form-control" type="password" name="password_confirmation"  autocomplete="new-password" />
                <x-input-error style="color: red"  for="name" class="mt-2" />
            </div>
        
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <label for="terms" class="flex items-center">
                        <input id="terms" type="checkbox" name="terms"  class="form-checkbox">
                        <span class="ml-2">{!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                        ]) !!}</span>
                    </label>
                </div>
            @endif
        
            <div class="flex items-center justify-end mt-4">
                <a class="btn-link text-primary"  href="{{ route('login') }}">
                    {{ __('Already Registered?') }}
                </a>
        
                <x-button class="btn btn-primary btn-block mt-4 mb-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
        
					</div>
				</div>


                {{-- <div class="col-xl-6 col-lg-6">
					<div class="pages-left h-100">
						<div class="login-content">
							<a href="index.html"><img src={{url("assets/images/logo-full.png")}} class="mb-3 logo-dark" alt=""></a>
							<a href="index.html"><img src={{url("assets/images/logi-white.png")}} class="mb-3 logo-light" alt=""></a>
							<p>CRM dashboard uses line charts to visualize customer-related metrics and trends over time.</p>
						</div>
						<div class="login-media text-center">
							<img src={{url("assets/images/login.png")}} alt="">
						</div>
					</div>
                </div> --}}



                
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
