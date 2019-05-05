<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
        <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/jquery.smartmenus.bootstrap.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.simpleLens.css') }}"> 
        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/nouislider.css') }}">
        <link id="switcher" href="{{ asset('css/theme-color/default-theme.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href= "<?php echo e(asset('css/sequence_theme_modern_slide_in.css')); ?>">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="{{ asset('js/menu_toggle.js') }}"></script>
        <script src="{{ asset('js/close_menu.js') }}"></script>
        <title>Laravel</title>
    </head>
  <body> 
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div>
@include('partials.header')
    @yield('content')
@include('partials.subscribe')
@include('partials.footer')
@include('partials.script')
</body>
</html>
