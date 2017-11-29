<div class="side-menu">
  @if (Auth::guest())
  @else
  <aside class="menu m-t-30 m-l-10">
    <hr>
    <p class="menu-label">
      熱銷建案－管理端
    </p>
    <ul class="menu-list">
      <li><a href="{{route('works.index')}}"><i class="fa fa-list-ul m-r-10" aria-hidden="true"></i>熱銷建案列表</a></li>
      <li><a href="{{route('works.create')}}"><i class="fa fa-plus-square m-r-10" aria-hidden="true"></i>新增熱銷建案</a></li>
    </ul>
    <hr>
    <p class="menu-label">
      在建工程－管理端
    </p>
    <ul class="menu-list">
      <li><a href="{{route('workings.index')}}"><i class="fa fa-list-ul m-r-10" aria-hidden="true"></i>在建工程列表</a></li>
      <li><a href="{{route('workings.create')}}"><i class="fa fa-plus-square m-r-10" aria-hidden="true"></i>新增在建工程</a></li>
      <li><a href="{{route('working_photos.create')}}"><i class="fa fa-file-image-o m-r-10" aria-hidden="true"></i>新增在建工程相片</a></li>
    </ul>
    <hr>
  </aside>
  @endif
</div>
