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
          <li class="is-active"><a href="{{route('news')}}">近期新聞</a></li>
        </ul>
      </div>
    </div>
  </section>
  <section class="m-t-40">
    <div class="container">
      <div class="columns is-multiline">
        @foreach ($newss as $news)
          <div class="column is-one-quarter">
            <div class="card">
              <div class="card-image">
                <figure>
                  <a href="{{route('news-item/', $news->id)}}">
                  <img class="news-image" src="{{asset ('uploads').'/'.$news->news_image}}" alt="">
                </a>
                </figure>
              </div>
              <div class="card-content">
                <div class="media-content">
                  <p class="title is-5 m-t-5 m-b-5">{{$news->title}}</p>
                  <p class="news-time is-small m-t-5 m-b-5">{{$news->created_at->toFormattedDateString()}}</p>
                  <hr class="m-t-10 m-b-10">
                </div>
                <div class="content">
                  {{str_limit($news->description,100)}}

                  <div class="news-more">
                    <a href="{{route('news-item/', $news->id)}}" class="button is-ybc-brown-btn">詳細內容</a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        @endforeach
      </div>
      {{$newss->links()}}
    </div>
  </section>

@stop
