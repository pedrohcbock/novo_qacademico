<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/barra.css" />
    <script src="https://kit.fontawesome.com/0e91a3ee41.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <header>
        <div class="itens">
            <h1>
                <div class="q">Q-aca</div>dêmico
            </h1>
        </div>
    </header>

    <div class="sidebar">
        <ul>
            <span>Navegar</span>
            <li>
                <a href="{{ route('includes.header-admin') }}"><ion-icon name="home-outline"></ion-icon>
                    <p>Menu</p>
                </a>
            </li>
            <li>
                <a href="{{ route('notas.add') }}"><ion-icon name="stats-chart-outline"></ion-icon>
                    <p>Adicionar Notas</p>
                </a>
            </li>
            <li>
                <a href="{{ route('calendarios.index') }}"><ion-icon name="today-outline"></ion-icon>
                    <p>Calendário</p>
                </a>
            </li>
            <li>
                <a href="{{ route('documentos.add') }}"><ion-icon name="folder-open-outline"></ion-icon>
                    <p>Adicionar Documentos</p>
                </a>
            </li>
            <li>
                <a href="{{ route('materiais.add') }}"><ion-icon name="folder-open-outline"></ion-icon>
                    <p>Adicionar Materiais</p>
                </a>
            </li>
            <li>
                <a href="{{ route('refeitorios.add') }}"><ion-icon name="today-outline"></ion-icon>
                    <p> Refeitório</p>
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


    @yield('content')
</body>

</html>
