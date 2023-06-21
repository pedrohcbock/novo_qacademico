@extends('includes.base')

@section('title', 'Adiconar - Aluno')

@section('content')
    <h2>Adicione o seu produto</h2>

    @if ($errors)
        @foreach ($errors->all() as $err)
            {{ $err }}<br>
        @endforeach
    @endif

    <form action="{{ route('cursos.addSave') }}" method="post">
        @csrf
        <input type="text" name="curso" placeholder="Nome do curso">
        <br>
        
        <input type="submit" value="Adiconar Produto">
    </form>

@endsection
