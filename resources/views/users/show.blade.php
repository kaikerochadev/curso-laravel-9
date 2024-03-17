@extends('layouts.app')

@section('title', 'Listagem do usuário: {{ $user->name }}')

@section('content')

<h1>Listagem do usuário {{ $user->name }}</h1>

<ul>
    <li>
        {{ $user->name }}
    </li>

    <li>
        {{ $user->email }}
    </li>

    <br>

    <a href="{{ route('users.index') }}">Voltar</a>

    <br>

    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @csrf
        @method('DELETE')

        <button type='submit'>
            Excluir
        </button>
    </form>
</ul>

@endsection