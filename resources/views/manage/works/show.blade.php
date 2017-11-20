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
  </div>

    <div class="columns">
      <div class="column is-two-fifths">
        <img src="{{asset ('uploads').'/'.$work->project_image}}" alt="{{$work->project_image}}" class="image">
      </div>
      <div class="column">
        <div class="field">
          <label for="title" class="label">建案名稱：</label>
          <p>{{$work->title}}</p>
        </div>
        <div class="field">
          <label for="slogan" class="label">建案標語：</label>
          <p>{{$work->slogan}}</p>
        </div>
        <div class="field">
          <label for="description" class="label">建案描述：</label>
          <p>{{$work->description}}</p>
        </div>
        <div class="field">
          <label for="service_location" class="label">接待中心：</label>
          <p>{{$work->service_location}}</p>
        </div>
        <div class="field">
          <label for="location" class="label">基地位置：</label>
          <p>{{$work->location}}</p>
        </div>
        <div class="field">
          <label for="land_plan" class="label">建設規劃：</label>
          <p>{{$work->land_plan}}</p>
        </div>
        <div class="field">
          <label for="land_size" class="label">基地面積：</label>
          <p>{{$work->land_size}}</p>
        </div>
        <div class="field">
          <label for="tall" class="label">樓高：</label>
          <p>{{$work->tall}}</p>
        </div>
        <div class="field">
          <label for="households" class="label">總戶數：</label>
          <p>{{$work->households}}</p>
        </div>
        <div class="field">
          <label for="unit_area" class="label">坪數／格局：</label>
          <p>{{$work->unit_area}}</p>
        </div>
        <div class="field">
          <label for="public_ratio" class="label">公設比：</label>
          <p>{{$work->public_ratio}}</p>
        </div>
        <div class="field">
          <label for="completion_date" class="label">完工日期：</label>
          <p>{{$work->completion_date}}</p>
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
