@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex flex-row justify-content-between my-5">
            <div class="pull-left">
                <h2> نمایش پست </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('post.index') }}"> بازگشت</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex text-right flex-column justify-content-between align-items-start">
                <strong>عنوان:</strong>
                {{ $post->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex flex-row justify-content-start">
                <strong>نویسنده:</strong>
                {{ $post->user_id }}
            </div>
        </div>
    </div>
    @endsection
