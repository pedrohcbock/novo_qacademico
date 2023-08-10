@extends('includes.base')

@section('title', 'Adiconar - Aluno')

@section('content')
    <h2>Adicione o seu produto</h2>

    @if ($errors)
        @foreach ($errors->all() as $err)
            {{ $err }}<br>
        @endforeach
    @endif

    <form action="{{ route('notas.addSave') }}" method="post">
        @csrf
        <input type="number" name="idAluno" placeholder="Aluno">
        <br>
        <input type="number" name="idMateria" placeholder="materia">
        <br>
        <input type="number" name="nota" placeholder="nota">
        <br>

        <input type="submit" value="Adiconar Produto">
    </form>

@endsection
