@extends('includes.header-aluno')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset("style/notas.css")}}">
    <title>Cardápio</title>
</head>
<body>
    <h1 class="titulo_notas">Cardápios dispóniveis</h1>

    <table class="notas_aluno">
        <thead>
            <tr>
                <th>Do dia até o dia</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($refeitorios as $refeitorio)
                <tr>
                    <td>{{ $refeitorio->data_inicial }} | {{ $refeitorio->data_final }}</td>
                    <td>{{ $refeitorio->descricao }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
