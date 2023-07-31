@extends('includes.base')

@section('title', 'Adiconar - Aluno')

@section('content')
<h2>Adicione o seu produto</h2>

@if ($errors)
@foreach ($errors->all() as $err)
{{ $err }}<br>
@endforeach
@endif

<form action="{{ url()->current() }}" method="post">
    @csrf
    <input type="text" name="nome" placeholder="Nome do Aluno" value="{{ old('nome', $aluno->nome ?? '') }}">
    <br>
    <input type="email" name="email" placeholder="Email do Aluno" value="{{ old('email', $aluno->email ?? '') }}">
    <br>
    <input type="number" name="cpf" placeholder="CPF do Aluno" value="{{ old('cpf', $aluno->cpf ?? '') }}" readonly>
    <br>
    <input type="password" name="password" placeholder="Senha do Aluno"
        value="{{ old('password', $aluno->password ?? '') }}" readonly>
    <br>
    <input type="date" name="dataNasc" placeholder="Data de Nascimento do Aluno"
        value="{{ old('dataNasc', $aluno->dataNasc ?? '') }}">
    <br>
    <input type="text" name="foto" placeholder="Foto do Aluno" value="{{ old('foto', $aluno->foto ?? '') }}" readonly>
    <br>
    <input type="text" name="nomePai" placeholder="Nome do Pai do Aluno"
        value="{{ old('nomePai', $aluno->nomePai ?? '') }}">
    <br>
    <input type="text" name="nomeMae" placeholder="Nome da Mãe do Aluno"
        value="{{ old('nomeMae', $aluno->nomeMae ?? '') }}">
    <br>
    <input type="number" name="matricula" placeholder="Matricula do Aluno"
        value="{{ old('matricula', $aluno->matricula ?? '') }}" readonly>
    <br>
    <input type="number" name="telefone" placeholder="Telefone do Aluno"
        value="{{ old('telefone', $aluno->telefone ?? '') }}">
    <br>
    <label for="sexo">Gênero:</label>
    <select id="sexo" name="sexo" value="{{ old('sexo', $aluno->sexo ?? '') }}">
        <option value="0">Mulher</option>
        <option value="1">Homem</option>
    </select>
    <br>
    <input type="number" name="idTurma" placeholder="Turma do Aluno" value="{{ old('idTurma', $aluno->idTurma ?? '') }}"
        readonly>
    <br>
    <input type="number" name="idCurso" placeholder="Curso do Aluno" value="{{ old('idCurso', $aluno->idCurso ?? '') }}"
        readonly>
    <br>
    <input type="submit" value="Adiconar Produto">
</form>

@endsection
