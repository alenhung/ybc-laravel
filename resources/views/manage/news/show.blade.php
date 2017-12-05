@extends('layouts.admin_default')

@section('content')

  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">檢視 － 企業新聞</h1>
      </div>
      <div class="column">
        <a href="{{route('news.edit', $news->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-file-text-o m-r-10"></i>修改企業新聞</a>
      </div>
    </div>
    <hr class="m-t-0">
  </div>

    <div class="columns">
      <div class="column is-two-fifths">
        <img src="{{asset ('uploads').'/'.$news->news_image}}" alt="{{$news->news_image}}" class="image preview_image">

      </div>
      <div class="column">
        <table class="news-table table is-hoverable is-narrow is-fullwidth">
          <tr>
            <td >新聞標題：</td>
            <td >{{$news->title}}</td>
          </tr>
          <tr>
            <td >新聞內容：</td>
            <td >
              {!!$news->description!!} 
            </td>
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
