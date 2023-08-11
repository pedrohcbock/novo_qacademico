<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/header.css">
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

    <section>
        <div class="form-box">
            <main>
                <div class="cima">
                    <div class="box"><a href="{{ route('calendarios.index') }}"><button>Calendário Acadêmico</button></a></div>
                    <div class="box"><a href="{{ route('documentos.index') }}"><button>Solicitar Documento</button></a></div>
                </div>
                <div class="baixo">
                    <div class="box"><a href="{{ route('materiais.index') }}"><button>Materiais de Apoio</button></a></div>
                    <div class="box"><a href="{{ route('notas.index') }}"><button>Nota</button></a></div>
                    <div class="box"><a href="{{ route('refeitorios.view') }}"><button>Cardapio</button></a></div>
                </div>
            </main>
        </div>
    </section>
</body>

</html>
