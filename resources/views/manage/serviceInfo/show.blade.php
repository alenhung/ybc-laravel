@extends('layouts.admin_default')

@section('content')

  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">檢視 － 服務項目</h1>
      </div>
      <div class="column">
        <a href="{{route('serviceInfo.edit', $serviceInfo->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-file-text-o m-r-10"></i>修改服務項目</a>
      </div>
    </div>
    <hr class="m-t-0">
  </div>

    <div class="columns">
      <div class="column is-two-fifths">
        <img src="{{asset ('uploads').'/'.$serviceInfo->serviceInfo_image}}" alt="{{$serviceInfo->serviceInfo_image}}" class="image preview_image">

      </div>
      <div class="column">
        <table class="serviceInfo-table table is-hoverable is-narrow is-fullwidth">
          <tr>
            <td >服務項目標題：</td>
            <td >{{$serviceInfo->title}}</td>
          </tr>
          <tr>
            <td >服務項目內容：</td>
            <td >
              {!!$serviceInfo->description!!}
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
