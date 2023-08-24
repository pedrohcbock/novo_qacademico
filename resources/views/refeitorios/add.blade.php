<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Cardápio</title>
    <link rel="stylesheet" href="../style/principal.css">
    <script src="../js/principal.js" defer></script>

</head>

<body>
    @extends('includes.header-admin')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <section id="signup">
        <form method="post" action="{{ route('refeitorios.addSave') }}">
            @csrf
            <h1>Adicionar Cardápio</h1>
            <label for="data_inicial">Data Inicial:</label>
            <input type="date" name="data_inicial" required>
            <br>

            <label for="data_final">Data Final:</label>
            <input type="date" name="data_final" required>
            <br>

            <label for="descricao">Descrição:</label>
            <textarea name="descricao" rows="4" required></textarea>
            <br>

            <div class="btn">
                <button type="submit" id="submit-btn">
                    Adicionar cardápio
                </button>
            </div>
        </form>
    </section>

</body>

</html>
