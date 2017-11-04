<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="keyword" content="給搜尋網頁的關鍵字">
    <meta name="description" content="員邦建設公司的敘述">
    <meta name="author" content="員邦建設">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- MOBILE FIRST --}}
    <link rel="icon" href="{{ asset ('img/favicon.ico') }}" type="image/x-icon" />

    <!--載入自行設定的CSS-->
    <link rel="stylesheet" href="{{ asset ('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/screen.css') }}">
    </head>
    <body>
      <div id="app">
        @yield('content')
      </div>
      <a href="#0" class="cd-top "><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
      <script src="{{ asset ('js/app.js') }}"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="{{ asset ('js/sites.js') }}"></script>
   {{-- <script src="{{ asset ('js/onScroll.js') }}"></script> --}}

   </body>
 </html>
