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
        <input type="number" name="idmateria" placeholder="materia">
        <br>
        <input type="string" name="nota" placeholder="nota">
        <br>
      
        <input type="submit" value="Adiconar Produto">
    </form>

@endsection
