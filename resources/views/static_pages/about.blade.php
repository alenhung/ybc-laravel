@extends('layouts.default')
@section('content')
  <section id="contentHeader" style="background: url({{ asset ('images/aboutBackground1.jpg') }})">
    @include('_includes.nav.main')
    <div class="container">
      <div id="contentHeaderBlock" class="content">
        <h2>關於員邦</h2>
        <hr>
        <p>About YuanBang Construction</p>
      </div>
    </div>
  </section>
  <section id="pageNav" class="has-shadow m-t-15">
    <div class="container">
      <div class="tabs">
        <ul>

          @foreach ($abouts as $about)
            <li><a>{{$about->nav_title}}</a></li>
          @endforeach
          <li><a>歷史沿革</a></li>
          <li><a>關係企業</a></li>
        </ul>
      </div>
    </div>
  </section>
  @foreach ($abouts as $about)
  <section class="m-t-40 about-content">
    <div class="container">
      <div class="columns">
        <div class="column is-4 is-offset-1 m-r-20 m-l-20 ">
          <img src="{{asset ('uploads').'/'.$about->about_image}}" class="has-shadow" alt="" data-aos="fade-right">
        </div>
        <div class="column content is-6 is-offset-1 m-r-20 m-l-20" >
          <h2>{{$about->title}}</h2>
          <hr>
          {!!$about->description!!}
          <br>
          <br>
          <a class="button is-ybc-brown-btn m-b-20">{{$about->button_text}}</a>
        </div>
      </div>
    </div>
  </section>

  @endforeach
  <section id="cd-timeline" class="cd-container  about-content">

      <div class="columns">
        <div class="column history-content" style="z-index:100;">
          <h2>不停淬煉，成就永續</h2>
          <hr class="m-t-10 m-b-10">
          <p>員邦建築自三十多年來不斷淬煉演化，自你我身邊最細節的部分開端，早期裝修工程行逐步穩紮成長邁向建築業。</p>
          <p>十多年來累積多項熱銷建案，我們不以成就自滿，深知一切只是基礎，持續淬煉，永續經營。</p>
        </div>
      </div>

    @foreach ($historys as $history)
		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-movie">
				{{-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-picture.svg" alt="Picture"> --}}
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>{{$history->title}}</h2>
        <hr>
				{!!$history->description!!}
        @php
          if ($history->url ==""){
            echo "";
          }else{
            echo '<a class="button is-ybc-btn is-pulled-right" href="'.$history->url.'">相關連結</a>';
          }
        @endphp
				<span class="cd-date">{{$history->year}}</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
    @endforeach
	</section> <!-- cd-timeline -->
  <section id="affiliated" class="about-content m-t-40">
    <div class="container">
      <div class="columns">
        <div class="column affiliated-content">
          <h2>多元佈局，奠定事業版圖</h2>
          <hr class="m-t-10 m-b-10">
          <p>員邦集團深耕於建築相關產業，如員邦建築、員旺建設、台佳建設、峻佳工程、旺邦營造、都美機構、員邦室內裝修、普騰預伴混凝土完整一條龍建築產業。</p>
          <p>集團亦跨足旅遊業－大都會酒店、生技業－翡翠灣生技等各項佈局，</p>
          <img src="{{ asset ('images/affiliated.jpg') }}" alt="關係企業" style="box-shadow:none; border:0;" class="m-t-50 m-b-50">
        </div>
      </div>
  </section>
<link rel="stylesheet" type="text/css" href="{{ asset('css/timeline.css') }}">
@section('scripts')
<script>
var hash= document.location.hash;
console.log( hash );
$( document ).ready(function() {
    // about Page use
      var $pageSelect = $("#pageNav li");
      var $showContent = $(".about-content");
      var $nextButton = $(".about-content a");
      $($pageSelect[0]).addClass("is-active");
      $showContent.hide();
      $($showContent[0]).fadeIn();
      $pageSelect.each(function(n){
        $(this).click(function(){
          console.log(n);
          $pageSelect.removeClass();
          $(this).addClass("is-active");
          $showContent.hide();
          $($showContent[n]).fadeIn();
        });
      });
      $nextButton.each(function(i){
        $(this).click(function(){
          $showContent.hide();
          $pageSelect.removeClass();
          if(i<=2){
            $($showContent[i+1]).fadeIn();
            $($pageSelect[i+1]).addClass("is-active");
          }else{
            $($showContent[0]).fadeIn();
            $($pageSelect[0]).addClass("is-active");
          }

        });
      });
      /**/
      var $timeline_block = $('.cd-timeline-block');

    	//hide timeline blocks which are outside the viewport
    	$timeline_block.each(function(){
    		if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
    			$(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
    		}
    	});

    	//on scolling, show/animate timeline blocks when enter the viewport
    	$(window).on('scroll', function(){
    		$timeline_block.each(function(){
    			if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
    				$(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
    			}
    		});
    	});
      /**/
    });
</script>
@endsection
@stop
