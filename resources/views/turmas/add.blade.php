</html>
<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Turma</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="../style/add.css">
    <script src="../js/add.js" defer></script>
</head>


<body>
    @extends('includes.header-admin')
    @if ($errors)
        @foreach ($errors->all() as $err)
            {{ $err }}<br>
        @endforeach
    @endif

    <section id="signup">
        <form action="{{ route('turmas.addSave') }}" method="POST" class="form">
            @csrf
            <div class="progress">
                <div class="progress-bar active current">
                    <span>
                        <img src="../imgs/email.svg" alt="">
                    </span>
                </div>
            </div>
            <div class="pages">
                <div class="page active">
                    <h1>Cadastro de Turma</h1>
                    <div class="field">
                        <div class="field-input">
                            <label for="nome"><span>*</span>Nome do turma</label>
                            <input type="text" name="turma" id="turma" required>
                        </div>
                        <div class="field-input">
                            <label for="curso"><span>*</span>Número de alunos</label>
                            <input type="number" name="numeroAlunos" id="numeroAlunos" required>
                        </div>
                        <div class="field-input">
                            <label for="curso"><span>*</span>Curso</label>
                            <select name="idCurso" id="idCurso" required>
                                <option value="" selected disabled>Selecione uma turma</option>
                                @foreach ($cursos as $curso)
                                    <option value="{{ $curso->id }}">{{ $curso->curso }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="btn">
                        <button type="submit" id="submit-btn">
                            Cadastrar turma
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </section>

</body>

</html>
