@extends('admin.layouts.master')
@section('content')

    <div class="col-lg-12">
        <div class="card-box">

            <h4 class="m-t-0 header-title"><b>ویرایش کاربر {{ $user->name }}</b></h4>
            <p class="text-muted m-b-30 font-13">
                آخرین تغییرات در تاریخ : {{ $user->updated_at}}
            </p>
            <form role="form" method="post" action="{{ route('users.update',['id' =>$user->id]) }}">
                @csrf
                {{ method_field('PATCH') }}
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <label >نام کاربر</label>
                    <input type="text" class="form-control"  name="name" value="{{$user->name }}">
                    <small class="text-danger">{{ $errors->first('name') }}</small>
                </div>
                <div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
                    <label >نام خانوادگی</label>
                    <input type="text" class="form-control"  name="lastname" value="{{ $user->lastname }}">
                    <small class="text-danger">{{ $errors->first('lastname') }}</small>
                </div>
                <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label >تلفن</label>
                    <input type="text" class="form-control"  name="phone" value="{{$user->phone }}">
                    <small class="text-danger">{{ $errors->first('phone') }}</small>
                </div>
                <div class="form-group  {{ $errors->has('username') ? ' has-error' : '' }}">
                    <label >نام کاربری</label>
                    <input type="text" class="form-control"  name="username" value="{{ $user->username }}">
                    <small class="text-danger">{{ $errors->first('username') }}</small>
                </div>
                <div class="form-group  {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label >ایمیل</label>
                    <input type="email" class="form-control"  name="email" value="{{ $user->email }}">
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                </div>
                <div class="form-group  {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label >رمز عبور</label>
                    <input type="password" class="form-control"  name="password" value="{{ $user->password }}">
                    <small class="text-danger">{{ $errors->first('password') }}</small>
                </div>


                <button type="submit" class="btn btn-success btn-trans waves-effect w-md waves-success m-b-5">ثبت</button>
                <a href="{{ route('users.index') }}"><button type="button" class="btn btn-inverse btn-trans waves-effect w-md waves-inverse m-b-5">بازگشت</button></a>
            </form>


        </div>
    </div>
@endsection
