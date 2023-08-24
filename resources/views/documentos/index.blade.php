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
    @extends('includes.header-aluno')>
    <section>
        <div class="form-box">
            <main>
                <div class="cima" style="margin-left: 13.5vw">
                    <h1>Documentos do {{ Auth::guard('aluno')->user()->nome }}</h1>
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
