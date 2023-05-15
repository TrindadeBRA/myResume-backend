@extends('layouts.app')

@section('content')

    <header class="bg-gray-700 shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{-- <a href="{{ url()->previous(); }}" class="text-sm font-semibold leading-7 text-gray-300"><span aria-hidden="true">&larr;</span> Voltar a home</a> --}}
            <h1 class="text-3xl font-bold tracking-tight text-gray-300">Bem vindo {{Auth::user()->name}}!</h1>
        </div>
    </header>

    <main class="bg-gray-900">
        <div class="mx-auto max-w-7xl py-6 px-6 lg:px-8 text-white">

            <div class="flex mb-8 gap-2">
                <h2 class="text-2xl mr-2 font-medium">Seus certificados</h2>
                <a href="{{route('certificado.create')}}" class="rounded-md bg-gray-700 cursor-pointer px-2 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-white/20">Adicionar novo</a>
                <a href="{{route('certificado.index')}}" class="rounded-md bg-gray-700 cursor-pointer px-2 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-white/20">Ver todos</a>
            </div>
              

            <div class="flex flex-wrap gap-8">

                @foreach ($certificados as $key => $certificado)

                    @if($loop->iteration > 5)
                        @break
                    @endif

                    <a href="{{route('certificado.edit', $certificado['id'])}}" class="w-full sm:w-1/5">
                        <img src="{{$certificado['certificate-url']}}" class="w-full pb-2 h-[170px] object-cover" alt="{{$certificado['certificate-title']}}" title="{{$certificado['certificate-title']}}" />
                        <p class="text-white text-base font-medium overflow-hidden whitespace-nowrap overflow-ellipsis">{{$certificado['certificate-title']}}</p>
                        <p class="text-white text-xs font-light">{{date('d/m/Y', strtotime($certificado['certificate-date']))}}</p>
                    </a>


                @endforeach

              
            </div>




              



        </div>
    </main>


@endsection
