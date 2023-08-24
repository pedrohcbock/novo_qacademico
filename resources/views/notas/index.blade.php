@extends('includes.header-aluno')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset("style/notas.css")}}">
    <title>Notas do Aluno</title>
</head>
<body>
    <h1 class="titulo_notas">Notas do Aluno {{ Auth::guard('aluno')->user()->nome }}</h1>

    <table class="notas_aluno">
        <thead>
            <tr>
                <th>Matéria</th>
                <th>Nota</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notas as $nota)
                <tr>
                    <td>{{ $nota->materia->materia }}</td>
                    <td>{{ $nota->nota }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
