@extends('layouts.admin_default')

@section('content')

  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">檢視 － 網站聯絡資料</h1>
      </div>
      <div class="column">
        <a href="{{route('contactInfo.edit', $contactInfo->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-file-text-o m-r-10"></i>修改網站聯絡資料</a>
      </div>
    </div>
    <hr class="m-t-0">
  </div>

    <div class="columns">
      <div class="column">
        <table class="workings-table table is-hoverable is-narrow is-fullwidth">
          <tr>
            <td>聯絡人：</td>
            <td>{{$contactInfo->name}}</td>
          </tr>
          <tr>
            <td>公司電話：</td>
            <td>{{$contactInfo->tel}}</td>
          </tr>
          <tr>
            <td>公司傳真：</td>
            <td>{{$contactInfo->fax}}</td>
          </tr>
          <tr>
            <td>地址：</td>
            <td>{{$contactInfo->address}}</td>
          </tr>
          <tr>
            <td>英文地址：</td>
            <td>{{$contactInfo->e_address}}</td>
          </tr>
          <tr>
            <td>電子信箱：</td>
            <td><a href="{{$contactInfo->email}}" target="_blank">{{$contactInfo->email}}</a></td>
          </tr>
        </table>
      </div>


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
