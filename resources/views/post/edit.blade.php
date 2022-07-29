@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex flex-row justify-content-between my-5">
            <div class="pull-left">
                <h2>ویرایش پست</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('post.index') }}">بازگشت</a>
            </div>
        </div>
    </div>


    <form action="{{ route('post.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group d-flex text-right flex-column justify-content-between align-items-start">
                    <strong>عنوان:</strong>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group d-flex text-right flex-column justify-content-between align-items-start">
                    <strong>نویسنده: {{ $post->user->full_name }}</strong>
                    <textarea class="form-control" style="height:150px" name="" placeholder="author" value="">
                        {{ $post->title }}
                    </textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">ثبت</button>
            </div>
        </div>

    </form>
    @endsection
