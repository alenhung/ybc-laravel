@extends('layouts.admin_default')

@section('content')

  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">檢視 － {{$workings->title}}</h1>
      </div>
      <div class="column">
        <a href="#"><i class="fa fa-file-text-o m-r-10"></i>修改建案資料</a>
      </div>
    </div>
    <hr class="m-t-0">
  </div>

    <div class="columns">
      <div class="column">
        <table class="workings-table table is-hoverable is-narrow is-fullwidth">
          <tr>
            <td>{{$workings->title}}工程照片</td>
            <td>文字說明</td>
          </tr>
          @foreach ($workingPhotos as $workingPhoto)
            <tr>
              <td><img src="{{asset ('uploads').'/'.$workingPhoto->working_images}}" alt="{{$workingPhoto->working_images}}" class="image is-64x64"></td>
              <td><input class="input" type="text" placeholder="該照片的描述，可空白" name="{{$workingPhoto->id}}"></td>
            </tr>
          @endforeach
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
