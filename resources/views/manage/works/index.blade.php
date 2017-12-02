@extends('layouts.admin_default')
@section('content')
    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">熱銷建案資料管理</h1>
        </div>
        <div class="column">
          <a href="{{route('works.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-file-text-o m-r-10"></i> 新增建案資料</a>
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
              @foreach ($works as $work)
                <tr>
                  <th><img src="{{asset ('uploads').'/'.$work->project_image}}" alt="{{$work->project_image}}" class="image is-64x64"></th>
                  <th>{{$work->title}}</th>
                  <td>{{$work->location}}</td>
                  <td>{{$work->created_at->toFormattedDateString()}}</td>
                  <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{route('works.show', $work->id)}}"><i class="fa fa-eye m-r-10" aria-hidden="true"></i>檢視</a><a class="button is-light is-info" href="{{route('works.edit', $work->id)}}"><i class="fa fa-pencil m-r-10" aria-hidden="true"></i>編輯</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->

      {{$works->links()}}
    </div>

@endsection
