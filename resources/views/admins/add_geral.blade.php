<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi step form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
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
        <form action="{{ url()->current() }}" method="POST" class="form">
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
                            <input value="{{ old('email', $aluno->email ?? '') }}" type="email" id="email" placeholder="e.g. sample@email.com">
                        </div>
                        <div class="field-input">
                            <label for="uname"><span>*</span>Nome</label>
                            <input  value="{{ old('nome', $aluno->nome ?? '') }}" type="text" id="uname" placeholder="e.g. gab613">
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
                                    <label for="fname"><span>*</span>CPF</label>
                                    <input value="{{ old('cpf', $aluno->cpf ?? '') }}" readonly type="text" id="fname" placeholder="e.g. John">
                                </div>
                                <div class="lname-input">
                                    <label for="fname"><span>*</span>Matricula do Aluno</label>
                                    <input type="password" id="fname" placeholder="e.g. Doe">
                                </div>
                            </div>
                            <div class="field-group">
                                <div class="fname-input">
                                    <label for="fname"><span>*</span>Telefone</label>
                                    <input type="text" id="fname" placeholder="e.g. John">
                                </div>
                                <div class="lname-input">
                                    <label for="fname"><span>*</span>Foto</label>
                                    <input value="{{ old('foto', $aluno->foto ?? '') }}"  type="file" id="fname" placeholder="e.g. Doe">
                                </div>
                            </div>
                            <div class="field-input">
                                <label for="password"><span>*</span>Nome do Pai</label>
                                <input value="{{ old('nomePai', $aluno->nomePai ?? '') }}" type="text" id="password" placeholder="Password">
                                <img class="show-hide-pass" src="../imgs/show-pass.svg" alt="">
                            </div>
                            <div class="field-input">
                                <label for="password"><span>*</span>Nome da mãe</label>
                                <input value="{{ old('nomeMae', $aluno->nomeMae ?? '') }}" type="text" id="password" placeholder="Password">
                                <img class="show-hide-pass" src="../imgs/show-pass.svg" alt="">
                            </div>
                        </div>
                        <div class="field-input">
                            <label for="bdate"><span>*</span>Data de Nascimento</label>
                            <input value="{{ old('dataNasc', $aluno->dataNasc ?? '') }}"> type="date" id="bdate">
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
                            <input value="{{ old('password', $aluno->password ?? '') }}" type="password" id="password" placeholder="Password">
                            <img class="show-hide-pass" src="../imgs/show-pass.svg" alt="">
                        </div>
                        <div class="field-input">
                            <label for="confirmpass"><span>*</span>Confirmar Senha</label>
                            <input value="{{ old('password', $aluno->password ?? '') }}" type="password" id="confirmpass" placeholder="Confirm Password">
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
