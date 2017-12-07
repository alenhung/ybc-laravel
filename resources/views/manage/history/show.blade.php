@extends('layouts.admin_default')

@section('content')

  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">檢視 － 歷史沿革</h1>
      </div>
      <div class="column">
        <a href="{{route('history.edit', $history->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-file-text-o m-r-10"></i>修改歷史沿革</a>
      </div>
    </div>
    <hr class="m-t-0">
  </div>

    <div class="columns">
      <div class="column is-two-fifths">
        <img src="{{asset ('uploads').'/'.$history->history_image}}" alt="{{$history->history_image}}" class="image preview_image">

      </div>
      <div class="column">
        <table class="history-table table is-hoverable is-narrow is-fullwidth">
          <tr>
            <td >歷史沿革年份：</td>
            <td >{{$history->year}}</td>
          </tr>
          <tr>
            <td >歷史沿革標題：</td>
            <td >{{$history->title}}</td>
          </tr>
          <tr>
            <td >歷史沿革內容：</td>
            <td >
              {!!$history->description!!}
            </td>
          </tr>

          <tr>
            <td >歷史沿革連結：</td>
            <td >
              {!!$history->url!!}
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
