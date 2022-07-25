@extends('layouts.master')

@section('content')
    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum assumenda neque reiciendis similique minus molestiae, ratione necessitatibus fuga repellendus nam quasi nostrum aperiam quisquam hic animi numquam nemo quas quibusdam.
    </p>
    @foreach ($users as $user)
        <p>
            {{ $user->email }}
        </p>
    @endforeach
    {{ dd($users) }}
@endsection