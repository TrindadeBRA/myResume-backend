@extends('layouts.app')

@section('content')

@php
$registerData = [
    "paths" => [
        "main" => url('/'),
        "logout" => route('logout'),
        "login" => route('login'),
        "register" => route('register'),
        "passwordRequest" => route('password.request'),
    ],
    "isLogged" => Auth::check(),
    "userName" => (Auth::user() ? Auth::user()->name : false),
    "userEmail" => (Auth::user() ? Auth::user()->email : false),
    "userId" => (Auth::user() ? Auth::user()->id : false),
    "error" => ($errors->getMessages() ? $errors->first() : false),
    "csrfToken" => csrf_token(),
];
@endphp

<register :register-data="{{json_encode($registerData)}}"></register>