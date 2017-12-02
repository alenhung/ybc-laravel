@extends('layouts.admin_default')
@section('content')
    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">首頁資訊</h1>
        </div>
        <div class="column">
          <a href="{{route('index_info.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-file-text-o m-r-10"></i> 建立首頁資訊</a>
        </div>
      </div>
      <hr class="m-t-0">
      <div class="card">
        <div class="card-content">
          <table class="table is-narrow is-hoverable is-fullwidth">
            <thead>
              <tr>
                <th>圖片縮圖</th>
                <th>標題</th>
                <th>簡述</th>
                <th>連結位址</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($indexInfos as $indexInfo)
                <tr>
                  <th><img src="{{asset ('uploads').'/'.$indexInfo->image}}" alt="{{$indexInfo->image}}" class="image img-circle introContentImage m-b-10 m-t-10" style="width:120px;height:120px;"></th>
                  <th>{{$indexInfo->title}}</th>
                  <td>{{$indexInfo->slogan}}</td>
                  <td><a href="{{$indexInfo->page_url}}" target="_blank">{{$indexInfo->page_url}}</td>
                  <td class="has-text-right"><a class="button is-light is-info" href="{{route('index_info.edit', $indexInfo->id)}}"><i class="fa fa-pencil m-r-10" aria-hidden="true"></i>編輯</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->
    </div>

@endsection
