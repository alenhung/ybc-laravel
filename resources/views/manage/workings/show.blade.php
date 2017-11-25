@extends('layouts.admin_default')

@section('content')

  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">檢視 － 在建工程</h1>
      </div>
      <div class="column">
        <a href="{{route('workings.edit', $working->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-file-text-o m-r-10"></i>修改建案資料</a>
      </div>
    </div>
    <hr class="m-t-0">
  </div>

    <div class="columns">
      <div class="column is-two-fifths">
        <img src="{{asset ('uploads').'/'.$working->project_image}}" alt="{{$working->project_image}}" class="image preview_image">

      </div>
      <div class="column">
        <table class="workings-table table is-hoverable is-narrow is-fullwidth">
          <tr>
            <td >建案名稱：</td>
            <td >{{$working->title}}</td>
          </tr>
          <tr>
            <td>建案標語：</td>
            <td>{{$working->slogan}}</td>
          </tr>
          <tr>
            <td >建案描述：</td>
            <td >{{$working->description}}</td>
          </tr>
          <tr>
            <td >基地位置：</td>
            <td >{{$working->location}}</td>
          </tr>
          <tr>
            <td >建設規劃：</td>
            <td >{{$working->land_plan}}</td>
          </tr>
          <tr>
            <td >基地面積：</td>
            <td >{{$working->land_size}}</td>
          </tr>
          <tr>
            <td >總戶數：</td>
            <td >{{$working->households}}</td>
          </tr>
          <tr>
            <td >坪數/格局：</td>
            <td >{{$working->unit_area}}</td>
          </tr>
          <tr>
            <td >公設比：</td>
            <td >{{$working->public_ratio}}</td>
          </tr>
          <tr>
            <td >樓高：</td>
            <td >{{$working->tall}}</td>
          </tr>
          <tr>
            <td >接待中心：</td>
            <td >{{$working->service_location}}</td>
          </tr>
          <tr>
            <td >完工日期：</td>
            <td >{{$working->completion_date}}</td>
          </tr>
          <tr>
            <td >代銷網站：</td>
            <td >{{$working->site_url}} <br> <button class="button is-info" href="{{$working->site_url}}" target="_blank">前往網站</button></td>
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
