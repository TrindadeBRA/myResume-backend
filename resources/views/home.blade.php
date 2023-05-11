@php
$navbarData = [
    "paths" => [
        "main" => url('/'),
        "logout" => route('logout'),
        "login" => route('login'),
        "register" => route('register'),
    ],
    "isLogged" => Auth::check(),
    "userName" => (Auth::user() ? Auth::user()->name : false),
    "userEmail" => (Auth::user() ? Auth::user()->email : false),
    "userId" => (Auth::user() ? Auth::user()->id : false),
    "csrfToken" => csrf_token(),
];
@endphp

@extends('layouts.app')

@section('content')

    <div class="bg-white">
        <navbar :navbar-data="{{ json_encode($navbarData) }}"></navbar>
    </div>

@endsection
