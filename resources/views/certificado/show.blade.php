@extends('layouts.app')
@section('title', 'Ver meu certificado - myResume Backend')

@section('content')
    <header class="bg-gray-700 shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <a href="{{ route('certificado.index') }}" class="text-sm font-semibold leading-7 text-gray-300"><span aria-hidden="true">&larr;</span> Certificados</a>
            <h1 class="text-3xl font-bold tracking-tight text-gray-300">Vizualizando: {{ $certificado->getAttribute('certificate-title'); }}</h1>
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

        <section class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div>

                <div class="px-4 sm:px-0">
                    <h3 class="text-base font-semibold leading-7 text-white">Informações do certificado</h3>
                    <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-400">Informações cadastradas do certificado.</p>
                </div>
                <div class="mt-6 border-t border-white/10">
                    <dl class="divide-y divide-white/10">
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-white">Nome do certificado</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0">{{ $certificado->getAttribute('certificate-title'); }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-white">Instituição de Ensino</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0">{{ $certificado->getAttribute('certificate-origin'); }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-white">Professor / Instrutor</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0">{{ $certificado->getAttribute('certificate-instructor'); }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-white">Data de conclusão do certificado</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0">{{date('d/m/Y', strtotime($certificado->getAttribute('certificate-date')))}}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-white">URL da imagem do certificado</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-400 sm:col-span-2 sm:mt-0">{{ $certificado->getAttribute('certificate-url'); }}</dd>
                    </div>
                    
                </div>
               
        </section>
         
    </main>
@endsection



