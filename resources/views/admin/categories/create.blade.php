@extends('admin.layouts.master')
@section('content')
    <div class="col-lg-12">
        <div class="card-box">

            <h4 class="m-t-0 header-title"><b>افزودن دسته بندی </b></h4><br>

            <form action="{{ route('categories.store') }}" method="post">
                @csrf

                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <label >عنوان</label>
                    <input type="text" class="form-control"  name="name" value="{{ old('name') }}">
                    <small class="text-danger">{{ $errors->first('name') }}</small>
                </div>
                <div class="form-group  {{ $errors->has('slug') ? ' has-error' : '' }}">
                    <label >نام مستعار</label>
                    <input type="text" class="form-control"  name="slug" value="{{ old('slug') }}">
                    <small class="text-danger">{{ $errors->first('slug') }}</small>
                </div>

                <button type="submit" class="btn btn-success btn-trans waves-effect w-md waves-success m-b-5">ثبت</button>
                <a href="{{ route('categories.index') }}" class="btn btn-inverse btn-trans waves-effect w-md waves-inverse m-b-5"> بازگشت </a>

            </form>



        </div>
    </div>

@endsection
