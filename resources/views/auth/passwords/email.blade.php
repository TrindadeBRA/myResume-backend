@extends('layouts.app')

@section('content')

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

<reset-password :reset-data="{{json_encode($resetData)}}"></reset-password>

{{-- <div class="container">
    <div class="flex justify-center">
        <div class="w-3/4">
            <div class="bg-white p-6 rounded-lg">
                <div class="font-medium text-lg">{{ __('Reset Password') }}</div>
                <div class="mt-4">
                    @if (session('status'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline">{{ session('status') }}</span>
                        </div>
                    @endif
    
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
    
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-bold mb-2">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-input @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                            @error('email')
                                <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
                            @enderror
                        </div>
    
                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection
    