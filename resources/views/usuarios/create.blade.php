@extends('main')

<form method="POST" action="/usuario">
@csrf
    @include('usuarios.partials.form')
</form>