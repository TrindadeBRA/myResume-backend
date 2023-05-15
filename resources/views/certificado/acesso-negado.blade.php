@extends('layouts.app')
@section('title', 'Acesso negado! - myResume Backend')

@section('content')
    <header class="bg-gray-700 shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <a href="{{ route('certificado.index') }}" class="text-sm font-semibold leading-7 text-gray-300"><span aria-hidden="true">&larr;</span> Certificados</a>
            <h1 class="text-3xl font-bold tracking-tight text-gray-300">404</h1>
        </div>
    </header>
    <main class="bg-gray-900">
        <section class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <p class="text-sm font-medium leading-6 text-white">Você não tem permissão para acessar este certificado.</p>
        </section>
         
    </main>
@endsection



