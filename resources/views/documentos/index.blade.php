<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sidebar</title>
    <link rel="stylesheet" href="../style/barra.css" />
</head>

<body>
    @extends('includes.header-aluno')
    <div class="sidebar">
        <ul>
            <span>Navegar</span>
            <li>
                <a href="{{ route('includes.header-aluno') }}"><ion-icon name="home-outline"></ion-icon>
                    <p>Menu</p>
                </a>
            </li>
            <li>
                <a href="{{ route('notas.index') }}"><ion-icon name="stats-chart-outline"></ion-icon>
                    <p>Notas</p>
                </a>
            </li>
            <li>
                <a href="{{ route('calendarios.index') }}"><ion-icon name="today-outline"></ion-icon>
                    <p>Calendário</p>
                </a>
            </li>
            <li>
                <a href="{{ route('documentos.index') }}"><ion-icon name="folder-open-outline"></ion-icon>
                    <p>Documentos</p>
                </a>
            </li>
            <li>
                <a href="{{ route('refeitorios.index') }}"><ion-icon name="today-outline"></ion-icon>
                    <p>Refeitório</p>
                </a>
            </li>
        </ul>
        <ul>
            <li class="switch-theme">
            </li>
            <li>
                <a href="{{ route('logout') }}"><ion-icon name="log-out-outline"></ion-icon>
                    <p>Deslogar</p>
                </a>
            </li>
        </ul>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <section>
        <div class="form-box">
            <main>
                <div class="cima" style="margin-left: 13.5vw">
                    <h1>Solicitação de Documentos</h1>
                </div>
                <div class="meusQuest">
                    @foreach ($documentos as $documento)
                    <a href="{{ route('documentos.download', ['id' => $documento->id]) }}" class="btn-dow">
                        <button class="nomeQuest">{{ $documento->tipo }}</button>
                    </a>
                    @endforeach
                </div>
            </main>
        </div>
    </section>
</body>

</html>
