@extends('layouts.default')
@section('content')
  <section id="contentHeader" style="background: url({{ asset ('images/worksBackground3.jpg') }})">
    @include('_includes.nav.main')
    <div class="container">
      <div id="contentHeaderBlock" class="content">
        <h2>熱銷建案</h2>
        <hr>
        <p>works for YuanBang</p>
      </div>
    </div>
  </section>
  <section id="pageNav" class="has-shadow m-t-15">
    <div class="container">
      <div class="tabs">
        <ul>
          <li class="is-active"><a>熱銷建案</a></li>
          <li><a>在建工程</a></li>
        </ul>
      </div>
    </div>
  </section>
  <section class="m-t-35">
    <div class="container">
      <section class="m-t-40 m-b-40">
        <div class="container">
          <div class="columns">
            <div class="column is-5 m-r-20 m-l-20">
              <img src="{{ asset ('images/building/building1.jpg') }}" class="has-shadow" alt="">
            </div>
            <div class="column content is-6 is-offset-1 m-r-20 m-l-20">
              <h2 class="ybc-title-h2">都美艷</h2>
              <hr>
              <p>擁有臺北市中心稀有3500坪（約11,550平方米）基地，緊鄰1300坪（約4,290平方米）公園、形成4800坪（約15,840平方米）森態街廓，只蓋兩棟樓，擁有奢侈的40~120米隱密棟距，中庭及公園覆土深達2米，種植300餘棵10年以上樹齡大型喬木，其中包含110棵的樟樹，環繞社區形成護城林。五指山系樹海景觀、大直水岸景觀。</p>
              <hr>
              <table class="works-table">
                <tr>
                  <td>基地位置：</td>
                  <td>台北市萬華區桂林西昌路口</td>
                </tr>
                <tr>
                  <td>建設規劃：</td>
                  <td>Ａ棟－地上23樓 / 地下5樓、B棟－地上15樓</td>
                </tr>
                <tr>
                  <td>基地面積：</td>
                  <td>418坪</td>
                </tr>
                <tr>
                  <td>總戶數：</td>
                  <td>188戶</td>
                </tr>
                <tr>
                  <td>坪數/格局：</td>
                  <td>16~43坪 / 1~3房</td>
                </tr>
                <tr>
                  <td>公設比：</td>
                  <td>33%</td>
                </tr>
                <tr>
                  <td>樓高：</td>
                  <td>一樓大廳4米2、住家3米3</td>
                </tr>
                <tr>
                  <td>接待中心：</td>
                  <td>台北市萬華區西昌街134號</td>
                </tr>
                <tr>
                  <td>完工日期：</td>
                  <td>預定2019年</td>
                </tr>
              </table>
              <a class="button is-ybc-btn">了解更多？前往專屬網站</a>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>
  <section class="m-t-40 m-b-40">
    <div id="caseLocationMap" style="height: 350px;"></div>
  </section>
  <section>
    <div class="container">
      <a href="{{route('works')}}" class="button is-ybc-brown-btn" style="width:100%;">返回熱銷建案</a>
    </div>
  </section>
  @php
        $case_name = "都美艷";
        $set_address="台北市萬華區西昌街134號"; //填寫所要的地址，Example地址為勤美綠園道
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
                        '<b>建案位置: </b> '.$data_address //$data_array[2]
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
@stop