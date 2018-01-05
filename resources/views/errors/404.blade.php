<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="keyword" content="員邦建築 員旺建設 都美機構 員邦建設 員邦 建築 建設">
    <meta name="description" content="員邦集團深耕於建築相關產業，集團內：員邦建築、員旺建設、員邦建設、峻佳工程、旺邦營造、都美機構、員邦室內裝修、普騰預伴混凝土完整一條龍建築產業。">
    <meta name="author" content="員邦建築 員旺建設 都美機構 員邦建設">
    <meta name="msvalidate.01" content="735ED086B05C933882F57D6C700E3F95" />
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
      <div class="container">
        <div class="columns">
          <div class="column">
            <img src="{{asset ('images/oops.jpg')}}" alt="">
          </div>
          <div class="column">
            <br><br>
            <h1>糟糕！出現錯誤了！</h1>
            <p>我們將儘速修正這項錯誤！</p>
            <br><br>

              <img src="{{asset ('images/companyLogoFoot.png')}}" alt="">
          </div>
        </div>
      </div>
</body>
</html>
