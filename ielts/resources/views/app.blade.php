<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title inertia>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Scripts -->
        @routes
        @vite('resources/js/app.js')
        @inertiaHead
    <!--- custom css --->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="/custom_folder/img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="/custom_folder/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="/_custom_folder/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/custom_folder/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="/custom_folder/css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="/custom_folder/fonts/flaticon.css">
    <!-- Full Calender CSS -->
    <link rel="stylesheet" href="/custom_folder/css/fullcalendar.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/custom_folder/css/animate.min.css">
    <!-- Custom CSS -->
     <link rel="stylesheet" href="/custom_folder/style.css">
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
    <script src="/custom_folder/js/modernizr-3.6.0.min.js"></script>
    <!-- jquery-->
    <script src="/custom_folder/js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="/custom_folder/js/plugins.js"></script>
    <!-- Popper js -->
    <script src="/custom_folder/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/custom_folder/js/bootstrap.min.js"></script>
    <!-- Counterup Js -->
    <script src="/custom_folder/js/jquery.counterup.min.js"></script>
    <!-- Moment Js -->
    <script src="/custom_folder/js/moment.min.js"></script>
    <!-- Waypoints Js -->
    <script src="/custom_folder/js/jquery.waypoints.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="/custom_folder/js/jquery.scrollUp.min.js"></script>
    <!-- Chart Js -->
    <script src="/custom_folder/js/Chart.min.js"></script>
    <!-- Full Calender Js -->
    <script src="/custom_folder/js/fullcalendar.min.js"></script>
    <!-- Custom Js -->
    <script src="/custom_folder/js/main.js"></script>
</html>
