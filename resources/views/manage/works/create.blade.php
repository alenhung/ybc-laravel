@extends('layouts.admin_default')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">建立 － 熱銷建案</h1>
      </div>
    </div>
    <hr class="m-t-0">
    <form action="{{route('works.store')}}" enctype="multipart/form-data" method="POST">
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
          <div class="field">
            <label for="title" class="label">建案名稱:</label>
            <p class="control">
              <input type="text" class="input" name="title" id="title" placeholder="建案名稱">
            </p>
          </div>
          <div class="field">
            <label for="slogan" class="label">建案標語</label>
            <p class="control">
              <input type="text" class="input" name="slogan" id="slogan" placeholder="建案標語">
            </p>
          </div>
          <div class="field">
            <label for="description" class="label">建案描述</label>
            <p class="control">
              <textarea type="text" class="textarea" name="description" id="description" placeholder="建案描述內容...." rows="5"></textarea>
            </p>
          </div>
          <div class="field">
            <label for="service_location" class="label">接待中心</label>
            <p class="control">
              <input type="text" class="input" name="service_location" id="service_location" placeholder="接待中心">
            </p>
          </div>
          <div class="field">
            <label for="location" class="label">基地位置</label>
            <p class="control">
              <input type="text" class="input" name="location" id="location" placeholder="基地位置">
            </p>
          </div>
          <div class="field">
            <label for="land_plan" class="label">建設規劃</label>
            <p class="control">
              <input type="text" class="input" name="land_plan" id="land_plan" placeholder="建設規劃">
            </p>
          </div>
      </div>
        <div class="column">
          <div class="columns">
            <div class="column">
              <div class="field">
                <label for="land_size" class="label">基地面積</label>
                <p class="control">
                  <input type="text" class="input" name="land_size" id="land_size" placeholder="基地面積">
                </p>
              </div>
            </div>
            <div class="column">
              <div class="field">
                <label for="households" class="label">總戶數</label>
                <p class="control">
                  <input type="text" class="input" name="households" id="households" placeholder="總戶數">
                </p>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <div class="field">
                <label for="unit_area" class="label">坪數／格局</label>
                <p class="control">
                  <input type="text" class="input" name="unit_area" id="unit_area" placeholder="坪數／格局">
                </p>
              </div>
            </div>
            <div class="column">
              <div class="field">
                <label for="public_ratio" class="label">公設比</label>
                <p class="control">
                  <input type="text" class="input" name="public_ratio" id="public_ratio" placeholder="公設比">
                </p>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <div class="field">
                <label for="tall" class="label">樓高</label>
                <p class="control">
                  <input type="text" class="input" name="tall" id="tall" placeholder="樓高">
                </p>
              </div>
            </div>
            <div class="column">
              <div class="field">
                <label for="completion_date" class="label">完工日期</label>
                <p class="control">
                  <input type="text" class="input" name="completion_date" id="completion_date" placeholder="完工日期">
                </p>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <div class="file has-name is-fullwidth">
                <label class="file-label">
                  <input class="file-input" type="file" name="project_image" id="fileInput">
                  <span class="file-cta">
                    <span class="file-icon">
                      <i class="fa fa-upload"></i>
                    </span>
                    <span class="file-label">
                      請選擇建案的相片（限*.jpg）
                    </span>
                  </span>
                  <span class="file-name" id="file-name">

                  </span>
                </label>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
            <img class="image is-320x320" id="blah" src="#" alt="" />
            </div>
          </div>
        </div>
      </div> <!-- end of .column -->
       <!-- end of .columns for forms -->
      <div class="columns">
        <div class="column">
          <hr />
          <button class="button is-primary is-pulled-right" style="width: 250px;">建立</button>
        </div>
      </div>
    </form>
  </div> <!-- end of .flex-container -->

@endsection

@section('scripts')
  <script>
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
@endsection
