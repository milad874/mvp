@extends('admin.layouts.master')
@section('content')
    <div class="col-lg-12">
        <div class="card-box">

            <h4 class="m-t-0 header-title"><b>افزودن تصویر </b></h4><br>

            <form action="{{ route('media.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group  {{ $errors->has('file') ? ' has-error' : '' }}">
                    <label >انتخاب تصویر</label>
                    <input type="file" class="form-control"  name="file">
                    <small class="text-danger">{{ $errors->first('file') }}</small>
                </div>

                <button type="submit" class="btn btn-success btn-trans waves-effect w-md waves-success m-b-5">ثبت</button>
                <a href="{{ route('media.index') }}" class="btn btn-inverse btn-trans waves-effect w-md waves-inverse m-b-5"> بازگشت </a>

            </form>



        </div>
    </div>

@endsection
