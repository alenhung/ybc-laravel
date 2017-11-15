<nav class="navbar is-transparent has-shadow nav-fixed-top" role="navigation" aria-label="main navigation">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="{{ route('index') }}">
        <img src="{{asset('images/companyLogo.png')}}" alt="{{ config('app.name', 'Laravel') }}">
      </a>
      <div class="navbar-burger burger" v-on:click="openMenu" v-bind:class="{ 'is-active': isActive,'is-active2': isActive2}">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="navbar-menu" v-bind:class="{ 'is-active': isActive,'mobileNav': isActive2 }">
      <div class="navbar-start">
        <a class="navbar-item" href="{{route('about')}}">公司簡介</a>
        <a class="navbar-item" href="{{route('works')}}">熱銷建案</a>
        <a class="navbar-item" href="">在建工程</a>
        <a class="navbar-item" href="">都市更新</a>
        <a class="navbar-item" href="{{route('contact')}}">客戶服務</a>
      </div>
      <div class="navbar-end">
        <a class="navbar-item" href="">關係企業</a>
        <a class="navbar-item" href="">人才招募</a>
      </div>
    </div>
  </div>
</nav>
