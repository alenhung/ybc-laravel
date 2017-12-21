@extends('layouts.admin_default')

@section('content')

  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">修改 － 熱銷建案</h1>
      </div>
    </div>
    <hr class="m-t-0">
    <form action="{{route('works.update',$work->id)}}" enctype="multipart/form-data" method="POST">
      {{method_field('PUT')}}
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
          <label for="title" class="label">案件狀態：</label>
          <b-field>
            <b-radio-button v-model="statusRadioButton"
                native-value="onSale" type="is-primary">
                <b-icon icon="asterisk"></b-icon>
                <span>熱銷建案</span>
            </b-radio-button>

            <b-radio-button v-model="statusRadioButton"
                native-value="saleOut" type="is-primary">
                <b-icon icon="check"></b-icon>
                <span>完銷建案</span>
            </b-radio-button>

            <b-radio-button v-model="statusRadioButton"
                native-value="working" type="is-primary">
                <b-icon icon="wrench"></b-icon>
                在建工程
            </b-radio-button>

            <b-radio-button v-model="statusRadioButton"
                native-value="hide" type="is-danger">
                <b-icon icon="close"></b-icon>
                隱藏
            </b-radio-button>
          </b-field>
          <input type="hidden" class="input" name="status" :value="statusRadioButton">
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
              <div class="field">
                <label for="builder" class="label">起造人：</label>
                <p class="control">
                  <input type="text" class="input" name="builder" id="builder" value="{{$work->builder}}">
                </p>
              </div>
            </div>
          </div>
          {{-- image upload --}}
          <div class="columns">
            <div class="column">
              <div class="file file-upload-form is-primary has-name">
                <label class="file-label">
                  <input class="file-input " type="file" name="project_image" id="project_image" @change="previewImage" accept="image/*">
                  <span class="file-cta">
                    <span class="file-icon">
                      <i class="fa fa-upload"></i>
                    </span>
                    <span class="file-label">
                      請選擇建案的相片
                    </span>
                  </span>
                </label>
              </div>
              <div class="image-preview m-t-10" v-if="imageData.length > 0">
                  <p class="is-small">更新的相片： </p>
                  <img class="preview" :src="imageData">
              </div>
              <div v-else>
                <p class="is-small">目前顯示的建案相片： </p>
              <img src="{{asset ('uploads').'/'.$work->project_image}}" alt="{{$work->project_image}}" class="image preview_image m-t-10">

              </div>
              <input type="hidden" name="old_image" value="{{$work->project_image}}" />

            </div>
          </div>
        {{--end image upload --}}

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
      <div class="columns">
        <div class="column">
          <form action="{{ route('works.destroy', $work->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="button is-danger is-pulled-left" style="width: 250px;"><i class="fa fa-trash m-r-10"></i>刪除</button>
          </form>
        </div>
      </div>


  </div> <!-- end of .flex-container -->

@endsection

@section('scripts')
  <script>
  var app = new Vue({
    el: '#app',
    data: {
       imageData: "" , // we will store base64 format of image in this string
       displayOldProjectImage: true,
       statusRadioButton: '{{$work->status}}'
   },
   methods: {
       previewImage: function(event) {
           // Reference to the DOM input element
           var input = event.target;
           // Ensure that you have a file before attempting to read it
           if (input.files && input.files[0]) {
               // create a new FileReader to read this image and convert to base64 format
               var reader = new FileReader();
               // Define a callback function to run, when FileReader finishes its job
               reader.onload = (e) => {
                   // Note: arrow function used here, so that "this.imageData" refers to the imageData of Vue component
                   // Read image as base64 and set to imageData
                   this.imageData = e.target.result;
               }
               // Start the reader job - read file as a data url (base64 format)
               reader.readAsDataURL(input.files[0]);
           }
       }
   }
  });
  </script>
@endsection
