<!DOCTYPE html>
<html>
<head>
    <title>Notas do Aluno</title>
</head>
<body>
    <h1>Notas do Aluno {{ Auth::guard('aluno')->user()->nome }}</h1>

    <table>
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
