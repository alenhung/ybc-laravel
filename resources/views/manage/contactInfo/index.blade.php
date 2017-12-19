@extends('layouts.admin_default')
@section('content')
    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">網站聯絡資訊</h1>
        </div>
        <div class="column">
          {{-- <a href="{{route('contactInfo.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-file-text-o m-r-10"></i> 建立</a> --}}
        </div>
      </div>
      <hr class="m-t-0">
      <div class="card">
        <div class="card-content">
          <table class="table is-narrow is-hoverable is-fullwidth">
            <thead>
              <tr>
                <th>聯絡人</th>
                <th>公司電話</th>
                <th>公司傳真</th>
                <th>中文地址</th>
                <th>英文地址</th>
                <th>電子信箱</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($contactInfos as $contactInfo)
                <tr>
                  <th>{{$contactInfo->name}}</th>
                  <td>{{$contactInfo->tel}}</td>
                  <td>{{$contactInfo->fax}}</td>
                  <td>{{$contactInfo->address}}</td>
                  <td>{{$contactInfo->e_address}}</td>
                  <td><a href="{{$contactInfo->email}}" target="_blank">{{$contactInfo->email}}</td>
                  <td class="has-text-right"><a class="button is-light is-info" href="{{route('contactInfo.edit', $contactInfo->id)}}"><i class="fa fa-pencil m-r-10" aria-hidden="true"></i>編輯</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->
    </div>

@endsection
