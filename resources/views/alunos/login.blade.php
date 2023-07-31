@extends('includes.base')

@section('title', 'Usuarios - Login')

@section('content')

@if(session('erro'))
<div>{{ session('erro') }}</div>
@endif

<div class="login">
    <h1>Login!!!!!</h1>
    <form action="{{ url()->current() }}" method="post">
        @csrf
        <input type="number" name="cpf" placeholder="Insria seu cpf">
        <br>
        <input type="password" name="password" placeholder="Insira sua senha">
        <br>
        <input type="submit" value="Logar">
    </form>
</div>
@endsection
