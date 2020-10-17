@extends('admin.layouts.master')

@section('content')
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">لیست کابران</h4>

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
                    <th>نام کاربری</th>
                    <th>تاریخ ثبت نام</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{$user->username}}</td>
                        <td>{{ $user->created_at }}</td>
                        {{--                        <td>{{ verta()->instance($category->created_at)->formatDifference()}}</td>--}}


                        <td>


                            <form action="{{route('users.destroy',['id' => $user->id])}}" method="post">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                                <div class="btn-group btn-group-xs">
                                    <a href="{{route('users.edit',['id' => $user->id])}}"  class="btn btn-primary">ویرایش</a>
                                    <button type="submit" class="btn btn-danger" >حذف</button>
                                </div>

                        

                        <td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {{ $users->render() }}
            </div>
        </div>
    </div>

@endsection
