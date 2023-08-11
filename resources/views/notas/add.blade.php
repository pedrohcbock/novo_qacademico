@extends('includes.base')

@section('title', 'Adiconar - Aluno')

@section('content')
    <h2>Adicione o seu produto</h2>

    @if ($errors)
        @foreach ($errors->all() as $err)
            {{ $err }}<br>
        @endforeach
    @endif

    <form action="{{ route('notas.addSave') }}" method="post">
        @csrf
        <input type="number" name="idAluno" placeholder="Aluno">
        <br>
        <input type="number" name="idMateria" placeholder="materia">
        <br>
        <input type="number" name="nota" placeholder="nota">
        <br>
        <input type="submit" value="Adiconar Produto">
    </form>

@endsection

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Aluno</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="../style/add.css">
    <script src="../js/add.js" defer></script>
</head>

<body>

    @if ($errors)
        @foreach ($errors->all() as $err)
            {{ $err }}<br>
        @endforeach
    @endif

    <section id="signup">
        <form action="{{ route('notas.addSave') }}" method="POST" class="form">
            @csrf
            <div class="progress">
                <div class="progress-bar">
                    <span>
                        <img src="../imgs/user.svg" alt="">
                    </span>
                </div>
            </div>
            <div class="pages">
                <div class="page active">
                    <h1>Adicionar Nota</h1>
                    <div class="field">
                        <div class="field-input">
                            <label for="idAluno"><span>*</span>Aluno</label>
                            <input type="number" name="idAluno" placeholder="Insira o id do aluno">
                        </div>
                        <div class="field-input">
                            <label for="idMateria"><span>*</span>Materia</label>
                            <input type="number" name="idMateria" placeholder="Insira o id da matéria">
                        </div>
                        <div class="field-input">
                            <label for="nota"><span>*</span>Nota</label>
                            <input type="number" step="0.01" name="nota" placeholder="Insira a nota do aluno">
                        </div>
                    </div>
                    <div class="btn">
                        <button type="submit" id="submit-btn">
                            Enviar nota
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </section>
</body>

</html>

