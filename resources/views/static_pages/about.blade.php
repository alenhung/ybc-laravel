@extends('layouts.default')
@section('content')
  <section id="contentHeader" style="background: url({{ asset ('images/aboutBackground1.jpg') }})">
    @include('_includes.nav.main')
    <div class="container">
      <div id="contentHeaderBlock" class="content">
        <h2>關於員邦</h2>
        <hr>
        <p>company overview of YuanBang Land</p>
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
          <h2 class="ybc-title-h2">{{$about->title}}</h2>
          <hr>
          <p>{{$about->description}}</p>
          <br>
          <br>
          <a class="button is-ybc-brown-btn m-b-20">{{$about->button_text}}</a>
        </div>
      </div>
    </div>
  </section>
  @endforeach



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
    });
</script>
@endsection
@stop
