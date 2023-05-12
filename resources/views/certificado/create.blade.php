@extends('layouts.app')

@section('content')
    <header class="bg-gray-700 shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-300">Novo certificado</h1>
        </div>
    </header>
    <main class="bg-gray-900">

        @php
            $certificateData = [
                "paths" => [
                    "store" => route('certificado.store'),
                ],
                "isLogged" => Auth::check(),
                "userName" => (Auth::user() ? Auth::user()->name : false),
                "userEmail" => (Auth::user() ? Auth::user()->email : false),
                "userId" => (Auth::user() ? Auth::user()->id : false),
                "csrfToken" => csrf_token(),
            ];
        @endphp

        <certificate :certificate-data="{{json_encode($certificateData)}}"></certificate>        
    </main>
@endsection



