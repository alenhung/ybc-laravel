@extends('layouts.admin_default')

@section('content')

  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">檢視 － 首頁資訊</h1>
      </div>
      <div class="column">
        <a href="{{route('index_info.edit', $indexInfo->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-file-text-o m-r-10"></i>修改首頁資訊資料</a>
      </div>
    </div>
    <hr class="m-t-0">
  </div>

    <div class="columns">
      <div class="column is-two-fifths">
        <img src="{{asset ('uploads').'/'.$indexInfo->image}}" alt="{{$indexInfo->image}}" class="image preview_image">

      </div>
      <div class="column">
        <table class="workings-table table is-hoverable is-narrow is-fullwidth">
          <tr>
            <td>標題：</td>
            <td>{{$indexInfo->title}}</td>
          </tr>
          <tr>
            <td>簡述：</td>
            <td>{{$indexInfo->slogan}}</td>
          </tr>
          <tr>
            <td>連結位址：：</td>
            <td><a href="{{$indexInfo->page_url}}" target="_blank">{{$indexInfo->page_url}}</a></td>
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
