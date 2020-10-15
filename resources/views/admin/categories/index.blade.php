@extends('admin.layouts.master')
@section('content')

    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">لیست دسته بندی</h4>

            <p class="text-muted font-13 m-b-15">
                تعداد مطالب هر عنوان که در وبسایت درج شده قابل نمایان است
            </p>
            @if (session('status'))
                <div class="alert alert-{{session('class') ? session('class') : 'success'}}">
                    {{ session('status') }}
                </div>
            @endif
            <table class="table table table-hover m-0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>عنوان</th>
                    <th>نام مستعار</th>
                    <th>تاریخ ایجاد</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $category->name }}</td>
                        <td> <span class="label label-purple">{{ $category->slug }}</span></td>
                        <td>{{ $category->created_at }}</td>
{{--                        <td>{{ verta()->instance($category->created_at)->formatDifference()}}</td>--}}

                        <td>


                            <form action="{{route('categories.destroy',['id' => $category->id])}}" method="post">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                                <div class="btn-group btn-group-xs">
                                    <a href="{{route('categories.edit',['id' => $category->id])}}"  class="btn btn-primary">ویرایش</a>
                                    <button type="submit" class="btn btn-danger" >حذف</button>
                                </div>
                            </form>

                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {{ $categories->render() }}
            </div>
        </div>
    </div>



@endsection






