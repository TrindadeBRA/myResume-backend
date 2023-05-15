@extends('layouts.app')
@section('title', 'Todos meus certificados - myResume Backend')

@section('content')
    <header class="bg-gray-700 shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <a href="{{ route('home') }}" class="text-sm font-semibold leading-7 text-gray-300"><span aria-hidden="true">&larr;</span> Voltar a home</a>
            <h1 class="text-3xl font-bold tracking-tight text-gray-300">Certificados</h1>
        </div>
    </header>
    <main class="bg-gray-900">
        <div class="mx-auto max-w-7xl">
            <div class="bg-gray-900 py-10">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-base font-semibold leading-6 text-white">Todos seus certificados</h1>
                    <p class="mt-2 text-sm text-gray-300">Uma lista com todos os dados do seu certificado.</p>
                </div>
                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                    <a href="{{route('certificado.create')}}" class="block rounded-md bg-indigo-500 px-3 py-2 text-center text-sm font-semibold text-white hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Adicionar Certificado</a>
                </div>
                </div>
                <div class="mt-8 flow-root">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        @if (count($certificados) > 0)
                            <table class="min-w-full divide-y divide-gray-700">
                                <thead>
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-0">Certificado</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Plataforma</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Instrutor</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Data de Conclusão</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">
                                        <span class="">Imagem</span>
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">
                                        <span class="">Editar</span>
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">
                                        <span class="">Deletar</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-800">
                                    @foreach ($certificados as $key => $certificado)
                                        <tr>
                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-white sm:pl-0">{{$certificado['certificate-title']}}</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">{{$certificado['certificate-origin']}}</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">{{$certificado['certificate-instructor']}}</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">{{date('d/m/Y', strtotime($certificado['certificate-date']))}}</td>
                                            <td class="hitespace-nowrap px-3 py-4 text-sm text-gray-300">
                                                <a href="{{$certificado['certificate-url']}}" target="_blank" class="text-indigo-400 hover:text-indigo-300">Abrir</a>
                                            </td>
                                            <td class="hitespace-nowrap px-3 py-4 text-sm text-gray-300">
                                                <a href="{{route('certificado.edit', $certificado['id'])}}" class="text-indigo-400 hover:text-indigo-300">Editar</a>
                                            </td>
                                            <td class="hitespace-nowrap px-3 py-4 text-sm text-gray-300">
                                                <form action="{{ route('certificado.destroy', ['certificado' => $certificado['id']]) }}" method="post" id="form_{{$certificado['id']}}">
                                                    @method('Delete')
                                                    @csrf
                                                </form>
                                                <a href="#" onclick="document.getElementById('form_{{$certificado['id']}}').submit()" class="text-indigo-400 hover:text-indigo-300">Remover</a>
                                            </td>
                                        </tr>
                                    @endforeach
                
                                <!-- More people... -->
                                </tbody>
                            </table>
                        @else
                            <p class="text-white text-base font-medium w-full">Ops... Parece que você ainda não cadastrou nenhum certificado.<p>
                        @endif
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </main>
@endsection



