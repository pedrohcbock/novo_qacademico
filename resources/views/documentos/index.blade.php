<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/novodoc.css">
    <script src="../js/solicitar.js" defer></script>

    <title>Solicitação de Documento</title>
</head>

<body>

    <section>
        <div class="sub_titulo">
            <h1 class="sub">Solicitar Documentos</h1>
            <h2 class="sub_sub">Documentos Solicitados</h2>
        </div>
        <div class="logoQuest">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-journal-text" viewBox="0 0 16 16">
            </svg>
        </div>
        <div class="container">
            <button class="abre_modal" id="openModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-folder-plus" viewBox="0 0 16 16">
                </svg>
                <p>Nova Solicitação</p>
            </button>
        </div>
        <div class="meusQuest">


            @foreach ($documentos as $documento)
                <h4 class="nomeQuest">{{ $documento->tipo }}
                    <a href="{{ route('documentos.download', ['id' => $documento->id]) }}" class="btn-dow">Download</a>
                </h4>
            @endforeach
        </div>

        <div class="modal-overlay" id="modalOverlay">
            <div class="modal">
                <form>
                    <label for="filtroTipoModal" class="filtro-tipo">Selecione o tipo de documento que você
                        deseja:</label>
                    <select id="filtroTipoModal" class="seleciona" name="filtro_tipo">
                        <option value="Atestado de Matricula">Atestado de Matricula</option>
                        <option value="Boletim">Boletim</option>
                        <option value="Histórico Escolar">Histórico Escolar</option>
                    </select>
                    <br>
                    <button class="enviar_solicita" type="submit">Enviar Solicitação</button>
                </form>
            </div>
        </div>
    </section>

</body>

</html>
