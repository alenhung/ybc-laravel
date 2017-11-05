<nav class="navbar has-shadow">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="{{ route('index') }}">
        <h2>{{ config('app.name', 'Laravel') }}-網站管理端</h2>
      </a>
      <div class="navbar-burger burger" v-on:click="openMenu" v-bind:class="{ 'is-active': isActive,'is-active2': isActive2}">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="navbar-menu" v-bind:class="{ 'is-active': isActive,'mobileNav': isActive2 }">
      <div class="navbar-start">
      @if (Auth::guest())
      @else
        <a class="navbar-item is-tab" href="#">熱銷建案</a>
        <a class="navbar-item is-tab" href="#">在建工程</a>
        <a class="navbar-item is-tab" href="#">都市更新</a>
        <a class="navbar-item is-tab" href="#">客戶服務</a>
        <div class="navbar-item has-dropdown" >
          <a class="navbar-link">客戶服務</a>
          <div class="navbar-dropdown is-left">
            <a class="navbar-item">
              <span class="icon"><i class="fa fa-fw fa-user-circle-o m-r-5"></i></span>
              選單
            </a>
            <a class="navbar-item">
              <span class="icon"><i class="fa fa-fw fa-bell m-r-5"></i></span>
              選單
            </a>
            <a class="navbar-item">
              <span class="icon"><i class="fa fa-fw fa-cog m-r-5"></i></span>
              選單
            </a>
            <hr class="navbar-divider">
            <div class="navbar-item">
              選單三
            </div>
          </div>
        </div>
      @endif
      </div>
      <div class="navbar-end">
        <div class="navbar-item has-dropdown" >

            @if (Auth::guest())
            <a class="navbar-link">請先登入管理者帳戶</a>
            @else
            <a class="navbar-link">Hey {{ Auth::user()->name }}</a>
          <div class="navbar-dropdown is-right">
            <a class="navbar-item">
              <span class="icon">
                <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                  </span>Profile
            </a>
            <a class="navbar-item">
              <span class="icon">
                    <i class="fa fa-fw fa-bell m-r-5"></i>
                  </span>Notifications
            </a>
            <a class="navbar-item">
              <span class="icon">
                    <i class="fa fa-fw fa-cog m-r-5"></i>
                  </span>Settings
            </a>
            <hr class="navbar-divider">
            <div class="navbar-item">
              <a href="{{route('logout')}}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                <span class="icon">
                  <i class="fa fa-fw fa-sign-out m-r-5"></i>
                </span>
                Logout
              </a>
            </div>
          </div>
          @endif
          @include('_includes.forms.logout')
        </div>
      </div>
    </div>
  </div>
</nav>
