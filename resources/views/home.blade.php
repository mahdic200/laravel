@extends('layouts.master')
@section('title', 'test')
@section('content')
    <center>
        <h1 class="display-4">
            this is a test
        </h1>
    </center>
        @include('layouts.partials.error')
        <p>
            {{-- {{ dd($errors) }} --}}
        </p>
    
@endsection


@section('scripts')

@endsection