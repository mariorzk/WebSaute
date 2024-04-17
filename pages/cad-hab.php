<div class="titulo">
  <h1>Cadastrar Habilitação</h1>
</div>
<hr>
<div class="row justify-content-center">
  <div class="container-mini shadow p-3 mb-5 bg-white rounded">
    <form action="?page=salvar-hab" method="POST">
      <input type="hidden" name="acao" value="cadastrar">
      <div class="form-group col-md-12">
        <label for="habilitacao">Habilitação:</label>
        <input type="text" class="form-control mb-3" name="input-habilitacao" id="input-habilitação" placeholder="Ex. Pedagogia">
        <button type="submit" class="btn btn-success">Salvar</button>
      </div>
    </form>
  </div>
</div>