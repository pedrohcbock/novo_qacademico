{{-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Adicionar Documento</title>
</head>
<body>

<section>
  <div class="sub_titulo">
      <h1 class="sub">Adicionar Documento</h1>
  </div>
  <div class="container">
    <form action="{{ route('documentos.addSave') }}" method="post" enctype="multipart/form-data">
      @csrf

      <label for="tipo_documento" class="tipodoc">Tipo de Documento:</label>
      <select id="tipo_documento" class="seleciona" name="tipo_documento" required>
        <option value="Atestado de Matricula">Atestado de Matricula</option>
        <option value="Boletim">Boletim</option>
        <option value="Histórico Escolar">Histórico Escolar</option>
      </select>
      <br>
      <label for="arquivo">Arquivo:</label>
      <input type="file" id="arquivo" name="arquivo" required>
      <br>
      <button class="enviar_solicita" type="submit">Enviar Documento</button>
    </form>
  </div>
</section> --}}

</body>
</html>

</html>
<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Aluno</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="../style/add.css">
    <script src="../js/add.js" defer></script>
</head>

<body>

    @if ($errors)
        @foreach ($errors->all() as $err)
            {{ $err }}<br>
        @endforeach
    @endif

    <section id="signup">
        <form action="{{ route('documentos.addSave') }}" method="POST" class="form" enctype="multipart/form-data">
            @csrf
            <div class="progress">
                <div class="progress-bar active current">
                    <span>
                        <img src="../imgs/email.svg" alt="">
                    </span>
                </div>
            </div>
            <div class="pages">
                <div class="page active">
                    <h1>Cadastro de Turma</h1>
                    <div class="field">
                        <div class="field-input">
                            <label for="tipo_documento" class="tipodoc"><span>*</span>Arquivo</label>
                            <input type="file" id="arquivo" name="arquivo" required>
                        </div>
                        <div class="field-input">
                            <label for="curso"><span>*</span>Curso</label>
                            <select id="tipo_documento" class="seleciona" name="tipo_documento" required>
                                <option value="Atestado de Matricula">Atestado de Matricula</option>
                                <option value="Boletim">Boletim</option>
                                <option value="Histórico Escolar">Histórico Escolar</option>
                            </select>
                        </div>
                    </div>
                    <div class="btn">
                        <button type="submit" id="submit-btn">
                            Cadastrar turma
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <script src="{{ asset('js/turma.js') }}"></script>

</body>

</html>
