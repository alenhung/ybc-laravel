@extends('layouts.admin_default')
@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">新增 － 在建工程進度圖片</h1>
      </div>

    </div>
    <hr class="m-t-0">
    <form action="{{route('working_photos.store')}}" enctype="multipart/form-data" method="POST">
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
          <div class="field">
            <label class="label">請先選擇欲加入之在建工程：</label>
            <div class="control">
              <div class="select is-primary is-fullwidth">
                <select name="working_id">
                  @foreach ($workings as $working)
                  <option value="{{$working->id}}">{{$working->title}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- end of .column -->
      <div class="columns">
        <div class="column">
          <div class="field">
              <label class="label">上傳該案施工圖片：</label>
          </div>
          <div class="file is-boxed is-primary is-centered">
            <label class="file-label">
              <input class="file-input" type="file" name="file[]" multiple="multiple">
              <span class="file-cta">
                <span class="file-icon">
                  <i class="fa fa-upload"></i>
                </span>
                <span class="file-label">
                  選擇檔案上傳（可多選）
                </span>
              </span>
            </label>
          </div>
        </div>
      </div>
      <div class="columns">
        <div class="column">
          <hr />
          <button type="submit" class="button is-primary is-pulled-right" style="width: 250px;"><i class="fa fa-plus-square m-r-10"></i>新增建立</button>
        </div>
      </div>
       <!-- end of .columns for forms -->

    </form>
  </div> <!-- end of .flex-container -->
@endsection

@section('scripts')

@endsection
