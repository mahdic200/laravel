@extends('layouts.master')
@section('title', 'dashboard')

{{-- @section('content', View::make('welcome'))

@endsection --}}

{{-- @section('content')
<center>
    <h1>
        hello mahdi is a good boy 
    </h1>
</center>
@includeIf('layouts.error')
@endsection --}}
{{-- @each('layouts.error', $projects, 'project', 'layouts.master') --}}

@isset($projects)
    @if (count($projects) > 0)
        <ul>
            @foreach ($projects as $project)
                @include('layouts.error')
            @endforeach
        </ul>
    @else
        @include('layouts.welcome')
    @endif
@endisset

@section('script')
    @parent
    {{-- برای اضافه کردن به صفحه مستر نه پاک کردن اسکریپت هاش و دوباره نویسیش--}}
    <script src=""></script>
@endsection
