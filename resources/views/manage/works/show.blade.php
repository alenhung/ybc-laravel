@extends('layouts.admin_default')

@section('content')

  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">檢視 － 熱銷建案</h1>
      </div>
      <div class="column">
        <a href="{{route('works.edit', $work->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-file-text-o m-r-10"></i>修改建案資料</a>
      </div>
    </div>
    <hr class="m-t-0">
  </div>

    <div class="columns">
      <div class="column is-two-fifths">
        <img src="{{asset ('uploads').'/'.$work->project_image}}" alt="{{$work->project_image}}" class="image preview_image">

      </div>
      <div class="column">
        <table class="works-table table is-hoverable is-narrow is-fullwidth">
          <tr>
            <td >建案名稱：</td>
            <td >{{$work->title}}</td>
          </tr>
          <tr>
            <td>建案標語：</td>
            <td>{{$work->slogan}}</td>
          </tr>
          <tr>
            <td >建案描述：</td>
            <td >{{$work->description}}</td>
          </tr>
          <tr>
            <td >基地位置：</td>
            <td >{{$work->location}}</td>
          </tr>
          <tr>
            <td >建設規劃：</td>
            <td >{{$work->land_plan}}</td>
          </tr>
          <tr>
            <td >基地面積：</td>
            <td >{{$work->land_size}}</td>
          </tr>
          <tr>
            <td >總戶數：</td>
            <td >{{$work->households}}</td>
          </tr>
          <tr>
            <td >坪數/格局：</td>
            <td >{{$work->unit_area}}</td>
          </tr>
          <tr>
            <td >公設比：</td>
            <td >{{$work->public_ratio}}</td>
          </tr>
          <tr>
            <td >樓高：</td>
            <td >{{$work->tall}}</td>
          </tr>
          <tr>
            <td >接待中心：</td>
            <td >{{$work->service_location}}</td>
          </tr>
          <tr>
            <td >完工日期：</td>
            <td >{{$work->completion_date}}</td>
          </tr>
          <tr>
            <td >代銷網站：</td>
            <td >{{$work->site_url}} <br> <button class="button is-info" href="{{$work->site_url}}" target="_blank">前往網站</button></td>
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
