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
    @extends('includes.header-admin')
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
            <a href="{{ route('calendarios.index') }}"
              ><ion-icon name="today-outline"></ion-icon>
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
</body>

</html>
