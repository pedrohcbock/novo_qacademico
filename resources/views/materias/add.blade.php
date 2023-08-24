<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/materia.css') }}">
    <title>Adicionar Matéria</title>
</head>

<body>
    @extends('includes.header-admin')
    <div class="container">
        <h1>Adicionar Matéria</h1>
        <form id="cursoForm" action="{{ route('materias.addSave') }}" method="POST">
            @csrf
            <div class="field-input">
                <label for="curso">Nome da Matéria:</label>
                <input type="text" name="materia" id="materia" required>
            </div>
            <div class="field-input">
                <label for="curso">Carga Horária:</label>
                <input type="text" name="cargaHoraria" id="cargaHoraria" required>
            </div>

            <div class="btn">
                <button type="submit" id="submit-btn">
                    Cadastrar materia
                </button>
            </div>
        </form>
    </div>

</body>

</html>
