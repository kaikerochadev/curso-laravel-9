@extends('layouts.app')

@section('title', 'Novo Usuário')

@section('content')

<h1>Novo Usuário</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <input type="name" name="name" placeholder="Nome:" value="{{old('name')}}">
    <input type="email" name="email" placeholder="E-mail:" value="{{old('email')}}">
    <input type="password" name="password" placeholder="Senha:">
    <button>
        Cadastrar
    </button>
</form>

@endsection