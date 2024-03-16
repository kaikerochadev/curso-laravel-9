@extends('layouts.app')

@section('title', 'Editar Usuário {{$user->name}}')

@section('content')

<h1>Editar Usuário {{$user->name}}</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    @csrf
    <input type="name" name="name" placeholder="Nome:" value="{{ $user->name }}">
    <input type="email" name="email" placeholder="E-mail:" value="{{ $user->email }}">
    <input type="password" name="password" placeholder="Senha:">
    <button>
        Editar
    </button>
</form>

<br>

<a href="{{route('users.index')}}">Voltar</a>

@endsection