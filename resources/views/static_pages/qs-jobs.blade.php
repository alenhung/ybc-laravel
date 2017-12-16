@extends('layouts.default')
@section('content')
  <section id="contentHeader" style="background: url({{ asset ('images/intro/jobsBackground.jpg') }});background-size: cover;">
    @include('_includes.nav.main')
    <div class="container">
      <div id="contentHeaderBlock" class="content">
        <h2>人才招募</h2>
        <hr class=" m-t-10 m-b-10">
        <p>Recruitment Of YuanBang Construction</p>
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
      <div class="columns ">
        <div class="column job-intro">
          <h2>多元化職涯舞台</h2>
          <hr class="m-t-10 m-b-10">
          <div class="job-inro-text">
            <p>員邦建築不僅是專注於建築，我們更期待創新了整個產業。多元的背景和想法啟發了我們所做的一切，從令人讚歎的技術到領先業界的環保貢獻，無不閃耀著這樣的創新精神。加入員邦建築，幫我們一起讓世界變得更美好。</p>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="intro-image" style="background: url({{ asset ('images/jobs/section-background.jpg') }};background-size: cover;background-attachment: fixed;background-repeat: no-repeat;background-position: center top;overflow: auto;margin-top: 60px;margin-bottom:60px; height:500px;">
<div class="container">
  <div class="columns is-mobile is-multiline">
    <div class="column is-half-mobile">
      <div class="jobs-card">
        <div class="card-image">
          <figure>
            <img src="{{asset ('images/jobs/jobs-img1.jpg')}}" alt="">
          </figure>
        </div>
        <div class="card-content">
          <div class="media-content">
            <p class="card-title">薪酬獎金</p>
            <hr class="m-t-10 m-b-10">
          </div>
          <div class="content">
            <p>具市場競爭力的薪資水準、完善的員工分紅與績效獎金、三節獎金(端午、中秋、年終)、員工生日禮金。</p>
          </div>
        </div>
      </div>
    </div>
    <div class="column is-half-mobile">
      <div class="jobs-card">
        <div class="card-image">
          <figure>
            <img src="{{asset ('images/jobs/jobs-img2.jpg')}}" alt="">
          </figure>
        </div>
        <div class="card-content">
          <div class="media-content">
            <p class="card-title">健康保障</p>
            <hr class="m-t-10 m-b-10">
          </div>
          <div class="content">
            <p>提供年度健檢、勞健保、退休金、員工團體保險、傷病住院喪亡補助等保障。</p>
          </div>
        </div>
      </div>
    </div>
    <div class="column is-half-mobile">
      <div class="jobs-card">
        <div class="card-image">
          <figure>
            <img src="{{asset ('images/jobs/jobs-img3.jpg')}}" alt="">
          </figure>
        </div>
          <div class="card-content">
            <p class="card-title">教育訓練</p>
            <hr class="m-t-10 m-b-10">
            <p>每年度個人訓練費補助、進修升學補助。</p>
          </div>
      </div>
    </div>
    <div class="column is-half-mobile">
      <div class="jobs-card">
        <div class="card-image">
          <figure>
            <img src="{{asset ('images/jobs/jobs-img4.jpg')}}" alt="">
          </figure>
        </div>
        <div class="card-content">
          <div class="media-content">
            <p class="card-title">樂活生活</p>
            <hr class="m-t-10 m-b-10">
          </div>
          <div class="content">
            <p>完善休假制度，另提供結婚、生育慶賀禮品、購屋優惠。</p>
          </div>
        </div>
      </div>
    </div>
    <div class="column is-half-mobile">
      <div class="jobs-card">
        <div class="card-image">
          <figure>
            <img src="{{asset ('images/jobs/jobs-img5.jpg')}}" alt="">
          </figure>
        </div>
        <div class="card-content">
          <div class="media-content">
            <p class="card-title">員工福利</p>
            <hr class="m-t-10 m-b-10">
          </div>
          <div class="content">
            <p>慶生會、公司旅遊、簽約飯店訂房優惠折扣、特約網商品團購折扣、員工優惠折扣及旅遊補助。</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<section id="new-jobs">
  <div class="container">
    <div class="columns ">
      <div class="column job-intro m-b-40">
        <h2>目前熱門職缺</h2>
        <hr class="m-t-10 m-b-10">
      </div>
    </div>
    <div class="columns">
      <div class="column content m-l-20 m-r-20">
        <h4 class="ybc-title-h4">土建工程人員</h4>
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
      <div class="column content m-l-20 m-r-20">
        <h4 class="ybc-title-h4">工務</h4>
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
      <div class="column content m-l-20 m-r-20">
        <h4 class="ybc-title-h4">工程鑑定助理</h4>
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
      <div class="column content m-l-20 m-r-20">
        <h4 class="ybc-title-h4">建築設計助理</h4>
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
        <article class="message m-l-20 m-r-20">
          <div class="message-body hr-message">
            <p>請您下載附件履歷表，填寫完成後寄送至此<a href="mailto:alenhung@gmail.com">hr@yuanbang.com.tw</a>。附件：<a href="{{asset ('file').'/resume.doc'}}" target="_blank">履歷表</a>
          </div>
        </article>
      </div>
    </div>

  </div>
</section>
<section class="m-t-40">
  <div class="job-map m-b-40">
    <h2>員邦建築</h2>
    <hr class="m-t-10 m-b-10">
    <div class="job-map-text">
      <p>台北市萬華區中華路一段90號 / 鄰近西門捷運站</p>
    </div>
  </div>
  <div id="caseLocationMap" style="height: 350px;"></div>
</section>
@php
      $case_name = "員邦建築";
      $set_address=" 108萬華區中華路一段90號"; //填寫所要的地址，Example地址為勤美綠園道
      $data_array = geocode($set_address);
      $latitude = $data_array[0];
      $longitude = $data_array[1];
      $data_address = $data_array[2];
      //-----Google map value End-----
      //-----function start-----
      function geocode($address){
          /*用來將字串編碼，在資料傳遞的時候，如果直接傳遞中文會出問題，所以在傳遞資料時，通常會使用urlencode先編碼之後再傳遞*/
          $address = urlencode($address);
          /*可參閱：(https://developers.google.com/maps/documentation/geocoding/intro)*/
          $url = "http://maps.google.com/maps/api/geocode/json?address={$address}&language=zh-TW";
          /*取得回傳的json值*/
          $response_json = file_get_contents($url);
          /*處理json轉為變數資料以便程式處理*/
          $response = json_decode($response_json, true);
          /*如果能夠進行地理編碼，則status會回傳OK*/
          if($response['status']='OK'){
              //取得需要的重要資訊
              $latitude_data = $response['results'][0]['geometry']['location']['lat']; //緯度
              $longitude_data = $response['results'][0]['geometry']['location']['lng']; //精度
              $data_address = $response['results'][0]['formatted_address'];
              if($latitude_data && $longitude_data && $data_address){
                  $data_array = array();
                  //一個或多個單元加入陣列末尾
                  array_push(
                      $data_array,
                      $latitude_data, //$data_array[0]
                      $longitude_data, //$data_array[1]
                      '<b>員邦建築: </b> '.$data_address //$data_array[2]
                  );
                  return $data_array; //回傳$data_array
              }else{
                  return false;
              }
          }else{
              return false;
          }
      }
@endphp
@section('scripts')
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8tciuZhAxCTUCXJuCHc8-haAFNQk92Dk&libraries=places"></script>
<script>
  function init_map() {
      /*地圖參數相關設定 Start*/
      var Options = {
          zoom: 17, /*縮放比例*/
          center: new google.maps.LatLng( <?php echo $latitude;?>,  <?php echo $longitude;?>) /*所查詢位置的經緯度位置*/
      };

      map = new google.maps.Map(document.getElementById("caseLocationMap"), Options);
      /*地圖參數相關設定 End*/

      /*自行設定圖標 Start*/
      var image = {
          url: 'https://google-developers.appspot.com/maps/documentation/javascript/examples/full/images/beachflag.png', /*自定圖標檔案位置或網址*/
          // This marker is 20 pixels wide by 32 pixels high.
          size: new google.maps.Size(20, 32), /*自定圖標大小*/
          // The origin for this image is (0, 0).
          origin: new google.maps.Point(0, 0),
          // The anchor for this image is the base of the flagpole at (0, 32).
          anchor: new google.maps.Point(0, 32)
        };

      marker = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(<?php echo $latitude;?>, <?php echo $longitude;?>), /*圖標經緯度位置*/
          //icon: image
      });
      /*自行設定圖標 End*/
      /*所查詢位置詳細資料 Start*/
      infowindow = new google.maps.InfoWindow({
          content: "<?php echo $data_address; ?>"
      });

      infowindow.open(map, marker);
      /*所查詢位置詳細資料 End*/
  }

  /*
  事件偵聽器(可參閱：https://developers.google.com/maps/documentation/javascript/events)
  */
  google.maps.event.addDomListener(window, 'load', init_map);
</script>
@endsection


@stop
