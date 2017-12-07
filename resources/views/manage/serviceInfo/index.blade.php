@extends('layouts.admin_default')
@section('content')
    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">服務項目管理</h1>
        </div>
        <div class="column">
          <a href="{{route('serviceInfo.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-file-text-o m-r-10"></i> 建立服務項目</a>
        </div>
      </div>
      <hr class="m-t-0">
      <div class="card">
        <div class="card-content">
          <table class="table is-narrow is-hoverable is-fullwidth">
            <thead>
              <tr>
                <th>代表圖片</th>
                <th>標題</th>
                <th>建立日期</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($serviceInfos as $serviceInfo)
                <tr>
                  <th><img src="{{asset ('uploads').'/'.$serviceInfo->serviceInfo_image}}" alt="{{$serviceInfo->serviceInfo_image}}" class="image is-64x64"></th>
                  <th>{{$serviceInfo->title}}</th>
                  <td>{{$serviceInfo->created_at->toFormattedDateString()}}</td>
                  <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{route('serviceInfo.show', $serviceInfo->id)}}"><i class="fa fa-eye m-r-10" aria-hidden="true"></i>檢視</a><a class="button is-light is-info" href="{{route('serviceInfo.edit', $serviceInfo->id)}}"><i class="fa fa-pencil m-r-10" aria-hidden="true"></i>編輯</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->
      {{$serviceInfos->links()}}
    </div>

@endsection
