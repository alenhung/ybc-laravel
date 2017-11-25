@extends('layouts.admin_default')
@section('content')
    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">在建工程資料管理</h1>
        </div>
        <div class="column">
          <a href="{{route('workings.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-file-text-o m-r-10"></i> 新增建案資料</a>
        </div>
      </div>
      <hr class="m-t-0">
      <div class="card">
        <div class="card-content">
          <table class="table is-narrow is-hoverable is-fullwidth">
            <thead>
              <tr>
                <th>建案相片</th>
                <th>建案名稱</th>
                <th>基地位置</th>
                <th>建立日期</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($workings as $working)
                <tr>
                  <th><img src="{{asset ('uploads').'/'.$working->project_image}}" alt="{{$working->project_image}}" class="image is-64x64"></th>
                  <th>{{$working->title}}</th>
                  <td>{{$working->location}}</td>
                  <td>{{$working->created_at->toFormattedDateString()}}</td>
                  <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{route('workings.show', $working->id)}}">檢視</a><a class="button is-light" href="{{route('workings.edit', $working->id)}}">編輯</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->

      {{$workings->links()}}
    </div>

@endsection
