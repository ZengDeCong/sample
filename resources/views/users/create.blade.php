@extends('layouts.default')
@section('title','注册')
@section('content')
  <h1>注册</h1>
<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>注册</h5>
    </div>
    <div class="panel-body">
      @include('shared._errors')
      <form method="POST" action="{{ route('users.store') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="name" style="float: left;">名称：</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
          </div>

          <div class="form-group">
            <label for="email" style="float: left;">邮箱：</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
          </div>

          <div class="form-group">
            <label for="password" style="float: left;">密码：</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
          </div>

          <div class="form-group">
            <label for="password_confirmation" style="float: left;">确认密码：</label>
            <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
          </div>

          <button type="submit" class="btn btn-primary">注册</button>
      </form>
    </div>
  </div>
</div>
@stop