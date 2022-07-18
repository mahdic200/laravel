@extends('layouts.master')
@section('title', 'dashboard')

{{-- @section('content', View::make('welcome')) --}}



@section('script')
    @parent
    {{-- برای اضافه کردن به صفحه مستر نه پاک کردن اسکریپت هاش و دوباره نویسیش--}}
    <script src=""></script>
@endsection
