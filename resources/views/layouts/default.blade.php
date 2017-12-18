<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="keyword" content="員邦建築 員旺建設 台佳建設 都美機構">
    <meta name="description" content="員邦集團深耕於建築相關產業，集團內：員邦建築、員旺建設、員邦建設、台佳建設、峻佳工程、旺邦營造、都美機構、員邦室內裝修、普騰預伴混凝土完整一條龍建築產業。">
    <meta name="author" content="員邦建築 員旺建設 台佳建設 都美機構">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- MOBILE FIRST --}}
    <link rel="icon" href="{{ asset ('img/favicon.ico') }}" type="image/x-icon" />
    <!--載入自行設定的CSS-->
    <link rel="stylesheet" href="{{ asset ('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/screen.css') }}">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    </head>
    <body>
      <div id="app">
        @yield('content')
        @include('_includes.foot.main')
      </div>
      <a href="#0" class="cd-top "><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
      <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="{{ asset ('js/app.js') }}"></script>
      @yield('scripts')
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111266025-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-111266025-1');
      </script>
      <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "url": "http://ybc.yuanbang.com.tw",
        "name": "員邦建築 員旺建設.",
        "contactPoint": {
          "@type": "ContactPoint",
          "telephone": "+886-2-8522-5579",
          "contactType": "Customer service"
        }
      }
      </script>
   </body>
 </html>
