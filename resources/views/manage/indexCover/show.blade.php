@extends('layouts.admin_default')

@section('content')

  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">檢視 － 首頁封面</h1>
      </div>
      <div class="column">
        <a href="{{route('indexCover.edit', $indexCover->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-file-text-o m-r-10"></i>修改首頁資訊資料</a>
      </div>
    </div>
    <hr class="m-t-0">
  </div>

    <div class="columns">
      <div class="column">
        <img src="{{asset ('uploads').'/'.$indexCover->indexCover}}" alt="{{$indexCover->indexCover}}" class="image preview_image">

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
