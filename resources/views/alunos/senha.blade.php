<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="../style/altera.css">
    <title>Desenvolvimento</title>
</head>

<body>
    <section>
        <div class="form-box">
            <img src="../imgs/sim.png" alt="">
            <div class="form-value">
                <form action="{{ route('alunos.newPasswordSave') }}" method="POST">
                    @csrf
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="text" name="cpf" required>
                        <label for="">CPF</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="">Nova Senha</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password_confirmation" required>
                        <label for="">Confirmar Nova Senha</label>
                    </div>
<<<<<<< Updated upstream
                    <button type="submit">Alterar Senha</button>
=======
                    <button>Salvar</button>
>>>>>>> Stashed changes
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
