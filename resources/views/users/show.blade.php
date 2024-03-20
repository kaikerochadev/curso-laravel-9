@extends('layouts.app')

@section('title', 'Listagem do usuário: {{ $user->name }}')

@section('content')

<h1 class="text-2xl font-semibold leading-tigh py-2">Listagem do usuário {{ $user->name }}</h1>

<ul>
    <li>
        {{ $user->name }}
    </li>

    <li>
        {{ $user->email }}
    </li>

    <br>

    <a href="{{ route('users.index') }}" class="shadow bg-green-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Voltar</a>

    <br>

    <form action="{{ route('users.destroy', $user->id) }}" method="post" class="py-12">
        @csrf
        @method('DELETE')

        <button type='submit' class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">
            Excluir
        </button>
    </form>
</ul>

@endsection