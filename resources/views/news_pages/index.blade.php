@extends('layouts.default')
@section('content')
  <section id="contentHeader" style="background: url({{ asset ('images/newsBackground.jpg') }})">
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
          <li class="is-active"><a href="{{route('news')}}">企業新聞</a></li>
        </ul>
      </div>
    </div>
  </section>
  <section class="m-t-40">
    <div class="container">
      <div class="content">
          <h2 class="ybc-title-h2">近期新聞</h2>
          <hr>
      </div>
      <div class="columns is-multiline">
        @foreach ($newss as $news)
          <div class="column is-one-quarter" data-aos="fade-in">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="{{asset ('uploads').'/'.$news->news_image}}" alt="">
                </figure>
              </div
              <div class="card-content">
                <div class="media">
                  <div class="media-content">
                    <p class="title is-4 m-t-5 m-b-5 m-l-10 m-r-10">{{$news->title}}</p>
                    <time class="is-small m-t-5 m-b-5 m-l-10 m-r-10">{{$news->created_at->toFormattedDateString()}}</time>
                  </div>
                </div>

                <div class="content m-t-10 m-b-10 m-l-10 m-r-10">
                  {{$news->description}}
                </div>
                <div >
                  <a href="{{route('news-item/', $news->id)}}" class="info">詳細內容</a>
                </div>
              </div>
            </div>

          </div>
        @endforeach
      </div>
    </div>
  </section>

@stop
