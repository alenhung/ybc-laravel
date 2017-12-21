<nav class="navbar has-shadow">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="{{ route('manage.dashboard') }}">
        {{-- <h2>{{ config('app.name', 'Laravel') }}-網站管理端</h2> --}}
        <h2>員邦建築-網站管理端</h2>
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
        <div class="navbar-item has-dropdown" >
          <a class="navbar-link">首頁資訊</a>
          <div class="navbar-dropdown is-left">
            <a href="{{route('index_info.index')}}" class="navbar-item">
              <span class="icon"><i class="fa fa-fw fa-list-ul m-r-5"></i></span>
              首頁資訊
            </a>
            <a href="{{route('indexCover.index')}}" class="navbar-item">
              <span class="icon"><i class="fa fa-fw fa-list-ul m-r-5"></i></span>
              首頁封面
            </a>
            <hr class="navbar-divider">
            <a href="{{route('index')}}" class="navbar-item">
              前往網站頁面
            </a>
          </div>
        </div>
        <div class="navbar-item has-dropdown" >
          <a class="navbar-link">公司簡介</a>
          <div class="navbar-dropdown is-left">
            <a href="{{route('about.index')}}" class="navbar-item">
              <span class="icon"><i class="fa fa-fw fa-list-ul m-r-5"></i></span>
              公司簡介列表
            </a>
            <a href="{{route('about.create')}}" class="navbar-item">
              <span class="icon"><i class="fa fa-fw fa-plus-square m-r-5"></i></span>
              新增公司簡介
            </a>
            <a href="{{route('history.index')}}" class="navbar-item">
              <span class="icon"><i class="fa fa-fw fa-list-ul m-r-5"></i></span>
              歷史沿革列表
            </a>
            <a href="{{route('history.create')}}" class="navbar-item">
              <span class="icon"><i class="fa fa-fw fa-plus-square m-r-5"></i></span>
              新增歷史沿革
            </a>
            <hr class="navbar-divider">
            <a href="{{route('about')}}" class="navbar-item">
              前往網站頁面
            </a>
          </div>
        </div>
        <div class="navbar-item has-dropdown" >
          <a class="navbar-link">企業新聞</a>
          <div class="navbar-dropdown is-left">
            <a href="{{route('news.index')}}" class="navbar-item">
              <span class="icon"><i class="fa fa-fw fa-list-ul m-r-5"></i></span>
              企業新聞列表
            </a>
            <a href="{{route('news.create')}}" class="navbar-item">
              <span class="icon"><i class="fa fa-fw fa-plus-square m-r-5"></i></span>
              新增企業新聞
            </a>
            <hr class="navbar-divider">
            <a href="{{route('news')}}" class="navbar-item">
              前往網站頁面
            </a>
          </div>
        </div>
        <div class="navbar-item has-dropdown" >
          <a class="navbar-link">經典建案</a>
          <div class="navbar-dropdown is-left">
            <a href="{{route('works.index')}}" class="navbar-item">
              <span class="icon"><i class="fa fa-fw fa-list-ul m-r-5"></i></span>
              建案列表
            </a>
            <a href="{{route('works.create')}}" class="navbar-item">
              <span class="icon"><i class="fa fa-fw fa-plus-square m-r-5"></i></span>
              新增建案
            </a>
            {{-- <a href="{{route('workings.index')}}" class="navbar-item">
              <span class="icon"><i class="fa fa-fw fa-plus-square m-r-5"></i></span>
              新增在建工程圖片
            </a> --}}
            <hr class="navbar-divider">
            <a href="{{route('works')}}" class="navbar-item">
              前往網站頁面
            </a>
          </div>
        </div>
        <div class="navbar-item has-dropdown" >
          <a class="navbar-link">客戶服務</a>
          <div class="navbar-dropdown is-left">
            <a href="{{route('serviceInfo.index')}}" class="navbar-item">
              <span class="icon"><i class="fa fa-fw fa-list-ul m-r-5"></i></span>
              服務項目列表
            </a>
            <a href="{{route('serviceInfo.create')}}" class="navbar-item">
              <span class="icon"><i class="fa fa-fw fa-plus-square m-r-5"></i></span>
              新增服務項目
            </a>
            <hr class="navbar-divider">
            <a href="{{route('contact')}}" class="navbar-item">
              前往網站頁面
            </a>
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

            <div class="navbar-item">
              <a href="{{route('logout')}}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                <span class="icon">
                  <i class="fa fa-fw fa-sign-out m-r-5"></i>
                </span>
                登出
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
