@extends('layouts.default')
@section('content')
  <section id="contentHeader" style="background: url({{ asset ('images/worksBackground3.jpg') }})">
    @include('_includes.nav.main')
    <div class="container">
      <div id="contentHeaderBlock" class="content">
        <h2>熱銷建案</h2>
        <hr>
        <p>works for YuanBang</p>
      </div>
    </div>
  </section>
  <section id="pageNav" class="has-shadow m-t-15">
    <div class="container">
      <div class="tabs">
        <ul>
          <li class="is-active"><a>熱銷建案</a></li>
          <li><a>在建工程</a></li>
        </ul>
      </div>
    </div>
  </section>
  <section class="m-t-40">
    <div class="container">
      <div class="content">
          <h2 class="ybc-title-h2">熱銷建案</h2>
          <hr>
      </div>
      <div class="columns is-multiline">
        @foreach ($works as $work)
          <div class="column is-one-quarter" data-aos="fade-in">
            <div class="worksItem">
             <img src="{{asset ('uploads').'/'.$work->project_image}}" alt="">
              <div class="worksContentmask">
                <div class="worksContentTitle m-t-100">
                  <p>{{$work->title}}</p>
                  <hr class="m-t-10 m-b-10">
                </div>
                <p class="worksContentDesc">{{$work->slogan}}</p>
                <p class="circleMore m-t-10">MORE</p>
              </div>
              <div class="worksItemLink">
                <a href="{{route('works-item/', $work->id)}}" class="info"></a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

@stop
