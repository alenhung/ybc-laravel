@extends('layouts.default')
@section('content')
  <section id="contentHeader" style="background: url({{ asset ('images/aboutBackground1.jpg') }})">
    @include('layouts._nav')
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
          <li class="is-active"><a>公司簡介</a></li>
          <li><a>經營理念</a></li>
          <li><a>未來願景</a></li>
          <li><a>關係企業</a></li>
        </ul>
      </div>
    </div>
  </section>
  <section class="m-t-40 about-content">
    <div class="container">
      <div class="columns">
        <div class="column is-4 is-offset-1 ">
          <img src="{{ asset ('images/about/about2.jpg') }}" class="has-shadow" alt="">
        </div>
        <div class="column content is-6 is-offset-1">
          <h2 class="ybc-title-h2">員邦堅持以人為本，滿足需求的主動政策</h2>
          <hr>
          <p>創立於1984年，「員邦室內裝修設計(股)公司」為一家領有各項法定證照並擁有「建築物室內裝修業登記證」的專業「室內設計裝修」服務供應商，憑藉著絕大多數來自於客戶推薦與再次委託的實績，我們已在許多不同的市場區段裡，成功發展出我們完整的競爭力，在同時藉由提供積極正面、受多方訓練的專業服務，以及誠信哲學的推廣下，我們成就了市場區段從「辦公空間」到「 健康醫療美容」，每個令人稱羨的成功案例。</p>
          <p>我們提供完整的服務方案，內容涵蓋室內設計與規劃、裝修工程以及統包工程，我們直接派任公司自有的設計與工程專案管理人員，並在室內設計裝修市場中，引以為傲地提供具競爭力與高品質的專業服務，同時，我們奉行全方面最高標準確保與以「不計一切」態度來達成客戶需求的主動政策，以保證所有專案在過程中都能進行順利。</p>
          <br>
          <br>
          <a class="button is-ybc-brown-btn">了解我們的經營理念</a>
        </div>
      </div>
    </div>
  </section>
  {{--  --}}
  <section class="m-t-40 about-content">
    <div class="container">
      <div class="columns">
        <div class="column is-4 is-offset-1 ">
          <img src="{{ asset ('images/about/about3.jpg') }}" class="has-shadow" alt="">
        </div>
        <div class="column content is-6 is-offset-1">
          <h2 class="ybc-title-h2">經營理念</h2>
          <hr>
          <p>企業要長久生存，並在業界樹立口碑，除需要專業的技術、優良的組織文化、盡職的維修服務外，更需要隨時戰戰兢兢地處理著客戶交代的每一個細節，因為只要有用心，只要有實力，只有效率，才能不斷地爭取更大的舞台空間。</p>
          <p>競爭，是企業的本質。不能後退。是企業體的命運一家經營成功且上軌道的企業，不應該因為大環境的變動，對業績產生大大的影響，也就是說，不能把景氣的好壞，當做是企業不進步的理由與藉口。所以，員邦企業除追求穩健的經營外，更體認到，不斷進步、持續成長是我們隨時與必需的挑戰。</p>
          <p>要與一家公司或連銷企業維繫良好的關係，並做長期的往來，我們一貫的準則是:誠信的服務、專業的配合、合理的價位。如此才能慢慢地得到客戶的肯定與認同，並放心把下一次工作的機會託付給我們，甚至成為一輩子的朋友。</p>
          <p>今後，員邦企業將繼續兼持著:誠信、專業、合理的原則，期代遇到願給員邦企業另一個20年的伯樂。</p>
          <br>
          <br>
          <a class="button is-ybc-brown-btn">了解我們的未來願景</a>
        </div>
      </div>
    </div>
  </section>
  {{--  --}}
  <section class="m-t-40 about-content">
    <div class="container">
      <div class="columns">
        <div class="column is-4 is-offset-1 ">
          <img src="{{ asset ('images/about/about4.jpg') }}" class="has-shadow" alt="">
        </div>
        <div class="column content is-6 is-offset-1">
          <h2 class="ybc-title-h2">未來願景</h2>
          <hr>
          <p>今天，整個世界將以10倍數快速前進著，另一波網路革命熱潮正火速翻騰。如何在設計裝璜業中突破現況、超越時下;讓員邦企業的存在更有價值，對社會更有貢獻，將是末來努力的方向。</p>
        <p>因此，員邦企業正績極提昇人員素質，培育專業管理人才與優秀技術人員，讓策劃面與執行面的競爭力可以相輔相成，滿足不同客戶的任何需求。</p>
        <p>邁向全面科技化的21世紀，員邦企業始終堅持理念，為開創更美好的前景持續努力著，繼續兼持:誠信的服務、專業的配合、合理的價位之原則，希望有機會能為更多的企業做最好的服務。</p>
          <br>
          <br>
          <a class="button is-ybc-brown-btn">了解我們的關係企業</a>
        </div>
      </div>
    </div>
  </section>
  {{--  --}}
  <section class="m-t-40 about-content">
    <div class="container">
      <div class="columns">
        <div class="column is-4 is-offset-1 ">
          <img src="{{ asset ('images/about/about2.jpg') }}" class="has-shadow" alt="">
        </div>
        <div class="column content is-6 is-offset-1">
          <h2 class="ybc-title-h2">關係企業</h2>
          <hr>
          <p>創立於1984年，「員邦室內裝修設計(股)公司」為一家領有各項法定證照並擁有「建築物室內裝修業登記證」的專業「室內設計裝修」服務供應商，憑藉著絕大多數來自於客戶推薦與再次委託的實績，我們已在許多不同的市場區段裡，成功發展出我們完整的競爭力，在同時藉由提供積極正面、受多方訓練的專業服務，以及誠信哲學的推廣下，我們成就了市場區段從「辦公空間」到「 健康醫療美容」，每個令人稱羨的成功案例。</p>
          <br>
          <br>
          <a class="button is-ybc-brown-btn">返回公司簡介</a>
        </div>
      </div>
    </div>
  </section>

@include('layouts._foot')
@stop
