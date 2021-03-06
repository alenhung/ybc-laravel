<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}-網站管理端</title> --}}
    <title>員邦建築-網站管理端</title>
    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
      @include('_includes.nav.admin')
      @include('_includes.nav.manage')
        <div class="management-area" id="app">
      @yield('content')
      </div>
    <!-- Scripts -->
    <script src="{{ asset('js/admin.js') }}"></script>

    @yield('scripts')

</body>
</html>
