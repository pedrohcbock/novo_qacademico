@extends('includes.base')

@section('title', 'Adiconar - Aluno')

@section('content')
    <h2>Adicione o seu produto</h2>

    @if ($errors)
        @foreach ($errors->all() as $err)
            {{ $err }}<br>
        @endforeach
    @endif

    <form action="{{ route('materias.addSave') }}" method="post">
        @csrf
        <input type="text" name="materia" placeholder="materia">
        <br>
        <input type="number" name="cargaHoraria" placeholder="cargaHoraria">
        <br>
      
        <input type="submit" value="Adiconar Produto">
    </form>

@endsection

