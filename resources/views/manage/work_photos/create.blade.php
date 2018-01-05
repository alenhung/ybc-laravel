@extends('layouts.admin_default')
@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">新增 － 在建工程進度圖片</h1>
      </div>

    </div>
    <hr class="m-t-0">
    <form action="{{route('work_photos.store')}}" enctype="multipart/form-data" method="POST">
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
          <div class="field">
            <label class="label">請先選擇欲加入之在建工程：</label>
            <div class="control">
              <div class="select is-primary is-fullwidth">
                <select name="working_id">
                  @foreach ($works as $work)
                  <option value="{{$work->id}}">{{$work->title}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- end of .column -->
      <div class="columns">
        <div class="column">
          <div class="field">
              <label class="label">上傳該案施工圖片：</label>
          </div>
          <div class="file is-boxed is-primary is-centered">
            <label class="file-label">
              <input class="file-input" type="file" name="file[]" @change="imagesAdd" multiple="multiple" >
              <span class="file-cta">
                <span class="file-icon">
                  <i class="fa fa-upload"></i>
                </span>
                <span class="file-label">
                  選擇檔案上傳（可多選）
                </span>
              </span>
            </label>
          </div>
        </div>
      </div>
      <div class="columns">
        <div class="column" v-for="(img, key) in image">
          <img class="" :src="img">
          <a v-show="image" @click="removeImage(key)">移除</a>
        </div>
      </div>
      <div class="columns">
        <div class="column">
          <hr />
          <button type="submit" class="button is-primary is-pulled-right" style="width: 250px;"><i class="fa fa-plus-square m-r-10"></i>新增建立</button>
        </div>
      </div>
       <!-- end of .columns for forms -->

    </form>
  </div> <!-- end of .flex-container -->
@endsection

@section('scripts')
<script>
var app = new Vue({
  el: '#app',
  data: {
    file: [],
    image: [],
    postFormData: new FormData()
 },
 methods: {
    imagesAdd(e){
    var files = e.target.files || e.dataTransfer.files;
    this.image= [];
    this.file = [];
    Array.prototype.push.apply(this.file, files);
    if (!this.file.length)
              return;
      this.createImage(this.file);
      console.log(this.file);

    },
    createImage(file){
      for (var i = 0; i < file.length; i++) {
        var reader = new FileReader();
        var vm = this;
        reader.onload = (e) => {
          vm.image.push(e.target.result);

        };
        reader.readAsDataURL(file[i]);
      }
    },
    removeImage(key){
      this.image.splice(key, 1);
      this.file.splice(key, 1);
      if(!this.image.length){
        this.$refs.im.value = '';
      }
      console.log(this.file);
    }
  }
});
</script>
@endsection
