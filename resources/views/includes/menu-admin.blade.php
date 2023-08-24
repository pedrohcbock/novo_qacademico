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
                <a href="{{ route('calendarios.indexAdmin') }}"><ion-icon name="today-outline"></ion-icon>
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
                    <p> Cardápio</p>
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
                <div class="cima">
                    <div class="box"><a href="{{ route('materiais.add') }}"><button>Adicionar Material</button></a>
                        <div class="box"><a href="{{ route('documentos.add') }}"><button>Adicionar
                                    Documento</button></a></div>
                        <div class="box"><a href="{{ route('alunos.add') }}"><button>Adicionar Aluno</button></a>
                        </div>
                        <div class="box"><a href="{{ route('materias.add') }}"><button>Adicionar Materia</button></a></div>
                    </div>
                </div>
                <div class="baixo">
                    <div class="box"><a href="{{ route('refeitorios.add') }}"><button>Adicionar
                                Cardapio</button></a></div>
                    <div class="box"><a href="{{ route('notas.add') }}"><button>Adicionar Notas</button></a>
                        <div class="box"><a href="{{ route('turmas.add') }}"><button>Adicionar Turma</button></a></div>
                        <div class="box"><a href="{{ route('cursos.add') }}"><button>Adicionar Curso</button></a></div>
                    </div>
                </div>
            </main>
        </div>
    </section>
</body>

</html>
