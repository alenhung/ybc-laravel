@extends('layouts.admin_default')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">檢視 － 熱銷建案</h1>
      </div>
      <div class="column">
        <a href="{{route('works.edit', $work->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10"></i>修改建案資料</a>
      </div>
    </div>
    <hr class="m-t-0">
    <div class="columns">
      <div class="column">
        <img src="{{asset ('uploads').'/'.$work->project_image}}" alt="{{$work->project_image}}" class="image is-64x64">
      </div>
      <div class="column">
        <label for="title" class="label">建案名稱：</label>
        <pre>{{$work->title}}</pre>
        <label for="slogan" class="label">建案標語：</label>
        <pre>{{$work->slogan}}</pre>
        <label for="description" class="label">建案描述：</label>
        <pre>{{$work->description}}</pre>
        <label for="service_location" class="label">接待中心：</label>
        <pre>{{$work->service_location}}</pre>
        <label for="location" class="label">基地位置：</label>
        <pre>{{$work->location}}</pre>
        <label for="land_plan" class="label">建設規劃：</label>
        <pre>{{$work->land_plan}}</pre>
        <label for="land_size" class="label">基地面積：</label>
        <pre>{{$work->land_size}}</pre>
        <label for="households" class="label">總戶數：</label>
        <pre>{{$work->households}}</pre>
        <label for="unit_area" class="label">坪數／格局：</label>
        <pre>{{$work->unit_area}}</pre>
        <label for="public_ratio" class="label">公設比：</label>
        <pre>{{$work->public_ratio}}</pre>
        <label for="completion_date" class="label">完工日期：</label>
        <pre>{{$work->completion_date}}</pre>
        <label for="tall" class="label">樓高：</label>
        <pre>{{$work->tall}}</pre>
      </div>
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
