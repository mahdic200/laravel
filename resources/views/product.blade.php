@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex flex-row justify-content-between my-5">
            <div class="pull-left">
                <h2>ساخت محصول جدید</h2>
            </div>
        </div>
    </div>

    @include('layouts.partials.error')
    @if ($message = Session::get('success'))
        <div class="alert alert-success icon-close">
            <p>
                {{ $message }}
            </p>
        </div>
    @endif
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row border rounded p-3 mb-5 alert-warning">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group d-flex flex-column align-items-start">
                    <strong>عنوان:</strong>
                    <input type="text" name="title" class="my-3 form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group d-flex flex-column align-items-start">
                    <strong>توضیحات:</strong>
                    
                    <textarea class="my-3 form-control" name="info" id="" cols="30" rows="10"></textarea>

                    <input type="file" name="image" class="my-3 form-control">
                    <div class="form-group">
                        <div class="alert-success d-flex flex-row align-items-center justify-content-start rounded p-2">
                            <label for="termsofuse" class="ml-1">
                                قوانین و شرایط ایجاد پست را میپذیرم
                            </label>
                            <input type="checkbox" id="termsofuse" name="termsofuse">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success w-100 btn-primary">ثبت</button>
            </div>
        </div>

    </form>
@endsection
