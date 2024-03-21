@extends('layouts.app')

@section('title', "Novo Comentário Para o Usuário {$user->name}")

@section('content')

<h1 class="text-2xl font-semibold leading-tigh py-2">Novo Comentário Para o Usuário {{$user->name}}</h1>

@include('includes.validation-form')

<form action="{{ route('comments.store', $user->id) }}" method="POST">
    @include('users.comments._partials.form')
</form>

<a href="{{route('comments.index', $user->id)}}" class="shadow bg-green-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Voltar</a>

@endsection