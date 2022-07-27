@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-lg-12 my-5 d-flex flex-row justify-content-between margin-tb">
            <div class="pull-left">
                <h2>تاپ لرن</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('post.create') }}"> پست جدید </a>
            </div>
        </div>
    </div>



    <table class="table table-bordered">
        <tr>
            <th>شناسه</th>
            <th>عنوان</th>
            <th>نویسنده</th>
            <th>تاریخ انتشار</th>
            <th>عملیات</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post['id'] }}</td>
                <td dir="ltr">{{ substr($post['title'], 0, 40) . " ..." }}</td>
                <td>{{ $post->full_name }}</td>
                <td>{{ $post['started_at'] }}</td>
                <td>
                    <form action="" method="POST">
                        <a class="btn btn-info" href="{{ route('post.show', $post->id) }}">نمایش</a>
                        <a class="btn btn-primary" href="{{ route('post.edit', $post->id) }}">ویرایش</a>
                        <button type="submit" class="btn btn-danger">حذف</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
@endsection
