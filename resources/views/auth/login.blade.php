@extends('layouts.admin_default')
@section('content')
  <div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
      <div class="card">
        <div class="card-content">
          <h1 class="title is-3">管理者登入</h1>
          <form action="{{route('login')}}" method="POST" role="form">
            {{csrf_field()}}
            <div class="field">
              <label for="email" class="label">請輸入管理者電子信箱：</label>
              <p class="control">
                <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}">
              </p>
              @if ($errors->has('email'))
                <p class="help is-danger">{{$errors->first('email')}}</p>
              @endif
            </div>
            <div class="field">
              <label for="password" class="label">請輸入密碼：</label>
              <p class="control">
                <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password">
              </p>
              @if ($errors->has('password'))
                <p class="help is-danger">{{$errors->first('password')}}</p>
              @endif
            </div>
            <b-checkbox name="remember" class="m-t-20">記得我</b-checkbox>
            <button class="button is-link is-outlined is-fullwidth m-t-30">登入</button>
          </form>
        </div> <!-- end of .card-content -->
      </div> <!-- end of .card -->
      <h5 class="has-text-centered m-t-20"><a href="{{route('password.request')}}" class="is-muted">忘記密碼</a></h5>
    </div>
  </div>
@endsection
