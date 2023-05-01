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


{{-- <div class="container">
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 xl:w-4/12">
            <div class="bg-white rounded-lg shadow-lg">
                <div class="bg-gray-100 rounded-t-lg p-4">
                    <h1 class="text-lg font-semibold text-gray-700">{{ __('Register') }}</h1>
                </div>
                <div class="p-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
    
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">{{ __('Name') }}</label>
    
                            <input id="name" type="text" class="form-input @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                            @error('name')
                                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>
    
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">{{ __('Email Address') }}</label>
    
                            <input id="email" type="email" class="form-input @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                            @error('email')
                                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>
    
                        <div class="mb-4">
                            <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">{{ __('Password') }}</label>
    
                            <input id="password" type="password" class="form-input @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">
    
                            @error('password')
                                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>
    
                        <div class="mb-4">
                            <label for="password-confirm" class="block text-gray-700 text-sm font-semibold mb-2">{{ __('Confirm Password') }}</label>
    
                            <input id="password-confirm" type="password" class="form-input" name="password_confirmation" required autocomplete="new-password">
                        </div>
    
                        <div class="flex items-center justify-end">
                            <button type="submit" class="bg-blue-500 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection
    