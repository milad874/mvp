@extends('admin.layouts.master')
@section('content')

    <div class="col-lg-12">
        <div class="card-box">

            <h4 class="m-t-0 header-title"><b>ویرایش دسته بندی {{ $category->name }}</b></h4>
            <p class="text-muted m-b-30 font-13">
                آخرین تغییرات در تاریخ : {{ $category->updated_at}}
            </p>
            <form role="form" method="post" action="{{ route('categories.update',['id' =>$category->id]) }}">
                @csrf
                {{ method_field('PATCH') }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label>عنوان</label>
                    <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                    <small class="text-danger">{{ $errors->first('name') }}</small>
                </div>
                <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                    <label>نام مستعار</label>
                    <input type="text" class="form-control" name="slug"  value="{{ $category->slug }}">
                    <small class="text-danger">{{ $errors->first('slug') }}</small>
                </div>
            
               
                <button type="submit" class="btn btn-success btn-trans waves-effect w-md waves-success m-b-5">ثبت</button>
                <a href="{{ route('categories.index') }}"><button type="button" class="btn btn-inverse btn-trans waves-effect w-md waves-inverse m-b-5">بازگشت</button></a>
            </form>


        </div>
    </div>
@endsection
