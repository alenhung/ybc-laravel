@extends('layouts.default')
@section('content')
  <section id="contentHeader" style="background: url({{ asset ('images/intro/newsBackground.jpg') }});background-size: cover;">
    @include('_includes.nav.main')
    <div class="container">
      <div id="contentHeaderBlock" class="content">
        <h2>企業新聞</h2>
        <hr>
        <p>News for YuanBang</p>
      </div>
    </div>
  </section>
  <section id="pageNav" class="has-shadow m-t-15">
    <div class="container">
      <div class="tabs">
        <ul>
          <li class="is-active"><a href="{{route('news')}}">近期新聞</a></li>
        </ul>
      </div>
    </div>
  </section>
  <section class="m-t-35">
    <div class="container">
      <section class="m-t-40 m-b-40">
        <div class="container">
          <div class="columns">
            <div class="column is-5 m-r-20 m-l-20">
              <img src="{{asset ('uploads').'/'.$news->news_image}}" alt="{{$news->news_image}}" class="has-shadow">
            </div>
            <div class="column content is-6 is-offset-1 m-r-20 m-l-20">
              <h2 class="ybc-title-h2">{{$news->title}}</h2>
              <hr>
              <p class="news-time"><small>新聞發布日期：{{$news->created_at->toFormattedDateString()}}</small></p>
              {!!$news->description!!}
              <div>
                <a href="{{route('news')}}" class="button is-ybc-brown-btn">返回企業新聞</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>
@stop
