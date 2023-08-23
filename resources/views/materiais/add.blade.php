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
    @extends('includes.menu-admin')
    @if ($errors)
        @foreach ($errors->all() as $err)
            {{ $err }}<br>
        @endforeach
    @endif

    <section id="signup">
        <form action="{{ route('materiais.addSave') }}" method="POST" class="form" enctype="multipart/form-data">
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
                    <h1>Adicionar Material</h1>
                    <div class="field">
                        <div class="field-input">
                            <label for="tipo_documento" class="tipodoc"><span>*</span>material</label>
                            <input type="file" id="material" name="material" required>
                        </div>
                        <div class="field-input">
                            <label for="curso"><span>*</span>Curso</label>
                            <select id="tipo_material" class="seleciona" name="tipo_material" required>
                                <option value="Atividade">Atividade</option>
                                <option value="Apoio">Apoio</option>
                                <option value="Recuperação">Recuperação</option>
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
    <script src="{{ asset('js/turma.js') }}"></script>

</body>

</html>
