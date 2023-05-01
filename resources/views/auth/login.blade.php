@extends('layouts.app')

@section('content')

@php

$loginData = [
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

<login :login-data="{{json_encode($loginData)}}"></login>

{{-- <div class="">
    <div class="flex justify-center">
        <div class="w-full md:w-8/12">
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="text-lg font-semibold">{{ __('Login') }}</div>
                <div class="mt-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
    
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Email Address') }}</label>
    
                            <div class="mt-1">
                                <input id="email" type="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                @error('email')
                                    <span class="text-sm text-red-500 mt-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
    
                        <div class="mb-4">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Password') }}</label>
    
                            <div class="mt-1">
                                <input id="password" type="password" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">
    
                                @error('password')
                                    <span class="text-sm text-red-500 mt-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
    
                        <div class="mb-4">
                            <div class="flex items-center">
                                <input class="form-checkbox focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                <label class="ml-2 block text-sm text-gray-900">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
    
                        <div class="flex items-center justify-end">
                            @if (Route::has('password.request'))
                                <a class="text-sm text-gray-600 underline" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
    
                            <button type="submit" class="ml-4 inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-500 focus:outline-none focus:border-indigo-500 focus:shadow-outline-indigo disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

     

@endsection
