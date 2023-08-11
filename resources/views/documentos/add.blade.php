<!DOCTYPE html>
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
</section>

</body>
</html>
