@extends('layouts.app')

@section('title', "Editar o Comentário do Usuário {$user->name}")

@section('content')

<h1 class="text-2xl font-semibold leading-tigh py-2">Editar o Comentário do Usuário {{$user->name}}</h1>

@include('includes.validation-form')

<form action="{{ route('comments.update', $comment->id) }}" method="post">
    @method('PUT')
    @include('users.comments._partials.form')
</form>

<br>

<a href="{{route('users.index')}}" class="shadow bg-green-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Voltar</a>

@endsection