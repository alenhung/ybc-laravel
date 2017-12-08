@extends('layouts.default')
@section('content')
  <section id="contentHeader" style="background: url({{ asset ('images/redevelopment/redevelopment-background.jpg') }})">
    @include('_includes.nav.main')
    <div class="container">
      <div id="contentHeaderBlock" class="content">
        <h2>都市更新／聯開</h2>
        <hr class=" m-t-10 m-b-10">
        <p>Redevelopment of YuanBang Construction</p>
      </div>
    </div>
  </section>
  <section id="pageNav" class="has-shadow m-t-15">
    <div class="container">
      <div class="tabs">
        <ul>
          <li class="is-active"><a href="{{route ('redevelopment')}}">都市更新／聯開</a></li>
          <li ><a href="{{route ('redevelopmenting')}}">執行案例</a></li>
        </ul>
      </div>
    </div>
  </section>
  <section id="redevelopment" class="m-t-35">
    <div class="container">
      <div class="columns">
        <div class="column redevelopment-intro">
          <h2>都市更新／聯開</h2>
          <hr class="m-t-10 m-b-10">
          <div class="redevelopment-inro-text">
            <p>都市更新是指在都市計畫範圍內，為促進都市土地有計畫的再開發利用， 復甦都市機能，改善居住環境，增進公共利益，依都市更新條例所定的程 序，實施重建、整建或維護措施。</p>
            <p>都市更新主要針對老舊社區、巷道狹窄有礙救災及居住環境品質不良等地區，透過拆除重建或整建維護的方式，提升居住環境品質，使大家住得更安全、更舒適。</p>
            <p>都市更新處理方式可分為重建、整建及維護，分述如下：</p>
            <dl>
            <dt>重建：</dt>
            <dd>即拆屋重建，在重建規劃時，除必須考量現住戶或違章戶安置外，對改善環境品質及增進公益性亦為更新時重要的考量事項。 </dd>
            <dt>整建：</dt>
            <dd>指改建、修建更新地區內建築物或充實其設備，如外牆拉皮、增設電梯或升降設備等。</dd>
            <dt>維護：</dt>
            <dd>指加強更新地區內土地使用及建築管理，改進區內公共設施、以保持其良好狀況。</dd>
            </dl>
          <p>整建與維護即一般所謂建築物立面整修或4、5層樓老舊公寓增設電梯，考量原有建築結構安全良好，尚無拆除重建之必要，惟建築物外觀或既有設施過於老舊，透過該方式能改善居住環境品質及都市景觀。</p>
          </div>
        </div>
        <div class="column">
          <img src="{{asset ('images/redevelopment/architectural.jpg')}}" alt="">
        </div>
      </div>
    </div>
  </section>
<section style="background: url({{ asset ('images/redevelopment/law.jpg') }};background-size: cover;background-attachment: fixed;background-repeat: no-repeat;background-position: center top;overflow: auto;margin-top: 60px;margin-bottom:60px; ">
<div class="container redevelopment-intro-image">
  <h2>相關法規</h2>
  <hr class="m-t-10 m-b-10">
  <div class="columns">
    <div class="column law-content">
      <h3>都市更新相關資料連結</h3>
      <hr class="dark-hr m-t-10 m-b-10">
      <ul>
        <li><i class="fa fa-link m-r-10" aria-hidden="true"></i> <a href="http://www.cpami.gov.tw/最新消息/法規公告/28-都市更新篇/10321-都市更新條例.html" target="_blank"> 都市更新條例</a></li>
        <li><i class="fa fa-link m-r-10" aria-hidden="true"></i> <a href="http://www.cpami.gov.tw/最新消息/法規公告/28-都市更新篇/10331-都市更新條例施行細則.html" target="_blank"> 都市更新條例施行細則</a></li>
        <li><i class="fa fa-link m-r-10" aria-hidden="true"></i> <a href="http://www.cpami.gov.tw/最新消息/法規公告/28-都市更新篇/10324-都市更新權利變換實施辦法.html" target="_blank"> 都市更新權利變換實施辦法</a></li>
        <li><i class="fa fa-link m-r-10" aria-hidden="true"></i> <a href="http://www.cpami.gov.tw/最新消息/法規公告/28-都市更新篇/10329-都市更新建築容積獎勵辦法.html" target="_blank"> 都市更新建築容積獎勵辦法</a></li>
      </ul>
    </div>
    <div class="column law-content">
      <h3>台北市相關法規</h3>
      <hr class="dark-hr m-t-10 m-b-10">
      <ul>
        <li><i class="fa fa-link m-r-10" aria-hidden="true"></i> <a href="http://uro.gov.taipei/ct.asp?xItem=660700&ctNode=12899&mp=118011" target="_blank"> 臺北市都市更新法規</a></li>
        <li><i class="fa fa-link m-r-10" aria-hidden="true"></i> <a href="http://uro.gov.taipei/public/Attachment/482016421774.pdf" target="_blank"> 臺北市自行劃定更新單元重建區段作業須知</a></li>
        <li><i class="fa fa-link m-r-10" aria-hidden="true"></i> <a href="http://uro.gov.taipei/ct.asp?xItem=660670&ctNode=12899&mp=118011" target="_blank"> 臺北市都市更新單元規劃設計獎勵容積評定標準</a></li>
        <li><i class="fa fa-link m-r-10" aria-hidden="true"></i> <a href="http://uro.gov.taipei/ct.asp?xItem=660700&ctNode=12899&mp=118011" target="_blank"> 臺北市都市更新自治條例</a></li>
        <li><i class="fa fa-link m-r-10" aria-hidden="true"></i> <a href="http://www.uro.taipei.gov.tw/public/MMO/URO/臺北市政府受理都市更新案審查作業要點.pdf" target="_blank"> 臺北市政府受理都市更新案審查作業要點</a></li>
      </ul>
    </div>
    <div class="column law-content">
      <h3>新北市相關法規</h3>
      <hr class="dark-hr m-t-10 m-b-10">
      <ul>
        <li><i class="fa fa-link m-r-10" aria-hidden="true"></i> <a href="http://www.planning.ntpc.gov.tw/archive/file/新北市都市更新審議原則_1050628.pdf" target="_blank"> 新北市都市更新法規</a></li>
        <li><i class="fa fa-link m-r-10" aria-hidden="true"></i> <a href="http://www.planning.ntpc.gov.tw/archive/file/新北市都市更新單元劃定修正條文(1).pdf" target="_blank"> 新北市都市更新單元劃定基準</a></li>
        <li><i class="fa fa-link m-r-10" aria-hidden="true"></i> <a href="http://www.planning.ntpc.gov.tw/archive/file/980310.pdf" target="_blank"> 新北市都市更新建築容積獎勵核算基準</a></li>
      </ul>
    </div>
  </div>
  </div>
</section>
<section>
  <div class="container redevelopment-process">
    <h2>相關法規</h2>
    <hr class="m-t-10 m-b-10">
    <div class="redevelopment-block">
      <p>都市更新推動流程分為劃定都市更新地區及擬定都市更新計畫、擬定都市更新事業計畫、與計劃之執行等三個階段，而權力變化計畫視實際實施方式是否採權利變換方式而定。</p>
    </div>
    <div class="columns">
      <div class="column">
        <img src="{{asset ('images/redevelopment/process.jpg')}}" alt="" class="is-center">
      </div>
    </div>
  </div>
</section>
@stop
