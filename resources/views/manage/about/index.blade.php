@extends('layouts.admin_default')
@section('content')
    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">公司簡介-管理</h1>
        </div>
        <div class="column">
          <a href="{{route('about.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-file-text-o m-r-10"></i> 建立公司簡介</a>
        </div>
      </div>
      <hr class="m-t-0">
      <div class="card">
        <div class="card-content">
          <table class="table is-narrow is-hoverable is-fullwidth">
            <thead>
              <tr>
                <th>代表圖片</th>
                <th>連結標題</th>
                <th>標題</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($abouts as $about)
                <tr>
                  <th><img src="{{asset ('uploads').'/'.$about->about_image}}" alt="{{$about->about_image}}" class="image is-64x64"></th>
                  <th>{{$about->nav_title}}</th>
                  <th>{{$about->title}}</th>
                  <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{route('about.show', $about->id)}}"><i class="fa fa-eye m-r-10" aria-hidden="true"></i>檢視</a><a class="button is-light is-info" href="{{route('about.edit', $about->id)}}"><i class="fa fa-pencil m-r-10" aria-hidden="true"></i>編輯</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->

      {{$abouts->links()}}
    </div>

@endsection
