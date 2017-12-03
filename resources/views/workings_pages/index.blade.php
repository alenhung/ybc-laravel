@extends('layouts.default')
@section('content')
  <section id="contentHeader" style="background: url({{ asset ('images/workingsBackground.jpg') }})">
    @include('_includes.nav.main')
    <div class="container">
      <div id="contentHeaderBlock" class="content">
        <h2>在建工程</h2>
        <hr>
        <p>Construction In Progress for YuanBang</p>
      </div>
    </div>
  </section>
  <section id="pageNav" class="has-shadow m-t-15">
    <div class="container">
      <div class="tabs">
        <ul>
          <li><a href="{{route('works')}}">熱銷建案</a></li>
          <li class="is-active"><a href="{{route('workings')}}">在建工程</a></li>
        </ul>
      </div>
    </div>
  </section>
  <section class="m-t-40">
    <div class="container">
      {{-- <div class="content">
          <h2 class="ybc-title-h2">在建工程</h2>
          <hr>
      </div> --}}
      <div class="columns is-multiline">
        @foreach ($workings as $working)
          <div class="column is-one-quarter" data-aos="fade-in">
            <div class="worksItem">
             <img src="{{asset ('uploads').'/'.$working->project_image}}" alt="">
              <div class="worksContentmask">
                <div class="worksContentTitle m-t-100">
                  <p>{{$working->title}}</p>
                  <hr class="m-t-10 m-b-10">
                </div>
                <p class="worksContentDesc">{{$working->slogan}}</p>
                <p class="circleMore m-t-10">MORE</p>
              </div>
              <div class="worksItemLink">
                <a href="{{route('workings-item/', $working->id)}}" class="info"></a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      {{$workings->links()}}
    </div>
  </section>

@stop
