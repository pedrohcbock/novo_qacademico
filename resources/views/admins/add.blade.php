<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi step form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
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
        <form action="{{ route('admins.addSave') }}" method="POST" class="form">
            @csrf
            <div class="progress">
                <div class="progress-bar active current">
                    <span>
                        <img src="../imgs/email.svg" alt="">
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
                    <h1>Cadastro de admin</h1>
                    <div class="field">
                        <div class="field-input">
                            <label for="email"><span>*</span>Email</label>
                            <input value="{{ old('email', $admin->email ?? '') }}" type="email" name="email"
                                placeholder="admin@gmail.com">
                        </div>
                        <div class="field-input">
                            <label for="nome"><span>*</span>Nome</label>
                            <input value="{{ old('nome', $admin->nome ?? '') }}" type="text" name="nome"
                                placeholder="Nome do admin">
                        </div>
                        <div class="field-input">
                            <label for="cpf"><span>*</span>CPF</label>
                            <input value="{{ old('cpf', $admin->cpf ?? '') }}" type="number" name="cpf"
                                placeholder="12345678910">
                        </div>
                    </div>
                    <div class="btn">
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
                            <input value="{{ old('password', $admin->password ?? '') }}" type="password" name="password"
                                placeholder="Senha">
                            <img class="show-hide-pass" src="../imgs/show-pass.svg" alt="">
                        </div>
                    </div>
                    <div class="btn">
                        <button type="button" id="prev-btn">
                            <img src="../imgs/prev.svg" alt="">
                        </button>
                        <button type="submit" id="submit-btn">
                            Cadastrar admin
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </section>
</body>

</html>
