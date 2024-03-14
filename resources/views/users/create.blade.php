@extends('layouts.app')

@section('title', 'Novo Usuário')

@section('content')

<h1>Novo Usuário</h1>

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <input type="name" name="name" placeholder="Nome:">
    <input type="email" name="email" placeholder="E-mail:">
    <input type="password" name="password" placeholder="Senha:">
    <button>
        Cadastrar
    </button>
</form>

@endsection