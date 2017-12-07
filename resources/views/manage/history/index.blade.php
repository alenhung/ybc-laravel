@extends('layouts.admin_default')
@section('content')
    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">歷史沿革管理</h1>
        </div>
        <div class="column">
          <a href="{{route('history.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-file-text-o m-r-10"></i> 建立歷史沿革</a>
        </div>
      </div>
      <hr class="m-t-0">
      <div class="card">
        <div class="card-content">
          <table class="table is-narrow is-hoverable is-fullwidth">
            <thead>
              <tr>
                <th>代表圖片</th>
                <th>年份</th>
                <th>標題</th>
                <th>建立日期</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($historys as $history)
                <tr>
                  <th><img src="{{asset ('uploads').'/'.$history->history_image}}" alt="{{$history->history_image}}" class="image is-64x64"></th>
                  <th>{{$history->year}}</th>
                  <th>{{$history->title}}</th>
                  <td>{{$history->created_at->toFormattedDateString()}}</td>
                  <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{route('history.show', $history->id)}}"><i class="fa fa-eye m-r-10" aria-hidden="true"></i>檢視</a><a class="button is-light is-info" href="{{route('history.edit', $history->id)}}"><i class="fa fa-pencil m-r-10" aria-hidden="true"></i>編輯</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->
      {{$historys->links()}}
    </div>

@endsection
