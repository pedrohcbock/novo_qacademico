@extends('includes.base')

@section('title', 'Adiconar - Aluno')

@section('content')
    <h2>Adicione o seu produto</h2>

    @if ($errors)
        @foreach ($errors->all() as $err)
            {{ $err }}<br>
        @endforeach
    @endif

    <form action="{{ route('turmas.addSave') }}" method="post">
        @csrf
        <input type="text" name="turma" placeholder="Turma">
        <br>
        <input type="number" name="numeroAlunos" placeholder="Número de alunos">
        <br>
        <input type="number" name="idCurso" placeholder="Curso">
        <br>
        <input type="number" name="idMateria" placeholder="Turma">
        <br>
        <input type="submit" value="Adiconar Produto">
    </form>

@endsection
