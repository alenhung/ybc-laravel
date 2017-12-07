@extends('layouts.admin_default')
@section('content')
    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">首頁封面</h1>
        </div>
        <div class="column">
          {{-- <a href="{{route('indexCover.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-file-text-o m-r-10"></i> 建立首頁封面</a> --}}
        </div>
      </div>
      <hr class="m-t-0">
      <div class="card">
        <div class="card-content">
          <table class="table is-narrow is-hoverable is-fullwidth">
            <thead>
              <tr>
                <th>圖片縮圖</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($indexCovers as $indexCover)
                <tr>
                  <th><img src="{{asset ('uploads').'/'.$indexCover->indexCover}}" alt="{{$indexCover->indexCover}}" class="image m-b-10 m-t-10" style="height:120px;"></th>
                  <td class="has-text-right"><a class="button is-light is-info" href="{{route('indexCover.edit', $indexCover->id)}}"><i class="fa fa-pencil m-r-10" aria-hidden="true"></i>編輯</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->
    </div>

@endsection
