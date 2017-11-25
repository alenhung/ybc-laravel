@extends('layouts.admin_default')

@section('content')

  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">修改 － 在建工程</h1>
      </div>
    <div class="column">
      <form action="{{ route('workings.destroy', $work->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <a class="is-pulled-right" style="width: 250px;"><i class="fa fa-trash"></i>刪除</a>
      </form>
    </div>
    </div>
    <hr class="m-t-0">
    <form action="{{route('workings.update',$work->id)}}" enctype="multipart/form-data" method="POST">
      {{method_field('PUT')}}
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
          <div class="field">
            <label for="title" class="label">建案名稱：</label>
            <p class="control">
              <input type="text" class="input" name="title" id="title" value="{{$work->title}}">
            </p>
          </div>
          <div class="field">
            <label for="slogan" class="label">建案標語：</label>
            <p class="control">
              <input type="text" class="input" name="slogan" id="slogan" value="{{$work->slogan}}">
            </p>
          </div>
          <div class="field">
            <label for="description" class="label">建案描述：</label>
            <p class="control">
              <textarea type="text" class="textarea" name="description" id="description" rows="5">{{$work->description}}</textarea>
            </p>
          </div>
          <div class="field">
            <label for="service_location" class="label">接待中心：</label>
            <p class="control">
              <input type="text" class="input" name="service_location" id="service_location" value="{{$work->service_location}}">
            </p>
          </div>
          <div class="field">
            <label for="location" class="label">基地位置：</label>
            <p class="control">
              <input type="text" class="input" name="location" id="location" value="{{$work->location}}">
            </p>
          </div>
          <div class="field">
            <label for="land_plan" class="label">建設規劃：</label>
            <p class="control">
              <input type="text" class="input" name="land_plan" id="land_plan" value="{{$work->land_plan}}">
            </p>
          </div>
      </div>
        <div class="column">
          <div class="columns">
            <div class="column">
              <div class="field">
                <label for="land_size" class="label">基地面積：</label>
                <p class="control">
                  <input type="text" class="input" name="land_size" id="land_size" value="{{$work->land_size}}">
                </p>
              </div>
            </div>
            <div class="column">
              <div class="field">
                <label for="households" class="label">總戶數：</label>
                <p class="control">
                  <input type="text" class="input" name="households" id="households" value="{{$work->households}}">
                </p>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <div class="field">
                <label for="unit_area" class="label">坪數／格局：</label>
                <p class="control">
                  <input type="text" class="input" name="unit_area" id="unit_area" value="{{$work->unit_area}}">
                </p>
              </div>
            </div>
            <div class="column">
              <div class="field">
                <label for="public_ratio" class="label">公設比：</label>
                <p class="control">
                  <input type="text" class="input" name="public_ratio" id="public_ratio" value="{{$work->public_ratio}}">
                </p>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <div class="field">
                <label for="completion_date" class="label">完工日期:</label>
                <p class="control">
                  <input type="text" class="input" name="completion_date" id="completion_date" value="{{$work->completion_date}}">
                </p>
              </div>
            </div>
            <div class="column">
              <div class="field">
                <label for="tall" class="label">樓高：</label>
                <p class="control">
                  <input type="text" class="input" name="tall" id="tall" value="{{$work->tall}}">
                </p>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <div class="field">
                <label for="site_url" class="label">銷售網站網址：</label>
                <p class="control">
                  <input type="text" class="input" name="site_url" id="site_url" value="{{$work->site_url}}">
                </p>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
                <b-field>
                  <b-upload v-model="files" name="project_image" id="fileInput">
                      <a class="button is-info">
                        <span class="file-icon">
                          <i class="fa fa-upload"></i>
                        </span>
                          <span>請選擇新建案相片（如不需更新</span>
                      </a>
                  </b-upload>
                  <div v-if="files && files.length">
                      <span class="file-name">
                          @{{ files[0].name }}
                      </span>
                  </div>
              </b-field>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <p class="is-small">目前顯示的建案相片： </p>
            <img src="{{asset ('uploads').'/'.$work->project_image}}" alt="{{$work->project_image}}" class="image preview_image m-t-10">
            <input type="hidden" name="old_image" value="{{$work->project_image}}" />
            </div>
          </div>
        </div>
      </div> <!-- end of .column -->
       <!-- end of .columns for forms -->
      <div class="columns">
        <div class="column">
          <hr />
          <button class="button is-primary is-pulled-right" style="width: 250px;"><i class="fa fa-check-square m-r-10"></i>確認修改</button>
        </div>
      </div>
</form>


  </div> <!-- end of .flex-container -->

@endsection

@section('scripts')
  {{-- <script>
  var file = document.getElementById("fileInput");
    file.onchange = function(){
        if(file.files.length > 0)
        {
          document.getElementById('file-name').innerHTML =file.files[0].name;
        }
    };
    function readURL(input) {

      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#blah').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
    $("#fileInput").change(function() {
      readURL(this);
    });
  </script>
   --}}
   <script>
   var app = new Vue({
     el: '#app',
     data: {
       files: [],
       date: new Date()
     }
   });
   </script>
@endsection
