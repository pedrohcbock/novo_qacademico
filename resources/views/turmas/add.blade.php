{{-- <!DOCTYPE html>
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
</body> --}}

</html>
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
        <form action="{{ route('alunos.addSave') }}" method="POST" class="form">
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
                            <label for="nome"><span>*</span>Nome</label>
                            <input type="text" name="nome" id="nome" placeholder="João da Silva" required>
                        </div>
                        <div class="field-input">
                            <label for="curso"><span>*</span>Curso</label>
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
                    </div>
                    <div class="btn">
                        <button type="button" id="next-btn">
                            <img src="../imgs/next.svg" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <script src="{{ asset('js/turma.js') }}"></script>

</body>

</html>

