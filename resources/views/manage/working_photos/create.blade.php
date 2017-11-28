@extends('layouts.admin_default')
@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">新增 － 在建工程進度圖片</h1>
      </div>

    </div>
    <hr class="m-t-0">
    <form id="myAwesomeDropzone"  action="{{route('working_photos.store')}}" enctype="multipart/form-data" method="POST">
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
          <div class="field is-horizontal">
            <div class="field-label is-normal">
              <label class="label">Step1 建案名稱：</label>
            </div>
            <div class="field-body">
              <div class="field">
                <div class="control">
                  <div class="select is-primary">
                    <select name="working_id">
                      @foreach ($workings as $working)
                      <option value="{{$working->id}}">{{$working->title}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <button type="submit" class="button is-primary is-pulled-right" style="width: 250px;"><i class="fa fa-plus-square m-r-10"></i>新增建立</button>
        </div>
      </div> <!-- end of .column -->
      <div class="columns">
        <div class="column">
          <hr>
          <input type="file" name="file[]" multiple>
        </div>
      </div>
       <!-- end of .columns for forms -->

    </form>
  </div> <!-- end of .flex-container -->
@endsection
<script src="{{ asset('js/dropzone.js') }}"></script>

@section('scripts')
   <script>
   Dropzone.options.myAwesomeDropzone = {
     dictDefaultMessage:"把檔案拖進來或者點一下（可多選）！",
     dictFileTooBig:"上傳的圖片檔案太大！",
     dictCancelUploadConfirmation:"確定取消上傳？",
     dictRemoveFile:"移除這個圖片？",
     dictMaxFilesExceeded:"超過一次批次上傳數量！",
     uploadMultiple:true
   };
   </script>
@endsection
