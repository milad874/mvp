@extends('admin.layouts.master')
@section('content')
    <div class="col-lg-12">
        <div class="card-box">

            <h4 class="m-t-0 header-title"><b>افزودن کاربر </b></h4><br>

            <form action="{{ route('users.store') }}" method="post">
                @csrf

                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <label >نام کاربر</label>
                    <input type="text" class="form-control"  name="name" value="{{ old('name') }}">
                    <small class="text-danger">{{ $errors->first('name') }}</small>
                </div>
                <div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
                    <label >نام خانوادگی</label>
                    <input type="text" class="form-control"  name="lastname" value="{{ old('lastname') }}">
                    <small class="text-danger">{{ $errors->first('lastname') }}</small>
                </div>
                <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label >تلفن</label>
                    <input type="text" class="form-control"  name="phone" value="{{ old('phone') }}">
                    <small class="text-danger">{{ $errors->first('phone') }}</small>
                </div>
                <div class="form-group  {{ $errors->has('username') ? ' has-error' : '' }}">
                    <label >نام کاربری</label>
                    <input type="text" class="form-control"  name="username" value="{{ old('username') }}">
                    <small class="text-danger">{{ $errors->first('username') }}</small>
                </div>
                <div class="form-group  {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label >ایمیل</label>
                    <input type="email" class="form-control"  name="email" value="{{ old('email') }}">
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                </div>
                <div class="form-group  {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label >رمز عبور</label>
                    <input type="password" class="form-control"  name="password">
                    <small class="text-danger">{{ $errors->first('password') }}</small>
                </div>
                <div class="form-group  {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label >تایید رمز عبور</label>
                    <input type="password" class="form-control"  name="password_confirmation">
                    <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                </div>

                <button type="submit" class="btn btn-success btn-trans waves-effect w-md waves-success m-b-5">ثبت</button>
                <a href="{{ route('users.index') }}" class="btn btn-inverse btn-trans waves-effect w-md waves-inverse m-b-5"> بازگشت </a>

            </form>



        </div>
    </div>

@endsection
