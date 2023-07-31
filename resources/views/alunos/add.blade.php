@extends('includes.base')

@section('title', 'Adiconar - Aluno')

@section('content')
    <h2>Adicione o seu produto</h2>

    @if ($errors)
        @foreach ($errors->all() as $err)
            {{ $err }}<br>
        @endforeach
    @endif

    <form action="{{ route('alunos.addSave') }}" method="post">
        @csrf
        <input type="text" name="nome" placeholder="Nome do Aluno">
        <br>
        <input type="email" name="email" placeholder="Email do Aluno">
        <br>
        <input type="number" name="cpf" placeholder="CPF do Aluno">
        <br>
        <input type="number" name="password" placeholder="Senha do Aluno">
        <br>
        <input type="date" name="dataNasc" placeholder="Data de Nascimento do Aluno">
        <br>
        <input type="text" name="foto" placeholder="Foto do Aluno">
        <br>
        <input type="text" name="nomePai" placeholder="Nome do Pai do Aluno">
        <br>
        <input type="text" name="nomeMae" placeholder="Nome da Mãe do Aluno">
        <br>
        <input type="number" name="matricula" placeholder="Matricula do Aluno">
        <br>
        <input type="number" name="telefone" placeholder="Telefone do Aluno">
        <br>
        <label for="sexo">Gênero:</label>
        <select id="sexo" name="sexo">
            <option value="0">Mulher</option>
            <option value="1">Homem</option>
        </select>
        <br>
        <input type="number" name="idTurma" placeholder="Turma do Aluno">
        <br>
        <input type="number" name="idCurso" placeholder="Curso do Aluno">
        <br>
        <input type="submit" value="Adiconar Produto">
    </form>

@endsection
