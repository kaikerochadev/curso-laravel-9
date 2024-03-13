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
</ul>