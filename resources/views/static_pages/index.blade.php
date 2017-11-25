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
      <div class="column introContentBlock p-t-40 is-half-mobile">
        <img src="{{ asset ('images/image1.jpg')}}" class="img-circle introContentImage m-b-10" alt="Responsive image" style="width:120px;height:120px;">
          <h5>員邦歷程</h5>
          <hr class="m-t-10 m-b-10">
          <p class="is-hidden-touch">持續30年的優質演化</p>
      </div>
      <div class="column introContentBlock p-t-40 is-half-mobile">
        <img src="{{ asset ('images/image2.jpg')}}" class="img-circle introContentImage m-b-10" alt="Responsive image" style="width:120px;height:120px;">
          <h5>專業團隊</h5>
          <hr class="m-t-10 m-b-10">
          <p class="is-hidden-touch">「建設」結合「營造」之整合體系</p>
      </div>
      <div class="column introContentBlock p-t-40 is-half-mobile">
        <img src="{{ asset ('images/image3.jpg')}}" class="img-circle introContentImage m-b-10" alt="Responsive image" style="width:120px;height:120px;">
          <h5>在建工程</h5>
          <hr class="m-t-10 m-b-10">
          <p class="is-hidden-touch">最新建案相關一覽。</p>
      </div>
      <div class="column introContentBlock p-t-40 is-half-mobile">
        <img src="{{ asset ('images/image4.jpg')}}" class="img-circle introContentImage m-b-10" alt="Responsive image" style="width:120px;height:120px;">
          <h5>都市更新</h5>
          <hr class="m-t-10 m-b-10">
          <p class="is-hidden-touch">都市更新開發專業整合。</p>
      </div>
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
      {{-- works item --}}
      <div class="column is-one-quarter" data-aos="fade-in">
        <div class="worksItem">
         <img src="{{asset('images/building/building1.jpg')}}" alt="">
          <div class="worksContentmask">
            <div class="worksContentTitle m-t-100">
              <p>都美艷</p>
              <hr class="m-t-10 m-b-10">
            </div>
            <p class="worksContentDesc">Beauty All In One</p>
            <p class="circleMore m-t-10">MORE</p>
          </div>
          <div class="worksItemLink">
            <a href="{{route('works-item/')}}" class="info"></a>
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
            <p class="worksContentDesc">4米2新甜品宅</p>
            <p class="circleMore m-t-10">MORE</p>
          </div>
          <div class="worksItemLink">
            <a href="{{route('works-item/')}}" class="info"></a>
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
            <p class="worksContentDesc">中華大道旁．最精采的生活饗宴</p>
            <p class="circleMore m-t-10">MORE</p>
          </div>
          <div class="worksItemLink">
            <a href="{{route('works-item/')}}" class="info"></a>
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
            <p class="worksContentDesc">台北門牌．山海城市</p>
            <p class="circleMore m-t-10">MORE</p>
          </div>
          <div class="worksItemLink">
            <a href="{{route('works-item/')}}" class="info"></a>
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
            <p class="worksContentDesc">經典之宅．美夢成真</p>
            <p class="circleMore m-t-10">MORE</p>
          </div>
          <div class="worksItemLink">
            <a href="{{route('works-item/')}}" class="info"></a>
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
            <p class="worksContentDesc">經典之宅．美夢成真</p>
            <p class="circleMore m-t-10">MORE</p>
          </div>
          <div class="worksItemLink">
            <a href="{{route('works-item/')}}" class="info"></a>
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
            <p class="worksContentDesc">中華香榭大道．百年經典建築</p>
            <p class="circleMore m-t-10">MORE</p>
          </div>
          <div class="worksItemLink">
            <a href="{{route('works-item/')}}" class="info"></a>
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
            <a href="{{route('works-item/')}}" class="info"></a>
          </div>
        </div>
      </div>
      {{-- works item --}}
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
            <a href="#" class="info"></a>
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
