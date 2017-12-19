@extends('layouts.admin_default')

@section('content')

  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">編輯 － 網站聯絡資料</h1>
      </div>
    </div>
    <hr class="m-t-0">
    <form action="{{route('contactInfo.update',$contactInfo->id)}}" enctype="multipart/form-data" method="POST">
      {{method_field('PUT')}}
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
          <div class="field">
            <label for="name" class="label">聯絡人：</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name" value="{{$contactInfo->name}}">
            </p>
          </div>
          <div class="field">
            <label for="tel" class="label">公司電話：</label>
            <p class="control">
              <input type="text" class="input" name="tel" id="tel" value="{{$contactInfo->tel}}">
            </p>
          </div>
          <div class="field">
            <label for="fax" class="label">公司傳真：</label>
            <p class="control">
              <input type="text" class="input" name="fax" id="fax" value="{{$contactInfo->fax}}">
            </p>
          </div>
          <div class="field">
            <label for="address" class="label">地址：</label>
            <p class="control">
              <input type="text" class="input" name="address" id="address" value="{{$contactInfo->address}}">
            </p>
          </div>
          <div class="field">
            <label for="e_address" class="label">英文地址：</label>
            <p class="control">
              <input type="text" class="input" name="e_address" id="e_address" value="{{$contactInfo->e_address}}">
            </p>
          </div>
          <div class="field">
            <label for="email" class="label">聯絡信箱：</label>
            <p class="control">
              <input type="text" class="input" name="email" id="email" value="{{$contactInfo->email}}">
            </p>
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
{{--
<div class="columns">
  <div class="column">
    <form action="{{ route('contactInfo.destroy', $contactInfo->id) }}" enctype="multipart/form-data" method="post">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <button type="submit" class="button is-danger is-pulled-left" style="width: 250px;"><i class="fa fa-trash m-r-10 "></i>刪除</button>
    </form>
  </div>
</div> --}}


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
