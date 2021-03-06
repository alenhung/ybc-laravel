<div class="side-menu">
  @if (Auth::guest())
  @else
  <aside class="menu m-t-30 m-l-10">
    <hr>
    <p class="menu-label">
      首頁資訊－管理端
    </p>
    <ul class="menu-list">
    <li><a href="{{route('contactInfo.index')}}"><i class="fa fa-list-ul m-r-10" aria-hidden="true"></i>網站聯絡資訊</a></li>
      <li><a href="{{route('index_info.index')}}"><i class="fa fa-list-ul m-r-10" aria-hidden="true"></i>首頁資訊列表</a></li>
      <li><a href="{{route('indexCover.index')}}"><i class="fa fa-list-ul m-r-10" aria-hidden="true"></i>首頁封面</a></li>
    </ul>
    <hr>
    <p class="menu-label">
      企業新聞－管理端
    </p>
    <ul class="menu-list">
      <li><a href="{{route('news.index')}}"><i class="fa fa-list-ul m-r-10" aria-hidden="true"></i>企業新聞列表</a></li>
      <li><a href="{{route('news.create')}}"><i class="fa fa-plus-square m-r-10" aria-hidden="true"></i>新增企業新聞</a></li>
    </ul>
    <hr>
    <p class="menu-label">
      建案作品－管理端
    </p>
    <ul class="menu-list">
      <li><a href="{{route('works.index')}}"><i class="fa fa-list-ul m-r-10" aria-hidden="true"></i>所有建案列表</a></li>
      <li><a href="{{route('works.create')}}"><i class="fa fa-plus-square m-r-10" aria-hidden="true"></i>新增建案</a></li>
    </ul>
    <hr>
    <p class="menu-label">
      公司簡介－管理端
    </p>
    <ul class="menu-list">
      <li><a href="{{route('about.index')}}"><i class="fa fa-list-ul m-r-10" aria-hidden="true"></i>公司簡介列表</a></li>
      <li><a href="{{route('about.create')}}"><i class="fa fa-plus-square m-r-10" aria-hidden="true"></i>新增公司簡介</a></li>
      <li><a href="{{route('history.index')}}"><i class="fa fa-list-ul m-r-10" aria-hidden="true"></i>歷史沿革列表</a></li>
      <li><a href="{{route('history.create')}}"><i class="fa fa-plus-square m-r-10" aria-hidden="true"></i>新增歷史沿革</a></li>
    </ul>
    <hr>
    <p class="menu-label">
      服務項目說明－管理端
    </p>
    <ul class="menu-list">
      <li><a href="{{route('serviceInfo.index')}}"><i class="fa fa-list-ul m-r-10" aria-hidden="true"></i>服務項目列表</a></li>
      <li><a href="{{route('serviceInfo.create')}}"><i class="fa fa-plus-square m-r-10" aria-hidden="true"></i>新增服務項目</a></li>
    </ul>
    <hr>
  </aside>
  @endif
</div>
