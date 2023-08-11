<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("style/materia.css")}}">
    <title>Adicionar Matéria</title>
</head>
<body>
    <div class="container">
        <h1>Adicionar Matéria</h1>
        <form id="materiaForm">
            <input type="hidden" id="materiaId" name="materiaId">

            <label for="nomeMateria">Nome da Matéria:</label>
            <input type="text" id="nomeMateria" name="nomeMateria" required>

            <h2>Cursos Disponíveis:</h2>
            <div class="curso-list">
                <label><input type="checkbox" name="curso[]" value="1"> Curso A</label>
                <label><input type="checkbox" name="curso[]" value="2"> Curso B</label>
                <label><input type="checkbox" name="curso[]" value="3"> Curso C</label>

            </div>

            <button type="submit">Adicionar Matéria</button>
        </form>
    </div>

    <script src="{{asset("js/materia.js")}}"></script>
</body>
</html>
