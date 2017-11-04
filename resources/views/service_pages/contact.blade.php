@extends('layouts.default')
@section('content')
  <section id="contentHeader" style="background: url({{ asset ('images/serviceBackground.jpg') }})">
    @include('layouts._nav')
    <div class="container">
      <div id="contentHeaderBlock" class="content">
        <h2>客戶服務</h2>
        <hr>
        <p>Contact with YuanBang</p>
      </div>
    </div>
  </section>
  <section id="pageNav" class="has-shadow m-t-15">
    <div class="container">
      <div class="tabs">
        <ul>
          <li class="is-active"><a>客戶服務</a></li>
          <li><a>服務流程SOP</a></li>
        </ul>
      </div>
    </div>
  </section>
  <section id="serviceIntro" class="m-t-35">
    <div class="container">
      <div class="columns is-mobile is-multiline">
        <div class="column is-half-mobile p-r-20 p-l-20">
          <img src="{{asset('images/serviceImage1.jpg')}}" alt="">
          <h5 class="m-t-10 m-b-10">客戶服務</h5>
          <ul>
            <li>線上工程進度照片每月更新瀏覽</li>
            <li>客戶變更作業</li>
            <li>發送簡訊關懷</li>
            <li>發送問候卡片</li>
            <li>住戶生活使用手冊</li>
          </ul>
        </div>
        <div class="column is-half-mobile p-r-20 p-l-20">
          <img src="{{asset('images/serviceImage2.jpg')}}" alt="">
          <h5 class="m-t-10 m-b-10">售後服務</h5>
          <ul>
            <li>房屋保固服務</li>
            <li>保固期後修繕服務及優良廠商提供</li>
            <li>水錶、電錶之過戶處理</li>
            <li>保固期滿年度社區公設健檢</li>
            <li>保固期內DIY活動辦理</li>
          </ul>
        </div>
        <div class="column is-half-mobile p-r-20 p-l-20">
          <img src="{{asset('images/serviceImage3.jpg')}}" alt="">
          <h5 class="m-t-10 m-b-10">開發洽談</h5>
          <ul>
            <li>都市更新相關開發</li>
            <li>合建案相關開發</li>
            <li>其他合作開發</li>
          </ul>
        </div>
        <div class="column is-half-mobile p-r-20 p-l-20">
          <img src="{{asset('images/serviceImage4.jpg')}}" alt="">
          <h5 class="m-t-10 m-b-10">其他問題</h5>
          <ul>
            <li>預約賞屋</li>
            <li>其他問題諮詢</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="contact-area" class="m-t-50">
    <div class="container ">
      <div class="content m-r-20 m-l-20">
        <h2>聯絡我們</h2>
        <hr>
      </div>
      <div class="columns">
        <div class="column is-5 m-r-20 m-l-20">
          <p>永續經營的事業，是永不止息的馬拉松競賽。<p>
        <p>超越競爭者的勝利只在一時，穩定步伐中的挑戰極限、邁向成功，才是真正的贏家！在瞬息萬變的消費者時代，豪宅建案百家爭鳴，但是在員邦全體員工的努力下，始終以居住者的最高舒適度為第一考量，無止盡的努力不懈、堅持用心，所以才能每次推案始終領先群雄，贏得讚美和掌聲。</p>
        <br><br><br>
        <p>服務電話：+886-2-2381-8666</p>
        <p>E-MAIL：service@yuanbang.com.tw</p>
        <p>通訊地址：台北市中華路一段90號4F</p>
        </div>
        <div class="column is-6 is-offset-1 m-r-20 m-l-20">
          <form action="POST">
            <div class="columns">
              <div class="column is-12">
                <p>請簡述您的相關問題</p>
              </div>
            </div>
            <div class="columns">
              <div class="column is-6">
                <div class="control">
                  <input class="input" type="text" placeholder="您的大名">
                </div>
              </div>
              <div class="column is-6">
                <div class="control">
                  <input class="input" type="text" placeholder="聯絡電話">
                </div>
              </div>
            </div>
            <div class="columns is-multiline">
              <div class="column is-12">
                <div class="control">
                  <input class="input" type="text" placeholder="電子信箱">
                </div>
              </div>
              <div class="column is-12">
                <div class="field">
                <div class="select">
                  <select>
                    <option>土地開發</option>
                    <option>鄰房問題</option>
                    <option>購屋相關</option>
                    <option>其他問題</option>
                  </select>
                </div>
              </div>
              </div>
              <div class="column is-12">
                <textarea class="textarea" placeholder="請概要說明您的問題" rows="3"></textarea>
              </div>
              <div class="column is-12">
                <a class="button is-ybc-brown-btn is-pulled-right" >問題送出</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@include('layouts._foot')
@stop
