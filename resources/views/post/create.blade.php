@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex flex-row justify-content-between my-5">
            <div class="pull-left">
                <h2>ساخت پست جدید</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-warning" href="">بازگشت</a>
            </div>
        </div>
    </div>

@include('layouts.partials.error')
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row border rounded p-3">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group d-flex flex-column align-items-start">
                    <strong>عنوان:</strong>
                    <input type="text" name="title" class="my-3 form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group d-flex flex-column align-items-start">
                    <strong>نویسنده:</strong>
                    <input type="number" name="user_id" class="my-3 form-control" placeholder="number">
                    {{-- <div class="col-md-6">
                    <input type="file" name="image" class="my-3 form-control">
                    </div> --}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success w-100 btn-primary">ثبت</button>
            </div>
        </div>

    </form>
@endsection
