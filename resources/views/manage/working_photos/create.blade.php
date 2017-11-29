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
          <input type="file" name="file[]" multiple="multiple">
        </div>
      </div>
       <!-- end of .columns for forms -->

    </form>
  </div> <!-- end of .flex-container -->
@endsection

@section('scripts')

@endsection
