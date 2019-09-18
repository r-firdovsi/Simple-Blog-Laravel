@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{ $title  }}</h1>
        <p>This is laravel application from the "Laravel from Scratch"</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success
        btn-lg"
                                                                                    href="/registration"
                                                                                    role="button">Registration</a></p>
    </div>
@endsection
