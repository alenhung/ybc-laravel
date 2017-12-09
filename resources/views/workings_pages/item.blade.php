@extends('layouts.default')
@section('content')
  <section id="contentHeader" style="background: url({{ asset ('images/intro/workingBackground.jpg') }});background-size: cover;">
    @include('_includes.nav.main')
    <div class="container">
      <div id="contentHeaderBlock" class="content">
        <h2>在建工程</h2>
        <hr>
        <p>Construction In Progress For YuanBang</p>
      </div>
    </div>
  </section>
  <section id="pageNav" class="has-shadow m-t-15">
    <div class="container">
      <div class="tabs">
        <ul>
          <li><a href="{{route('works')}}">熱銷建案</a></li>
          <li class="is-active"><a href="{{route('workings')}}">在建工程</a></li>
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
              <img src="{{asset ('uploads').'/'.$working->project_image}}" alt="{{$working->project_image}}" class="has-shadow">
            </div>
            <div class="column content is-6 is-offset-1 m-r-20 m-l-20">
              <h2 class="ybc-title-h2">{{$working->title}} <small>{{$working->slogan}}</small></h2>
              <hr>
              <p>{{$working->description}}</p>
              <hr>
              <table class="works-table">
                <tr>
                  <td>基地位置：</td>
                  <td>{{$working->location}}</td>
                </tr>
                <tr>
                  <td>建設規劃：</td>
                  <td>{{$working->land_plan}}</td>
                </tr>
                <tr>
                  <td>基地面積：</td>
                  <td>{{$working->land_size}}</td>
                </tr>
                <tr>
                  <td>總戶數：</td>
                  <td>{{$working->households}}</td>
                </tr>
                <tr>
                  <td>坪數/格局：</td>
                  <td>{{$working->unit_area}}</td>
                </tr>
                <tr>
                  <td>公設比：</td>
                  <td>{{$working->public_ratio}}</td>
                </tr>
                <tr>
                  <td>樓高：</td>
                  <td>{{$working->tall}}</td>
                </tr>
                <tr>
                  <td>接待中心：</td>
                  <td>{{$working->service_location}}</td>
                </tr>
                <tr>
                  <td>完工日期：</td>
                  <td>{{$working->completion_date}}</td>
                </tr>
              </table>
              @php
                if ($working->site_url ==""){
                  echo "";
                }else{
                  echo '<a class="button is-ybc-btn is-pulled-right" href="'.$working->site_url.'">了解更多？前往專屬網站</a>';
                }
              @endphp
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
      <a href="{{route('workings')}}" class="button is-ybc-brown-btn" style="width:100%;">返回熱銷建案</a>
    </div>
  </section>
  @php
        $case_name = $working->title;
        $set_address= $working->location; //填寫所要的地址，Example地址為勤美綠園道
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
