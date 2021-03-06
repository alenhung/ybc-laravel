@extends('layouts.default')
@section('content')
  <section id="contentHeader" style="background: url({{ asset ('images/intro/workBackground.jpg') }});background-size: cover;">
    @include('_includes.nav.main')
    <div class="container">
      <div id="contentHeaderBlock" class="content">
        <h2>經典建案</h2>
        <hr>
        <p>Case Of YuanBang Construction</p>
      </div>
    </div>
  </section>
  <section id="pageNav" class="has-shadow m-t-15">
    <div class="container">
      <div class="tabs">
        <ul>
          <li class="is-active"><a href="{{route('works')}}">經典建案</a></li>
          <li><a href="{{route('OnSale')}}">熱銷建案</a></li>
          <li><a href="{{route('SaleOut')}}">完銷建案</a></li>
          <li><a href="{{route('workings')}}">在建工程</a></li>
        </ul>
      </div>
    </div>
  </section>
  <section class="m-t-40">
    <div class="container">
      {{-- <div class="content">
          <h2 class="ybc-title-h2">熱銷建案</h2>
          <hr>
      </div> --}}
      <div class="columns is-multiline">
        @foreach ($works as $work)
          <div class="column is-one-quarter">
            <div class="worksItem">
             <img src="{{asset ('uploads').'/'.$work->project_image}}" alt="">
              <div class="worksContentmask">
                <div class="worksContentTitle">
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
      {{$works->links()}}
    </div>
  </section>
@stop
