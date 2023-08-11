<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/turma.css') }}">
    <title>Adicionar Turma</title>
</head>

<body>
    <div class="container">
        <h1>Adicionar Turma</h1>
        <form id="turmaForm">
            <input type="hidden" id="id" name="id">

            <label for="nome">Nome da Turma:</label>
            <input type="text" id="nome" name="nome" placeholder="Nome do Curso" required>

            <div class="curso-list">
                <select name="curso">
                    <label>
                        <option name="curso[]" value="1"> Curso A
                    </label>
                    <label>
                        <option name="curso[]" value="2"> Curso B
                    </label>
                    <label>
                        <option name="curso[]" value="3"> Curso C
                    </label>
                </select>
            </div>

            <button type="submit">Adicionar Turma</button>
        </form>
    </div>

    <script src="{{ asset('js/turma.js') }}"></script>
</body>

</html>
