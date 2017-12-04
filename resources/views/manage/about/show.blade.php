@extends('layouts.admin_default')

@section('content')

  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">檢視 － 公司簡介</h1>
      </div>
      <div class="column">
        <a href="{{route('about.edit', $about->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-file-text-o m-r-10"></i>修改公司簡介</a>
      </div>
    </div>
    <hr class="m-t-0">
  </div>

    <div class="columns">
      <div class="column is-two-fifths">
        <img src="{{asset ('uploads').'/'.$about->about_image}}" alt="{{$about->about_image}}" class="image preview_image">

      </div>
      <div class="column">
        <table class="about-table table is-hoverable is-narrow is-fullwidth">
          <tr>
            <td >連結標題：</td>
            <td >{{$about->nav_title}}</td>
          </tr>
          <tr>
            <td >標題：</td>
            <td >{{$about->title}}</td>
          </tr>
          <tr>
            <td >按鈕文字：</td>
            <td >{{$about->button_text}}</td>
          </tr>
          <tr>
            <td >內容：</td>
            <td >{{$about->description}}</td>
          </tr>
        </table>
      </div>


  </div> <!-- end of .flex-container -->

@endsection

@section('scripts')

   <script>
   var app = new Vue({
     el: '#app',
     data: {

     }
   });
   </script>
@endsection
