@extends('layouts.default')
@section('content')
  <section id="contentHeader" style="background: url({{ asset ('images/worksBackground3.jpg') }})">
    @include('layouts._nav')
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
        {{-- works item --}}
        <div class="column is-one-quarter" data-aos="fade-in">
          <div class="worksItem">
           <img src="{{asset('images/building/building1.jpg')}}" alt="">
            <div class="worksContentmask">
              <div class="worksContentTitle m-t-100">
                <p>都美艷</p>
                <hr class="m-t-10 m-b-10">
              </div>
              <p class="worksContentDesc">北市西區小豪宅</p>
              <p class="circleMore m-t-10">MORE</p>
            </div>
            <div class="worksItemLink">
              <a href="{{route('works-item')}}" class="info"></a>
            </div>
          </div>
        </div>
        {{-- works item --}}
        {{-- works item --}}
        <div class="column is-one-quarter" data-aos="fade-in">
          <div class="worksItem">
           <img src="{{asset('images/building/building2.jpg')}}" alt="">
            <div class="worksContentmask">
              <div class="worksContentTitle m-t-100">
                <p>台北甜心</p>
                <hr class="m-t-10 m-b-10">
              </div>
              <p class="worksContentDesc">新北學區宅</p>
              <p class="circleMore m-t-10">MORE</p>
            </div>
            <div class="worksItemLink">
              <a href="{{route('works-item')}}" class="info"></a>
            </div>
          </div>
        </div>
        {{-- works item --}}
        {{-- works item --}}
        <div class="column is-one-quarter" data-aos="fade-in">
          <div class="worksItem">
           <img src="{{asset('images/building/building3.jpg')}}" alt="">
            <div class="worksContentmask">
              <div class="worksContentTitle m-t-100">
                <p>員邦華宴</p>
                <hr class="m-t-10 m-b-10">
              </div>
              <p class="worksContentDesc">坐擁北市西區便利</p>
              <p class="circleMore m-t-10">MORE</p>
            </div>
            <div class="worksItemLink">
              <a href="{{route('works-item')}}" class="info"></a>
            </div>
          </div>
        </div>
        {{-- works item --}}
        {{-- works item --}}
        <div class="column is-one-quarter" data-aos="fade-in">
          <div class="worksItem">
           <img src="{{asset('images/building/building4.jpg')}}" alt="">
            <div class="worksContentmask">
              <div class="worksContentTitle m-t-100">
                <p>陽明峰匯</p>
                <hr class="m-t-10 m-b-10">
              </div>
              <p class="worksContentDesc">經典之宅．豪氣萬千</p>
              <p class="circleMore m-t-10">MORE</p>
            </div>
            <div class="worksItemLink">
              <a href="{{route('works-item')}}" class="info"></a>
            </div>
          </div>
        </div>
        {{-- works item --}}
        {{-- works item --}}
        <div class="column is-one-quarter" data-aos="fade-in">
          <div class="worksItem">
           <img src="{{asset('images/building/building5.jpg')}}" alt="">
            <div class="worksContentmask">
              <div class="worksContentTitle m-t-100">
                <p>員邦夢想家/美夢區</p>
                <hr class="m-t-10 m-b-10">
              </div>
              <p class="worksContentDesc">經典之宅．豪氣萬千</p>
              <p class="circleMore m-t-10">MORE</p>
            </div>
            <div class="worksItemLink">
              <a href="{{route('works-item')}}" class="info"></a>
            </div>
          </div>
        </div>
        {{-- works item --}}
        {{-- works item --}}
        <div class="column is-one-quarter" data-aos="fade-in">
          <div class="worksItem">
           <img src="{{asset('images/building/building6.jpg')}}" alt="">
            <div class="worksContentmask">
              <div class="worksContentTitle m-t-100">
                <p>員邦夢想家/圓夢區</p>
                <hr class="m-t-10 m-b-10">
              </div>
              <p class="worksContentDesc">經典之宅．豪氣萬千</p>
              <p class="circleMore m-t-10">MORE</p>
            </div>
            <div class="worksItemLink">
              <a href="{{route('works-item')}}" class="info"></a>
            </div>
          </div>
        </div>
        {{-- works item --}}
        {{-- works item --}}
        <div class="column is-one-quarter" data-aos="fade-in">
          <div class="worksItem">
           <img src="{{asset('images/building/building7.jpg')}}" alt="">
            <div class="worksContentmask">
              <div class="worksContentTitle m-t-100">
                <p>桂林苑</p>
                <hr class="m-t-10 m-b-10">
              </div>
              <p class="worksContentDesc">經典之宅．豪氣萬千</p>
              <p class="circleMore m-t-10">MORE</p>
            </div>
            <div class="worksItemLink">
              <a href="{{route('works-item')}}" class="info"></a>
            </div>
          </div>
        </div>
        {{-- works item --}}
        {{-- works item --}}
        <div class="column is-one-quarter" data-aos="fade-in">
          <div class="worksItem">
           <img src="{{asset('images/building/building8.jpg')}}" alt="">
            <div class="worksContentmask">
              <div class="worksContentTitle m-t-100">
                <p>士林新天地</p>
                <hr class="m-t-10 m-b-10">
              </div>
              <p class="worksContentDesc">經典之宅．豪氣萬千</p>
              <p class="circleMore m-t-10">MORE</p>
            </div>
            <div class="worksItemLink">
              <a href="{{route('works-item')}}" class="info"></a>
            </div>
          </div>
        </div>
        {{-- works item --}}
      </div>
    </div>
  </section>

@include('layouts._foot')
@stop
