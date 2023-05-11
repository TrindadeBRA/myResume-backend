@php
    $resetData = [
        "paths" => [
            "main" => url('/'),
            "logout" => route('logout'),
            "login" => route('login'),
            "register" => route('register'),
            "passwordRequest" => route('password.request'),
            "passwordReset" => route('password.email'),
        ],
        "isLogged" => Auth::check(),
        "userName" => (Auth::user() ? Auth::user()->name : false),
        "userEmail" => (Auth::user() ? Auth::user()->email : false),
        "userId" => (Auth::user() ? Auth::user()->id : false),
        "error" => ($errors->getMessages() ? $errors->first() : false),
        "csrfToken" => csrf_token(),
    ];
@endphp

@extends('layouts.app')

@section('content')
    <reset-password :reset-data="{{json_encode($resetData)}}"></reset-password>
@endsection
    