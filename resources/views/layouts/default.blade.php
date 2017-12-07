<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="keyword" content="員邦建築｜員旺建設 ｜台佳建設">
    <meta name="description" content="創立於1984年，「員邦室內裝修設計(股)公司」為一家領有各項法定證照並擁有「建築物室內裝修業登記證」的專業「室內設計裝修」服務供應商，憑藉著絕大多數來自於客戶推薦與再次委託的實績，我們已在許多不同的市場區段裡，成功發展出我們完整的競爭力，在同時藉由提供積極正面、受多方訓練的專業服務，以及誠信哲學的推廣下，我們成就了市場區段從「辦公空間」到「 健康醫療美容」，每個令人稱羨的成功案例。">
    <meta name="author" content="員邦建築｜員旺建設 ｜台佳建設">
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
   </body>
 </html>
