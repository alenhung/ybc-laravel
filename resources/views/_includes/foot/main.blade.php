<footer class="m-t-40 p-t-30">
  <div class="container">
    <div class="columns foot-left-area p-r-20 p-l-20 p-b-20">
    	<div class="column footLogo">
    		<a class="" href="#"><img class="img-responsive " src="{{ asset ('images/companyLogoFoot.png') }}" alt=""></a>
            <p>{{$contactInfo->e_address}}</p>
            <p>TEL: {{$contactInfo->tel}} | FAX: {{$contactInfo->fax}}</p>
    	</div>
    	<div class="column footRightArea p-r-20 p-l-20 p-b-20">
        <div class="columns is-mobile">
          <div class="column content">
      		  <h5>關於</h5>
            <hr class="footHr">
            <ul>
              <li><a href="{{route('about')}}">公司簡介</a></li>
              <li><a href="{{route('about').'?url=history'}}">發展歷程</a></li>
              <li><a href="{{route('news')}}">企業新聞</a></li>
              <li><a href="{{route('about').'?url=affiliated'}}">關係企業</a></li>
              <li><a href="{{route('jobs')}}">人才招募</a></li>
            </ul>
          </div>
          <div class="column content">
            <h5>作品</h5>
            <hr class="footHr">
            <ul>
              <li><a href="{{route('works')}}">經典建案</a></li>
              <li><a href="{{route('OnSale')}}">熱銷建案</a></li>
              <li><a href="{{route('SaleOut')}}">完銷建案</a></li>
              <li><a href="{{route('workings')}}">在建工程</a></li>
            </ul>
          </div>
          <div class="column content">
            <h5>都市更新</h5>
            <hr class="footHr">
            <ul>
              <li><a href="{{route('redevelopment')}}">都更／聯開</a></li>
              <li><a href="{{route('redevelopmenting')}}">執行案例</a></li>
            </ul>
          </div>
          <div class="column content">
            <h5>服務</h5>
            <hr class="footHr">
            <ul>
              <li><a href="{{route('contact')}}">聯絡我們</a></li>
            </ul>
          </div>
        </div>
    	</div>
    </div>
  </div>
  <div class="footCopyright p-t-15 p-b-15">
    <div class="container">
      <div class="content m-r-20 m-l-20">
        <p>© 2017 員邦建築股份有限公司 YuanBang  Construction Co., Ltd. All rights reserved.</p>
      </div>
    </div>

</footer>
