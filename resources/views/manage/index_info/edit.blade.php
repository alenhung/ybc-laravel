@extends('layouts.admin_default')

@section('content')

  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">編輯 － 首頁資訊</h1>
      </div>
    <div class="column">
      <form action="{{ route('index_info.destroy', $indexInfo->id) }}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
        {{--
        {{ method_field('DELETE') }}
        <a class="is-pulled-right" style="width: 250px;"><i class="fa fa-trash"></i>刪除</a>
        --}}
      </form>
    </div>
    </div>
    <hr class="m-t-0">
    <form action="{{route('index_info.update',$indexInfo->id)}}" enctype="multipart/form-data" method="POST">
      {{method_field('PUT')}}
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
          <div class="field">
            <label for="title" class="label">標題：</label>
            <p class="control">
              <input type="text" class="input" name="title" id="title" value="{{$indexInfo->title}}">
            </p>
          </div>
          <div class="field">
            <label for="slogan" class="label">簡述：</label>
            <p class="control">
              <input type="text" class="input" name="slogan" id="slogan" value="{{$indexInfo->slogan}}">
            </p>
          </div>
          <div class="field">
            <label for="page_url" class="label">連結位址：</label>
            <p class="control">
              <input type="text" class="input" name="page_url" id="page_url" value="{{$indexInfo->page_url}}">
            </p>
          </div>
      </div>
        <div class="column">
          {{-- image upload --}}
          <div class="columns">
            <div class="column">
              <div class="file file-upload-form is-primary has-name">
                <label class="file-label">
                  <input class="file-input " type="file" name="info_image" id="info_image" @change="previewImage" accept="image/*">
                  <span class="file-cta">
                    <span class="file-icon">
                      <i class="fa fa-upload"></i>
                    </span>
                    <span class="file-label">
                      請選擇代表圖片
                    </span>
                  </span>
                </label>
              </div>
              <div class="image-preview m-t-10" v-if="imageData.length > 0">
                  <p class="is-small">更新的圖片： </p>
                  <img class="preview" :src="imageData">
              </div>
              <div v-else>
                <p class="is-small">目前顯示代表圖片： </p>
              <img src="{{asset ('uploads').'/'.$indexInfo->image}}" alt="{{$indexInfo->image}}" class="image img-circle introContentImage m-b-10 m-t-10" style="width:240px;height:240px;">

              </div>
              <input type="hidden" name="old_image" value="{{$indexInfo->image}}" />

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


  </div> <!-- end of .flex-container -->

@endsection

@section('scripts')
  <script>
  var app = new Vue({
    el: '#app',
    data: {
       imageData: "" , // we will store base64 format of image in this string
       displayOldProjectImage: true
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
