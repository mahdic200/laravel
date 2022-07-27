@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex flex-row justify-content-between my-5">
            <div class="pull-left">
                <h2>ساخت پست جدید</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="">بازگشت</a>
            </div>
        </div>
    </div>


    <form action="{{ route('post.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group d-flex flex-column align-items-start">
                    <strong>عنوان:</strong>
                    <input type="text" name="title" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group d-flex flex-column align-items-start">
                    <strong>نویسنده:</strong>
                    <input type="number" name="user_id" class="form-control" placeholder="number">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">ثبت</button>
            </div>
        </div>

    </form>
@endsection
