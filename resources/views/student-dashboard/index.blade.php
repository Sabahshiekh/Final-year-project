<!DOCTYPE html>
<html lang="en">
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
        <title>W3CRM Customer Relationship Management</title>
        <!-- FAVICONS ICON -->
        <link rel="shortcut icon" type="mage/png" href={{url("assets/images/logo-full.png")}}>
        
        <link href={{url("assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" )}}rel="stylesheet">
        <link href={{url("assets/vendor/swiper/css/swiper-bundle.min.css")}} rel="stylesheet">
        <link href={{url("assets/https://fonts.googleapis.com/css2?family=Material+Icons")}} rel="stylesheet">
        <link rel="stylesheet" href={{url("assets/../../cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css")}}>
        <link href={{url("assets/vendor/datatables/css/jquery.dataTables.min.css" )}}rel="stylesheet">
        <link href={{url("assets/vendor/jvmap/jquery-jvectormap.css")}} rel="stylesheet">
        <link href={{url("assets/../../cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css")}} rel="stylesheet">
        <link href={{url("assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css")}} rel="stylesheet">
        
        <!-- tagify-css -->
        <link href={{url("assets/vendor/tagify/dist/tagify.css")}} rel="stylesheet">
        
        <!-- Style css -->
       <link href={{url("assets/css/style.css")}} rel="stylesheet">
        
    </head>


    <body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black" data-headerbg="color_1">

        <!--*******************
            Preloader start
        ********************-->
        <div id="preloader">
            <div class="lds-ripple">
                <div></div>
                <div></div>
            </div>
        </div>

        <div id="main-wrapper">


   

         @include('theme-layout.header')
         @include('theme-layout.sidebar')

       
         <div class="content-body">
             <!-- row -->	
          <div class="page-titles">
             <ol class="breadcrumb">
                <li><h5 class="bc-title">Student Dashboard</h5></li>
               
             </ol>
            
          </div>
       
         </div>
        

        </div>






          <!-- Required vendors -->
     <script src={{url("assets/vendor/global/global.min.js")}}></script>
     <script src={{url("assets/vendor/chart.js/Chart.bundle.min.js")}}></script>
     <script src={{url("assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js")}}></script>
     <script src={{url("assets/vendor/apexchart/apexchart.js")}}></script>
     
     <!-- Dashboard 1 -->
     <script src={{url("assets/js/dashboard/dashboard-1.js")}}></script>
     <script src={{url("assets/vendor/draggable/draggable.js")}}></script>
     
     
     <!-- tagify -->
     <script src={{url("assets/vendor/tagify/dist/tagify.js")}}></script>
      
     <script src={{url("assets/vendor/datatables/js/jquery.dataTables.min.js")}}></script>
     <script src={{url("assets/vendor/datatables/js/dataTables.buttons.min.js")}}></script>
     <script src={{url("assets/vendor/datatables/js/buttons.html5.min.js")}}></script>
     <script src={{url("assets/vendor/datatables/js/jszip.min.js")}}></script>
     <script src={{url("assets/js/plugins-init/datatables.init.js")}}></script>
    
     <!-- Apex Chart -->
     
     <script src={{url("assets/vendor/bootstrap-datetimepicker/js/moment.js")}}></script>
     <script src={{url("assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js")}}></script>
     
 
     <!-- Vectormap -->
     <script src={{url("assets/vendor/jqvmap/js/jquery.vmap.min.js")}}></script>
     <script src={{url("assets/vendor/jqvmap/js/jquery.vmap.world.js")}}></script>
     <script src={{url("assets/vendor/jqvmap/js/jquery.vmap.usa.js")}}></script>
      <script src={{url("assets/js/custom.js")}}></script>
     <script src={{url("assets/js/deznav-init.js")}}></script>
     <script src={{url("assets/js/demo.js")}}></script>
     <script src={{url("assets/js/styleSwitcher.js")}}></script>
</body>
</html>