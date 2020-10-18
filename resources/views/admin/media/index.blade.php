@extends('admin.layouts.master')

@section('content')
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">گالری</h4>

            <p class="text-muted font-13 m-b-15">
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
                    <th>نام کاربر</th>
                    <th>تصویر</th>
                    <th>آدرس</th>
                    <th>تاریخ ایجاد</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($media as $item)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ 'amir' }}</td>
                        
                {{--       TODO = /media/ delete and create getter model media     --}}
                        
                        <td><img src="/media/{{$item->path}}" style="width: 50px;height: 50px;"></td>
                        <td>{{ $item->path }}</td>
                        <td>{{ $item->created_at }}</td>
                        {{--                        <td>{{ verta()->instance($category->created_at)->formatDifference()}}</td>--}}


                        <td>


                            <form action="{{route('media.destroy',['id' => $item->id])}}" method="post">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                                <div class="btn-group btn-group-xs">

                                    <button type="submit" class="btn btn-danger" >حذف</button>
                                </div>



                        <td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {{ $media->render() }}
            </div>
        </div>
    </div>

@endsection
