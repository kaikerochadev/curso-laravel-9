@extends('layouts.app')

@section('title', "Editar Usuário {$user->name}")

@section('content')

<h1>Editar Usuário {{$user->name}}</h1>

@include('includes.validation-form')

<form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    @include('users._partials.form')
</form>

<br>

<a href="{{route('users.index')}}">Voltar</a>

@endsection