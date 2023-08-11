<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("style/curso.css")}}">
    <title>Adicionar Curso</title>
</head>
<body>
    <div class="container">
        <h1>Adicionar Curso</h1>
        <form id="cursoForm" action="{{ route('cursos.addSave') }}" method="POST">
            <input type="hidden" id="cursoId" name="cursoId">

            <label for="nomeCurso">Nome do Curso:</label>
            <input type="text" id="nomeCurso" name="nomeCurso" required>

            <h2>Turmas Disponíveis:</h2>
            <div class="turma-list">
                <label><input class="chack" type="checkbox" name="turma[]" value="1"> Turma A</label>
                <label><input class="chack" type="checkbox" name="turma[]" value="2"> Turma B</label>
                <label><input class="chack" type="checkbox" name="turma[]" value="3"> Turma C</label>

            </div>

            <button type="submit">Adicionar Curso</button>
        </form>
    </div>

    <script src="{{ asset("js/curso.js")}}"></script>
</body>
</html>
