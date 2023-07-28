

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login - Qacadêmico</title>

    <link rel="stylesheet" href="../style/animacoes_login.css">
    <link rel="stylesheet" href="../style/estilizacao_login.css">
</head>

<body>
    <div class="logo">
        <img src="../imgs/image1.svg" alt="" class="img_logo">
    </div>
    <br>
    <div class="texto_logo">
        <p class="paragrafo">Bem vindo ao <strong class="destaque"> Q-Acadêmico</strong></p>
        <p class="paragrafo2">Escolha ao lado o módulo que deseja acessar. <br> Seu login e senha serão necessários.

        </p>
    </div>

    <div class="wrapper">
        <div class="form-wrapper sign-up">
            <form action="">
                <h2> Responsável <br> Aluno  </h2>
                <div class="input-group">
                    <input type="text" required>
                    <label for="">Usuário</label>
                </div>
                <div class="input-group">
                    <input type="password" required>
                    <label for="">Senha</label>
                </div>
                <div class="forgot-pass">
                    <a href="#">Esqueci minha senha?</a>
                </div>
                <button type="submit" class="btn">Entrar</button>

                <div class="sign-link">
                    <p><a href="#" class="signIn-link">Aux. Administrativo</a></p>
                </div>
            </form>
        </div>

        <div class="form-wrapper sign-in">
            <form action="">
                <h2>Auxiliar <br> Administrativo</h2>
                <div class="input-group">
                    <input type="text" required>
                    <label for="">Usuário</label>
                </div>
                <div class="input-group">
                    <input type="password" required>
                    <label for="">Senha</label>
                </div>
                <div class="forgot-pass">
                    <a href="#">Esqueci minha senha?</a>
                </div>
                <button type="submit" class="btn">Entrar</button>
                <div class="sign-link">
                    <p> <a href="#" class="signUp-link"> Responsável | Aluno</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="js/login.js"></script>
</body>

</html>
