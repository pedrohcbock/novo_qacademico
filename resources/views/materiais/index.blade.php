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
                    <h1>Materiais de apoio para o {{ Auth::guard('aluno')->user()->nome }}</h1>
                </div>
                <div class="meusQuest">
                    @foreach ($materiais as $material)
                    <a href="{{ route('materiais.download', ['id' => $material->id]) }}" class="btn-dow">
                        <button class="nomeQuest">{{ $material->tipo }}</button>
                    </a>
                    @endforeach
                </div>
            </main>
        </div>
    </section>
</body>

</html>
