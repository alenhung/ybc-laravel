@extends('layouts.admin_default')

@section('content')

  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">修改 － 企業新聞</h1>
      </div>
    <div class="column">
      <form action="{{ route('news.destroy', $news->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <a class="is-pulled-right" style="width: 250px;"><i class="fa fa-trash"></i>刪除</a>
      </form>
    </div>
    </div>
    <hr class="m-t-0">
    <form action="{{route('news.update',$news->id)}}" enctype="multipart/form-data" method="POST">
      {{method_field('PUT')}}
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
          <div class="field">
            <label for="title" class="label">新聞標題：</label>
            <p class="control">
              <input type="text" class="input" name="title" id="title" value="{{$news->title}}">
            </p>
          </div>
          <div class="field">
            <label for="description" class="label">新聞內容：</label>
            <p class="control">
              <textarea type="text" class="textarea" name="description" id="editor" rows="5">{{$news->description}}</textarea>
            </p>
          </div>
        </div>
        <div class="column">
          {{-- image upload --}}
          <div class="columns">
            <div class="column">
              <div class="file file-upload-form is-primary has-name">
                <label class="file-label">
                  <input class="file-input " type="file" name="news_image" id="news_image" @change="previewImage" accept="image/*">
                  <span class="file-cta">
                    <span class="file-icon">
                      <i class="fa fa-upload"></i>
                    </span>
                    <span class="file-label">
                      請選擇新聞代表圖片
                    </span>
                  </span>
                </label>
              </div>
              <div class="image-preview m-t-10" v-if="imageData.length > 0">
                  <p class="is-small">更新的相片： </p>
                  <img class="preview" :src="imageData">
              </div>
              <div v-else>
                <p class="is-small">目前顯示的新聞代表圖： </p>
              <img src="{{asset ('uploads').'/'.$news->news_image}}" alt="{{$news->news_image}}" class="image preview_image m-t-10">

              </div>
              <input type="hidden" name="old_image" value="{{$news->news_image}}" />

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

<link rel="stylesheet" type="text/css" href="{{ asset('css/simditor.css') }}">


@section('scripts')
    <script type="text/javascript"  src="{{ asset('js/module.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/hotkeys.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/uploader.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/simditor.js') }}"></script>

<script>
$(document).ready(function(){
  var editor = new Simditor({
      textarea: $('#editor'),
      upload: {
          url: '{{ route('news.upload_image') }}',
          params: { _token: '{{ csrf_token() }}' },
          fileKey: 'upload_file',
          connectionCount: 3,
          leaveConfirm: '文件上傳中，如果離開會取消上傳'
      },
      pasteImage: true,
  });
});
</script>
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
