@extends('main')

<form method="POST" action="/usuario/{{ $usuario->id }}">
@csrf
@method('patch')
    @include('usuarios.partials.form')
</form>