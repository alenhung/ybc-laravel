@extends('layouts.admin_default')
@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">建立 － 網站聯絡資料</h1>
      </div>
    </div>
    <hr class="m-t-0">
    <form action="{{route('contactInfo.store')}}" enctype="multipart/form-data" method="POST">
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
          <div class="field">
            <label for="name" class="label">聯絡人：</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name" placeholder="聯絡代表人">
            </p>
          </div>
          <div class="field">
            <label for="tel" class="label">公司電話：</label>
            <p class="control">
              <input type="text" class="input" name="tel" id="tel" placeholder="公司電話號碼">
            </p>
          </div>
          <div class="field">
            <label for="fax" class="label">公司傳真：</label>
            <p class="control">
              <input type="text" class="input" name="fax" id="fax" placeholder="公司傳真號碼">
            </p>
          </div>
          <div class="field">
            <label for="address" class="label">中文地址：</label>
            <p class="control">
              <input type="text" class="input" name="address" id="address" placeholder="請輸入地址">
            </p>
          </div>
          <div class="field">
            <label for="e_address" class="label">英文地址：</label>
            <p class="control">
              <input type="text" class="input" name="e_address" id="e_address" placeholder="請輸入英文地址">
            </p>
          </div>
          <div class="field">
            <label for="email" class="label">聯絡信箱</label>
            <p class="control">
              <input type="text" class="input" name="email" id="email" placeholder="通訊用電子信箱">
            </p>
          </div>
      </div>
      </div> <!-- end of .column -->
       <!-- end of .columns for forms -->
      <div class="columns">

        <div class="column">
          <hr />
          <button type="submit" class="button is-primary is-pulled-right" style="width: 250px;"><i class="fa fa-plus-square m-r-10"></i>新增建立</button>
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

   }
  });
  </script>
@endsection
