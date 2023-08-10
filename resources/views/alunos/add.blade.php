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
                <div class="progress-bar">
                    <span>
                        <img src="../imgs/user.svg" alt="">
                    </span>
                </div>
                <div class="progress-bar ">
                    <span>
                        <img src="../imgs/password.svg" alt="">
                    </span>
                </div>
            </div>
            <div class="pages">
                <div class="page active">
                    <h1>Cadastro de aluno</h1>
                    <div class="field">
                        <div class="field-input">
                            <label for="email"><span>*</span>Email</label>
                            <input value="{{ old('email', $aluno->email ?? '') }}" type="email" name="email"
                                placeholder="aluno@gmail.com">
                        </div>
                        <div class="field-input">
                            <label for="nome"><span>*</span>Nome</label>
                            <input value="{{ old('nome', $aluno->nome ?? '') }}" type="text" name="nome"
                                placeholder="João da Silva">
                        </div>
                    </div>
                    <div class="btn">
                        <button type="button" id="next-btn">
                            <img src="../imgs/next.svg" alt="">
                        </button>
                    </div>
                </div>
                <div class="page">
                    <h1>Dados pessoais do aluno</h1>
                    <div class="field">
                        <div class="field-input">
                            <div class="field-group">
                                <div class="fname-input">
                                    <label for="cpf"><span>*</span>CPF</label>
                                    <input value="{{ old('cpf', $aluno->cpf ?? '') }}" type="number" name="cpf">
                                </div>
                                <div class="lname-input">
                                    <label for="matricula"><span>*</span>Matricula do Aluno</label>
                                    <input value="{{ old('matricula', $aluno->matricula ?? '') }}" type="number"
                                        name="matricula" placeholder="1234567890">
                                </div>
                            </div>
                            <div class="field-group">
                                <div class="fname-input">
                                    <label for="telefone"><span>*</span>Telefone</label>
                                    <input value="{{ old('telefone', $aluno->telefone ?? '') }}" type="number"
                                        name="telefone" placeholder="(xx) xxxxx-xxxx">
                                </div>
                                <div class="lname-input">
                                    <label for="foto"><span>*</span>Foto</label>
                                    <input value="{{ old('foto', $aluno->foto ?? '') }}" type="file" name="foto"
                                        placeholder="e.g. Doe">
                                </div>
                            </div>
                            <div class="field-input">
                                <label for="nomePai"><span>*</span>Nome do Pai</label>
                                <input value="{{ old('nomePai', $aluno->nomePai ?? '') }}" type="text"
                                    name="nomePai">
                            </div>
                            <div class="field-input">
                                <label for="nomeMae"><span>*</span>Nome da Mãe</label>
                                <input value="{{ old('nomeMae', $aluno->nomeMae ?? '') }}" type="text"
                                    name="nomeMae">
                            </div>
                        </div>
                        <div class="field-input">
                            <label for="data"><span>*</span>Data de Nascimento</label>
                            <input value="{{ old('dataNasc', $aluno->dataNasc ?? '') }}" type="date" name="dataNasc">
                        </div>
                        <div class="field-input">
                            <label for="sexo"><span>*</span>Gênero</label>
                            <select name="sexo">
                                <option value="0">Mulher</option>
                                <option value="1">Homem</option>
                            </select>
                        </div>

                        <div class="field-input">
                            <label for="idTurma"><span>*</span>IdTurma</label>
                            <input value="{{ old('idTurma', $aluno->idTurma ?? '') }}" type="number" name="idTurma"
                                placeholder="3º Info">
                        </div>

                        <div class="field-input">
                            <label for="idCurso"><span>*</span>IdCurso</label>
                            <input value="{{ old('idCurso', $aluno->idCurso ?? '') }}" type="number" name="idCurso"
                                placeholder="Informática">
                        </div>
                    </div>
                    <div class="btn">
                        <button type="button" id="prev-btn">
                            <img src="../imgs/prev.svg" alt="">
                        </button>
                        <button type="button" id="next-btn">
                            <img src="../imgs/next.svg" alt="">
                        </button>
                    </div>
                </div>
                <div class="page">
                    <h1>Segurança da conta</h1>
                    <div class="field">
                        <div class="field-input">
                            <label for="password"><span>*</span>Senha</label>
                            <input value="{{ old('password', $aluno->password ?? '') }}" type="password"
                                name="password" placeholder="Password">
                            <img class="show-hide-pass" src="../imgs/show-pass.svg" alt="">
                        </div>
                    </div>
                    <div class="btn">
                        <button type="button" id="prev-btn">
                            <img src="../imgs/prev.svg" alt="">
                        </button>
                        <button type="submit" id="submit-btn">
                            Cadastrar aluno
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </section>
</body>

</html>
