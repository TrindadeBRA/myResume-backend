@extends('layouts.app')
@section('title', 'Cadastrar meu certificado - myResume Backend')


@section('content')
    <header class="bg-gray-700 shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <a href="{{ route('certificado.index') }}" class="text-sm font-semibold leading-7 text-gray-300"><span aria-hidden="true">&larr;</span> Certificados</a>
            <h1 class="text-3xl font-bold tracking-tight text-gray-300">Adicionar novo certificado</h1>
        </div>
    </header>
    <main class="bg-gray-900">

        @php
            $certificateData = [
                "paths" => [
                    "actionForm" => route('certificado.store'),
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



