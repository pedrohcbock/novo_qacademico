<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/curso.css') }}">
    <title>Adicionar Curso</title>
</head>

<body>
    @extends('includes.header-admin')
    <div class="container">
        <h1>Adicionar Curso</h1>
        <form id="cursoForm" action="{{ route('cursos.addSave') }}" method="POST">
            @csrf
            <div class="field-input">
                <label for="curso">Nome do curso:</label>
                <input type="text" name="curso" id="curso" required>
            </div>

            <div class="btn">
                <button type="submit" id="submit-btn">
                    Cadastrar Curso
                </button>
            </div>
        </form>
    </div>
</body>

</html>
