@extends('layouts.default')
@section('content')
  <header id="homeHeader" style="background-image: url({{ asset ('images/style2-1.jpg') }})">
@include('_includes.nav.main')
  <img src="{{ asset ('images/intro-2-L-G.png') }}" class="headerImage is-hidden-touch" alt="" data-aos="zoom-in">
  <img src="{{ asset ('images/intro-2-S-G.png') }}" class="headerImage is-hidden-desktop" alt="" data-aos="zoom-in">
</header>

<seaction>
  <div class="container">
    <div class="columns is-mobile is-multiline">
      @foreach ($indexInfos as $indexInfo)
        <div class="column introContentBlock p-t-40 is-half-mobile">
          <img src="{{ asset ('uploads').'/'.$indexInfo->image}}" class="img-circle introContentImage m-b-10" alt="Responsive image" style="width:120px;height:120px;">
            <h5>{{$indexInfo->title}}</h5>
            <hr class="m-t-10 m-b-10">
            <p class="is-hidden-touch">{{$indexInfo->slogan}}</p>
        </div>
      @endforeach
    </div>
    <div class="colums">
      <div class="column is-12 has-text-centered">
        <a class="button is-ybc-btn">想要了解更多？請直接聯繫我們</a>
      </div>
    </div>
  </div>
</seaction>
<section>
  <hr class="separate_lines_gery">
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
<section>
  <hr class="separate_lines_gery m-b-35">
  <div class="container">

    <div class="columns is-mobile is-multiline">
      <div class="column is-half-mobile" data-aos="fade-in">
        <div class="homeFootItem">

          <img src="{{ asset ('images/footContent1.jpg') }}" class="img-responsive center-block" height="560px" width="320px" alt="">

          <div class="homeFootContentmask">
            <div class="homeFootContentTitle">
              <p>企業新聞</p>
              <hr>
            </div>
            <p class="homeFootContentDesc">Recent news</p>
          </div>
          <div class="homeFootItemLink">
            <a href="{{route('news')}}" class="info"></a>
          </div>
        </div>
      </div>
      <div class="column is-half-mobile" data-aos="fade-in">
        <div class="homeFootItem">
        <img src="{{ asset ('images/footContent2.jpg') }}" class="img-responsive center-block" height="560px" width="320px" alt="">
          <div class="homeFootContentmask">
            <div class="homeFootContentTitle">
              <p>客戶服務</p>
              <hr>
            </div>
            <p class="homeFootContentDesc">Service</p>
          </div>
          <div class="homeFootItemLink">
            <a href="#" class="info"></a>
          </div>
        </div>
      </div>
      <div class="column is-half-mobile" data-aos="fade-in">
        <div class="homeFootItem">
        <img src="{{ asset ('images/footContent3.jpg') }}" class="img-responsive center-block" height="560px" width="320px" alt="">
          <div class="homeFootContentmask">
            <div class="homeFootContentTitle">
              <p>工程進度</p>
              <hr>
            </div>
            <p class="homeFootContentDesc">schedule</p>
          </div>
          <div class="homeFootItemLink">
            <a href="#" class="info"></a>
          </div>
        </div>
      </div>
      <div class="column is-half-mobile" data-aos="fade-in">
        <div class="homeFootItem">
        <img src="{{ asset ('images/footContent4.jpg') }}" class="img-responsive center-block" height="560px" width="320px" alt="">
          <div class="homeFootContentmask">
            <div class="homeFootContentTitle">
              <p>聯絡我們</p>
              <hr>
            </div>
            <p class="homeFootContentDesc">contact us</p>
          </div>
          <div class="homeFootItemLink">
            <a href="#" class="info"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
