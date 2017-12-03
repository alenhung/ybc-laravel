@extends('layouts.default')
@section('content')
  <section id="contentHeader" style="background: url({{ asset ('images/worksBackground2.jpg') }})">
    @include('_includes.nav.main')
    <div class="container">
      <div id="contentHeaderBlock" class="content">
        <h2>人才招募</h2>
        <hr class=" m-t-10 m-b-10">
        <p>Jobs of YuanBang Land</p>
      </div>
    </div>
  </section>
  <section id="pageNav" class="has-shadow m-t-15">
    <div class="container">
      <div class="tabs">
        <ul>
          <li class="is-active"><a>人才招募</a></li>
        </ul>
      </div>
    </div>
  </section>
  <section id="jobs" class="m-t-35">
    <div class="container">
      <div class="columns">
        <div class="column content">
          <h2 class="ybc-title-h2">土建工程人員</h2>
          <hr class=" m-t-10 m-b-10">
          <ul>
            <li>各工種之施工檢查、校對、計價</li>
            <li>依據圖面進行工程檢討、控管施工進度與品質</li>
            <li>執行上級主管交辦事項</li>
            <li>工程修繕、驗收、交屋</li>
            <li>具大樓營建經驗者優先錄取</li>
            <li>需出差，一年累積時間未定</li>
          </ul>
          <hr class=" m-t-10 m-b-10">
          <ul>
            <li>工作經歷：3年以上</li>
            <li>學歷要求：高中以上</li>
            <li>科系要求：土木工程相關、室內藝術相關</li>
            <li>具備駕照：普通重型機車、普通小型車</li>
            <li>其他條件：具估算、估價能力，無不良記錄者</li>
          </ul>
        </div>
        <div class="column content">
          <h2 class="ybc-title-h2">工務</h2>
          <hr class=" m-t-10 m-b-10">
          <ul>
            <li>工地現場監造及工程進度掌控</li>
            <li>工班協調與施工品質監控</li>
            <li>配合外地駐場</li>
            <li>需出差，一年累積時間未定</li>
          </ul>
          <hr class=" m-t-10 m-b-10">
          <ul>
            <li>工作經歷：3年以上</li>
            <li>學歷要求：高中以上</li>
            <li>科系要求：土木工程相關、室內藝術相關</li>
            <li>具備駕照：普通重型機車、普通小型車</li>
            <li>其他條件：具估算、估價能力，無不良記錄者</li>
          </ul>
        </div>
        <div class="column content">
          <h2 class="ybc-title-h2">工程鑑定助理</h2>
          <hr class=" m-t-10 m-b-10">
          <ul>
            <li>房屋現況鑑定(含拍照、調查、測量等現場工作)</li>
            <li>鑑定平面圖CAD繪製 </li>
            <li>鑑定報告書編製</li>
            <li>需出差，一年累積時間未定</li>
          </ul>
          <hr class=" m-t-10 m-b-10">
          <ul>
            <li>工作經歷：3年以上</li>
            <li>學歷要求：專科、大學、碩士</li>
            <li>科系要求：不拘</li>
            <li>具備駕照：普通重型機車、普通小型車</li>
            <li>其他條件：具估算、估價能力，無不良記錄者</li>
          </ul>

        </div>
        <div class="column content">
          <h2 class="ybc-title-h2">建築設計助理</h2>
          <hr class=" m-t-10 m-b-10">
          <ul>
            <li>熟練Auto CAD、Sketch up</li>
            <li>具備建築設計圖說之識圖能力</li>
            <li>整理圖面、繪製設計圖、建照圖與施工圖 </li>
            <li>協助相關建築事務</li>
            <li>需出差，一年累積時間未定</li>
          </ul>
          <hr class=" m-t-10 m-b-10">
          <ul>
            <li>工作經歷：3年以上</li>
            <li>學歷要求：高中、專科、大學</li>
            <li>科系要求：建築相關、其他建築及都市規劃學類</li>
            <li>具備駕照：普通重型機車、普通小型車</li>
          </ul>
        </div>
      </div>
      <div class="columns">
        <div class="column">
          <article class="message">
            <div class="message-body">
              請您下載附件履歷表，填寫完成後寄送至此<a href="mailto:alenhung@gmail.com">電子信箱</a>。附件：<a href="{{asset ('file').'/resume.doc'}}" target="_blank">履歷表</a>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>




@stop
