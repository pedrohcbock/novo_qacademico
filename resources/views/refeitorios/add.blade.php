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
    @extends('includes.menu-admin')
    <div class="container">
        <h1>Novo Cardápio</h1>
        <form id="menuForm">
            <label for="week">Semana:</label>
            <input type="week" id="week" name="week" required>
            <label for="menu">Cardápio:</label>
            <textarea id="menu" name="menu" rows="6" required></textarea>
            <button type="submit">Enviar</button>
        </form>
    </div>


</body>

</html>
