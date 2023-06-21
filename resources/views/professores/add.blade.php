@extends('includes.base')

@section('title', 'Adiconar - Aluno')

@section('content')
    <h2>Adicione o seu produto</h2>

    @if ($errors)
        @foreach ($errors->all() as $err)
            {{ $err }}<br>
        @endforeach
    @endif

    <form action="{{ route('professores.addSave') }}" method="post">
        @csrf
        <input type="text" name="nome" placeholder="Nome do Professor">
        <br>
        <input type="email" name="email" placeholder="Email do Professor">
        <br>
        <input type="number" name="senha" placeholder="Senha do Professor">
        <br>
        <input type="number" name="idMateria" placeholder="Materia que o Professor Administra">
        <br>
        <input type="submit" value="Adiconar Produto">
    </form>

@endsection
