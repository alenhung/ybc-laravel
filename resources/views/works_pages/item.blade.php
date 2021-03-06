@extends('layouts.default')
@section('content')

    <section id="contentHeader" style="background: url({{ asset ('images/intro/workBackground.jpg') }});background-size: cover;">
    @include('_includes.nav.main')
    <div class="container">
      <div id="contentHeaderBlock" class="content">
        <h2>熱銷建案</h2>
        <hr>
        <p>Hot Case Of YuanBang Construction</p>
      </div>
    </div>
  </section>
  <section id="pageNav" class="has-shadow m-t-15">
    <div class="container">
      <div class="tabs">
        <ul>
          <li><a href="{{route('works')}}">經典建案</a></li>
          <li><a href="{{route('OnSale')}}">熱銷建案</a></li>
          <li><a href="{{route('SaleOut')}}">完銷建案</a></li>
          <li><a href="{{route('workings')}}">在建工程</a></li>
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
              <img src="{{asset ('uploads').'/'.$work->project_image}}" alt="{{$work->project_image}}" class="has-shadow">
            </div>
            <div class="column content is-6 is-offset-1 m-r-20 m-l-20">
              <h2 class="ybc-title-h2">{{$work->title}} <small>{{$work->slogan}}</small></h2>
              <hr>
              <p>{{$work->description}}</p>
              <hr>
              <table class="works-table">
                <tr>
                  <td>基地位置：</td>
                  <td>{{$work->location}}</td>
                </tr>
                <tr>
                  <td>建設規劃：</td>
                  <td>{{$work->land_plan}}</td>
                </tr>
                <tr>
                  <td>基地面積：</td>
                  <td>{{$work->land_size}}</td>
                </tr>
                <tr>
                  <td>總戶數：</td>
                  <td>{{$work->households}}</td>
                </tr>
                <tr>
                  <td>坪數/格局：</td>
                  <td>{{$work->unit_area}}</td>
                </tr>
                <tr>
                  <td>公設比：</td>
                  <td>{{$work->public_ratio}}</td>
                </tr>
                <tr>
                  <td>樓高：</td>
                  <td>{{$work->tall}}</td>
                </tr>
                <tr>
                  <td>接待中心：</td>
                  <td>{{$work->service_location}}</td>
                </tr>
                <tr>
                  <td>完工日期：</td>
                  <td>{{$work->completion_date}}</td>
                </tr>
              </table>
              @php
                if ($work->site_url ==""){
                  echo "";
                }else{
                  echo '<a class="button is-ybc-btn is-pulled-right" href="'.$work->site_url.'">了解更多？前往專屬網站</a>';
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
      <a href="{{route('works')}}" class="button is-ybc-brown-btn" style="width:100%;">返回經典建案</a>
    </div>
  </section>
  @php
        $case_name = $work->title;
        $set_address= $work->location; //填寫所要的地址，Example地址為勤美綠園道
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
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfDEsmslFh17o0Dqijw7It2x6p-D6l3WE&libraries=places"></script>
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
<script>
$( document ).ready(function() {
  var $pageSelect = $("#pageNav li");
  var pageStatus = "{{$work->status}}";
  console.log(pageStatus);
  if(pageStatus == 'onSale'){
    $($pageSelect[$pageSelect.length-3]).addClass("is-active");
  }else if(pageStatus == 'saleOut'){
    $($pageSelect[$pageSelect.length-2]).addClass("is-active");
  }else if(pageStatus == 'working'){
    $($pageSelect[$pageSelect.length-1]).addClass("is-active");
  }else{
    console.log('nothing');
  }
});
</script>
@endsection
@stop
