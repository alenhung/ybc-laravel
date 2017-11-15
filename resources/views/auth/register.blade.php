@extends('layouts.admin_default')

@section('content')
  <div class="columns">
      <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
          <div class="card-content">
            <h1 class="title is-3">新增管理員</h1>

            <form action="{{route('register')}}" method="POST" role="form">
              {{csrf_field()}}
              <div class="field">
                <label for="name" class="label">名稱</label>
                <p class="control">
                  <input class="input {{$errors->has('name') ? 'is-danger' : ''}}" type="text" name="name" id="name" value="{{old('name')}}" required>
                </p>
                @if ($errors->has('name'))
                  <p class="help is-danger">{{$errors->first('name')}}</p>
                @endif
              </div>
              <div class="field">
                <label for="email" class="label">電子郵件信箱：<small>(做為登入使用)</small></label>
                <p class="control">
                  <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" value="{{old('email')}}" required>
                </p>
                @if ($errors->has('email'))
                  <p class="help is-danger">{{$errors->first('email')}}</p>
                @endif
              </div>
              <div class="columns">
                <div class="column">
                  <div class="field">
                    <label for="password" class="label">密碼：</label>
                    <p class="control">
                      <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password" required>
                    </p>
                    @if ($errors->has('password'))
                      <p class="help is-danger">{{$errors->first('password')}}</p>
                    @endif
                  </div>
                </div>

                <div class="column">
                  <div class="field">
                    <label for="password_confirmation" class="label">確認密碼：</label>
                    <p class="control">
                      <input class="input {{$errors->has('password_confirmation') ? 'is-danger' : ''}}" type="password" name="password_confirmation" id="password_confirmation" required>
                    </p>
                    @if ($errors->has('password_confirmation'))
                      <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
                    @endif
                  </div>
                </div>
              </div>

              <button class="button is-link is-outlined is-fullwidth m-t-30">新增</button>
            </form>
          </div> <!-- end of .card-content -->
        </div> <!-- end of .card -->
      </div>
    </div>
@endsection
