@extends('layouts.default')
@section('content')
  <section id="contentHeader" style="background: url({{ asset ('images/redevelopment/redevelopment-background.jpg') }})">
    @include('_includes.nav.main')
    <div class="container">
      <div id="contentHeaderBlock" class="content">
        <h2>執行案例</h2>
        <hr class=" m-t-10 m-b-10">
        <p>Redevelopment of YuanBang Land</p>
      </div>
    </div>
  </section>
  <section id="pageNav" class="has-shadow m-t-15">
    <div class="container">
      <div class="tabs">
        <ul>
          <li ><a href="{{route('redevelopment')}}">都市更新／聯開</a></li>
          <li class="is-active"><a href="{{route('redevelopmenting')}}">執行案例</a></li>
        </ul>
      </div>
    </div>
  </section>
  <section id="redevelopment" class="m-t-35">
    <div class="container">
      <div class="columns">
        <div class="column redevelopment-intro">
          <h2>執行案例</h2>
          <hr class="m-t-10 m-b-10">
          <h5>多年來我們已完成多件都更/聯開案例，資料正努力整理，請期待頁面更新！</h5>
          <p>如您有相關問題，請直接聯絡我們，我們將立即為您服務！</p>
          <a href="{{route('contact')}}" class="button is-ybc-brown-btn m-t-20 m-b-20">聯絡我們</a>
        </div>

      </div>
    </div>
  </section>
@stop
